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
                    <th>SKU</th>
                    <th>Title</th>
                    <th>Slug</th>
                    <th>Price(s)</th>
                    <th>Discount</th>
                    <th>Description</th>
                    <th>Size</th>
                    <th>catagory</th>
                    <th>Is Featured</th>
                    <th>Flag</th>
                    <th><a href="{{ url('admin/product/create') }}" class=" btn btn-xs btn-info">Add Product</th>
                                            
                  </tr>
                </thead>

                <tbody>
                @foreach($products as $product)
                <tr>
                  <td>{!! $product->SKU !!}</td>
                  <td>{!! $product->title !!}</td>
                  <td>{!! $product->slug !!}</td>
                  <td>Rp. {!! number_format($product->price) !!}</td>
                  <td>{!! $product->discount !!}</td>
                  <td>{!! $product->description !!}</td>
                  <td>{!! $product->size !!}</td>
                  <td>{!! $product->category->title !!}</td>
                  <td>{!! $product->is_featured !!}</td>
                  <td>{!! $product->flag !!}</td>
                  
                  <td><a href="/admin/product/edit/{!! $product->id !!}" class="fa fa-fw fa-edit fa-2x" style=" color:orange; text-shadow: 2px 2px 2px #ccc"></a>
                      <a href="/admin/product/destroy/{!! $product->id !!}" class="fa fa-fw fa-trash-o fa-2x" style="color:red; text-shadow: 2px 2px 2px #ccc"></a></td>          
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
    
@endsection
