@extends('layouts.main')

@section('page-styles')
<style>
.container-fluid-x {
    background: #000000;
  color:#ffffff;
    margin: 40px auto 10px;
    padding: 20px 0px;
    max-width: 960px;
    box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
}
.embed-responsive-4by3 {
    padding-bottom: 58%;
}

</style>
@endsection

@section('content')
			<!-- Theme Main Banner ____________________________ -->
			<section>
				<div id="theme-main-banner">
					<div data-src="{{ asset('images/home/banner-slider-3.jpg')}}">
						<div class="camera_caption">
							<div class="container caption-v-two">
							    <h1 class="wow fadeInUp animated" data-wow-delay="0.1s">Welcome to  <span>TAMANA<span></span></span> <!--<br>a gift for the future --></h1>
							    <h6 class="wow fadeInUp animated" data-wow-delay="0.4s">Tamana is a non-profit voluntary organisation registered in March 1984, created solely with the purpose of helping the cause of mentally challenged, multiply disabled and autistic. Tamana is recognized by Ministry of Social Justice and Empowerment, Govt. of India, Department of Social Welfare; Govt. of NCT Delhi and is registered with the National Trust...</h6>
								<a href="#" class="tran3s banner-button wow fadeInUp animated" data-wow-delay="0.7s">Learn More</a>
								<!--<a href="#" class="tran3s banner-button-two wow fadeInUp animated" datsa-wow-delay="0.7s">Campaings</a>-->
							</div> <!-- /.container -->
						</div> <!-- /.camera_caption -->
					</div>
					<div data-src="{{ asset('images/home/banner-slider-3.jpg')}}">
						<div class="camera_caption">
							<div class="container caption-v-two">
							    <h1 class="wow fadeInUp animated" data-wow-delay="0.1s">Founder and Presidents Desk <!--<br>a gift for the future --></h1>
							    <h6 class="wow fadeInUp animated" data-wow-delay="0.4s"> <blockquote class="blockquote blockquote-reverse" cite="#"><p class="mb-0" style="color:white">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>  <footer class="blockquote-footer" style="color:#7F1F21">Someone famous in <cite title="Source Title">Source Title</cite></footer></blockquote></h6>
								<a href="#" class="tran3s banner-button wow fadeInUp animated" data-wow-delay="0.7s">Learn More</a>
								<!--<a href="#" class="tran3s banner-button-two wow fadeInUp animated" datsa-wow-delay="0.7s">Campaings</a>-->
							</div> <!-- /.container -->
						</div> <!-- /.camera_caption -->
					</div>
					<div data-src="{{ asset('images/home/banner-slider-1.jpg')}}">
						<div class="camera_caption">
							<div class="container text-center">
								<h1 class="wow fadeInUp animated" data-wow-delay="0.1s">In Special Consultative Status with <br><span> United Nation's Economic and Social Council</span></h1>
							   <!-- <h6 class="wow fadeInUp animated" data-wow-delay="0.4s">join today</h6>-->
								<a href="{{route('pages.volunteer')}}" class="tran3s banner-button wow fadeInUp animated hvr-bounce-to-right" data-wow-delay="0.7s">Volunteer</a>
							</div> <!-- /.container -->
						</div> <!-- /.camera_caption -->
					</div>
					<div data-src="{{ asset('images/home/banner-slider-3.jpg')}}">
						<div class="camera_caption">
							<div class="container caption-v-two">
							    <h1 class="wow fadeInUp animated" data-wow-delay="0.1s">Donate to <span>TAMANA<span></span></span> today <!--<br>a gift for the future --></h1>
							    <!--<h6 class="wow fadeInUp animated" data-wow-delay="0.4s">Making today feel better</h6>-->
								<a href="{{route('donate.page')}}" class="tran3s banner-button wow fadeInUp animated" data-wow-delay="0.7s">Donate Now</a>
								<!--<a href="#" class="tran3s banner-button-two wow fadeInUp animated" data-wow-delay="0.7s">Campaings</a>-->
							</div> <!-- /.container -->
						</div> <!-- /.camera_caption -->
					</div>
					<div data-src="{{ asset('images/home/banner-slider-3.jpg')}}">
						<div class="camera_caption">
							<div class="container caption-v-two">
							    <h1 class="wow fadeInUp animated" data-wow-delay="0.1s">Wish to  <span>Volunteer?<span></span></span> <!--<br>a gift for the future --></h1>
							    <!--<h6 class="wow fadeInUp animated" data-wow-delay="0.4s">Making today feel better</h6>-->
								<a href="{{route('pages.volunteer')}}" class="tran3s banner-button wow fadeInUp animated" data-wow-delay="0.7s">Volunteer Now</a>
								<!--<a href="#" class="tran3s banner-button-two wow fadeInUp animated" data-wow-delay="0.7s">Campaings</a>-->
							</div> <!-- /.container -->
						</div> <!-- /.camera_caption -->
					</div>

				</div> <!-- /#theme-main-banner -->
			</section>

			<!-- You Can Bring ____________________________ -->
			<br>
			<hr>
			<section class="You-Can-Bring">

				<div class="You-Can-Bring-Title" style="padding:0px 0px 50px;">
					<div class="container">
						<div class="row">
							<div class="col-md-12"><center><br>
							 <img src="{{asset('images/president.jpg')}}" class="img-circle" height="10%" width="10%" alt="Cinque Terre">
							 <h6>Dr. (Mrs.) Shayama Chona </h6>
								 <p style="border-left:0px">-Founder and President</p><br>
								  <div class="well well-sm" style="border: solid 2px #7F1F21">
										<q><cite>
											Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.
											Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.

											Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.

											Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.

											Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.

											Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.

										</cite></q>
									</div></center>
						 </div>







						</div> <!-- /.row -->
					</div> <!-- /.container -->
				</div> <!-- /.You-Can-Bring-Title -->
