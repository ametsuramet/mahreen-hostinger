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
<!-- Right side column. Contains the navbar and content of the page -->
<aside class="right-side">
    @yield('content')

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
                             


</aside>
<!-- /.right-side -->
</div>

@include('admin.layouts.scripts')





</body>
</html>
