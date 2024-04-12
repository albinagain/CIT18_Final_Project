<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\Order;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index(){
        $data = Order::with('product')->get();
        return view('dashboard', ['data' => $data]);
    }
    public function store(Request $request){
        $order = new Order();
        $order->user_id = Auth::id(); 
        $order->product_id = $request->input('product_id'); 
        $order->amount = $request->input('amount');
        $order->save();

        return redirect()->route('dashboard');
    }
}
