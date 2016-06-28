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

              <form action="/admin/order/update/{!! $order->id !!}" class="col-md-4" method="POST" enctype="multipart/form-data">
              <input type="hidden" value="{!! csrf_token() !!}" name="_token">
                
                <div class="form-group">
                  <label for="code">Code</label>
                  <input type="text" class="form-control "  name="code" placeholder="ex code" value="{!! $order->code !!}">
                </div>

                <div class="form-group">
                  <label for="date">Date</label>
                  <input type="date" class="form-control "  name="date" placeholder="ex date" value="{!! $order->date !!}">
                </div>

                <div class="form-group">
                  <label for="user_id">User ID</label>
                  <input type="number" class="form-control "  name="user_id" placeholder="ex user_id" value="{!! $order->user_id !!}">
                </div>

                <div class="form-group">
                  <label for="user_id">User ID</label>
                  <select name="user_id" class="form-control ">
                    <option value="0" class="btn btn-info">Choice ID</option>          
                  @foreach($list_user as $user)
                    <option value="{!! $user->id !!}"
                    @if($user->id == $order->user_id)
                    SELECTED
                    @endif
                    >{!! $user->name !!}</option>
                  @endforeach          
                  </select>
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
@endsection