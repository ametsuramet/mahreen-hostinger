<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\OrderItem;
use App\Order;
use App\Product;

class OrderItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $order_item = OrderItem::all();
        return view('admin.orderItems.index')->with('orderItems', $order_item);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $list_order = Order::all();
        $list_product = Product::all();
        return view('admin.orderItems.create',compact('order', 'list_order', 'list_product'));
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
        $order_item = new OrderItem;
        $order_item->qty = $request->input('qty');
        $order_item->order_id = $request->input('order_id');
        $order_item->product_id = $request->input('product_id');
        $order_item->save();
        return redirect('admin/orderItem')->with('message', 'Data berhasil ditambahkan!');
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
        $order_item = OrderItem::find($id);
        $list_order = Order::all();
        $list_product = Product::all();
        return view('admin.orderItems.edit',compact('order_item', 'list_order', 'list_product'));
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
        $order_item = OrderItem::find($id);
        $order_item->qty = $request->input('qty');
        $order_item->order_id = $request->input('order_id');
        $order_item->product_id = $request->input('product_id');
        $order_item->save();
        return redirect('admin/orderItem')->with('message', 'Data berhasil ditambahkan!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $order_item = OrderItem::find($id)->delete();
        return redirect('admin/orderItem')->with('message', 'Data berhasil dihapus!');
    }
}
