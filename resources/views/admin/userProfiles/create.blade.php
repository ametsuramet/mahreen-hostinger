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

              <form action="/admin/userProfile/store" class="col-md-4" method="POST" enctype="multipart/form-data">
              <input type="hidden" value="{!! csrf_token() !!}" name="_token">
                
                
                <div class="form-group">
                  <label for="address">Address</label>
                  <input type="text" class="form-control "  name="address" required placeholder="ex jl. xxxx">
                </div>

                <div class="form-group">
                  <label for="phone">Phone</label>
                  <input type="text" class="form-control "  name="phone" required placeholder="ex 08xx xxx xxx">
                </div>

                <div class="form-group">
                  <label for="avatar">Avatar</label>
                  <input type="file" class="form-control "  name="avatar">
                </div>
             
                <div class="form-group">
                  <label for="facebook">Facebook</label>
                  <input type="text" class="form-control "  name="facebook" required placeholder="ex xxxxxxxxx">
                </div>

                <div class="form-group">
                  <label for="twitter">Twitter</label>
                  <input type="text" class="form-control "  name="twitter" required placeholder="ex xxxxxxxxx">
                </div>

                <div class="form-group">
                  <label for="instagram">Instagram</label>
                  <input type="text" class="form-control "  name="instagram" required placeholder="ex xxxxxxxxx">
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