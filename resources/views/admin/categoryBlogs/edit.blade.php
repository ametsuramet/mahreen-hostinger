@extends('admin.app')

@section('content')

<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Category Blog</h3>
          
        </div>
        <div class="box-body">
          
          <form action="/admin/categoryBlog/update/{!! $category_blog->id !!}" class="col-md-4" method="POST" enctype="multipart/form-data">
          <input type="hidden" value="{!! csrf_token() !!}" name="_token">
                
          <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control "  name="title" placeholder="ex title" value="{!! $category_blog->title !!}">
          </div>

          <div class="form-group">
            <label for="slug">Slug</label> 
            <input type="text" class="form-control "  name="slug" placeholder="ex slug" value="{!! $category_blog->slug !!}">
          </div>

          <div class="form-group">
           <label for="description">Description</label>
           <textarea name="description" class="form-control" rows="9">{!! $category_blog->description !!}</textarea>
          </div>
                  

          <input type="submit" class="btn btn-primary"></input>

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