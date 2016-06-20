<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    @include('admin.layouts.styles')

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>
<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">
  @include('admin.layouts.header')
  @include('admin.layouts.sidebar')
  <!-- Right side column. Contains the navbar and content of the page -->
    <aside class="main-sidebar">
          @yield('content')
      <!-- /.content -->

      <div class="container" >
        <h3>Product List</h3>
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
          <label for="category_id">Category</label>
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
              <option value="0" class="btn btn-info">Choice featured</option> 
              <option value="{!! $product->is_featured !!}"></option>
              <option value="1">Yes</option>
              <option value="0">no</option>
              </option>
            </select>          
        </div>
            
        <div class="form-group">
          <label for="flag">flag</label><br>
            <select name="flag" class="form-control">
              <option value="0" class="btn btn-info">Choice flag</option> 
              <option value="{!! $product->flag !!}"></option>
              <option value="1">Publish</option>
              <option value="0">Unpublish</option>
            </select>          
        </div>
            
        
        <input type="submit" class="btn btn-primary"></input>
      </form>



  @include('admin.layouts.scripts')

</body>
</html>




