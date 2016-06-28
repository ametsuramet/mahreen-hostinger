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

              <form action="/admin/category/store" class="col-md-4" method="POST" enctype="multipart/form-data">
              <input type="hidden" value="{!! csrf_token() !!}" name="_token">
                
                <div class="form-group">
                  <label for="title">Title</label>
                  <input type="text" class="form-control "  name="title" placeholder="ex title">
                </div>

                <div class="form-group">
                  <label for="slug">Slug</label>
                  <input type="text" class="form-control "  name="slug" placeholder="ex slug">
                </div>

                <div class="form-group">
                 <label for="description">Description</label>
                 <textarea name="description" class="form-control" rows="9"></textarea>
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