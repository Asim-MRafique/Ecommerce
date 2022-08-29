<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
use App\Models\cart;
use Illuminate\Support\Facades\Session;

use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    function index()
    {
        $data = product::all();
        // return $data;
        return view('Product', ['products' => $data]);
    }
    function Details($id)
    {
        $data = product::find($id);
        return view('detail', ["product" => $data]);
    }
    function Search(Request $req)
    {
        $data = product::where('name', 'like', '%' . $req->input('query') . '%')->get();
        return view('search', ['products' => $data]);
    }
    function AddToCart(Request $req)
    {
        if ($req->session()->has('user')) 
        {
            $cart = new cart;
            $cart->user_id=$req->session()->get('user')['id'];
            $cart->product_id=$req->product_id;
            $cart->save();
            return redirect('/');
        }
        else
        {
            return redirect('/login');
        }
    }
   function CartList()
   {
    $userid= Session::get('user')['id'];
    $data= DB::table('cart')
    ->join('products','cart.product_id','products.id')
    ->select('products.*')
    ->where('cart.user_id',$userid)
    ->get();
    
    return view('cartlist',["products"=>$data]);
   }
}
