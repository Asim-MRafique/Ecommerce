<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    function Login(Request $req)
    {
        return $req->input();
    }
}
