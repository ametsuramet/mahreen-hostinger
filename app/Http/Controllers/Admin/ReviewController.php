<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Review;
use App\Product;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $review = review::all();
        return view('admin.reviews.index')->with('reviews', $review);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $list_product = Product::all();

        return view('admin.reviews.create', compact('review', 'list_product'));
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
        $review = new Review;
        $review->name = $request->input('name');
        $review->email = $request->input('email');        
        $review->user_id = $request->input('user_id');
        $review->rating = $request->input('rating');
        $review->product_id = $request->input('product_id');
        $review->description = $request->input('description');                    
        $review->save();
        return redirect('admin/review')->with('message', 'Data berhasil ditambahkan!');
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
        $review = review::find($id);
        $list_product = Product::all();

        return view('admin.reviews.edit', compact('review', 'list_product'));
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
        $review = Review::find($id);
        $review->name = $request->input('name');
        $review->email = $request->input('email');        
        $review->user_id = $request->input('user_id');
        $review->rating = $request->input('rating');
        $review->product_id = $request->input('product_id');
        $review->description = $request->input('description');                    
        $review->save();
        return redirect('admin/review')->with('message', 'Data berhasil ditambahkan!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $review = Review::find($id)->delete();
        return redirect('admin/review')->with('message', 'Data berhasil dihapus!');
    }
}
