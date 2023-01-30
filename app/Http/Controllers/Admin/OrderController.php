<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderDetail;
use Illuminate\Http\Request;

class OrderController extends Controller
{

    //__order index method__//

    public function index (){

//        $order = Order::with('customer','order_detail','payment')->get();
//        return response()->json($order);
        $order = Order::all();
        return view('admin.order_status',compact('order'));
    }
}
