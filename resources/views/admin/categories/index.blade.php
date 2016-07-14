@extends('admin.app')

@section('content')
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box box-info">
            <div class="box-header">
              <a href="{{ url('admin/category/create') }}" class="btn btn-info pull-right"><i class="fa fa-plus" ></i>&nbsp;>Add Category</a><br><br> 
              <div class="container" >
                
              </div>
              
              <div class="table-responsive">
              <table id="datatable1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                  	<th>Title</th>
    				        <th>Slug</th>
                    <th>Description</th>     
    				        <th style="width:9%"></th>

                  </tr>
                </thead>

                <tbody>
                  @foreach($categories as $category)
                  <tr>
                   	<td><a href="/admin/category/show/{!! $category->id !!}">{!! $category->title !!}</a></td>
                    <td>{!! $category->slug !!}</td>
      				      <td>{!! $category->description !!}</td>
      					
      				      <td><a href="/admin/category/edit/{!! $category->id !!}"  class="fa fa-fw fa-edit" style=" color:orange; text-shadow: 2px 2px 2px #ccc"></a> 
      					       <a href="/admin/category/destroy/{!! $category->id !!}" class="fa fa-fw fa-trash-o" style="color:red; text-shadow: 2px 2px 2px #ccc"></a></td>
                           
                  </tr>
                  @endforeach
                
                </tbody>
                </div>
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