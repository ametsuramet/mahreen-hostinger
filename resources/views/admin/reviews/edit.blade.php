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
              
              <form action="/admin/review/update/{!! $review->id !!}" class="col-md-4" method="POST" enctype="multipart/form-data">
              <input type="hidden" value="{!! csrf_token() !!}" name="_token">
              

              <div class="form-group">
                <label for="name">name</label>
                <input type="text" class="form-control "  name="name" placeholder="ex name" value="{!! $review->name !!}">
              </div>

              <div class="form-group">
                <label for="email">email</label>
                <input type="text" class="form-control "  name="email" placeholder="ex sample.com" value="{!! $review->email !!}">
              </div>

              <div class="form-group">
                <label for="user_id">user_id</label>
                <input type="number" class="form-control "  name="user_id" placeholder="ex 1000" value="{!! $review->user_id !!}">
              </div>

              <div class="form-group">
                <label for="rating">rating</label>
                <input type="number" class="form-control "  name="rating" placeholder="ex 10" value="{!! $review->rating !!}">
              </div> 

              <div class="form-group">
                <label for="product_id">product_id</label>
                <select name="product_id" class="form-control ">
                  <option value="0" class="btn btn-info">Choice Product </option>          
                  @foreach($list_product as $product)
                  <option value="{!! $product->id !!}"
                  @if($product->id == $review->product_id)
                  SELECTED
                  @endif 
                  >{!! $product->title !!}</option>
                  @endforeach          
                </select>
              </div>

              <div class="form-group">
                <label for="description">description</label>
                <textarea name="description" class="form-control" rows="9" placeholder="ex New">{!! $review->description !!}</textarea>
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