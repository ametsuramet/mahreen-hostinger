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
              
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr style="background-color: #3c8dbc;">
                    <th>Address</th>
                    <th>Phone</th>                                   
                    <th>Avatar</th>                                    
                    <th>Facebook</th>                                    
                    <th>Twitter</th>                                    
                    <th>Istagram</th>                                    
                	<th><a href="{{ url('admin/userProfile/create') }}" class="btn btn-sm btn-info">Add User Profile</a></th>

                  </tr>
                </thead>

                <tbody>
                  @foreach($userProfiles as $user_profile)
                  <tr>
                    <td>{!! $user_profile->address !!}</td>
                    <td>{!! $user_profile->phone !!}</td>                    
                    <td>{!! $user_profile->avatar !!}</td>                       
                    <td>{!! $user_profile->facebook !!}</td>                       
                    <td>{!! $user_profile->twitter !!}</td>                       
                    <td>{!! $user_profile->instagram !!}</td>                       
                              
                    <td><a href="/admin/userProfile/edit/{!! $user_profile->id !!}"  class="fa fa-fw fa-edit fa-2x" style=" color:orange; text-shadow: 2px 2px 2px #ccc"></a> 
                        <a href="/admin/userProfile/destroy/{!! $user_profile->id !!}" class="fa fa-fw fa-trash-o fa-2x" style="color:red; text-shadow: 2px 2px 2px #ccc"></a>
                           
                  </tr>
                  @endforeach
                
                </tbody>
              </table>              
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
