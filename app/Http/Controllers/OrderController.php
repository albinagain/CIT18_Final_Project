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

        try {
            $order = new Order();
            $order->user_id = Auth::id(); 
            $order->product_id = $validated['product_id']; 
            $order->amount = $validated['amount'];
            $order->save();

        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => 'The amount ordered is too much.']);
        }
        return redirect()->route('dashboard')->with('success', 'Order created successfully!');
    }
    public function update(Request $request, $id){
        $validated = $request->validate([
            'amount' => 'required|integer',
        ]);
        
        try {
            $order = Order::findOrFail($id);
            $order->amount = $validated['amount'];
            $order->save();
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => 'The amount ordered is too much.']);
        }
        return redirect()->route('dashboard', $order->id)->with('success', 'Order updated successfully!');
    }
    public function destroy(Request $request){
        try {
            $orderId = $request->input('to-delete');
            Order::whereIn('id', $orderId)->delete();
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => 'An error occured while processing your request.']);
        }
        return redirect()->route('dashboard')->with('success', 'Selected order deleted successfully!');
    }
}
