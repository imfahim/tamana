@extends('layouts.main')

@section('content')

			<section>
				<div class="Theme-Inner-Banner inner-banner-bg-img-two">
					<div class="banner-opacity">
						<div class="container">
							<div class="banner-content">
								<h1>Checkout</h1>
								<p>######### ####<br>####</p>
								<ul>
									<li><a href="{{route('index')}}">Home</a></li>
									<li><span>-</span></li>
									<li><a href="#">Checkout</a></li>
								</ul>
								<a href="#" class="hvr-bounce-to-right">Need Our Help</a>
							</div> <!-- /.banner-content -->
						</div> <!-- /.container -->
					</div> <!-- /.banner-opacity -->
				</div> <!-- /.Theme-Inner-Banner -->
			</section>


<section class="Join-Volunteer-Pages">

      <div class="container">
        <div class="row">
        <div class="panel panel-default">
          <div class="panel-heading" style="background-color:#7F1F21;color:white; font-size: 40px;"><center><strong>Checkout</strong></center></div>
          <div class="panel-body">
						<div class="col-md-8">
            <center><h4>Billing Details<br></h4></center><br>
            <form method="POST" data-parsley-validate="">
							{{csrf_field()}}
            <div class="col-md-6">
              <div class="single-input">
									<input type="text" name="fname" placeholder="You First name *" required="">
								</div> <!-- /.single-input -->
            </div>
            <div class="col-md-6">
              <div class="single-input">
									<input type="text" name="lname" placeholder="You Last name *" required="">
								</div> <!-- /.single-input -->
            </div>
            <div class="col-md-12">
              <div class="single-input">
									<input type="text" name="company" placeholder="Company Name.." required="">
								</div> <!-- /.single-input -->
            </div>
            <div class="col-md-6">
              <div class="single-input">
									<input type="email" name="email" placeholder="E-mail Address" required="">
								</div> <!-- /.single-input -->
            </div>
            <div class="col-md-6">
              <div class="single-input">
									<input type="text" name="phone" placeholder="Phone" required="">
								</div> <!-- /.single-input -->
            </div>
            <div class="col-md-12">
              <div class="single-input">
									<input type="text" name="country" placeholder="Country" required="">
								</div> <!-- /.single-input -->
            </div>
            <div class="col-md-12">
              <div class="single-input">
									<textarea class="form-control" name="address" type="text" placeholder="Address" rows="3" required=""></textarea>
								</div> <!-- /.single-input -->
            </div>
            <div class="col-md-12">
              <div class="single-input">
									<br><input type="text" name="city" placeholder="Town / City" required="">
								</div> <!-- /.single-input -->
            </div>
            <div class="col-md-6">
              <div class="single-input">
									<input type="text" name="state" placeholder="State" required="">
								</div> <!-- /.single-input -->
            </div>
            <div class="col-md-6">
              <div class="single-input">
									<input type="text" name="postcode" placeholder="Postcode / Zip" required="">
								</div> <!-- /.single-input -->
            </div>
					</div>

						<div class="col-md-4">
							<center><h4>Your Order<br></h4></center><br>
							<div class="well well-lg">
						<table class="table">
							<thead>
								<tr>
									<th>Product</th>
									<th>Total</th>
								</tr>
							</thead>
							<tbody>
							@foreach($cartitems as $item)
							<tr>
								<td>{{$item->name}} X {{$item->qty}}</td>
								<td>{{$item->subtotal()}}</td>
							</tr>
							@endforeach
							<tr>
								<th>Subtotal</th>
								<td>{{Session::get('order.total')}}</td>
							</tr>
							<tr>
								<th>Shipping</th>
								<td>Free Shipping</td>
							</tr>
							<tr>
								<th>Total</th>
								<td>{{Session::get('order.total')}}</td>
							</tr>
						</tbody>
					</table>
				</div>
				<button class="btn btn-success btn-lg btn-block" type="submit">Proceed</button>
				</div>


            </form>

          </div>
        </div>
      </div>
      </div>

</section>
@endsection
