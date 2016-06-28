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
 @endsection