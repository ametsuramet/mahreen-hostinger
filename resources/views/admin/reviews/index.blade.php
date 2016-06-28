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
            <tr>
              <th>name</th>
              <th>email</th>
              <th>user_id</th>
              <th>rating</th>
              <th>product_id</th>
              <th>description</th>
              <th><a href="/admin/review/create">Create Blog</th>
              
                                      
            </tr>
            </thead>

            <tbody>
            @foreach($reviews as $review)
            <tr>
              <td>{!! $review->name !!}</td>
              <td>{!! $review->email !!}</td>
              <td>{!! $review->user_id !!}</td>
              <td>{!! $review->rating !!}</td>             
              <td>{!! $review->product_id !!}</td>
              <td>{!! $review->description !!}</td>

              <td><a href="/admin/review/edit/{!! $review->id !!}" class="fa fa-fw fa-edit fa-2x" style=" color:orange; text-shadow: 2px 2px 2px #ccc"></a>
                  <a href="/admin/review/destroy/{!! $review->id !!}" class="fa fa-fw fa-trash-o fa-2x" style="color:red; text-shadow: 2px 2px 2px #ccc"></a></td>
              
                        
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