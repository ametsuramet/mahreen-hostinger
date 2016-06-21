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

              <form action="/admin/orderItem/update/{!! $order_item->id !!}" class="col-md-4" method="POST" enctype="multipart/form-data">
              <input type="hidden" value="{!! csrf_token() !!}" name="_token">
                
                <div class="form-group">
                  <label for="qty">qty</label>
                  <input type="number" class="form-control "  name="qty" value="{!! $order_item->qty !!}">
                </div>

                <div class="form-group">
                  <label for="order_id">Order ID</label>
                  <select name="order_id" class="form-control ">
                    <option value="0" class="btn btn-info">Choice Order </option>          
                  @foreach($list_order as $order)
                    <option value="{!! $order_item->order_id !!}"
                    @if($order->id == $order->id)
                    SELECTED
                    @endif
                    >{!! $order->code !!}</option>
                  @endforeach          
                  </select>
                </div>

                <div class="form-group">
                  <label for="product_id">Product ID</label>
                  <select name="product_id" class="form-control ">
                    <option value="0" class="btn btn-info">Choice Order </option>          
                  @foreach($list_product as $product)
                    <option value="{!! $product->id !!}"
                    @if($product->id == $order_item->product_id)
                    SELECTED
                    @endif
                    >{!! $product->title !!}</option>
                  @endforeach          
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