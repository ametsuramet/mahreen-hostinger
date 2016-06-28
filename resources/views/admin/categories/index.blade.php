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
                  	<th>Title</th>
    				        <th>Slug</th>
                    <th>Description</th>     
    				        <th><a href="{{ url('admin/category/create') }}" class="btn btn-sm btn-info">Add Category</a></th>

                  </tr>
                </thead>

                <tbody>
                  @foreach($categories as $category)
                  <tr>
                   	<td><a href="/admin/category/show/{!! $category->id !!}">{!! $category->title !!}</td>
                    <td>{!! $category->slug !!}</td>
      				      <td>{!! $category->description !!}</td>
      					
      				      <td><a href="/admin/category/edit/{!! $category->id !!}"  class="fa fa-fw fa-edit fa-2x" style=" color:orange; text-shadow: 2px 2px 2px #ccc"></a> 
      					       <a href="/admin/category/destroy/{!! $category->id !!}" class="fa fa-fw fa-trash-o fa-2x" style="color:red; text-shadow: 2px 2px 2px #ccc"></a>
                           
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