@extends('admin.app')

@section('content')

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box box-info">
            <div class="box-header">
              
              <div class="container" >                
              </div>
              <form action="/admin/blog/store" class="col-md-4" method="POST" enctype="multipart/form-data">
              <input type="hidden" value="{!! csrf_token() !!}" name="_token">  
                
                <div class="form-group">
                  <label for="title">Title</label>
                  <input type="text" class="form-control "  name="title" placeholder="ex Title">
                </div>

                <div class="form-group">
                  <label for="slug">slug</label>
                  <input type="text" class="form-control "  name="slug">
                </div>

                <div class="form-group">
                  <label for="category_blog_id">Category Blog</label>
                  <select name="category_blog_id" class="form-control ">
                    <option value="0" class="btn btn-info">Choice Category </option>          
                  @foreach($list_category_blog as $category_blog)
                    <option value="{!! $category_blog->id !!}">{!! $category_blog->title !!}</option>
                  @endforeach          
                  </select>
                </div>

                <div class="form-group">
                  <label for="description">Description</label>
                  <textarea name="description" class="form-control" rows="9"></textarea>
                </div>

                <div class="form-group">
                  <label for="is_featured">Is Featured</label><br>
                  <select name="is_featured" class="form-control">
                     <option value="0">Unpublish</option>
                     <option value="1">Publish</option>
                  </select>
                </div>

                <div class="form-group">
                  <label for="flag">Flag</label><br>
                  <select name="flag" class="form-control">
                     <option value="0">no</option>
                     <option value="1">Yes</option>
                  </select>
                </div>                        
                
                <input type="submit" class="btn btn-primary"></input>
              
              </form>
            </div>
          </div>
        </div>
        <!-- /.col-->
      </div>
      <!-- ./row -->
    </section>
    <!-- /.content -->
@endsection