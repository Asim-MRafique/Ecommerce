<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
class ProductController extends Controller
{
    function index()
    {
        $data= product::all();
        // return $data;
        return view('Product',['products'=>$data]);
    }
}
