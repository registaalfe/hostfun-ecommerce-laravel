<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Transactions;
use App\Models\Transactions_Item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CheckoutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products =
            Product::with(['category' => function ($query) {
                $query->take(1);  // Batasi 1 kategori (jika ada lebih dari 1 kategori dalam relasi)
            }])
            ->latest()   // Mengurutkan produk berdasarkan yang terbaru
            ->take(4)    // Ambil hanya 4 produk terakhir
            ->get();
        return view('users.product.index', compact('products'));
    }

    /**
     * Display the specified resource.
     */
    public function show($id, Request $request)
    {
        // ambil data produk
        $product = Product::findOrFail($id);

        // Ambil durasi yang dipilih oleh user, default ke 1 bulan jika tidak ada input
        $duration = $request->input('duration', 1);


        return view('users.product.details', compact('product'));
    }

    public function calculationSubtotal(Request $request)
    {
        // Validasi input
        $request->validate([
            'duration' => 'required|integer|min:1',
            'product_id' => 'required|exists:products,id_product',
        ]);

        // Ambil harga produk berdasarkan ID
        $product = Product::findOrFail($request->product_id); //mencari produk & jika produk ditemukan maka akan disimpan ke $product
        $pricePerMonth = $product->price_product; //mengambil nilai dari price_product tsb lalu disimpan ke $pricePerMonth

        // Hitung subtotal
        $subtotal = $pricePerMonth * $request->duration;

        // Kirim respons dalam bentuk JSON
        return response()->json([
            'success' => true,
            'subtotal' => $subtotal,
            'formatted_subtotal' => number_format($subtotal, 0, ',', '.'),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Memastikan data yang masuk valid, jika data tidak valid, proses berhenti, dan error ditampilkan ke use
        $request->validate([
            'customer_id' => 'required|exists:users,id',
            'product_id' => 'required|exists:products,id_product',
            'duration' => 'required|integer|in:1,3,6,12',
        ]);


        //Memastikan jika ada error selama proses, semua perubahan data akan dibatalkan, kita tidak mau data setengah jadi masuk ke database
        DB::beginTransaction();

        try {
            // Generate nomor invoice
            $noInvoice = Transactions::generateInvoiceNumber();

            // Simpan data transaksi ke tabel `transactions`
            $transaction = Transactions::create([
                'no_invoice' => $noInvoice,
                'customer_id' => $request->customer_id,
                'total_amount' => 0, // Akan di-update nanti
                'transaction_date' => now(),
                'update_on' => now(),
                'status' => 'pending',
            ]);

            // Ambil data produk untuk menghitung subtotal
            $product = Product::findOrFail($request->product_id);
            $subtotal = $product->price_product * $request->duration;

            // Menyimpan detail produk apa saja yang dibeli di transaksi ini
            Transactions_Item::create([
                'transaction_id' => $transaction->id,
                'product_id' => $request->product_id,
                'price' => $product->price_product,
                'qty' => $request->duration, // Pakai duration sebagai quantity
                'subtotal' => $subtotal,
            ]);

            // Update total transaksi
            $transaction->update(['total_amount' => $subtotal]);

            DB::commit();

            // Redirect ke halaman pembayaran di mana {id} adalah ID dari transaksi yang baru saja dibuat.
            return redirect()->route('payment', ['id' => $transaction->id]);
        } catch (\Exception $e) {

            //Kalau ada error selama proses, transaksi database dibatalkan, dan user diberi pesan error
            DB::rollBack();
            return back()->withErrors('Checkout failed. Please try again.');
        }
    }




    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
