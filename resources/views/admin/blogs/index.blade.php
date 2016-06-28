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
                    <th>title</th>
                    <th>slug</th>
                    <th>category blog id</th>
                    <th>description</th>               
                    <th>is featured</th>
                    <th>flag</th>
                    <th><a href="/admin/blog/create"> Create Blog</th>
                                            
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
                    <td><a href="/admin/blog/edit/{!! $blog->id !!}" class="fa fa-fw fa-edit fa-2x" style=" color:orange; text-shadow: 2px 2px 2px #ccc"></a>
                        <a href="/admin/blog/destroy/{!! $blog->id !!}" class="fa fa-fw fa-trash-o fa-2x" style="color:red; text-shadow: 2px 2px 2px #ccc"></a></td>              
                              
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