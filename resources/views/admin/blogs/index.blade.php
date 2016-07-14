@extends('admin.app')

@section('content')
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box box-info">
            <div class="box-header">
              <a href="{{ url('admin/blog/create') }}" class="btn btn-info pull-right"><i class="fa fa-plus" ></i>&nbsp;Create Blog</a>
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
                      <th>category blog id</th>
                      <th>description</th>               
                      <th>is featured</th>
                      <th>flag</th>
                      <th style="width:9%"></th>                                              
                    </tr>
                  </thead>

                  <tbody>
                    @foreach($blogs as $blog)
                    <tr>
                      <td>{!! $blog->title !!}</td>
                      <td>{!! $blog->slug !!}</td>              
                      <td>{!! $blog->category_blog_id !!}</td>              
                      <td>{!! $blog->description !!}</td>     
                      <td>{!! $blog->is_featured !!}</td>              
                      <td>{!! $blog->flag !!}</td>
                      <td><a href="/admin/blog/edit/{!! $blog->id !!}" class="fa fa-fw fa-edit" style=" color:orange; text-shadow: 2px 2px 2px #ccc"></a>
                          <a href="/admin/blog/destroy/{!! $blog->id !!}" class="fa fa-fw fa-trash-o" style="color:red; text-shadow: 2px 2px 2px #ccc"></a></td>              
                                
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