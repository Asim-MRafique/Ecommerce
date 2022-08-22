<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
class UserController extends Controller
{
    function Login(Request $req)
    {
        $user= User::where(['email'=>$req->email])->first();
        if(!$user || !Hash::check($req->password,$user->password))
        {
         return"Wrong Email Address Or Password..";
        }   
        else
        {
            $req->session()->put('user',$user);
            return redirect('/');
        }     
    }
}