<hr>
				<div id="sec-centres">
				<h2><center>Centres</center></h2></div><br><br>
				<div  class="You-Can-Bring-Item-Wrapper Bring-Item-Wrapper-V-Two">
					<div class="row">
						<div class="col-md-4 col-sm-12">
							<div class="Bring-Item text-center" >
								<h3>AUTISM CENTRE</h3>
								<center><img style="border-style: solid; border-width: medium; border-color: white" src="{{ asset('images/home/img-1.jpg')}}" alt="image"></center>
								<br>
								<p>Tamana was the first institution to recognize autism as a disability distinct from others and to start programs for autistic spectrum disorder in 1985...</p>
								<a href="{{route('Autism.centre')}}" class="a-comon hvr-bounce-to-right" style="margin-Top: 50px;">See More</a>
							</div> <!-- /.Bring-Item -->
						</div> <!-- /.col -->
						<div class="col-md-4 col-sm-12">
							<div class="Bring-Item bring-item-bg-two text-center">
								<h3 style="font-size: 27px;">SPECIAL EDUCATION CENTRE</h3>
								<center><img style="border-style: solid; border-width: medium; border-color: white" src="{{ asset('images/home/img-1.jpg')}}" alt="image"></center>
								<br>
								<p>The first branch of Tamana started in 1984 in tent. The school was shifted to present premises on 12th Feb. 1992 after inauguration by late lady Diana...</p>
								<a href="{{route('SpecialEducation.centre')}}" class="a-comon hvr-bounce-to-right" style="margin-Top: 50px;">See More</a>
							</div> <!-- /.Bring-Item -->
						</div> <!-- /.col -->
						<div class="col-md-4 col-sm-12">
							<div class="Bring-Item text-center">
								<h3 style="font-size: 28px;">SKILL DEVELOPMENT CENTRE</h3>
								<center><img style="border-style: solid; border-width: medium; border-color: white" src="{{ asset('images/home/img-1.jpg')}}" alt="image"></center>
								<br>
								<p>Nai Disha, as the same name signifies, is a new direction taken by Tamana. Nai Disha was conceived with the realization...</p>
								<a href="{{route('SkillDevelopment.centre')}}" class="a-comon hvr-bounce-to-right" style="margin-Top: 50px;">See More</a>
							</div> <!-- /.Bring-Item -->
						</div> <!-- /.col -->
					</div> <!-- /.row -->
				</div> <!-- /.You-Can-Bring-Item-Wrapper -->
			</section> <!-- /.You-Can-Bring -->

			<!-- Company History _________________________________ -->
			<!-- <section class="company-history-section">
				<div class="company-history-shape-img-top"><img src="{{ asset('images/shape/shape-1.png')}}" alt="shape-img"></div>--><!-- /.company-history-shape-img-top -->
				<!--<div class="company-history-containt-opact">
					<div class="container">
						<div class="row">
							<div class="col-lg-3 col-xs-6 history-item-weight">
								<div class="clear-fix">
									<div class="history-item item-one">
										<div>
											<i class="flaticon-donate"></i>
											<p>Fundrising</p>
											<h2><span class="timer" data-from="0" data-to="1425" data-speed="2000" data-refresh-interval="5">0</span></h2>
										</div>
									</div> --><!-- /.history-item -->
							<!--	</div>--> <!-- /.clear-fix -->
							<!--</div>--> <!-- /.col -->
							<!--<div class="col-lg-3 col-xs-6 history-item-weight">
								<div class="clear-fix">
									<div class="history-item item-two">
										<div>
											<i class="flaticon-group"></i>
											<p>Volunteer</p>
											<h2><span class="timer" data-from="0" data-to="1200" data-speed="2000" data-refresh-interval="5">0</span></h2>
										</div>
									</div> --><!-- /.history-item -->
								<!--</div>--> <!-- /.clear-fix -->
							<!--</div>--> <!-- /.col -->
						<!--	<div class="col-lg-3 col-xs-6 history-item-weight">
								<div class="clear-fix">
									<div class="history-item item-three">
										<div>
											<i class="flaticon-donation-3"></i>
											<p>Donator</p>
											<h2><span class="timer" data-from="0" data-to="201" data-speed="2000" data-refresh-interval="5">0</span></h2>
										</div>
									</div> --><!-- /.history-item -->
							<!--	</div>--> <!-- /.clear-fix -->
							<!--</div> --><!-- /.col -->
							<!--<div class="col-lg-3 col-xs-6 history-item-weight">
								<div class="clear-fix">
									<div class="history-item item-four">
										<div>
											<i class="flaticon-donation-1"></i>
											<p>Raised Funds</p>
											<h2><span class="timer" data-from="0" data-to="20" data-speed="2000" data-refresh-interval="5">0</span>M</h2>
										</div>
									</div> --><!-- /.history-item -->
								<!--</div> -->
							<!--</div> .col -->
						<!--</div> /.row -->
					<!--</div>/.container -->
				<!--</div> /.company-history-containt-opact -->
				<!--<div class="company-history-shape-img-bottom"><img src="{{ asset('images/shape/shape-2.png')}}" alt="shape-img"></div> /.company-history-shape-img-bottom -->
			<!--</section>  /.company-history-section -->

			<!--  Our SEO Experts  _________________________________
			<section class="Our-SEO-Experts Our-SEO-Experts-padding">
				<div class="container">
					<div id="our-SEO-experts-slider" class="owl-carousel owl-theme">
						<div class="item">
							<div class="Experts-item">
								<div class="Experts-img">
									<img src="{{ asset('images/experts/img-1.jpg')}}" alt="image">
									<ul>
										<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
									</ul>
								</div>
								<div class="Experts-title">
									<h5><a href="#">Ghost Baby</a></h5>
									<p>Charity Specialist</p>
								</div>
							</div> --><!-- /.Experts-item
						</div>--> <!-- /.item
						<div class="item">
							<div class="Experts-item">
								<div class="Experts-img">
									<img src="{{ asset('images/experts/img-2.jpg')}}" alt="image">
									<ul>
										<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
									</ul>
								</div>
								<div class="Experts-title">
									<h5><a href="#">Foqrul Munna</a></h5>
									<p>Volunteer</p>
								</div>
							</div> --><!-- /.Experts-item
						</div> --><!-- /.item
						<div class="item">
							<div class="Experts-item">
								<div class="Experts-img">
									<img src="{{ asset('images/experts/img-3.jpg')}}" alt="image">
									<ul>
										<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
									</ul>
								</div>
								<div class="Experts-title">
									<h5><a href="#">Mahfuz Riad</a></h5>
									<p>Fund Specialist</p>
								</div>
							</div>--> <!-- /.Experts-item
						</div> --> <!-- /.item
						<div class="item">
							<div class="Experts-item">
								<div class="Experts-img">
									<img src="{{ asset('images/experts/img-4.jpg')}}" alt="image">
									<ul>
										<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
									</ul>
								</div>
								<div class="Experts-title">
									<h5><a href="#">Sayful Milon</a></h5>
									<p>Adoption</p>
								</div>
							</div> --><!-- /.Experts-item
						</div> --><!-- /.item
						<div class="item">
							<div class="Experts-item">
								<div class="Experts-img">
									<img src="{{ asset('images/experts/img-5.jpg')}}" alt="image">
									<ul>
										<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
									</ul>
								</div>
								<div class="Experts-title">
									<h5><a href="#">Abdur Rob</a></h5>
									<p>Volunteer</p>
								</div>
							</div> --><!-- /.Experts-item
						</div> --><!-- /.item
					</div> --><!-- /.our-SEO-experts-slider
				</div> --><!-- /.container
			</section> --><!-- /.Our-SEO-Experts -->
			<!-- Rcent Causes ____________________________ -->
			<section id="sec-services" class="Rcent-Causes-Section">
				<div class="container">
					<div class="Theme-title text-center">
						<h2>Services</h2>
					</div> <!-- /.Theme-title -->

					<div class="Rcent-Causes-Item-Wrapper">
						<div id="Rcent-Causes-Slider" class="owl-carousel owl-theme">
							<div class="item">
								<div class="Causes-Item">
									<div class="Causes-Img"><img src="{{ asset('images/home/img-1.jpg')}}" alt="image"></div> <!-- /.Causes-Img -->
									<div class="Causes-Text" style="height:100%;">
										<h3>Apna Fun Club</h3>
										<p>TOBY PLAYPAD, IBM Research, NION Research, MoSJE Research, HOPE,...</p>
										<a href="{{route('services.apna-fun-club')}}">Details</a>
									</div> <!-- /.Causes-Text -->
								</div> <!-- /.Causes-Item -->
							</div> <!-- /.item -->
							<div class="item">
								<div class="Causes-Item">
									<div class="Causes-Img"><img src="{{ asset('images/home/img-2.jpg')}}" alt="image"></div> <!-- /.Causes-Img -->
									<div class="Causes-Text" style="height:100%">
										<h3>Boy's Hostel</h3>
										<p>Three separate centres - one at each branch of Tamana - are run by a multi...</p>
										<a href="{{route('Services.boys-hostel')}}">Details</a>
									</div> <!-- /.Causes-Text -->
								</div> <!-- /.Causes-Item -->
							</div> <!-- /.item -->
							<div class="item">
								<div class="Causes-Item">
									<div class="Causes-Img"><img src="{{ asset('images/home/img-3.jpg')}}" alt="image"></div> <!-- /.Causes-Img -->
									<div class="Causes-Text" style="height:100%">
										<h3>NIOS</h3>
										<p>Situated on the premises of Tamana's Vocational Training Center - Nai Disha...</p>
										<a href="{{route('Services.nios')}}">Details</a>
									</div> <!-- /.Causes-Text -->
								</div> <!-- /.Causes-Item -->
							</div> <!-- /.item -->
						</div> <!-- /.row -->
						<a href="#sec-eic" class="hvr-float-shadow">Load more Services</a>
					</div> <!-- /.Rcent-Causes-Item-Wrapper -->
				</div> <!-- /.container -->
			</section> <!-- /.Rcent-Causes-Section -->

      <!-- Urgent Program ____________________________ -->
			<div id="sec-eic">&nbsp;&nbsp;&nbsp;&nbsp;<br><br></div>
			<section class="Urgent-Program">
				<div class="container">
					<div class="row">
						<div class="col-md-6 col-xs-12">
							<div class="Urgent-Program-Item">
								<center><h2>Early Intervention</h2></center>
								<p>Early intervention means doing things as early as possible to work on your child’s developmental, health and support needs.Early intervention services give specialised support to children and families in the early years (from birth to school entry). This support might include special education, therapy, counselling, service planning and help getting universal services like kindergarten and child care.</p>
								<ul class="Urgent-Location">
									<li>Autism Centre</li>
									<li><i class="fa fa-map-marker" aria-hidden="true"></i>Vasant Vihar,New Delhi.</li>
									<li>9:30AM-12:30PM</li>
								</ul> <!-- /.Urgent-Location -->

								<div class="Urgent-Massage text-center">
									<p>You can use early intervention services as well as services available to all children, such as child and family health services, kindergartens, community health centres, regional parenting services, child care services, play groups and occasional care.</p>
								</div> <!-- /.Urgent-Massage -->
							</div> <!-- /.Urgent-Program-Item -->
						</div> <!-- /.col -->
						<div class="col-md-6 col-xs-12">
							<div class="Urgent-Program-Img">
								<img src="{{ asset('images/home/img-8.jpg')}}" alt="image">
							</div> <!-- /.Urgent-Program-Img -->
						</div> <!-- /.col -->
					</div> <!-- /.row -->
				</div> <!-- /.container -->
			</section> <!-- /.Urgent-Program -->


			<section id="sec-dc" class="Urgent-Program">
				<br><br><br><br>
				<div class="container">
					<div class="row">
						<div class="col-md-6 col-xs-12">
							<div class="Urgent-Program-Img">
								<img src="{{ asset('images/home/img-8.jpg')}}" alt="image">
							</div> <!-- /.Urgent-Program-Img -->
						</div> <!-- /.col -->


						<div class="col-md-6 col-xs-12">
							<div class="Urgent-Program-Item">
								<center><h2>Diagnostic Centre</h2></center>
								<p>Early intervention means doing things as early as possible to work on your child’s developmental, health and support needs.Early intervention services give specialised support to children and families in the early years (from birth to school entry). This support might include special education, therapy, counselling, service planning and help getting universal services like kindergarten and child care.</p>
								<ul class="Urgent-Location">
									<li>Autism Centre</li>
									<li><i class="fa fa-map-marker" aria-hidden="true"></i>Vasant Vihar,New Delhi.</li>
									<li>9:30AM-12:30PM</li>
								</ul> <!-- /.Urgent-Location -->

								<div class="Urgent-Massage text-center">
									<p>You can use early intervention services as well as services available to all children, such as child and family health services, kindergartens, community health centres, regional parenting services, child care services, play groups and occasional care.</p>
								</div> <!-- /.Urgent-Massage -->
							</div> <!-- /.Urgent-Program-Item -->
						</div> <!-- /.col -->

					</div> <!-- /.row -->
				</div> <!-- /.container -->
			</section> <!-- /.Urgent-Program -->



			<!-- Upcoming Events ____________________________ -->
			<section id="sec-events" class="Upcoming-Events">
				<br><br><br><br><br><br>
				<div class="container">
					<div class="Theme-title text-center">
						<h2>Upcoming & Recent Events</h2>
						<h6>Events</h6>
					</div> <!-- /.Theme-title -->

					<ul class="Events-Item-Wrapper">
						<li class="clear-fix">
							<div class="events-img"><img src="{{ asset('images/home/img-4.jpg')}}" alt="image"></div><!-- /.events-img -->
							<div class="day">
								<h2>23</h2>
								<h6>NOVEMBER <br> Monday</h6>
							</div> <!-- /.day -->
							<div class="events-text">
								<h4>Sharing seeds, sparking connection</h4>
								<p><i>24 December 2017, 08:00 - 27 December 2017, 00:00</i> Brooklyn, NY 10036 New York, NY 10036 New York, United States</p>
							</div> <!-- /.events-text -->
							<a href="{{route('events')}}"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>
						</li> <!-- /.clear-fix -->
					</ul> <!-- /.Events-Item-Wrapper -->

				</div> <!-- /.container -->
			</section> <!-- /.Upcoming-Events -->

			<!-- testimonial section _________________________________ -->
			<section class="testimonial-section">
				<div class="testimonial-shape-img"><img src="{{ asset('images/shape/shape-3.png')}}" alt="shape-img"></div><!-- /.shape-img -->
				<div class="testimonial-opact testimonial-opact-v-two">
					<div class="testimonial-containt">

						<div class="container-fluid-x">
						<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
						  <!-- Indicators -->
						  <ol class="carousel-indicators">
						    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
						    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
						    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
						  </ol>

						  <!-- Wrapper for slides -->
						  <div class="carousel-inner" role="listbox">
						    <div class="item active" >
									<div>
									<div class="embed-responsive embed-responsive-4by3" >
									<!-- Copy & Pasted from YouTube -->
									<iframe    src="https://www.youtube.com/embed/kn9DfZUTcIg"  ></iframe>
										</div>
															</div>
						    </div>
						    <div class="item" >
						      <div>
						      <div class="embed-responsive embed-responsive-4by3" >
						    <!-- Copy & Pasted from YouTube -->
						    <iframe    src="https://www.youtube.com/embed/qq1sSl_Whi0"  ></iframe>
						        </div>
						                  </div>
						    </div>
								<div class="item" >
						      <div>
						      <div class="embed-responsive embed-responsive-4by3" >
						    <!-- Copy & Pasted from YouTube -->
						    <iframe    src="https://www.youtube.com/embed/bow2vAJLqtA"  ></iframe>
						        </div>
						                  </div>
						    </div>

						  </div>

						  <!-- Controls -->
						  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
						    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
						    <span class="sr-only">Previous</span>
						  </a>
						  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
						    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
						    <span class="sr-only">Next</span>
						  </a>
						</div>
						</div>


					</div> <!-- /.testimonial-containt -->
				</div> <!-- /.testimonial-opact -->
			</section> <!-- /.testimonial-section -->

      <br>

			<!-- News Update _________________________________ -->
			<!--<section class="news-update-section">
				<div class="container">
					<div class="Theme-title text-center">
						<h2>News Update</h2>
						<h6>Latest News</h6>
					</div> --><!-- /.Theme-title -->

					<!--<div class="row home-news-update-wrapper">
						<div class="col-md-4 col-sm-6 col-xs-12">
							<div class="home-news-update-item">
								<div class="news-update-img"><img src="{{ asset('images/home/img-5.jpg')}}" alt="image"></div>--><!-- /.news-update-img -->
								<!--<div class="news-update-text">
									<span> <i class="fa fa-clock-o" aria-hidden="true"></i> March 4, 2017 1:10 pm</span>
									<p>Monsoon floods: World Vision warns of spike in child</p>
									<a href="blog-v1.html"><i class="fa fa-arrow-right" aria-hidden="true"></i> Learn more</a>
								</div>--> <!-- /.news-update-text -->
							<!--</div>--> <!-- /.home-news-update-item -->
						<!--</div>--> <!-- /.col -->
						<!--<div class="col-md-4 col-sm-6 col-xs-12">
							<div class="home-news-update-item">
								<div class="news-update-img"><img src="{{ asset('images/home/img-6.jpg')}}" alt="image"></div>--><!-- /.news-update-img -->
								<!--<div class="news-update-text">
									<span> <i class="fa fa-clock-o" aria-hidden="true"></i> April 4, 2017 1:10 pm</span>
									<p>Increase in heat-related illness for Iraqi children</p>
									<a href="blog-v1.html"><i class="fa fa-arrow-right" aria-hidden="true"></i> Learn more</a>
								</div>--> <!-- /.news-update-text -->
							<!--</div>--> <!-- /.home-news-update-item -->
						<!--</div>--> <!-- /.col -->
					<!--	<div class="col-md-4 col-xs-12">
							<div class="home-news-update-item">
								<div class="news-update-img"><img src="{{ asset('images/home/img-7.jpg')}}" alt="image"></div>--><!-- /.news-update-img -->
								<!--<div class="news-update-text">
									<span> <i class="fa fa-clock-o" aria-hidden="true"></i> May 4, 2017 1:10 pm</span>
									<p>Charity fears that South Suda-nese refugee children</p>
									<a href="blog-v1.html"><i class="fa fa-arrow-right" aria-hidden="true"></i> Learn more</a>
								</div> --><!-- /.news-update-text -->
							<!--</div> --><!-- /.home-news-update-item -->
						<!--</div>--> <!-- /.col -->
					<!--</div>--> <!-- /.home-news-update-wrapper -->
				<!--</div> --><!-- /.container -->
			<!--</section>--> <!-- /.news-update-section -->
@endsection

@section('page-scripts')
<script>
// Carousel Auto-Cycle
  $(document).ready(function() {
    $('.carousel').carousel({
      interval: 2000
    })



  });
</script>
@endsection
