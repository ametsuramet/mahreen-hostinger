@extends('admin.app')

@section('content')
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box box-info">
            <div class="box-header">
              <a href="{{ url('admin/orderItem/create') }}" class="btn btn-info pull-right"><i class="fa fa-plus" ></i>&nbsp;Order</a>
              <br>
              <br>
              <div class="container" >                
              </div>
              <h6>              
              <div class="table-responsive">
                <table id="datatable1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                    	<th>QTY</th>
              				<th>Order ID</th>
              				<th>Product ID</th>    				     
              				<th style="width:5%"></th>
                    </tr>
                  </thead>

                  <tbody>
                    @foreach($orderItems as $order_item)
                    <tr>
                     	<td>{!! $order_item->qty !!}</td>
                      <td>{!! $order_item->order_id !!}</td>
                      <td>{!! $order_item->product_id !!}</td>        				      					
        				      <td><a href="/admin/orderItem/edit/{!! $order_item->id !!}"  class="fa fa-fw fa-edit" style=" color:orange; text-shadow: 2px 2px 2px #ccc"></a> 
        				          <a href="/admin/orderItem/destroy/{!! $order_item->id !!}" class="fa fa-fw fa-trash-o" style="color:red; text-shadow: 2px 2px 2px #ccc"></a></td>
                             
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