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
			              
			            <div class="col-md-8"> 
							<div class="col-md-8"> 
								<div class="panel panel-default">
									<div class="panel-heading">
										
									</div> 
									<div class="panel-body"> 
									
									<img src="/public/images/{!! $product->picture1 !!}" width="160px" /><br>

									title		: {{ $product->title }}<br>
									price		: Rp{{ number_format($product->price) }}<br>							discount		: {{ $product->discount }}<br>
									size		: {{ $product->size }}<br>
									description	: {{ $product->description }}<br>
									
									</div>
								</div>
							</div>
						</div>
					</div>				
		        </div>
	        </div>
        <!-- /.col-->
      	</div>
      <!-- ./row -->
    </section>
    
@endsection
