<?php

namespace App\Services;

use Midtrans\Snap;
use Midtrans\Config;
use App\Models\Product;
use App\Models\Transactions;
use Illuminate\Http\Request;
use App\Models\Transactions_Item;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use App\Repositories\TransactionRepositoryInterface;
use App\Repositories\TransactionItemRepositoryInterface;



class CheckoutService
{
    // Deklarasi properti sehingga hanya dapat diakses di dalam kelas itu sendiri
    protected $transactionRepository;
    protected $transactionitemRepository;

    // Untuk menyuntikkan implementasi dari interface tersebut ke dalam konstruktor
    public function __construct(TransactionRepositoryInterface $transactionRepository, TransactionItemRepositoryInterface $transactionitemRepository)
    {
        // Menggunakan repository untuk menyimpan transaksi
        $this->transactionRepository = $transactionRepository;
        $this->transactionitemRepository = $transactionitemRepository;

        // Konfigurasi Midtrans
        Config::$serverKey = config('midtrans.server_key');
        Config::$isProduction = config('midtrans.is_production');
        Config::$isSanitized = true;
        Config::$is3ds = true;
    }

    // DONE 1 - MANGGIL SEMUA PRODUK
    public function getProducts()
    {
        return Product::with('category')
            ->latest()
            ->take(4)
            ->get();
    }

    // DONE 2 - MANGGIL DETAIL PRODUK BY ID
    public function getProductDetails($id, $duration = 1)
    {
        // Ambil data produk berdasarkan ID
        $product = Product::findOrFail($id);

        // Kembalikan data produk dan durasi
        return [
            'product' => $product,
            'duration' => $duration,
        ];
    }

    // DONE 3 - MELAKUKAN LOGIKA UNTUK TOTAL SEWA DURASI
    public function calculationSubtotals($productId, $duration)
    {
        // Validasi input (validasi biasanya dilakukan di controller sebelum mengirim ke service)
        if ($duration < 1) {
            throw new \InvalidArgumentException('Duration must be at least 1.');
        }

        // Ambil harga produk berdasarkan ID
        $product = Product::findOrFail($productId); // Mencari produk berdasarkan ID
        $pricePerMonth = $product->price_product;  // Mengambil harga per bulan

        // Hitung subtotal
        $subtotal = $pricePerMonth * $duration;

        // Kembalikan data dalam bentuk array
        return [
            'subtotal' => $subtotal,
            'formatted_subtotal' => number_format($subtotal, 0, ',', '.'),
        ];
    }

    // DONE 4 - MEMPROSES PESANAN SEBELUM KE PROSES PEMBAYARAN
    public function processCheckout($data)
    {
        // dd($data);
        DB::beginTransaction();

        try {
            // Generate nomor invoice
            $noInvoice = Transactions::generateInvoiceNumber();
            // dd($noInvoice);

            // Ambil data produk
            $product = Product::findOrFail($data['product_id']);
            // dd($product);

            // Hitung subtotal langsung tanpa calculateSubtotal
            $subtotal = $product->price_product * $data['duration'];
            // dd($subtotal);

            // dd($data);

            //Membuat Snap Token Midtrans
            $params = array(
                'transaction_details' => array(
                    'order_id' => rand(),
                    'gross_amount' => $subtotal,
                )
            );

            $snapToken = Snap::getSnapToken($params);
            // dd($snapToken);

            // Simpan transaksi utama menggunakan repository
            $transaction = $this->transactionRepository->createTransaction([
                'no_invoice' => $noInvoice,
                'customer_id' => $data['customer_id'],
                'total_amount' => $subtotal,
                'transaction_date' => now(),
                'update_on' => now(),
                'status' => 'pending',
                'snap_token' => $snapToken,
            ]);

            // dd($transaction['total_amount']);

            // Simpan detail transaksi
            $this->storeTransactionItem($transaction, $product, $data['duration'], $subtotal, $snapToken);

            DB::commit();

            return $transaction;
        } catch (\Exception $e) {
            DB::rollBack();

            // Log error untuk debugging lebih lanjut
            Log::error('Checkout error', [
                'message' => $e->getMessage(),
                'data' => $data,
                'stack' => $e->getTraceAsString(),
            ]);

            throw $e;
        }
    }

    // DONE 5 - MEMECAH DATA DARI TRANSACTIONS DENGAN TOTAL ITEM TRANSACTIONS
    private function storeTransactionItem($transaction, $product, $duration, $subtotal)
    {
        $this->transactionitemRepository->createTransactionItem([
            'transaction_id' => $transaction->id,
            'product_id' => $product->id_product,
            'price' => $product->price_product,
            'qty' => $duration,
            'subtotal' => $subtotal,
        ]);
    }

    // GET SNAP TOKEN
    public function payment($data)
    {
        // Simpan transaksi ke database menggunakan repository
        $transaction = $this->transactionRepository->createTransaction([
            'transaction_id' => $data['transaction_id'],
            'customer' => $data['customer'],
            'total' => $data['total'],
        ]);
    }
}
