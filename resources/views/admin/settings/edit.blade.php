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

  <div class="content-wrapper">
      <!-- Content Header (Page header) -->
    <section class="content-header">
     @yield('content')
      <h1>
                
      </h1>
      <ol class="breadcrumb">
        
      </ol>
    </section>

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
  </div>
  @include('admin.layouts.footer')
  @include('admin.layouts.scripts')

</body>
</html>