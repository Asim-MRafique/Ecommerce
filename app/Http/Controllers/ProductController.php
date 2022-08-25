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
    function Details($id)
    {
        $data= product::find($id);
        return view('detail',["product"=>$data]);
    }
    function Search(Request $req)
    {
        $data= product::where('name','like','%'.$req->input('query').'%')->get();
       return view('search',['products'=>$data]);
     
    }
}
