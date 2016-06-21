<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Blog;
use App\CategoryBlog;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $blog = Blog::all();
        return view('admin.blogs.index')->with('blogs', $blog);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $list_category_blog = CategoryBlog::all();

        return view('admin.blogs.create',compact('list_category_blog'));
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
        $blog = new Blog;        
        $blog->title = $request->input('title');              
        $blog->slug = str_slug($request->input('title'));
        $blog->category_blog_id = $request->input('category_blog_id');
        $blog->description = $request->input('description');
        $blog->is_featured = $request->input('is_featured');        
        $blog->flag = $request->input('flag');             
        $blog->save();
        return redirect('admin/blog')->with('message', 'Data berhasil ditambahkan!');
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
        $blog = Blog::find($id);
        $list_category_blog = CategoryBlog::all();
        return view('admin.blogs.edit', compact('blog','list_category_blog'));
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
        $blog = Blog::find($id);        
        $blog->title = $request->input('title');              
        $blog->slug = str_slug($request->input('title'));
        $blog->category_blog_id = $request->input('category_blog_id');
        $blog->description = $request->input('description');
        $blog->is_featured = $request->input('is_featured');        
        $blog->flag = $request->input('flag');             
        $blog->save();
        return redirect('admin/blog')->with('message', 'Data berhasil ditambahkan!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $blog = Blog::find($id)->delete();
        return redirect('admin/blog')->with('message', 'Data berhasil dihapus!');
    }
}
