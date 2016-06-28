<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Product;
use App\Category;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $product = Product::all();
        return view('admin.products.index')->with('products', $product);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $list_category = Category::all();

        return view('admin.products.create', compact('product', 'list_category'));
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
        $product = new Product;
        $product->SKU = $request->input('SKU');
        $product->title = $request->input('title');
        $product->slug = str_slug($request->input('title'));
        $product->price = $request->input('price');
        $product->discount = $request->input('discount');
        $product->description = $request->input('description');
        $product->size = $request->input('size');
        $product->category_id = $request->input('category_id');
        $product->is_featured = $request->input('is_featured');
        $product->flag = $request->input('flag');
        if ($request->hasFile('picture1')) {
            $destinationPath = public_path().'/images/';
            $filename = $request->file('picture1')->getClientOriginalName();
            $request->file('picture1')->move($destinationPath, $filename);
            $product->picture1 = $filename;
        }
        if ($request->hasFile('picture2')) {
            $destinationPath = public_path().'/images/';
            $filename = $request->file('picture2')->getClientOriginalName();
            $request->file('picture2')->move($destinationPath, $filename);
            $product->picture2 = $filename;
        }
        if ($request->hasFile('picture3')) {
            $destinationPath = public_path().'/images/';
            $filename = $request->file('picture3')->getClientOriginalName();
            $request->file('picture3')->move($destinationPath, $filename);
            $product->picture3 = $filename;
        }                               
        $product->save();
            return redirect('admin/product')->with('message', 'Data berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $product = Product::find($id);
        return view('admin.products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $product = Product::find($id);
        $list_category = Category::all();

        return view('admin.products.edit', compact('product', 'list_category'));
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
        $product = Product::find($id);
        $product->SKU = $request->input('SKU');
        $product->title = $request->input('title');
        $product->slug = str_slug($request->input('title'));
        $product->price = $request->input('price');
        $product->discount = $request->input('discount');
        $product->description = $request->input('description');
        $product->size = $request->input('size');
        $product->category_id = $request->input('category_id');       
        $product->is_featured = $request->input('is_featured');
        $product->flag = $request->input('flag'); 
        if ($request->hasFile('picture1')) {
            $destinationPath = public_path().'/images/';
            $filename = $request->file('picture1')->getClientOriginalName();
            $request->file('picture1')->move($destinationPath, $filename);
            $product->picture1 = $filename;
        }
        if ($request->hasFile('picture2')) {
            $destinationPath = public_path().'/images/';
            $filename = $request->file('picture2')->getClientOriginalName();
            $request->file('picture2')->move($destinationPath, $filename);
            $product->picture2 = $filename;
        }
        if ($request->hasFile('picture3')) {
            $destinationPath = public_path().'/images/';
            $filename = $request->file('picture3')->getClientOriginalName();
            $request->file('picture3')->move($destinationPath, $filename);
            $product->picture3 = $filename;
        }                                
        $product->save();
        return redirect('admin/product')->with('message', 'Data berhasil ditambahkan!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $product = Product::find($id)->delete();

        return redirect('admin/product')->with('message', 'Data berhasil dihapus!');
    }
}
