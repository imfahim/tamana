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
											<div class="vig-img"><img src="{{asset('images/shop/img-11.jpg')}}" alt="image"></div>
										</div> <!-- /.product-order-img -->
									</div> <!-- /.col -->
									<div class="col-lg-5 col-xs-12">
										<div class="product-order-details">
											<h6>{{ $product->name }}</h6>
											<ul class="price">
												<li>&#8377; {{ $product->price }}</li>
												<li><del>$89</del></li>
												<li>In stock</li>
											</ul>
											<div class="rating-and-tag">
												<ul class="tag">
													<li>Categories: LED, LIGHT</li>
												</ul>
												<ul class="rating">
													<li><i class="fa fa-star" aria-hidden="true"></i></li>
													<li><i class="fa fa-star" aria-hidden="true"></i></li>
													<li><i class="fa fa-star" aria-hidden="true"></i></li>
													<li><i class="fa fa-star" aria-hidden="true"></i></li>
													<li><i class="fa fa-star-half-o" aria-hidden="true"></i></li>
												</ul>
											</div>
											<p>What is Google’s misrepresentative content policy and how does it affect you? Google’s John Brown sheds light on this policy.</p>
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
														<li><a href="#" class="hvr-float-shadow">Add To Cart</a></li>
													</ul>
												</div>
											</div>
										</div> <!-- /.product-order-details -->
									</div> <!-- /.col -->
								</div> <!-- /.row -->
								<div class="review-tab">
									<ul class="nav nav-tabs">
										<li class="active"><a data-toggle="tab" href="#home">Description</a></li>
										<li><a data-toggle="tab" href="#menu1">Additional information</a></li>
										<li><a data-toggle="tab" href="#menu2">Reviews (1)</a></li>
									</ul>
									<div class="tab-content">
										<div id="home" class="tab-pane fade in active">
									    	<p>Google has updated its AdSense ad policies, no longer permitting the use of such ads on pop-under pages. This decision was made because the company believes ads on pop-under pages do not provide a good user experience. “Pop-under ads can be annoying as well, as they will “pop under” your window, so that you don’t see them until you minimize your browser. We do not believe these ads provide a good user experience, and therefore are not suitable for Google ads.”</p>
									    	<p>Further, Google is no longer permitting the use of its ads on sites that trigger pop-under pages, even if the pop-unders do not contain an ad</p>
										</div>
									  	<div id="menu1" class="tab-pane fade">
									    	<h4>Ten steps to making </h4>
									    	<ul>
									    		<li>1. Lorem ipsum dolor sit amet, consectetur adipiscing elit</li>
									    		<li>2. Suspendisse accumsan nunc velit, vel ullamcorper</li>
									    		<li>3. Quisque mollis tellus diam, non blandit magna accumsan quis.</li>
									    		<li>4. Sed ultricies eleifend felis pretium cursus.</li>
									    		<li>5. Lorem ipsum dolor sit amet, consectetur adipiscing elit</li>
									    		<li>6. Suspendisse accumsan nunc velit, vel ullamcorper</li>
									    		<li>7. Quisque mollis tellus diam, non blandit magna accumsan quis.</li>
									    		<li>8. Sed ultricies eleifend felis pretium cursus.</li>
									    	</ul>
									  	</div>
									  	<div id="menu2" class="tab-pane fade">
									    	<div id="review">
												<div class="single-review clearfix">
													<img src="{{asset('images/blog/2.jpg')}}" alt="" class="float-left">
													<div class="text float-left">
														<div class="clearfix">
															<div class="float-left">
																<span>March 14, 2017</span>
																<span>10 days ago</span>
																<h6>Lindsay Lohan</h6>
															</div>
															<ul class="float-right">
																<li><i class="fa fa-star" aria-hidden="true"></i></li>
																<li><i class="fa fa-star" aria-hidden="true"></i></li>
																<li><i class="fa fa-star" aria-hidden="true"></i></li>
																<li><i class="fa fa-star" aria-hidden="true"></i></li>
																<li><i class="fa fa-star" aria-hidden="true"></i></li>
															</ul>
														</div> <!-- /.clearfix -->
														<p>I am glad that I have taken the PHP Framework course here at Scholar. The teacher has been amazing throughtout the course. They have outstanding resources to  help you. In addition.</p>
													</div> <!-- /.text -->
												</div> <!-- /.single-review -->
											</div> <!-- /.review -->
									  	</div>
									</div>
								</div> <!-- /.review-tab -->
							</div> <!-- /.single-product-details -->
							<div class="Shop-Item-Wrapper">
								<h4>Related Products</h4>
								<div id="product-Slider" class="owl-carousel owl-theme">
									<div class="item">
										<div class="Shop-Item">
											<div class="Shop-Img">
												<img src="{{asset('images/shop/img-1.jpg')}}" alt="image">
											</div> <!-- /.Shop-Img -->
											<div class="Shop-Cart">
												<h6><a href="#">Ten steps to making</a></h6>
												<span>$89</span>
												<a href="#" class="hvr-float-shadow">Add To Cart</a>
											</div> <!-- /.Shop-Cart -->
										</div> <!-- /.Shop-Item -->
									</div> <!-- /.item -->
									<div class="item">
										<div class="Shop-Item">
											<div class="Shop-Img">
												<img src="{{asset('images/shop/img-2.jpg')}}" alt="image">
											</div> <!-- /.Shop-Img -->
											<div class="Shop-Cart">
												<h6><a href="#">Long-Tail SEO Strategy</a></h6>
												<span>$19</span>
												<a href="#" class="hvr-float-shadow">Add To Cart</a>
											</div> <!-- /.Shop-Cart -->
										</div> <!-- /.Shop-Item -->
									</div> <!-- /.item -->
									<div class="item">
										<div class="Shop-Item">
											<div class="Shop-Img">
												<img src="{{asset('images/shop/img-7.jpg')}}" alt="image">
											</div> <!-- /.Shop-Img -->
											<div class="Shop-Cart">
												<h6><a href="#">Table decor</a></h6>
												<span>$79</span>
												<a href="#" class="hvr-float-shadow">Add To Cart</a>
											</div> <!-- /.Shop-Cart -->
										</div> <!-- /.Shop-Item -->
									</div> <!-- /.item -->
									<div class="item">
										<div class="Shop-Item">
											<div class="Shop-Img">
												<img src="{{asset('images/shop/img-4.jpg')}}" alt="image">
											</div> <!-- /.Shop-Img -->
											<div class="Shop-Cart">
												<h6><a href="#">wall Light</a></h6>
												<span>$9</span>
												<a href="#" class="hvr-float-shadow">Add To Cart</a>
											</div> <!-- /.Shop-Cart -->
										</div> <!-- /.Shop-Item -->
									</div> <!-- /.item -->
									<div class="item">
										<div class="Shop-Item">
											<div class="Shop-Img">
												<img src="{{asset('images/shop/img-5.jpg')}}" alt="image">
											</div> <!-- /.Shop-Img -->
											<div class="Shop-Cart">
												<h6><a href="#">Smart Light LMP</a></h6>
												<span>$47</span>
												<a href="#" class="hvr-float-shadow">Add To Cart</a>
											</div> <!-- /.Shop-Cart -->
										</div> <!-- /.Shop-Item -->
									</div> <!-- /.item -->
									<div class="item">
										<div class="Shop-Item">
											<div class="Shop-Img">
												<img src="{{asset('images/shop/img-6.jpg')}}" alt="image">
											</div> <!-- /.Shop-Img -->
											<div class="Shop-Cart">
												<h6><a href="#">Clean Look Chair</a></h6>
												<span>$36</span>
												<a href="#" class="hvr-float-shadow">Add To Cart</a>
											</div> <!-- /.Shop-Cart -->
										</div> <!-- /.Shop-Item -->
									</div> <!-- /.item -->
								</div> <!-- /#product-Slider -->
							</div> <!-- /.Shop-Item-Wrapper -->
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
									<li><a href="#">Light Shop</a></li>
									<li><a href="#">Cloth</a></li>
									<li><a href="#">LED</a></li>
									<li><a href="#">Technology</a></li>
									<li><a href="#">Electronic</a></li>
									<li><a href="#">Design</a></li>
									<li><a href="#">User Experience</a></li>
									<li><a href="#">Charity</a></li>
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

@endsection
