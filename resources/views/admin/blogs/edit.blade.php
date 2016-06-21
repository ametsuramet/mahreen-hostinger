<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    @include('admin.layouts.styles')

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>
<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">
  @include('admin.layouts.header')
  @include('admin.layouts.sidebar')

  <div class="content-wrapper">
      <!-- Content Header (Page header) -->
    <section class="content-header">
     @yield('content')
      <h1>
                
      </h1>
      <ol class="breadcrumb">
        
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box box-info">
            <div class="box-header">
              
              <div class="container" >                
              </div>
              <form action="/admin/blog/update/{!! $blog->id !!}" class="col-md-4" method="POST" enctype="multipart/form-data">
              <input type="hidden" value="{!! csrf_token() !!}" name="_token">  
                
                <div class="form-group">
                  <label for="title">Title</label>
                  <input type="text" class="form-control "  name="title" placeholder="ex Title" value="{!! $blog->title !!}">
                </div>

                <div class="form-group">
                  <label for="slug">slug</label>
                  <input type="text" class="form-control "  name="slug" value="{!! $blog->slug !!}">
                </div>

                <div class="form-group">
                  <label for="category_blog_id">Category Blog</label>
                  <select name="category_blog_id" class="form-control ">
                    <option value="0" class="btn btn-info">Choice Category </option>          
                  @foreach($list_category_blog as $category_blog)
                    <option value="{!! $category_blog->id !!}"
                    	@if($category_blog->id == $blog->category_blog_id)
                    	SELECTED
                    	@endif
                    >{!! $category_blog->title !!}</option>
                  @endforeach          
                  </select>
                </div>

                <div class="form-group">
                  <label for="description">Description</label>
                  <textarea name="description" class="form-control" rows="9">{!! $blog->description !!}</textarea>
                </div>

                <div class="form-group">
                  <label for="is_featured">Is Featured</label><br>
                  <select name="is_featured" class="form-control">
                     <option value="0"
	                     @if($blog->is_featured == 0)
	                     SELECTED
	                     @endif
                     >Unpublish</option>
                     <option value="1"
	                     @if($blog->is_featured == 1)
	                     SELECTED
	                     @endif
                     >Publish</option>
                  </select>
                </div>

                <div class="form-group">
                  <label for="flag">Flag</label><br>
                  <select name="flag" class="form-control">
                     <option value="0"
                     	@if($blog->flag == 0)
                     	SELECTED
                     	@endif
                     >no</option>
                     <option value="1"
                     	@if($blog->flag == 1)
                 		SELECTED
                 		@endif
                     >Yes</option>
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
  </div>
  @include('admin.layouts.footer')
  @include('admin.layouts.scripts')

</body>
</html>



