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
                  	<th>QTY</th>
    				<th>Order ID</th>
    				<th>Product ID</th>    				     
    				<th><a href="{{ url('admin/orderItem/create') }}" class="btn btn-sm btn-info">Order</a></th>

                  </tr>
                </thead>

                <tbody>
                  @foreach($orderItems as $order_item)
                  <tr>
                   	<td>{!! $order_item->qty !!}</td>
                    <td>{!! $order_item->order_id !!}</td>
                    <td>{!! $order_item->product_id !!}</td>
      				      					
      				<td><a href="/admin/orderItem/edit/{!! $order_item->id !!}"  class="fa fa-fw fa-edit fa-2x" style=" color:orange; text-shadow: 2px 2px 2px #ccc"></a> 
      				    <a href="/admin/orderItem/destroy/{!! $order_item->id !!}" class="fa fa-fw fa-trash-o fa-2x" style="color:red; text-shadow: 2px 2px 2px #ccc"></a>
                           
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