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
                  <tr style="background-color: #3c8dbc; ">
                    
                    <th>Title</th>
                    <th>Description</th>
                    <th>Url</th>
                    <th>Product ID(s)</th>
                    <th>Category ID</th>
                    <th>Flag</th>                    
                    <th><a href="{{ url('admin/slider/create') }}" class=" btn btn-xs btn-info">Add Product</th>
                                            
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
                                    
                  <td><a href="/admin/slider/edit/{!! $slider->id !!}" class="fa fa-fw fa-edit fa-2x" style=" color:orange; text-shadow: 2px 2px 2px #ccc"></a>
                      <a href="/admin/slider/destroy/{!! $slider->id !!}" class="fa fa-fw fa-trash-o fa-2x" style="color:red; text-shadow: 2px 2px 2px #ccc"></a></td>          
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