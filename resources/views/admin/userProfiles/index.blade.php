@extends('admin.app')

@section('content')
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box box-info">
            <div class="box-header">
              <a href="{{ url('admin/userProfile/create') }}" class="btn btn-info pull-right"><i class="fa fa-plus" ></i>&nbsp;Add User Profile</a>
              <br>
              <br>
              <div class="container" >                
              </div>
              <h6>
              <div class="table-responsive">
                <table id="datatable1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>Address</th>
                      <th>Phone</th>                                   
                      <th>Avatar</th>                                    
                      <th>Facebook</th>                                    
                      <th>Twitter</th>                                    
                      <th>Istagram</th>                                    
                      <th style="width:5%"></th>
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
                      <td><a href="/admin/userProfile/edit/{!! $user_profile->id !!}"  class="fa fa-fw fa-edit" style=" color:orange; text-shadow: 2px 2px 2px #ccc"></a> 
                          <a href="/admin/userProfile/destroy/{!! $user_profile->id !!}" class="fa fa-fw fa-trash-o" style="color:red; text-shadow: 2px 2px 2px #ccc"></a></td>                             
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