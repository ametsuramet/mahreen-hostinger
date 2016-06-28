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
              
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr style="background-color: #3c8dbc;">
                    <th>Name</th>
                    <th>Email</th>                                   
                    <th>Role</th>                                    
                <th><a href="{{ url('admin/user/create') }}" class="btn btn-sm btn-info">Add User</a></th>

                  </tr>
                </thead>

                <tbody>
                  @foreach($users as $user)
                  <tr>
                    <td>{!! $user->name !!}</td>
                    <td>{!! $user->email !!}</td>                    
                    <td>{!! $user->role !!}</td>                       
                              
                    <td><a href="/admin/user/edit/{!! $user->id !!}"  class="fa fa-fw fa-edit fa-2x" style=" color:orange; text-shadow: 2px 2px 2px #ccc"></a> 
                        <a href="/admin/user/destroy/{!! $user->id !!}" class="fa fa-fw fa-trash-o fa-2x" style="color:red; text-shadow: 2px 2px 2px #ccc"></a>
                           
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
@endsection