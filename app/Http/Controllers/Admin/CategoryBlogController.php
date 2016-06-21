<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\CategoryBlog;



class CategoryBlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $category_blog = CategoryBlog::all();
        return view('admin.categoryBlogs.index')->with('categoryBlogs', $category_blog);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.categoryBlogs.create');
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
        $category_blog = new CategoryBlog;
        $category_blog->title = $request->input('title');
        $category_blog->slug = $request->input('slug');
        $category_blog->description = $request->input('description');
        $category_blog->save();
        return redirect('admin/categoryBlog')->with('message', 'Data berhasil ditambahkan!');
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
         $category_blog = CategoryBlog::find($id);
        return view('admin.categoryBlogs.edit', compact('category_blog'));
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
        $category_blog = CategoryBlog::find($id);
        $category_blog->title = $request->input('title');
        $category_blog->slug = $request->input('slug');
        $category_blog->description = $request->input('description');
        $category_blog->save();
        return redirect('admin/categoryBlog')->with('message', 'Data berhasil ditambahkan!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $category_blog = CategoryBlog::find($id)->delete();
        return redirect('admin/categoryBlog')->with('message', 'Data berhasil dihapus!');
    }
}
