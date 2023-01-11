<?php

namespace App\Http\Controllers;


use App\Models\Service;
use App\Models\Order;
use Illuminate\Http\Request;
use illuminate\support\str;
use App\Http\Requests\OrderRequest;
use Barryvdh\DomPDF\Facade\Pdf;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

 

    public function index()
    {
   
        $orders = Order::all();

        return view('pages.order.index')->with([
            'orders' => $orders]);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $orders = Order::all();

        $services = service::all();
        
        return view('pages.order.create')->with([
            'services' => $services
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(OrderRequest $request)
    {
        $data = $request->all();
        if (Order::where('service_id', $request->service_id)->count() >= 5) {
            abort(403);
          }
        
          Order::create($request->all());
        
          return redirect()->route('order');
        
    }

    


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        

        $services = service::all();
        $orders = Order::all();

        return view('pages.order.show')->with([
            'services' => $services
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    
    
    public function viewInvoice()
    {
        $orders = Order::all();
        return view('pages.order.show')->with([
            'orders' => $orders
        ]);
    }
    public function generateInvoice()
    {
        $orders = Order::all();
        $orders = \PDF::loadView('pages.order.show', compact('orders'));
        return $orders->download('invoice.pdf');
    }
}