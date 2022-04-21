<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function orderIndex(){
        $order=Order::all();
        return view('Admin.order.index',compact('order'));
    }

    public function updateStatus($id){
        $order=Order::find($id);
        $order->status='Delivered';
        $order->save();
        return redirect()->back();
    }
}
