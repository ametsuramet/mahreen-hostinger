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
                  	<th>Company Name</th>
            				<th>Short Name</th>
                    <th>Contact Person</th>                
                    <th>Email</th>                
                    <th>Phone</th>                
                    <th>Address</th>                
            				<th>Description</th>    				     
            				<th><a href="{{ url('admin/setting/create') }}" class="btn btn-sm btn-info">Add Setting</a></th>

                  </tr>
                </thead>

                <tbody>
                  @foreach($settings as $setting)
                  <tr>
                   	<td>{!! $setting->company_name !!}</td>
                    <td>{!! $setting->short_name !!}</td>
                    <td>{!! $setting->contact_person !!}</td>
                    <td>{!! $setting->email !!}</td>
                    <td>{!! $setting->phone !!}</td>
                    <td>{!! $setting->address !!}</td>
                    <td>{!! $setting->description !!}</td>
      				      					
      				      <td><a href="/admin/setting/edit/{!! $setting->id !!}"  class="fa fa-fw fa-edit fa-2x" style=" color:orange; text-shadow: 2px 2px 2px #ccc"></a> 
      				      <a href="/admin/setting/destroy/{!! $setting->id !!}" class="fa fa-fw fa-trash-o fa-2x" style="color:red; text-shadow: 2px 2px 2px #ccc"></a>
                           
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