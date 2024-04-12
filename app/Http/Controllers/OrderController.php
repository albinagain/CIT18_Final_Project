<?php

namespace App\Http\Controllers;
use App\Models\Order;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index(){
        $data = Order::with('product')->get();
        return view('dashboard', ['data' => $data]);
    }
}
