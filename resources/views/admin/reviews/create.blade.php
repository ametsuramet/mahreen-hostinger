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
              
              <form action="/admin/review/store" class="col-md-4" method="POST" enctype="multipart/form-data">
              <input type="hidden" value="{!! csrf_token() !!}" name="_token">
              

              <div class="form-group">
                <label for="name">name</label>
                <input type="text" class="form-control "  name="name" placeholder="ex name">
              </div>

              <div class="form-group">
                <label for="email">email</label>
                <input type="text" class="form-control "  name="email" placeholder="ex sample.com">
              </div>

              <div class="form-group">
                <label for="user_id">user_id</label>
                <input type="number" class="form-control "  name="user_id" placeholder="ex 1000">
              </div>

              <div class="form-group">
                <label for="rating">rating</label>
                <input type="number" class="form-control "  name="rating" placeholder="ex 10">
              </div> 

              <div class="form-group">
                <label for="product_id">product_id</label>
                <select name="product_id" class="form-control ">
                  <option value="0" class="btn btn-info">Choice Product </option>          
                  @foreach($list_product as $product)
                  <option value="{!! $product->id !!}">{!! $product->title !!}</option>
                  @endforeach          
                </select>
              </div>

              <div class="form-group">
                <label for="description">description</label>
                <textarea name="description" class="form-control" rows="9" placeholder="ex New"></textarea>
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
  </div>
  
@endsection