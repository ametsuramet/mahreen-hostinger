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
              <form action="/admin/product/update/{!! $product->id !!}" class="col-md-4" method="POST" enctype="multipart/form-data">
              <input type="hidden" value="{!! csrf_token() !!}" name="_token">
                

                <div class="form-group">
                  <label for="SKU">SKU</label>
                  <input type="text" class="form-control "  name="SKU" placeholder="ex 12345" value="{!! $product->SKU !!}">
                </div>

                <div class="form-group">
                  <label for="title">Title</label>
                  <input type="text" class="form-control "  name="title" placeholder="ex Title" value="{!! $product->title !!}">
                </div>

                <div class="form-group">
                  <label for="slug">Slug</label>
                  <input type="text" class="form-control "  name="slug" value="{!! $product->slug !!}">
                </div>

                <div class="form-group">
                  <label for="price">Price</label>
                  <input type="number" class="form-control "  name="price" placeholder="ex 1000" value="{!! $product->price !!}">
                </div>

                <div class="form-group">
                  <label for="discount">Discount</label>
                  <input type="number" class="form-control "  name="discount" placeholder="ex 10" value="{!! $product->discount !!}">
                </div>

                <div class="form-group">
                 <label for="description">Description</label>
                 <textarea name="description" class="form-control" rows="9">{!! $product->description !!}</textarea>
                </div>

                <div class="form-group">
                <label for="size">Size</label>
                <input type="text" class="form-control "  name="size" placeholder="name" value="{!! $product->size !!}">
              </div>

                <div class="form-group">
                  <label for="category_id">Category ID</label>
                  <select name="category_id" class="form-control ">
                    <option value="0" class="btn btn-info">Choice Category </option>          
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
                  <label for="is_featured">Is Featured</label><br>
                    <select name="is_featured" class="form-control">
                    <option value="1"
                      @if ($product->is_featured == 1)
                        selected
                        @endif 
                      >Yes</option>
                      <option value="0" 
                      @if ($product->is_featured == 0)
                        selected
                        @endif >No</option>
                      </option>
                    </select>          
                </div>
                    
                <div class="form-group">
                  <label for="flag">flag</label><br>
                    <select name="flag" class="form-control">                      
                      <option value="1"
                        @if ($product->flag == 1)
                        selected
                        @endif 
                      >Publish</option>
                      <option value="0" 
                      @if ($product->flag == 0)
                        selected
                        @endif >Unpublish</option>
                    </select>          
                </div>

                <div class="form-group">
                  <label for="picture1">Picture 1</label>
                  <input type="file" class="form-control"  name="picture1">
                </div>
                    
                <div class="form-group">
                  <label for="picture2">Picture 2</label>
                  <input type="file" class="form-control"  name="picture2">
                </div>

                <div class="form-group">
                  <label for="picture3">Picture 3</label>
                  <input type="file" class="form-control"  name="picture3">
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