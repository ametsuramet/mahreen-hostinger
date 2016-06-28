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

              <form action="/admin/setting/update/{!! $setting->id !!}" class="col-md-4" method="POST" enctype="multipart/form-data">
              <input type="hidden" value="{!! csrf_token() !!}" name="_token">
                
                <div class="form-group">
                  <label for="company_name">Company Name</label>
                  <input type="text" class="form-control "  name="company_name" placeholder="ex mahreenhijab" value="{!! $setting->company_name !!}">
                </div>

                <div class="form-group">
                  <label for="short_name">Short Name</label>
                  <input type="text" class="form-control "  name="short_name" placeholder="ex mahreen" value="{!! $setting->short_name !!}">
                </div>

                <div class="form-group">
                  <label for="contact_person">Contact Person</label>
                  <input type="text" class="form-control "  name="contact_person" placeholder="ex 08xx xxx xxxx" value="{!! $setting->contact_person !!}">
                </div>

                <div class="form-group">
                  <label for="email">Email</label>
                  <input type="text" class="form-control "  name="email" placeholder="ex mahreen@mahren.com" value="{!! $setting->email !!}">
                </div>

                <div class="form-group">
                  <label for="phone">Phone</label>
                  <input type="text" class="form-control "  name="phone" placeholder="ex 08xx xxx xxxx" value="{!! $setting->phone !!}">
                </div>

                <div class="form-group">
                  <label for="address">Address</label>
                  <input type="text" class="form-control "  name="address" placeholder="ex mahreen" value="{!! $setting->address !!}">
                </div>

                <div class="form-group">
                  <label for="description">Description</label>
                  <textarea class="form-control "  name="description" rows="9">{!! $setting->company_name !!}</textarea>
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