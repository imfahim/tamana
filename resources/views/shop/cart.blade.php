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

.center{
  width: 120px; margin: 5px auto;
}



</style>

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
      <br>
      <div class="container">
        <div class="panel panel-default">
          <div class="panel-heading" style="background-color:#7F1F21;color:white; font-size: 40px;"><center><strong>Shopping Cart</strong></center></div>
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
                        <img src="{{asset('images/shop/img-7.jpg')}}" style="width: 75%;" alt="image">
                      </div>
                      <div class="col-md-8">
                      <h5>{{ $product->name }}</h5>
                    </div>
                  </td>
                  <td>{{ $product->price }}</td>
                  <td>
                    <div class="quantity">
                      <div class="center">
                        <div class="input-group">
                          <span class="input-group-btn">
                            <button type="button" class="btn btn-primary btn-number" disabled="disabled" data-type="minus" data-field="quant[1]">
                              <span class="glyphicon glyphicon-minus"></span>
                            </button>
                           </span>
                           <input type="text" name="quant[1]" class="form-control input-number" value="{{ $product->qty }}" min="1" max="10">
                           <span class="input-group-btn">
                             <button type="button" class="btn btn-primary btn-number" data-type="plus" data-field="quant[1]">
                               <span class="glyphicon glyphicon-plus"></span>
                             </button>
                           </span>
                         </div>
                       </div>
                     </div>
                  </td>
                  <td>{{ $product->subtotal() }}</td>
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
        //plugin bootstrap minus and plus
      //http://jsfiddle.net/laelitenetwork/puJ6G/
      $('.btn-number').click(function(e){
        e.preventDefault();

        fieldName = $(this).attr('data-field');
        type      = $(this).attr('data-type');
        var input = $("input[name='"+fieldName+"']");
        var currentVal = parseInt(input.val());
        if (!isNaN(currentVal)) {
            if(type == 'minus') {

                if(currentVal > input.attr('min')) {
                    input.val(currentVal - 1).change();
                }
                if(parseInt(input.val()) == input.attr('min')) {
                    $(this).attr('disabled', true);
                }

            } else if(type == 'plus') {

                if(currentVal < input.attr('max')) {
                    input.val(currentVal + 1).change();
                }
                if(parseInt(input.val()) == input.attr('max')) {
                    $(this).attr('disabled', true);
                }

            }
        } else {
            input.val(0);
        }
      });
      $('.input-number').focusin(function(){
       $(this).data('oldValue', $(this).val());
      });
      $('.input-number').change(function() {

        minValue =  parseInt($(this).attr('min'));
        maxValue =  parseInt($(this).attr('max'));
        valueCurrent = parseInt($(this).val());

        name = $(this).attr('name');
        if(valueCurrent >= minValue) {
            $(".btn-number[data-type='minus'][data-field='"+name+"']").removeAttr('disabled')
        } else {
            alert('Sorry, the minimum value was reached');
            $(this).val($(this).data('oldValue'));
        }
        if(valueCurrent <= maxValue) {
            $(".btn-number[data-type='plus'][data-field='"+name+"']").removeAttr('disabled')
        } else {
            alert('Sorry, the maximum value was reached');
            $(this).val($(this).data('oldValue'));
        }


      });
      $(".input-number").keydown(function (e) {
            // Allow: backspace, delete, tab, escape, enter and .
            if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 190]) !== -1 ||
                 // Allow: Ctrl+A
                (e.keyCode == 65 && e.ctrlKey === true) ||
                 // Allow: home, end, left, right
                (e.keyCode >= 35 && e.keyCode <= 39)) {
                     // let it happen, don't do anything
                     return;
            }
            // Ensure that it is a number and stop the keypress
            if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
                e.preventDefault();
            }
        });

        </script>
@endsection
