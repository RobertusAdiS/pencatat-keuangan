<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;

class HomeController extends Controller
{
    public function index()
    {
        $saldo = $this->getSaldo();
        $totalPengeluaran = $this->getTotalPengeluaran();
        $totalPemasukan = $this->getTotalPemasukan();

        return view('home', compact('saldo', 'totalPengeluaran', 'totalPemasukan'));
    }

    public function getSaldo()
    {
        $totalPemasukan = Transaction::where('type', 'pemasukan')->sum('amount');
        $totalPengeluaran = Transaction::where('type', 'pengeluaran')->sum('amount');

        $saldo = $totalPemasukan - $totalPengeluaran;

        return $saldo;
    }

    public function getTotalPengeluaran()
    {
        $totalPengeluaran = Transaction::where('type', 'pengeluaran')->sum('amount');

        return $totalPengeluaran;
    }

    public function getTotalPemasukan()
    {
        $totalPemasukan = Transaction::where('type', 'pemasukan')->sum('amount');

        return $totalPemasukan;
    }
}
