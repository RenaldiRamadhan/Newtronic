<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Order;
use App\Models\User;


class TicketController extends Controller
{
    public function index()
    {
   
        $orders = Order::all();

        return view('pages.order.show')->with([
            'orders' => $orders]);
        
    }
}
