@extends('frontend.app')

@section('content')

	<table id="example1" class="table table-bordered table-striped">
	    <thead>
	      <tr>
	        <th>Title</th>
			<th>Slug</th>
	        <th>Description</th>
	        
	                                
	      </tr>
	    </thead>

	    <tbody>
	    @foreach($categories as $category)
            <tr>
              	<td>{!! $category->title !!}</td>
            	<td>{!! $category->slug !!}</td>
				<td>{!! $category->description !!}</td>
            </tr>
	    @endforeach
	    </tbody>
	</table>


@endsection