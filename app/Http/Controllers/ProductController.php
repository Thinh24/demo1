<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    function index(){
        return view('index');
    }
    function detail(){
        return view('detail');
    }
}
