@extends('layouts.main')

@section('content')
<!-- Theme Inner Banner ____________________________ -->
			<section>
				<div class="Theme-Inner-Banner inner-banner-bg-img-two">
					<div class="banner-opacity">
						<div class="container">
							<div class="banner-content">
								<h1>Shop Details</h1>
								<p>SPONSOR A CHILD AND CHANGE THEIR LIFE FOR <br>GOOD</p>
								<ul>
									<li><a href="{{route('index')}}">Home</a></li>
									<li><span>-</span></li>
									<li><a href="#">Shop details</a></li>
								</ul>
								<a href="#" class="hvr-bounce-to-right">Need Our Help</a>
							</div> <!-- /.banner-content -->
						</div> <!-- /.container -->
					</div> <!-- /.banner-opacity -->
				</div> <!-- /.Theme-Inner-Banner -->
			</section>

			<!-- Shop Details ____________________________ -->
			<section class="Shop-Pages">
				<div class="container">
					<div class="row">
						<div class="col-lg-9 col-md-8 col-xs-12 float-right">
							<div class="single-product-details">
								<div class="row">
									<div class="col-lg-7 col-xs-12">
										<div class="product-order-img">
											<div class="vig-img">
												<img  id="vig-img" src="{{asset('images/products/'.$product->id.'_0.jpg')}}" alt="image">
											</div>
										</div> <!-- /.product-order-img -->
										<div class="row">
											@for($i=0;$i<$count;$i++)
											<div class="col-md-3">
											<img src="{{asset('images/products/'.$product->id.'_'.$i.'.jpg')}}" alt="image" height="80px" onclick="ChangePic('{{$product->id.'_'.$i}}')">
											</div>
											@endfor
										</div>
									</div> <!-- /.col -->
									<div class="col-lg-5 col-xs-12">
										<div class="product-order-details">
											<h6>{{ $product->name }}</h6>
											<ul class="price">
												<li>&#8377; {{ $product->price }}</li>
												<!--<li><del>$89</del></li>-->
												<li>{{ ($product->quantity > 0) ? "In Stock" : "Out of Stock" }}</li>
											</ul>
											<div class="rating-and-tag">
												<ul class="tag">
													<li>Categories: &nbsp; {{$cat->name}}</li>
												</ul>
											</div>
											<br>
											<div class="value-decrease-and-button">
												<div class="value-decrease-and-select">
													<ul>
														<li>
															<ul class="value-section">
																<li><button class="tran3s" id="value-decrease"><i class="fa fa-minus" aria-hidden="true"></i></button> </li>
																<li id="product-value">1</li>
																<li><button class="tran3s" id="value-increase"><i class="fa fa-plus" aria-hidden="true"></i></button> </li>
															</ul>
														</li>
														<li>
															<form method="POST" action="{{ route('cart.store') }}" class="row" style="background-color:#7F1F21;border-radius: 3px">
												        {{ csrf_field() }}
												        <input type="hidden" name="product_id" value="{{ $product->id }}" />

																<center><button type="submit" style="background:#7F1F21;color:white" class="btn">Add To Cart</button></center>
															</form>
															</li>
													</ul>
												</div>
											</div>
										</div> <!-- /.product-order-details -->
									</div> <!-- /.col -->
								</div> <!-- /.row -->
								<div class="review-tab">
									<ul class="nav nav-tabs">
										<li class="active"><a data-toggle="tab" href="#home">Description</a></li>
									</ul>
									<div class="tab-content">
										<div id="home" class="tab-pane fade in active">
											<p>{{ $product->description }}</p>
										</div>
									</div>
								</div> <!-- /.review-tab -->
							</div> <!-- /.single-product-details -->
						</div> <!-- /.col -->

						<div class="col-lg-3 col-md-4 col-xs-12">
							<!-- ================ Shop Side Bar ================== -->
							<div class="Shop-Side-Bar">
								<form action="#">
									<input type="text" placeholder="Search Product">
									<button>Search</button>
								</form> <!-- /form -->
								<h4>Shop Categories :</h4>
								<ul class="Light-Shop">
									<li><a href="{{route('shop.index')}}">All</a></li>
									@foreach($categories as $category)
									<li><a href="{{route('shop.filter',[$category->id])}}">{{$category->name}}</a></li>
									@endforeach
								</ul> <!-- /.Light-Shop -->
								<h4>Popular Product</h4>
								<ul class="Popular-Product">
									<li>
										<img src="{{asset('images/shop/1.jpg')}}" alt="image">
										<h6><a href="#">LED Light</a></h6>
										<span>$ 235</span>
									</li>
									<li>
										<img src="{{asset('images/shop/2.jpg')}}" alt="image">
										<h6><a href="#">Wood Table</a></h6>
										<span>$ 35</span>
									</li>
									<li>
										<img src="{{asset('images/shop/3.jpg')}}" alt="image">
										<h6><a href="#">Light LED</a></h6>
										<span>$ 76</span>
									</li>
									<li>
										<img src="{{asset('images/shop/4.jpg')}}" alt="image">
										<h6><a href="#">Offic chair</a></h6>
										<span>$ 134</span>
									</li>
								</ul> <!-- /.Popular-Product -->
							</div> <!-- /.Shop-Side-Bar -->
						</div> <!-- /.col -->
					</div> <!-- /.row -->
				</div> <!-- /.container -->
			</section> <!-- /.Shop-Pages -->
			<script>
			function ChangePic(pic){
				document.getElementById('vig-img').src="/images/products/"+pic+".jpg";
			}
			</script>

@endsection
