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
                             


</aside>
<!-- /.right-side -->
</div>

@include('admin.layouts.scripts')





</body>
</html>
