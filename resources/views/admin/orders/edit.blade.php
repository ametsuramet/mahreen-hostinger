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

              <form action="/admin/order/update/{!! $order->id !!}" class="col-md-4" method="POST" enctype="multipart/form-data">
              <input type="hidden" value="{!! csrf_token() !!}" name="_token">
                
                <div class="form-group">
                  <label for="code">Code</label>
                  <input type="text" class="form-control "  name="code" placeholder="ex code" value="{!! $order->code !!}">
                </div>

                <div class="form-group">
                  <label for="date">Date</label>
                  <input type="text" class="form-control "  name="date" placeholder="ex date" value="{!! $order->date !!}">
                </div>

                <div class="form-group">
                  <label for="user_id">User ID</label>
                  <input type="number" class="form-control "  name="user_id" placeholder="ex user_id" value="{!! $order->user_id !!}">
                </div>

                <div class="form-group">
                  <label for="total_amount">Total Amount</label>
                  <input type="number" class="form-control "  name="total_amount" placeholder="ex total_amount" value="{!! $order->total_amount !!}">
                </div>
                
                <div class="form-group">
                  <label for="shipping_fee">Shipping Fee</label>
                  <input type="number" class="form-control "  name="shipping_fee" placeholder="ex shipping_fee" value="{!! $order->shipping_fee !!}">
                </div>
                
                <div class="form-group">
                  <label for="total_discount">Total Discount</label>
                  <input type="number" class="form-control "  name="total_discount" placeholder="ex total_discount" value="{!! $order->total_discount !!}">
                </div>

                <div class="form-group">
                  <label for="final_amount">Final Amount</label>
                  <input type="number" class="form-control "  name="final_amount" placeholder="ex final_amount" value="{!! $order->final_amount !!}">
                </div>

                <div class="form-group">
                  <label for="shipping_name">Shipping Name</label>
                  <input type="text" class="form-control "  name="shipping_name" placeholder="ex shipping_name" value="{!! $order->shipping_name !!}">
                </div>

                <div class="form-group">
                  <label for="shipping_address">Shiping Address</label>
                  <input type="text" class="form-control "  name="shipping_address" placeholder='jl alamat' value="{!! $order->shipping_address !!}">
                </div>

                <div class="form-group">
                  <label for="shipping_phone">Shipping Phone</label>
                  <input type="text" class="form-control "  name="shipping_phone" placeholder="ex shipping_phone" value="{!! $order->shipping_phone !!}">
                </div>

                <div class="form-group">
                  <label for="shipping_email">Shipping Email</label>
                  <input type="text" class="form-control "  name="shipping_email" placeholder="ex shipping_email" value="{!! $order->shipping_email !!}">
                </div>

                <div class="form-group">
                  <label for="status">Status</label>
                  <input type="number" class="form-control "  name="status" placeholder="ex status" value="{!! $order->status !!}">
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