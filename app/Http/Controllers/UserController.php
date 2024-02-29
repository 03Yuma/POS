<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function profile($id,$name)
    {
        return view('User')
            -> with('id',$id)
            -> with('name',$name);
    }
}