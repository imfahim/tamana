@extends('layouts.main')

@section('content')
			<!-- Theme Main Banner ____________________________ -->
			<section>
				<div id="theme-main-banner">
					<div data-src="{{ asset('images/home/banner-slider-3.jpg')}}">
						<div class="camera_caption">
							<div class="container caption-v-two">
							    <h1 class="wow fadeInUp animated" data-wow-delay="0.1s">Donate to  <span>TAMANA<span></span></span> today <!--<br>a gift for the future --></h1>
							    <!--<h6 class="wow fadeInUp animated" data-wow-delay="0.4s">Making today feel better</h6>-->
								<a href="#" class="tran3s banner-button wow fadeInUp animated" data-wow-delay="0.7s">Donate Now</a>
								<!--<a href="#" class="tran3s banner-button-two wow fadeInUp animated" data-wow-delay="0.7s">Campaings</a>-->
							</div> <!-- /.container -->
						</div> <!-- /.camera_caption -->
					</div>
					<div data-src="{{ asset('images/home/banner-slider-1.jpg')}}">
						<div class="camera_caption">
							<div class="container text-center">
								<h1 class="wow fadeInUp animated" data-wow-delay="0.1s">In Special Consultative Status with <br><span> United Nation's Economic and Social Council</span></h1>
							   <!-- <h6 class="wow fadeInUp animated" data-wow-delay="0.4s">join today</h6>-->
								<a href="#" class="tran3s banner-button wow fadeInUp animated hvr-bounce-to-right" data-wow-delay="0.7s">Volunteer</a>
							</div> <!-- /.container -->
						</div> <!-- /.camera_caption -->
					</div>
					<div data-src="{{ asset('images/home/banner-slider-2.jpg')}}">
						<div class="camera_caption">
							<div class="container caption-v-two">
							    <h1 class="wow fadeInUp animated" data-wow-delay="0.1s">From the Founder and President's Desk </h1>
							   <!-- <h6 class="wow fadeInUp animated" data-wow-delay="0.4s">Making today feel better</h6>-->
								<a href="#" class="tran3s banner-button wow fadeInUp animated" data-wow-delay="0.7s">Read More</a>
								<!--<a href="#" class="tran3s banner-button-two wow fadeInUp animated" data-wow-delay="0.7s">Campaings</a>-->
							</div> <!-- /.container -->
						</div> <!-- /.camera_caption -->
					</div>
				</div> <!-- /#theme-main-banner -->
			</section>

			<!-- You Can Bring ____________________________ -->
			<section class="You-Can-Bring">
				<div class="You-Can-Bring-Title">
					<div class="container">
						<div class="row">
							<div class="col-lg-5 col-sm-6 col-xs-12">
								<center><h3>WELCOME TO TAMANA<br>
									 <img src="{{asset('images/founder.jpg')}}" class="img-rounded" alt="founder">
								</h3></center>
							</div> <!-- /.col -->
							<div class="col-lg-7 col-sm-6 col-xs-12"><br><br><br>
								<p>Tamana is a non-profit voluntary organisation registered in March 1984, created solely with the purpose of helping the cause of mentally challenged, multiply disabled and autistic. Tamana is recognized by Ministry of Social Justice and Empowerment, Govt. of India, Department of Social Welfare; Govt. of NCT Delhi and is registered with the National Trust...
									<a href="#" style="color:#7F1F21;font-size:15px">Details >></a>
								</p>
							</div> <!-- /.col -->
						</div> <!-- /.row -->
					</div> <!-- /.container -->
				</div> <!-- /.You-Can-Bring-Title -->

				<div class="You-Can-Bring-Title" style="padding:0px 0px 50px;">
					<div class="container">
						<div class="row">
							<div class="col-lg-7 col-sm-6 col-xs-12"><br><br><br>
								<p style="padding-right:3px;border-right: solid 1px #7F1F21;border-left:0px">Three decades ago after the birth of my daughter Tamana, I had a dream to create a world of inclusion. It has taken 25 years of struggle by us to open the minds of Indian society to accept the disabled. As my daughter Tamana has grown into a well settled and independent adult, so has the organization. This growth has been nurtured by our optimism in drawing out...
									<a href="#" style="color:#7F1F21;font-size:15px">Details >></a>
								</p>
							</div> <!-- /.col -->
							<div class="col-lg-5 col-sm-6 col-xs-12">
								<center><h3 style="font-size:25px">FOUNDER AND PRESIDENT'S DESK<br>
									 <img src="{{asset('images/president.jpg')}}" class="img-rounded" alt="founder" height="150px">
								</h3></center>
							</div> <!-- /.col -->
						</div> <!-- /.row -->
					</div> <!-- /.container -->
				</div> <!-- /.You-Can-Bring-Title -->


				<div class="You-Can-Bring-Item-Wrapper Bring-Item-Wrapper-V-Two">
					<div class="row">
						<div class="col-md-4 col-sm-12">
							<div class="Bring-Item text-center">
								<h3>AUTISM CENTRE</h3>
								<p>Tamana was the first institution to recognize autism as a disability distinct from others and to start programs for autistic spectrum disorder in 1985...</p>
								<a href="#" class="a-comon hvr-bounce-to-right" style="margin-Top: 50px;">See More</a>
							</div> <!-- /.Bring-Item -->
						</div> <!-- /.col -->
						<div class="col-md-4 col-sm-12">
							<div class="Bring-Item bring-item-bg-two text-center">
								<h3 style="font-size: 30px;">SPECIAL EDUCATION CENTRE</h3>
								<p>The first branch of Tamana started in 1984 in tent. The school was shifted to present premises on 12th Feb. 1992 after inauguration by late lady Diana...</p>
								<a href="#" class="a-comon hvr-bounce-to-right" style="margin-Top: 50px;">See More</a>
							</div> <!-- /.Bring-Item -->
						</div> <!-- /.col -->
						<div class="col-md-4 col-sm-12">
							<div class="Bring-Item text-center">
								<h3 style="font-size: 28px;">SKILL DEVELOPMENT CENTRE</h3>
								<p>Nai Disha, as the same name signifies, is a new direction taken by Tamana. Nai Disha was conceived with the realization that the young adults at Tamana have to be equipped with skills...</p>
								<a href="#" class="a-comon hvr-bounce-to-right" style="margin-Top: 50px;">See More</a>
							</div> <!-- /.Bring-Item -->
						</div> <!-- /.col -->
					</div> <!-- /.row -->
				</div> <!-- /.You-Can-Bring-Item-Wrapper -->
			</section> <!-- /.You-Can-Bring -->

			<!-- You Can Bring ____________________________ -->
			<section class="You-Can-Bring">

				<div class="You-Can-Bring-Item-Wrapper Bring-Item-Wrapper-V-Two">
					<div class="row">
						<div class="col-md-4 col-sm-12">
							<div class="Bring-Item bring-item-bg-two text-center">
								<h3>Reverse Intervention Centre</h3>
								<p>Be inspired! Take a look at the impact of our programmes which we've achievedthrough your support and donations programmes which we've </p>
								<a href="#" class="a-comon hvr-bounce-to-right" style="margin-Top: 50px;">See More</a>
							</div> <!-- /.Bring-Item -->
						</div> <!-- /.col -->
						<div class="col-md-4 col-sm-12">
							<div class="Bring-Item text-center">
								<h3>Teachers Training Cell</h3>
								<p>August 12, 1994 saw the inauguration of the TEACHERS TRAINING CELL with the introduction of a year-long certificate course in Special Education... </p>
								<a href="#" class="a-comon hvr-bounce-to-right" style="margin-Top: 50px;">See More</a>
							</div> <!-- /.Bring-Item -->
						</div> <!-- /.col -->
						<div class="col-md-4 col-sm-12">
							<div class="Bring-Item bring-item-bg-two text-center">
								<h3 style="font-size: 16px;">National Institute of Open Schooling for Special Individuals</h3>
								<p>Over the last decade, Tamana has encouraged many research scholars from various universities to conduct their Masters and Doctoral dissertation at Tamana...</p>
								<a href="#" class="a-comon hvr-bounce-to-right" style="margin-Top: 50px;">See More</a>
							</div> <!-- /.Bring-Item -->
						</div> <!-- /.col -->
					</div> <!-- /.row -->
				</div> <!-- /.You-Can-Bring-Item-Wrapper -->
			</section> <!-- /.You-Can-Bring -->


			<!-- Urgent Program ____________________________ -->
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
									<a href="#" class="two">More Details</a>
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

			<!-- Rcent Causes ____________________________ -->
			<section class="Rcent-Causes-Section">
				<div class="container">
					<div class="Theme-title text-center">
						<h2>Services</h2>
					</div> <!-- /.Theme-title -->

					<div class="Rcent-Causes-Item-Wrapper">
						<div id="Rcent-Causes-Slider" class="owl-carousel owl-theme">
							<div class="item">
								<div class="Causes-Item">
									<div class="Causes-Img"><img src="{{ asset('images/home/img-1.jpg')}}" alt="image"></div> <!-- /.Causes-Img -->
									<div class="Causes-Text">
										<h3 style="font-size:21px">Tamana’s Research, Innovation & Technology Lab</h3>
										<p>TOBY PLAYPAD, IBM Research, NION Research, MoSJE Research, HOPE, ECHO India</p>
										<a href="#">Details</a>
									</div> <!-- /.Causes-Text -->
								</div> <!-- /.Causes-Item -->
							</div> <!-- /.item -->
							<div class="item">
								<div class="Causes-Item">
									<div class="Causes-Img"><img src="{{ asset('images/home/img-2.jpg')}}" alt="image"></div> <!-- /.Causes-Img -->
									<div class="Causes-Text">
										<h3 style="font-size:20px">The Diagnostic Center</h3>
										<p style="font-size:12px;">Three separate centres - one at each branch of Tamana - are run by a multi - disciplinary team which consists of the social worker, psychiatrist, clinical Psychologists, counselor, special educator, speech therapist, occupational therapist and the physiotherapist.</p>
										<a href="#">Details</a>
									</div> <!-- /.Causes-Text -->
								</div> <!-- /.Causes-Item -->
							</div> <!-- /.item -->
							<div class="item">
								<div class="Causes-Item">
									<div class="Causes-Img"><img src="{{ asset('images/home/img-3.jpg')}}" alt="image"></div> <!-- /.Causes-Img -->
									<div class="Causes-Text">
										<h3>Boy's Hostel</h3>
										<p>Situated on the premises of Tamana's Vocational Training Center - Nai Disha, is a hostel that provides a unique program for adults and adolescents with disabilities.</p>
										<a href="#">Details</a>
									</div> <!-- /.Causes-Text -->
								</div> <!-- /.Causes-Item -->
							</div> <!-- /.item -->
						</div> <!-- /.row -->
						<a href="causes.html" class="hvr-float-shadow">Load more Services</a>
					</div> <!-- /.Rcent-Causes-Item-Wrapper -->
				</div> <!-- /.container -->
			</section> <!-- /.Rcent-Causes-Section -->

			<!-- Company History _________________________________ -->
			<section class="company-history-section">
				<div class="company-history-shape-img-top"><img src="{{ asset('images/shape/shape-1.png')}}" alt="shape-img"></div><!-- /.company-history-shape-img-top -->
				<div class="company-history-containt-opact">
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
									</div> <!-- /.history-item -->
								</div> <!-- /.clear-fix -->
							</div> <!-- /.col -->
							<div class="col-lg-3 col-xs-6 history-item-weight">
								<div class="clear-fix">
									<div class="history-item item-two">
										<div>
											<i class="flaticon-group"></i>
											<p>Volunteer</p>
											<h2><span class="timer" data-from="0" data-to="1200" data-speed="2000" data-refresh-interval="5">0</span></h2>
										</div>
									</div> <!-- /.history-item -->
								</div> <!-- /.clear-fix -->
							</div> <!-- /.col -->
							<div class="col-lg-3 col-xs-6 history-item-weight">
								<div class="clear-fix">
									<div class="history-item item-three">
										<div>
											<i class="flaticon-donation-3"></i>
											<p>Donator</p>
											<h2><span class="timer" data-from="0" data-to="201" data-speed="2000" data-refresh-interval="5">0</span></h2>
										</div>
									</div> <!-- /.history-item -->
								</div> <!-- /.clear-fix -->
							</div> <!-- /.col -->
							<div class="col-lg-3 col-xs-6 history-item-weight">
								<div class="clear-fix">
									<div class="history-item item-four">
										<div>
											<i class="flaticon-donation-1"></i>
											<p>Raised Funds</p>
											<h2><span class="timer" data-from="0" data-to="20" data-speed="2000" data-refresh-interval="5">0</span>M</h2>
										</div>
									</div> <!-- /.history-item -->
								</div> <!-- /.clear-fix -->
							</div> <!-- /.col -->
						</div> <!-- /.row -->
					</div> <!-- /.container -->
				</div> <!-- /.company-history-containt-opact -->
				<div class="company-history-shape-img-bottom"><img src="{{ asset('images/shape/shape-2.png')}}" alt="shape-img"></div><!-- /.company-history-shape-img-bottom -->
			</section> <!-- /.company-history-section -->

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

			<!-- Upcoming Events ____________________________ -->
			<section class="Upcoming-Events">
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
							<a href="events-details.html"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>
						</li> <!-- /.clear-fix -->
					</ul> <!-- /.Events-Item-Wrapper -->
					<div class="row">
						<div class="col-md-6 col-xs-12">
							<div class="official-charity charity-one-bg-color">
								<h4>Run it forward official charity</h4>
								<p>Every day we bring real hope to millions of children in the world's hardest places as a sign of God's unconditional love</p>
							</div> <!-- /.official-charity -->
						</div> <!-- /.col -->
						<div class="col-md-6 col-xs-12">
							<div class="official-charity">
								<h4>Run it forward official charity</h4>
								<p>Every day we bring real hope to millions of children in the world's hardest places as a sign of God's unconditional love</p>
							</div> <!-- /.official-charity -->
						</div> <!-- /.col -->
					</div> <!-- /.row -->
				</div> <!-- /.container -->
			</section> <!-- /.Upcoming-Events -->

			<!-- testimonial section _________________________________ -->
			<section class="testimonial-section">
				<div class="testimonial-shape-img"><img src="{{ asset('images/shape/shape-3.png')}}" alt="shape-img"></div><!-- /.shape-img -->
				<div class="testimonial-opact testimonial-opact-v-two">
					<div class="testimonial-containt">
						<div class="container">
							<div class="testimonial-shape-border"><i class="flaticon-right-quotation-sign"></i></div>

							<div id="client-carousel" class="carousel slide" data-ride="carousel" data-interval="2500">
								<!-- Indicators -->
								<ol class="carousel-indicators">
									<li data-target="#client-carousel" data-slide-to="0"></li>
									<li data-target="#client-carousel" data-slide-to="1" class="active"></li>
									<li data-target="#client-carousel" data-slide-to="2"></li>
								</ol>

								<!-- Wrapper for slides -->
								<div class="carousel-inner" role="listbox">
								    <div class="item">
								     	<p>Every day we bring real hope to millions of children in the world's hardest places as a sign of God's unconditional love.Every day we bring real hope to millions of children in the world's hardest places</p>
								     	<span>Mahfuz R  ( CEO Ch )</span>
								     	<img src="{{ asset('images/home/1.jpg')}}" alt="image">
								    </div> <!-- /.item -->
								    <div class="item active">
								     	<p>Every day we bring real hope to millions of children in the world's hardest places as a sign of God's unconditional love.Every day we bring real hope to millions of children in the world's hardest places</p>
								     	<span>Mahfuz R  ( CEO Ch )</span>
								     	<img src="{{ asset('images/home/1.jpg')}}" alt="image">
								    </div> <!-- /.item -->
								    <div class="item">
								    	<p>Every day we bring real hope to millions of children in the world's hardest places as a sign of God's unconditional love.Every day we bring real hope to millions of children in the world's hardest places</p>
								     	<span>Mahfuz R  ( CEO Ch )</span>
								     	<img src="{{ asset('images/home/1.jpg')}}" alt="image">
								    </div> <!-- /.item -->
								</div> <!-- /.carousel-inner -->
							</div> <!-- Wrapper for bootstrap slides -->
						</div> <!-- /.container -->
					</div> <!-- /.testimonial-containt -->
				</div> <!-- /.testimonial-opact -->
			</section> <!-- /.testimonial-section -->

			<!-- News Update _________________________________ -->
			<section class="news-update-section">
				<div class="container">
					<div class="Theme-title text-center">
						<h2>News Update</h2>
						<h6>Latest News</h6>
					</div> <!-- /.Theme-title -->

					<div class="row home-news-update-wrapper">
						<div class="col-md-4 col-sm-6 col-xs-12">
							<div class="home-news-update-item">
								<div class="news-update-img"><img src="{{ asset('images/home/img-5.jpg')}}" alt="image"></div><!-- /.news-update-img -->
								<div class="news-update-text">
									<span> <i class="fa fa-clock-o" aria-hidden="true"></i> March 4, 2017 1:10 pm</span>
									<p>Monsoon floods: World Vision warns of spike in child</p>
									<a href="blog-v1.html"><i class="fa fa-arrow-right" aria-hidden="true"></i> Learn more</a>
								</div> <!-- /.news-update-text -->
							</div> <!-- /.home-news-update-item -->
						</div> <!-- /.col -->
						<div class="col-md-4 col-sm-6 col-xs-12">
							<div class="home-news-update-item">
								<div class="news-update-img"><img src="{{ asset('images/home/img-6.jpg')}}" alt="image"></div><!-- /.news-update-img -->
								<div class="news-update-text">
									<span> <i class="fa fa-clock-o" aria-hidden="true"></i> April 4, 2017 1:10 pm</span>
									<p>Increase in heat-related illness for Iraqi children</p>
									<a href="blog-v1.html"><i class="fa fa-arrow-right" aria-hidden="true"></i> Learn more</a>
								</div> <!-- /.news-update-text -->
							</div> <!-- /.home-news-update-item -->
						</div> <!-- /.col -->
						<div class="col-md-4 col-xs-12">
							<div class="home-news-update-item">
								<div class="news-update-img"><img src="{{ asset('images/home/img-7.jpg')}}" alt="image"></div><!-- /.news-update-img -->
								<div class="news-update-text">
									<span> <i class="fa fa-clock-o" aria-hidden="true"></i> May 4, 2017 1:10 pm</span>
									<p>Charity fears that South Suda-nese refugee children</p>
									<a href="blog-v1.html"><i class="fa fa-arrow-right" aria-hidden="true"></i> Learn more</a>
								</div> <!-- /.news-update-text -->
							</div> <!-- /.home-news-update-item -->
						</div> <!-- /.col -->
					</div> <!-- /.home-news-update-wrapper -->
				</div> <!-- /.container -->
			</section> <!-- /.news-update-section -->
@endsection
