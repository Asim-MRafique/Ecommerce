<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
use App\Models\cart;
use App\Models\order;

use Illuminate\Support\Facades\Session;

use Illuminate\Support\Facades\DB;
use Symfony\Component\Console\Input\Input;

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
        if ($req->session()->has('user')) {
            $cart = new cart;
            $cart->user_id = $req->session()->get('user')['id'];
            $cart->product_id = $req->product_id;
            $cart->save();
            return redirect('/');
        } else {
            return redirect('/login');
        }
    }
    function CartList()
    {
        $userid = Session::get('user')['id'];
        $data = DB::table('cart')
            ->join('products', 'cart.product_id', 'products.id')
            ->select('products.*', 'cart.id as cart_id')
            ->where('cart.user_id', $userid)
            ->get();

        return view('cartlist', ["products" => $data]);
    }

    function removeCart($id)
    {

        cart::destroy($id);
        return redirect('/cartlist');
    }
    function orderNow()
    {
        $userid = Session::get('user')['id'];
        $total = DB::table('cart')
            ->join('products', 'cart.product_id', 'products.id')
            // ->select('products.*', 'cart.id as cart_id')
            ->where('cart.user_id', $userid)
            ->sum('products.price');

        return view('ordernow', ["total" => $total]);
    }
    function placeorder(Request $req)
    {
        $userid = Session::get('user')['id'];
        $allCart = cart::where('user_id', $userid)->get();
        foreach ($allCart as $cart) {
            $order=new order;
            $order->product_id=$cart['product_id'];
            $order->user_id=$cart['user_id'];
            $order->address=$req->address;
            $order->status="pending";
            $order->payment_method=$req->payment;
            $order->payment_status="pending";
            $order->save();
        }
         cart::where('user_id', $userid)->delete();
         return redirect('/');

    }
}
