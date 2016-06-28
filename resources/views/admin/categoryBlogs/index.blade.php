@extends('admin.app')

@section('content')

<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        
        <div class="box-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
            <tr style="background-color: #3c8dbc;">
              <th>title</th>
              <th>slug</th>
              <th>description</th>               
              <th><a href="{{ url('admin/categoryBlog/create') }}" class="btn btn-sm btn-info">Add Category Blog</a></th>               
                                      
            </tr>
            </thead>

            <tbody>
            @foreach($categoryBlogs as $category_blog)
            <tr>
              <td>{!! $category_blog->title !!}</td>
              <td>{!! $category_blog->slug !!}</td>              
              <td>{!! $category_blog->description !!}</td>    

              <td><a href="/admin/categoryBlog/edit/{!! $category_blog->id !!}" class="fa fa-fw fa-edit fa-2x" style=" color:orange; text-shadow: 2px 2px 2px #ccc"></a>
                  <a href="/admin/categoryBlog/destroy/{!! $category_blog->id !!}" class="fa fa-fw fa-trash-o fa-2x" style="color:red; text-shadow: 2px 2px 2px #ccc"></a></td> 
                        
            </tr>
            @endforeach
            
            </tbody>
          </table>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
    </div>
    <!-- /.col -->
  </div>
  <!-- /.row -->
</section>
                             
@endsection
