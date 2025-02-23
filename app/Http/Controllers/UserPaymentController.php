<?php

namespace App\Http\Controllers;

use App\Models\PaymentUser;
use App\Models\Transactions;
use Illuminate\Http\Request;
use App\Services\CheckoutService;

class UserPaymentController extends Controller
{
    protected $checkoutService;

    public function __construct(CheckoutService $checkoutService)
    {
        $this->checkoutService = $checkoutService;
    }

    // DONE 1 - MANGGIL SEMUA PRODUK
    public function index()
    {
        // Memanggil fungsi getProducts dari CheckoutService
        $products = $this->checkoutService->getProducts();

        // Misalnya, Anda ingin mengirim data ini ke view
        return view('users.product.index', compact('products'));
    }

    // DONE 2 - MANGGIL DETAIL PRODUK BY ID
    public function show($id, Request $request)
    {
        // Ambil durasi dari request, default 1 bulan
        $duration = $request->input('duration', 1);

        // Gunakan service untuk mengambil data produk
        $data = $this->checkoutService->getProductDetails($id, $duration);

        // Kirim data ke view
        return view('users.product.details', $data);
    }

    // DONE 3 - MELAKUKAN LOGIKA UNTUK TOTAL SEWA DURASI
    public function calculationSubtotal(Request $request)
    {
        // Validasi input
        $request->validate([
            'duration' => 'required|integer|min:1',
            'product_id' => 'required|exists:products,id_product',
        ]);

        // Panggil service untuk menghitung subtotal
        $result = $this->checkoutService->calculationSubtotals($request->product_id, $request->duration);

        // Kirim respons dalam bentuk JSON
        return response()->json([
            'success' => true,
            'subtotal' => $result['subtotal'],
            'formatted_subtotal' => $result['formatted_subtotal'],
        ]);
    }

    // DONE 4 - MEMPROSES PESANAN SEBELUM KE PROSES PEMBAYARAN
    public function checkout(Request $request)
    {
        // Memastikan data yang masuk valid, jika data tidak valid, proses berhenti, dan error ditampilkan ke use
        $validated = $request->validate([
            'customer_id' => 'required|exists:users,id',
            'product_id' => 'required|exists:products,id_product',
            'duration' => 'required|integer|in:1,3,6,12',
        ]);

        // Kirim data ke service
        $transaction = $this->checkoutService->processCheckout($validated);

        // Kirim SnapToken ke view
        return view(
            'users.product.payment',
            [
                'transaction' => $transaction,  // Mengirimkan seluruh data transaksi ke view
                'snapToken' => $transaction->snap_token,  // Mengirimkan SnapToken yang sudah di-generate
            ]
        );
    }

    // MEMERIKSA DAN MENGUBAH STATUS PAYMENT
    // public function handleWebhook(Request $request)
    // {
    //     // Mengambil konfigurasi Server Key
    //     $serverKey = config('midtrans.server_key');

    //     // Validasi signature key dari Midtrans
    //     $signatureKey = hash(
    //         "sha512",
    //         $request->order_id . $request->status_code . $request->gross_amount . $serverKey
    //     );

    //     // Memeriksa signatureKey sudah match atau belum antara value dan typenya
    //     if ($signatureKey !== $request->signature_key) {
    //         return response()->json(['message' => 'Invalid signature key'], 403);
    //     }

    //     // Cek status transaksi
    //     $transaction = Transactions::find($request->order_id);

    //     // Jika id transaksi tidak ditemukan maka kirim notif ini
    //     if (!$transaction) {
    //         return response()->json(['message' => 'Transaction not found'], 404);
    //     }

    //     // Mengubah status berdasarkan kondisi pembayaran user
    //     if ($request->transaction_status == 'settlement' || $request->transaction_status == 'capture') {
    //         $transaction->status = 'Completed'; // Status pembayaran berhasil
    //     } elseif ($request->transaction_status == 'cancel' || $request->transaction_status == 'expire') {
    //         $transaction->status = 'Cancelled'; // Status pembayaran gagal atau kadaluarsa
    //     } elseif ($request->transaction_status == 'pending') {
    //         $transaction->status = 'Pending'; // Status menunggu pembayaran
    //     }

    //     $transaction->save();

    //     return response()->json(['message' => 'Webhook processed successfully']);
    // }

    public function callback(Request $request)
    {
        $serverKey = config('midtrans.server_key');
        $hashed = hash("sha512", $request->order_id . $request->status_code . $request->gross_amount . $serverKey);
        if ($hashed == $request->signature_key) {
            if (
                $request->transaction_status == 'capture' or $request->transaction_status == 'settlement'
            ) {
                $order = Transactions::find($request->order_id);
                $order->update(['status' => 'Completed']);
            }
        }
    }

    public function paymentSuccess($id)
    {
        $transaction = Transactions::find($id);
        dd($transaction);

        return view('invoice', compact('transaction'));
    }
}
