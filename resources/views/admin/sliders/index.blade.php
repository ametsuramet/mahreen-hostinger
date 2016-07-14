@extends('admin.app')

@section('content')
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box box-info">
            <div class="box-header">
              <a href="{{ url('admin/slider/create') }}" class="btn btn-info pull-right"><i class="fa fa-plus" ></i>&nbsp;Add Product</a>
              <br>
              <br>
              <div class="container" >                
              </div>              
              <h6>
              <div class="table-responsive">
                <table id="datatable1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      
                      <th>Title</th>
                      <th>Description</th>
                      <th>Url</th>
                      <th>Product ID(s)</th>
                      <th>Category ID</th>
                      <th>Flag</th>                    
                      <th></th>  
                    </tr>
                  </thead>

                  <tbody>
                  @foreach($sliders as $slider)
                    <tr>                    
                      <td>{!! $slider->title !!}</td>
                      <td>{!! $slider->description !!}</td>
                      <td>{!! $slider->url !!}</td>
                      <td>{!! $slider->product_id !!}</td>
                      <td>{!! $slider->category_id !!}</td>
                      <td>{!! $slider->flag !!}</td>                                      
                      <td><a href="/admin/slider/edit/{!! $slider->id !!}" class="fa fa-fw fa-edit" style=" color:orange; text-shadow: 2px 2px 2px #ccc"></a>
                          <a href="/admin/slider/destroy/{!! $slider->id !!}" class="fa fa-fw fa-trash-o" style="color:red; text-shadow: 2px 2px 2px #ccc"></a></td>          
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