<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function laporan()
    {
        return view('laporan');
    }

    public function kas()
    {
        return view('kas');
    }

    public function tunai()
    {
        return view('kas.tunai');
    }

    public function bank()
    {
        return view('kas.bank');
    }

    public function giro()
    {
        return view('kas.giro');
    }

    public function peraturan()
    {
        return view('kas.peraturan');
    }

    public function tautan()
    {
        return view('kas.tautan');
    }

    public function h1()
    {
        return view('kas.h1');
    }
    public function h2()
    {
        return view('kas.h2');
    }
    public function h3()
    {
        return view('kas.h3');
    }
    public function h4()
    {
        return view('kas.h4');
    }

    public function penjualan()
    {
        return view('penjualan');
    }

    public function pembelian()
    {
        return view('pembelian');
    }

    public function biaya()
    {
        return view('biaya');
    }
}
