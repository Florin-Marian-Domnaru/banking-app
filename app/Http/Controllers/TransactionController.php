<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;

class TransactionController extends Controller
{
    public function index()
    {
        $transactions = Transaction::all();

        return view('index', [
            'transactions' => $transactions
        ]);
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $transaction = new Transaction;
        $transaction->sender = $request->sender;
        $transaction->amount = $request->amount;
        $transaction->receiver = $request->receiver;
        $transaction->save();
        
        return redirect(route('index'));
    }

    public function edit()
    {
        $transactions = Transaction::all();

        return view('edit', [
            'transactions' => $transactions
        ]);
    }

    public function update(Request $request)
    {
        $transaction = Transaction::find($request->transaction);

        $transaction->sender = $request->sender;
        $transaction->amount = $request->amount;
        $transaction->receiver = $request->receiver;
        $transaction->save();

        return redirect(route('index'));
    }

    public function destroy(Transaction $transaction)
    {
        $transaction->delete();

        return redirect(route('index'));
    }
}
