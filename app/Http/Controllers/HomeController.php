<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return '
        <center>
        <br>
            <h1>Selamat Datang Di Indomaret</h1>
        <br>
        </center>
        <h2>
            Pilih Menu
        </h2>
        ';
    }
}
