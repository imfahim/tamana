@extends('layouts.main')

@section('content')
<!-- Theme Inner Banner ____________________________ -->


<style>
table {
border-collapse: collapse;
width: 100%;
}

th, td {
text-align: left;
padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
background-color: #751D1E;
color: white;
}

.dropbtn {
    background-color: #751D1E;
    color: white;
    padding: 16px;
    font-size: 16px;
    border: none;
    cursor: pointer;
}

.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
    display: block;
}

.dropdown:hover .dropbtn {
    background-color: #3e8e41;
}

</style>

			<section>
				<div class="Theme-Inner-Banner inner-banner-bg-img-two">
					<div class="banner-opacity">
						<div class="container">
							<div class="banner-content">
								<h1>Shopping Cart</h1>
								<p>######## <br>####</p>
								<ul>
									<li><a href="{{route('index')}}">Home</a></li>
									<li><span>-</span></li>
									<li><a href="#">Shopping Cart</a></li>
								</ul>
								<a href="#" class="hvr-bounce-to-right">Need Our Help</a>
							</div> <!-- /.banner-content -->
						</div> <!-- /.container -->
					</div> <!-- /.banner-opacity -->
				</div> <!-- /.Theme-Inner-Banner -->
			</section>
      <br>
      <div class="container">
        <div class="panel panel-default">
          <div class="panel-heading" style="background-color:#7F1F21;color:white; font-size: 40px;"><center><strong>Shopping Cart</strong></center></div>
          <form id="checkout-form" method="POST" action="{{ route('shop.checkout') }}">
            {{ csrf_field() }}

          @if (!$cartItems->isEmpty())
            <table>
              <tr>
                <th width="65%">Product</th>
                <th width="10%">Price (&#8377;)</th>
                <th width="10%">Quantity</th>
                <th width="10%">Total (&#8377;)</th>
                <th width="5%"></th>

              </tr>
              @foreach ($cartItems as $product)
                <tr>
                  <td>
                      <div class="col-md-4">
                        <img src="{{asset('images/products/'.$product->id.'_0.jpg')}}" style="width: 75%;" alt="image">
                      </div>
                      <div class="col-md-8">
                      <h5><a href="{{ route('shop.details', [$product->id]) }}" target="_blank">{{ $product->name }}</a></h5>
                    </div>
                  </td>
                  <td>{{ $product->price }}</td>
                  <td>
                    <div class="quantity">
                        <div class="input-group">
                          <div class="single-input">
          									<select class="selectpicker" name="new_quantity[{{ $product->id }}]" id="price-select[{{$product->id}}]" onchange="updatePrice({{$product->price}},{{$product->id}})">
                              @for($i = 0; $i < $product->options->quantity; $i++)
                                <!--<option value="{{ $i }}" {{ ($product->qty === $i) ? ' selected="selected"' : '' }}>{{ $i }}</option>-->
                                <option value="{{$i}}" @if($product->qty==$i)
                                  selected
                                  @endif>{{$i}}</option>
                              @endfor
          									</select>
          								</div> <!-- /.single-input -->
                         </div>
                     </div>
                  </td>
                  <td><div id="price[{{$product->id}}]">{{$product->subtotal()}}</div></td>
                  <td>

                    <a href="{{ route('cart.destroy', [$product->id]) }}" onclick="event.preventDefault();
                                             document.getElementById('cart-delete-form').submit();"><i style="font-size:24px; color: #7F1F21" class="fa">&#xf00d;</i></a>

                    <form id="cart-delete-form" method="POST" action="{{ route('cart.destroy', [$product->id]) }}" style="display:none;">
                      {{ csrf_field() }}
											<input type="hidden" name="_method" value="delete" />
                    </form>


                  </td>

                </tr>
                @endforeach
            </table>
            <input type="hidden" name="_method" value="post" />
            <a href="#" onclick="event.preventDefault();
                                     document.getElementById('checkout-form').submit();" class="btn btn-primary pull-right">Checkout</a>
          </form>
          @else
            <br /><br />
            <div class="col-md-12">
              <div class="well">
                <center>
                  There is no items in your cart !
                </center>
              </div>
            </div>
          @endif
      </div>
    </div>
<script>

function updatePrice(pr,id){
//alert($("#price["+id+"]").html);
  var value = document.getElementById("price-select["+ id +"]").value;
  var total = parseFloat(value * pr);
  document.getElementById("price["+ id +"]").innerHTML=  total;
}

</script>
@endsection
