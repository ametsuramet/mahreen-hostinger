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

              <form action="/admin/user/update/{!! $user->id !!}" class="col-md-4" method="POST" enctype="multipart/form-data">
              <input type="hidden" value="{!! csrf_token() !!}" name="_token">
                
                <div class="form-group">
                  <label for="name">Name</label>
                  <input type="text" class="form-control "  name="name" placeholder="ex user" value="{!! $user->name !!}">
                </div>

                <div class="form-group">
                  <label for="email">Email</label>
                  <input type="text" class="form-control "  name="email" placeholder="ex user@user.id" value="{!! $user->email !!}">
                </div>

                <div class="form-group">
                  <label for="password">Password</label>
                  <input type="text" class="form-control "  name="password" placeholder="ex xxxxxxxxx" value="{!! $user->password !!}">
                </div>
             
                 <div class="form-group">
                  <label for="role">Role</label><br>
                    <select name="role" class="form-control">
                      <option value="superadmin"
                      @if($user->role == 'superadmin')
                      SELECTED 
                      @endif
                      >Super Admin</option>

                      <option value="admin"
                      @if($user->role == 'admin')
                      SELECTED 
                      @endif
                      >Admin</option>
                      
                      <option value="store_admin"
                      @if($user->role == 'store_admin')
                      SELECTED
                      @endif
                      >Store Admin</option>
                      
                      <option value="user"
                      @if($user->role == 'user')
                      SELECTED
                      @endif
                      >User</option>                      
                    </select>          
                </div> 


                <div class="form-group">
                  <label for="address">Address</label>
                  <input type="text" class="form-control "  name="address" placeholder="ex jl. xxxx" value="{!! $user->profile->address !!}">
                </div>

                <div class="form-group">
                  <label for="phone">Phone</label>
                  <input type="text" class="form-control "  name="phone" placeholder="ex 08xx xxx xxx" value="{!! $user->profile->phone !!}">
                </div>

                <div class="form-group">
                  <label for="avatar">Avatar</label>
                  <input type="text" class="form-control "  name="avatar" placeholder="ex xxxxxxxxx" value="{!! $user->profile->avatar !!}">
                </div>
             
                <div class="form-group">
                  <label for="facebook">Facebook</label>
                  <input type="text" class="form-control "  name="facebook" placeholder="ex xxxxxxxxx" value="{!! $user->profile->facebook !!}">
                </div>

                <div class="form-group">
                  <label for="twitter">Twitter</label>
                  <input type="text" class="form-control "  name="twitter" placeholder="ex xxxxxxxxx" value="{!! $user->profile->twitter !!}">
                </div>

                <div class="form-group">
                  <label for="instagram">Instagram</label>
                  <input type="text" class="form-control "  name="instagram" placeholder="ex xxxxxxxxx" value="{!! $user->profile->instagram !!}">
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