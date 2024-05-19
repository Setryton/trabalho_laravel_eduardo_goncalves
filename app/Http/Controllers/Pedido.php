<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Pedido extends Controller
{
    public function index(){
        return view('pedido');
    }
}
