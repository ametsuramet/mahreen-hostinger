@extends('admin.app')

@section('content')
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box box-info">
            <div class="box-header">
              <a href="{{ url('admin/categoryBlog/create') }}" class="btn btn-info pull-right"><i class="fa fa-plus" ></i>&nbsp;Add Category Blog</a>
              <br>
              <br>
              <div class="container" >                      
              </div>
              <h6>
              <div class="table-responsive">
                <table id="datatable1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>title</th>
                      <th>slug</th>
                      <th>description</th>               
                      <th style="width:5%"></th>                                                             
                    </tr>
                  </thead>

                  <tbody>
                    @foreach($categoryBlogs as $category_blog)
                    <tr>
                      <td>{!! $category_blog->title !!}</td>
                      <td>{!! $category_blog->slug !!}</td>              
                      <td>{!! $category_blog->description !!}</td>
                      <td><a href="/admin/categoryBlog/edit/{!! $category_blog->id !!}" class="fa fa-fw fa-edit" style=" color:orange; text-shadow: 2px 2px 2px #ccc"></a>
                          <a href="/admin/categoryBlog/destroy/{!! $category_blog->id !!}" class="fa fa-fw fa-trash-o" style="color:red; text-shadow: 2px 2px 2px #ccc"></a></td>                                 
                    </tr>
                    @endforeach                  
                  </tbody>
                </table>
              </div></h6>              
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
                             
@endsection
