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

              <form action="/admin/orderItem/store" class="col-md-4" method="POST" enctype="multipart/form-data">
              <input type="hidden" value="{!! csrf_token() !!}" name="_token">
                
                <div class="form-group">
                  <label for="qty">qty</label>
                  <input type="number" class="form-control "  name="qty" placeholder="ex 10">
                </div>

                <div class="form-group">
                  <label for="order_id">Order ID</label>
                  <select name="order_id" class="form-control ">
                    <option value="0" class="btn btn-info">Choice Order </option>          
                  @foreach($list_order as $order)
                    <option value="{!! $order->id !!}">{!! $order->code !!}</option>
                  @endforeach          
                  </select>
                </div>

                <div class="form-group">
                  <label for="product_id">Product ID</label>
                  <select name="product_id" class="form-control ">
                    <option value="0" class="btn btn-info">Choice Order </option>          
                  @foreach($list_product as $product)
                    <option value="{!! $product->id !!}">{!! $product->title !!}</option>
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
@endsection