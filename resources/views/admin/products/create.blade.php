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
        List Product
        
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
              <form action="/admin/product/store" class="col-md-4" method="POST" enctype="multipart/form-data">
              <input type="hidden" value="{!! csrf_token() !!}" name="_token">
                

                <div class="form-group">
                  <label for="SKU">SKU</label>
                  <input type="text" class="form-control "  name="SKU" placeholder="ex 12345">
                </div>

                <div class="form-group">
                  <label for="title">Title</label>
                  <input type="text" class="form-control "  name="title" placeholder="ex Title">
                </div>

                <div class="form-group">
                  <label for="slug">Slug</label>
                  <input type="text" class="form-control "  name="slug">
                </div>

                <div class="form-group">
                  <label for="price">Price</label>
                  <input type="number" class="form-control "  name="price" placeholder="ex 1000">
                </div>

                <div class="form-group">
                  <label for="discount">Discount</label>
                  <input type="number" class="form-control "  name="discount" placeholder="ex 10">
                </div>

                <div class="form-group">
                 <label for="description">Description</label>
                 <textarea name="description" class="form-control" rows="9"></textarea>
                </div>

                <div class="form-group">
                <label for="size">Size</label>
                <input type="text" class="form-control "  name="size" placeholder="name">
              </div>

                <div class="form-group">
                  <label for="category_id">Category</label>
                  <select name="category_id" class="form-control ">
                    <option value="0" class="btn btn-info">Choice Category </option>          
                  @foreach($list_category as $category)
                    <option value="{!! $category->id !!}">{!! $category->title !!}</option>
                  @endforeach          
                  </select>
                </div>

                <div class="form-group">
                  <label for="is_featured">Is Featured</label><br>
                    <select>
                      <option value="1">Yes</option>
                      <option value="0">no</option>
                    </select>          
                </div>
                    
                <div class="form-group">
                  <label for="is_featured">Is Featured</label><br>
                    <select>
                      <option value="1">Publish</option>
                      <option value="0">Unpublish</option>
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
