@extends('admin.app')

@section('content')
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box box-info">
            <div class="box-header">
              <a href="{{ url('admin/order/create') }}" class="btn btn-info pull-right"><i class="fa fa-plus" ></i>&nbsp;Order</a>
              <br>
              <br>
              <div class="container" >                
              </div>         
              <h6>     
              <div class="table-responsive">
                <table id="datatable1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
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
      				        <th style="width:9%"></th>
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
        				      <td><a href="/admin/order/edit/{!! $order->id !!}"  class="fa fa-fw fa-edit" style=" color:orange; text-shadow: 2px 2px 2px #ccc"></a> 
        				          <a href="/admin/order/destroy/{!! $order->id !!}" class="fa fa-fw fa-trash-o" style="color:red; text-shadow: 2px 2px 2px #ccc"></a></td>                             
                    </tr>
                    @endforeach                  
                  </tbody>
                </table>
              </div></h6>          
            </div>
          </div>
        </div>
        <!-- /.col-->
      </div>
      <!-- ./row -->
    </section>
    <!-- /.content -->
@endsection