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
              
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr style="background-color: #3c8dbc;">
                  	<th>Code</th>
    				<th>Date</th>
    				<th>User ID</th>
    				<th>Total Amount</th>
    				<th>Shipping Fee</th>
    				<th>Total Discount</th>
    				<th>Final Amount</th>
    				<th>Shipping Name</th>
    				<th>Shipping Address</th>
    				<th>Shipping Phone</th>
    				<th>Shipping Email</th>    				
                    <th>Status</th>     
    				<th><a href="{{ url('admin/order/create') }}" class="btn btn-sm btn-info">Order</a></th>

                  </tr>
                </thead>

                <tbody>
                  @foreach($orders as $order)
                  <tr>
                   	<td>{!! $order->code !!}</td>
                    <td>{!! $order->date !!}</td>
                    <td>{!! $order->user_id !!}</td>
      				<td>{!! $order->total_amount !!}</td>
      				<td>{!! $order->shipping_fee !!}</td>
      				<td>{!! $order->total_discount !!}</td>
      				<td>{!! $order->final_amount !!}</td>
      				<td>{!! $order->shipping_name !!}</td>
      				<td>{!! $order->shipping_address !!}</td>
      				<td>{!! $order->shipping_phone !!}</td>
      				<td>{!! $order->shipping_email !!}</td>      				
      				<td>{!! $order->status !!}</td>
      					
      				<td><a href="/admin/order/edit/{!! $order->id !!}"  class="fa fa-fw fa-edit fa-2x" style=" color:orange; text-shadow: 2px 2px 2px #ccc"></a> 
      				    <a href="/admin/order/destroy/{!! $order->id !!}" class="fa fa-fw fa-trash-o fa-2x" style="color:red; text-shadow: 2px 2px 2px #ccc"></a>
                           
                  </tr>
                  @endforeach
                
                </tbody>
              </table>          
            </div>
          </div>
        </div>
        <!-- /.col-->
      </div>
      <!-- ./row -->
    </section>
    <!-- /.content -->
@endsection