<?php

namespace App\Http\Controllers;

use App\Models\transaction;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function DashboardView()
    {
        $transaction = transaction::paginate(10);
        return view('dashboard.dashboard', ['transactions' => $transaction]);
    }
    public function AddTransactionView()
    {
        return view('dashboard.add-transaction');
    }
    public function EditTransactionView($id)
    {
        $car = transaction::where('id', $id)->get();
        return view('dashboard.edit-transaction', ['cars' => $car]);
    }
}
