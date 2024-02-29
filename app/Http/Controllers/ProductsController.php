<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function makanan()
    {
        return view('Makanan');
    }
    public function kecantikan()
    {
        return view('kecantikan_view');
    }
    public function PerlengkapanRumah()
    {
        return view('PerlengkapanRumah_view');
    }
    public function bayi()
    {
        return view('Bayi');
    }
}