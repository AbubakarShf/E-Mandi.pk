@extends('base')



@section('content')

<section>
		<div class="container">
			<div class="row">
				
				<div class="col-sm-9 padding-right">
					<div class="product-details"><!--product-details-->
						<div class="col-sm-5">
							<div class="view-product">
								<img src="{{asset('assets/uploads/stock/')}}/{{$stock['photo']}}" alt="" />

							</div>
						
						</div>
						<div class="col-sm-7">
							<div class="product-information"><!--/product-information-->
								<h2>
									{{$stock['stock_name']}}
								</h2>
								<p>Stock Code: 
								{{$stock['stock_code']}}
									
								</p>
								<span>
									<span>RS. {{$stock['stock_base_price']}}</span>
									
									<button type="button" class="btn btn-fefault cart">
										<i class="fa fa-shopping-cart"></i>
										Add to cart
									</button>
								</span>
								<p><b>Base Bid:</b> {{$stock['stock_base_bid']}}</p>
								<p><b>Status:</b> {{$stock['status']}}</p>
								<p><b>Color:</b> {{$stock['stock_color']}}</p>
								<p><b>Weight:</b> {{$stock['stock_weight']}}</p>
								<p><b>Age:</b> {{$stock['stock_age']}} Years</p>
								<p><b>Origin:</b> {{$stock['stock_origin']}}</p>
							</div><!--/product-information-->
						</div>
					</div><!--/product-details-->
					

					
					
				</div>
			</div>
		</div>
	</section>
	




@stop