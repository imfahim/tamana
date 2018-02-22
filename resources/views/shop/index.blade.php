@extends('layouts.main')

@section('content')
<!-- Theme Inner Banner ____________________________ -->
			<section>
				<div class="Theme-Inner-Banner inner-banner-bg-img-two">
					<div class="banner-opacity">
						<div class="container">
							<div class="banner-content">
								<h1>Shop</h1>
								<p>SPONSOR A CHILD AND CHANGE THEIR LIFE FOR <br>GOOD</p>
								<ul>
									<li><a href="{{route('index')}}">Home</a></li>
									<li><span>-</span></li>
									<li><a href="#">Shop</a></li>
								</ul>
								<a href="#" class="hvr-bounce-to-right">Need Our Help</a>
							</div> <!-- /.banner-content -->
						</div> <!-- /.container -->
					</div> <!-- /.banner-opacity -->
				</div> <!-- /.Theme-Inner-Banner -->
			</section>


			<!-- Shop ____________________________ -->
			<section class="Shop-Pages">
				<div class="container">
						<div class="panel panel-default">
							<div class="panel-heading" style="background-color:#7F1F21;color:white;background-image: url('{{asset('images/shop-panel.JPG')}}');"><center>Tamana's Shop</center></div>
							<div class="panel-body">
					<div class="row">
						<div class="col-lg-9 col-md-8 col-xs-12 float-right">
							<div class="Shop-Item-Wrapper">
								<div class="row">

									@foreach($products as $product)


									<div class="col-md-3">
										<div class="Shop-Item">
											<div class="Shop-Img">
												<img src="{{asset('images/products/'.$product->id .'_0.jpg')}}" alt="image" height="150px">
											</div> <!-- /.Shop-Img -->
											<div class="Shop-Cart">
												<h6><a href="{{route('shop.details', [$product->id])}}">{{$product->name}}</a></h6>
												<span>₹{{$product->price}}</span>
												<form method="POST" action="{{ route('cart.store') }}" class="row" style="background-color:#7F1F21;border-radius: 3px">
									        {{ csrf_field() }}
									        <input type="hidden" name="product_id" value="{{ $product->id }}" />

													<center><button type="submit" style="background:#7F1F21;color:white">Add To Cart</button></center>
												</form>
											</div> <!-- /.Shop-Cart -->
										</div> <!-- /.Shop-Item -->
									</div> <!-- /.col -->

									@endforeach



								</div> <!-- /.row -->
								<ul class="shop-next-and-pivias text-center">
									<li><a href="#">1</a></li>
									<li><a href="#">2</a></li>
									<li><a href="#">3</a></li>
									<li><a href="#"><i class="fa fa-arrow-right" aria-hidden="true"></i></a></li>
								</ul> <!-- /.shop-next-and-pivias -->
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
									<li><a href="{{route('Shop.Index')}}">All</a></li>
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
				</div>
			</div>
				</div> <!-- /.container -->

			</section> <!-- /.Shop-Pages -->

@endsection
