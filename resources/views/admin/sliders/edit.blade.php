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
              <form action="/admin/slider/update/{!! $slider->id !!}" class="col-md-4" method="POST" enctype="multipart/form-data">
              <input type="hidden" value="{!! csrf_token() !!}" name="_token">
               
                <div class="form-group">
                  <label for="title">Title</label>
                  <input type="text" class="form-control "  name="title" placeholder="ex Title" value="{!! $slider->title !!}">
                </div>

                <div class="form-group">
                 <label for="description">Description</label>
                 <textarea name="description" class="form-control" rows="9">{!! $slider->description !!}</textarea>
                </div>

                <div class="form-group">
                  <label for="url">Url</label>
                  <input type="text" class="form-control "  name="url" value="{!! $slider->url !!}">
                </div>


                <div class="form-group">
                  <label for="product_id">Product ID</label>
                  <select name="product_id" class="form-control ">
                    <option value="0" class="btn btn-info">Choice Product ID </option> 
                    @foreach($list_product as $product)         
                  	<option value="{!! $product->id !!}"
                  		@if($product->id == $slider->product_id)
                  		SELECTED
                  		@endif
                  	>{!! $product->SKU !!} | {!! $product->title !!}</option>   
                  	@endforeach                        
                  </select>
                </div>
                
                <div class="form-group">
                  <label for="category_id">Category ID</label>
                  <select name="category_id" class="form-control ">
                    <option value="0" class="btn btn-info">Choice Category ID </option> 
                    @foreach($list_category as $category)         
                  	<option value="{!! $category->id !!}"
                  		@if($category->id == $product->category_id)
                        SELECTED
                        @endif
                  		>{!! $category->title !!}</option>   
                  	@endforeach                        
                  </select>
                </div>
                    
                <div class="form-group">
                  <label for="flag">Flag</label><br>
                    <select name="flag" class="form-control">
                      <option value="1"
                      	@if($slider->flag == 1)
                        selected
                        @endif 
                      	>Publish</option>
                      	<option value="0"
                      	@if($slider->flag == 0)
                        selected
                        @endif 
                      >Unpublish</option>
                      
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