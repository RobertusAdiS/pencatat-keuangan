<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Transaction;

class TransactionController extends Controller
{
    public function index()
    {
        $transactions = transaction::all();

        return view('transaction.index', compact('transactions'));
    }

    public function create()
    {
        return view('transaction.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'type' => 'required|in:pemasukan,pengeluaran',
            'category_id' => 'required|exists:categories,id',
            'amount' => 'required|numeric|min:1',
            'description' => 'nullable|string|max:255',
        ]);

        Transaction::create([
            'type' => $request->input('type'),
            'category_id' => $request->input('category_id'),
            'amount' => $request->input('amount'),
            'description' => $request->input('description'),
        ]);

        return redirect()->route('transactions.index')
            ->with('success', 'Transaction created successfully');
    }
    

    public function edit(Transaction $transaction)
    {
        
    }

    public function update(Request $request, Transaction $transaction)
    {
        
    }

    public function destroy(Transaction $transaction)
    {
        $transaction->delete();

        return redirect()->route('transaction.index');
    }
}
