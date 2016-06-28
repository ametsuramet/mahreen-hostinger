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

              <form action="/admin/setting/store" class="col-md-4" method="POST" enctype="multipart/form-data">
              <input type="hidden" value="{!! csrf_token() !!}" name="_token">
                
                <div class="form-group">
                  <label for="company_name">Company Name</label>
                  <input type="text" class="form-control "  name="company_name" placeholder="ex mahreenhijab">
                </div>

                <div class="form-group">
                  <label for="short_name">Short Name</label>
                  <input type="text" class="form-control "  name="short_name" placeholder="ex mahreen">
                </div>

                <div class="form-group">
                  <label for="contact_person">Contact Person</label>
                  <input type="text" class="form-control "  name="contact_person" placeholder="ex 08xx xxx xxxx">
                </div>

                <div class="form-group">
                  <label for="email">Email</label>
                  <input type="text" class="form-control "  name="email" placeholder="ex mahreen@mahren.com">
                </div>

                <div class="form-group">
                  <label for="phone">Phone</label>
                  <input type="text" class="form-control "  name="phone" placeholder="ex 08xx xxx xxxx">
                </div>

                <div class="form-group">
                  <label for="company_name">Address</label>
                  <input type="text" class="form-control "  name="address" placeholder="ex mahreen">
                </div>

                <div class="form-group">
                  <label for="description">Description</label>
                  <textarea name="description" class="form-control "   rows="9"></textarea>
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