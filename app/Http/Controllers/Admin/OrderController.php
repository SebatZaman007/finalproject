<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Riceveorder;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function orderIndex(){
        $order=Riceveorder::all();
        return view('Admin.order.index',compact('order'));
    }

    public function updateStatus($id){
        $order=Riceveorder::find($id);
        $order->status='Delivered';
        $order->save();
        return redirect()->back();
    }
}
