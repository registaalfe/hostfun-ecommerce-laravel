<?php

namespace App\Http\Controllers;

use App\Models\PaymentUser;
use App\Models\Transactions;
use Illuminate\Http\Request;

class UserPaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($id)
    {
        // Retrieve all categories to populate the dropdown
        $transaction = Transactions::findOrFail($id);
        $banks = ['BCA', 'BNI', 'Mandiri', 'BRI'];
        return view('users.product.payment', compact('transaction', 'banks'));
    }

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
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi input dari form
        $validatedData = $request->validate([
            'transaction_id' => 'required|exists:transactions,id',
            'customer' => 'required|string|max:255',
            'bank' => 'required|string',
            'upload_receipt' => 'required|image',
        ]);

        $transaction = Transactions::find($validatedData['transaction_id']);
        $validatedData['total'] = $transaction->total_amount; //mengambil total_amount dari tabel transactions lalu disimpan di variabel $validatedData untuk disimpan ke db payment

        // Upload bukti transfer ke direktori storage
        $validatedData['upload_receipt'] = $request->file('upload_receipt')->store('upload_receipts');

        // Simpan data ke tabel `payments`
        PaymentUser::create($validatedData);

        // Update status transaksi menjadi 'success' setelah bukti pembayaran diterima
        $transaction = Transactions::find($validatedData['transaction_id']);
        if ($transaction) {
            $transaction->status = 'Completed'; // Ubah status menjadi 'success'
            $transaction->update(); // Simpan perubahan ke database
        }

        // Redirect atau berikan feedback
        return redirect()->route('finishpayment')->with('success', 'Payment uploaded successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
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
