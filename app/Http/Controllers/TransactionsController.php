<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use App\Models\Transactions;
use App\Models\Transactions_Item;
use App\Models\User;


class TransactionsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        // Ambil semua transaksi dan relasinya
        $transactions = Transactions::with('user', 'transaction_items.production')->latest()->get();
        return view('admin.transactions.index', compact('transactions'));
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $transaction = Transactions::with('user')->findOrFail($id);

        // Ambil satu item transaksi pertama yang sesuai
        $transaction_item = Transactions_Item::where('transaction_id', $transaction->id)->with('production')->first();

        return view('admin.transactions.detail', compact('transaction', 'transaction_item'));
    }


    public function exportPDF(string $id)
    {
        // Ambil transaksi yang terkait
        $transaction = Transactions::with('user')->findOrFail($id);

        // Mengambil data transaksi item
        $transaction_item = Transactions_Item::where('transaction_id', $transaction->id)->with('production')->first();

        $data = [
            'transaction' => $transaction, // singular karena hanya satu transaksi
            'transaction_item' => $transaction_item, // daftar item dalam transaksi
            'image' => public_path('images/icons.png')
        ];

        // Load view untuk PDF
        $pdf = Pdf::loadView('admin.pdf.invoice', $data);

        // Hanya menampilkan PDF di browser
        return $pdf->stream('invoice.pdf');
    }

    public function showQR($id)
    {
        $transaction = Transactions::findOrFail($id);
        $link = route('admin.showInvoice', $transaction->id);

        return response()->json(['link' => $link]);
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
