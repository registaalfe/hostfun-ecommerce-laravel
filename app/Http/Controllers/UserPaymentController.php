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
        return view('users.product.payment', [
            'transaction' => $transaction
        ]);
    }

    // DONE 5 - MENGARAHKAN USER KE HALAMAN PEMBAYARAN
    public function toPayment($id)
    {
        // Retrieve all categories to populate the dropdown
        $transaction = Transactions::findOrFail($id);
        return view('users.product.payment', compact('transaction'));
    }

    public function processPayment(Request $request)
    {
        $data = [
            'transaction_id' => $request->input('transaction_id'),
            'customer' => $request->input('customer'),
            'total' => $request->input('total'),
        ];

        dd($data);

        $result = $this->checkoutService->payment($data);

        return response()->json([
            'snap_token' => $result['snap_token'],
            'transaction' => $result['transaction']
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */


    public function finishPayment()
    {
        return view('users.product.finishpayment');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
