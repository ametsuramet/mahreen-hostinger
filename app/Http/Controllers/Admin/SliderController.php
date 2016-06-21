<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Slider;
use App\Product;
use App\Category;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $slider = Slider::all();
        return view('admin.sliders.index')->with('sliders', $slider);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $list_product = Product::all();
        $list_category = Category::all();
        return view('admin.sliders.create', compact('list_product', 'list_category'));
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
        $slider = new Slider;
        $slider->title = $request->input('title');
        $slider->description = $request->input('description');
        $slider->url = $request->input('url');
        $slider->product_id = $request->input('product_id');
        $slider->category_id = $request->input('category_id');        
        $slider->flag = $request->input('flag');             
        $slider->save();
            return redirect('admin/slider')->with('message', 'Data berhasil ditambahkan!');
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
        $slider = Slider::find($id);
        $list_product = Product::all();
        $list_category = Category::all();
        return view('admin.sliders.edit', compact('slider', 'list_product', 'list_category'));
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
        $slider = Slider::find($id);
        $slider->title = $request->input('title');
        $slider->description = $request->input('description');
        $slider->url = $request->input('url');
        $slider->product_id = $request->input('product_id');
        $slider->category_id = $request->input('category_id');        
        $slider->flag = $request->input('flag');             
        $slider->save();
            return redirect('admin/slider')->with('message', 'Data berhasil ditambahkan!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $slider = Slider::find($id)->delete();

        return redirect('admin/slider')->with('message', 'Data berhasil dihapus!');
    }
}
