<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Order;
use App\User;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $order = Order::all();
        return view('admin.orders.index')->with('orders', $order);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $list_user = User::all();
        return view('admin.orders.create', compact('order', 'list_user'));     
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        $order = new Order;
        $order->code = $request->input('code');
        $order->date = $request->input('date');
        $order->user_id = $request->input('user_id');
        $order->total_amount = $request->input('total_amount');
        $order->shipping_fee = $request->input('shipping_fee');
        $order->total_discount = $request->input('total_discount');
        $order->final_amount = $request->input('final_amount');
        $order->shipping_name = $request->input('shipping_name');
        $order->shipping_address = $request->input('shipping_address');
        $order->shipping_phone = $request->input('shipping_phone');
        $order->shipping_email = $request->input('shipping_email');       
        $order->status = $request->input('status');
        $order->save();
        return redirect('admin/order')->with('message', 'Data berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $order = Order::find($id);
        $list_user = User::all();
        
        return view('admin.orders.edit', compact('order', 'list_user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        $input = $request->all();
        $order = Order::find($id);
        $order->code = $request->input('code');
        $order->date = $request->input('date');
        $order->user_id = $request->input('user_id');
        $order->total_amount = $request->input('total_amount');
        $order->shipping_fee = $request->input('shipping_fee');
        $order->total_discount = $request->input('total_discount');
        $order->final_amount = $request->input('final_amount');
        $order->shipping_name = $request->input('shipping_name');
        $order->shipping_address = $request->input('shipping_address');
        $order->shipping_phone = $request->input('shipping_phone');
        $order->shipping_email = $request->input('shipping_email');       
        $order->status = $request->input('status');
        $order->save();
        return redirect('admin/order')->with('message', 'Data berhasil ditambahkan!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $order = Order::find($id)->delete();
        return redirect('admin/order')->with('message', 'Data berhasil dihapus!');
    }
}
