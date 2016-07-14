@extends('admin.app')

@section('content')
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box box-info">
            <div class="box-header">
              <a href="{{ url('admin/product/create') }}" class="btn btn-info pull-right"><i class="fa fa-plus" ></i>&nbsp;Add Product</a> 
              <br>
              <br>
              <div class="container" >                
              </div>
              <h6>
              <div class="table-responsive">
                <table id="datatable1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>SKU</th>
                      <th>Title</th>                    
                      <th style="width:8%">Price(s)</th>
                      <th style="width:1%">Discount</th>                    
                      <th style="width:5%">Size</th>
                      <th style="width:5%">Category</th>
                      <th style="width:5%">Featured</th>
                      <th style="width:8%">Publish</th>
                      <th style="width:10%">Pictures</th>            
                      <th style="width:5%"></th>
                                              
                    </tr>
                  </thead>

                  <tbody>
                  @foreach($products as $product)
                  <tr>
                    <td>{!! $product->SKU !!}</td>
                    <td>{!! $product->title !!}</td>
                    <td>Rp. {!! number_format($product->price) !!}</td>
                    <td>{!! $product->discount + 0 !!}%</td>                  
                    <td>{!! $product->size !!}</td>
                    <td>{!! $product->category->title !!}</td>
                    <td>
                    @if($product->is_featured == 1)
                      Featured                                   
                    @endif
                    </td>
                    <td>
                    @if($product->flag == 1)
                      Published
                    @else 
                      Unpublish
                    @endif
                    </td>
                    <td>
                    @if($product->picture1)
                      <img src="/public/images/{!! $product->picture1 !!}" width=100 />
                    @endif
                    @if($product->picture2)
                      <br>
                      <br>
                      <img src="/public/images/{!! $product->picture2 !!}" width=100 />
                    @endif
                    @if($product->picture3)
                      <br>
                      <br>
                      <img src="/public/images/{!! $product->picture3 !!}" width=100 />
                    @endif
                    </td>
                    
                    <td><a href="/admin/product/edit/{!! $product->id !!}" class="fa fa-fw fa-edit" style=" color:orange; text-shadow: 2px 2px 2px #ccc"></a>
                        <a href="/admin/product/destroy/{!! $product->id !!}" class="fa fa-fw fa-trash-o" style="color:red; text-shadow: 2px 2px 2px #ccc"></a></td>          
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
    
@endsection
