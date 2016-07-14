@extends('admin.app')

@section('content')
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box box-info">
            <div class="box-header">
              <a href="{{ url('admin/user/create') }}" class="btn btn-info pull-right"><i class="fa fa-plus" ></i>&nbsp;Add User</a>
              <br>
              <br>
              <div class="container" >                
              </div>     
              <h6>         
              <div class="table-responsive">
                <table id="datatable1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>Name</th>
                      <th>Email</th>                                   
                      <th>Role</th>                                    
                      <th></th>
                    </tr>
                  </thead>

                  <tbody>
                    @foreach($users as $user)
                    <tr>
                      <td>{!! $user->name !!}</td>
                      <td>{!! $user->email !!}</td>                    
                      <td>{!! $user->role !!}</td>                               
                      <td><a href="/admin/user/edit/{!! $user->id !!}"  class="fa fa-fw fa-edit" style=" color:orange; text-shadow: 2px 2px 2px #ccc"></a> 
                          <a href="/admin/user/destroy/{!! $user->id !!}" class="fa fa-fw fa-trash-o" style="color:red; text-shadow: 2px 2px 2px #ccc"></a></td>                             
                    </tr>
                    @endforeach                  
                  </tbody>
                </table>    
              </div></h6>          
            </div>
          </div>
        </div>
        <!-- /.col-->
      </div>
      <!-- ./row -->
    </section>
    <!-- /.content -->
@endsection