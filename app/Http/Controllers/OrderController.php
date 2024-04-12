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
    public function showUpdate(){
        $data = Order::with('product')->get();
        return view('update', ['data' => $data]);
    }
    public function showDelete(){
        $data = Order::with('product')->get();
        return view('delete', ['data' => $data]);
    }
    public function store(Request $request){
        $order = new Order();
        $order->user_id = Auth::id(); 
        $order->product_id = $request->input('product_id'); 
        $order->amount = $request->input('amount');
        $order->save();

        return redirect()->route('dashboard');
    }
    public function update(Request $request, $id){
        $order = Order::findOrFail($id);
        $order->amount = $request->input('amount');
        $order->save();

        return redirect()->route('update-order', $order->id);
    }
    public function destroy(Request $request){
        $orderId = $request->input('to-delete');
        Order::whereIn('id', $orderId)->delete();
    
        return redirect()->route('dashboard');
    }
}
