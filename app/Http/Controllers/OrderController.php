<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\Order;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index(){
        $userId = Auth::id();
        $data = Order::with('product')->where('user_id', $userId)->get();
        return view('dashboard', ['data' => $data]);
    }
    public function showUpdate(){
        $userId = Auth::id();
        $data = Order::with('product')->where('user_id', $userId)->get();
        return view('update', ['data' => $data]);
    }
    public function showDelete(){
        $userId = Auth::id();
        $data = Order::with('product')->where('user_id', $userId)->get();
        return view('delete', ['data' => $data]);
    }
    public function store(Request $request){
        $validated = $request->validate([
            'product_id' => 'required|integer',
            'amount' => 'required|integer',
        ]);

        $order = new Order();
        $order->user_id = Auth::id(); 
        $order->product_id = $validated['product_id']; 
        $order->amount = $validated['amount'];
        $order->save();

        return redirect()->route('dashboard')->with('success', 'Order created successfully!');
    }
    public function update(Request $request, $id){
        $validated = $request->validate([
            'amount' => 'required|integer',
        ]);
        
        $order = Order::findOrFail($id);
        $order->amount = $validated['amount'];
        $order->save();

        return redirect()->route('update-order', $order->id)->with('success', 'Order updated successfully!');
    }
    public function destroy(Request $request){
        $orderId = $request->input('to-delete');
        Order::whereIn('id', $orderId)->delete();
    
        return redirect()->route('dashboard')->with('success', 'Selected order deleted successfully!');
    }
}
