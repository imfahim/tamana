@extends ('layouts.main')

@section('content')
    <div class="homeArea">
    	<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="homeSlider1 owl-carousel">
						<div class="SingleHomeSlider1">
							<div class="row">
								<div class="col-md-6 col-lg-7">
									<div class="homeImgTable">
										<div class="homeImg">
											<img src="img\home-dsk-1.png" alt="">
										</div>
									</div>
								</div>
								<div class="col-md-6 col-lg-5">
									<div class="homeContent">
										<span class="topTxt">Simple &nbsp; - &nbsp; Easy to use &nbsp; - &nbsp; 10x faster!</span>
										<span class="h2 homeTitle">Get your first website with super speed!</span>
										<p>Get the best speed for your website. Don’t lose anymore <br>clients for the slowest speed of your hosting service.</p>
										<div class="homeBtn">
											<a href="#" class="btnOne Btn"><i class="icofont icofont-rocket-alt-2"></i>Get Started Now</a>
											<a href="#" class="btnTwo Btn">check pricing</a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="SingleHomeSlider1">
							<div class="row">
								<div class="col-md-6 col-lg-5">
									<div class="homeContent">
										<span class="topTxt">Simple &nbsp; - &nbsp; Easy to use &nbsp; - &nbsp; 10x faster!</span>
										<span class="h2 homeTitle">Best web hosting service for your website.</span>
										<p>Get the best speed for your website. Don’t lose anymore <br>clients for the slowest speed of your hosting service.</p>
										<div class="homeBtn">
											<a href="#" class="btnOne Btn"><i class="icofont icofont-rocket-alt-2"></i>Get Started Now</a>
											<a href="#" class="btnTwo Btn">check pricing</a>
										</div>
									</div>
								</div>
								<div class="col-md-6 col-lg-7">
									<div class="homeImgTable">
										<div class="homeImg">
											<img src="{{ asset('img\server.png')}}" alt="">
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
    	</div>
    </div>
    <!-- ======= /1.02 Home Area ====== -->

    <!-- ======= 1.03 Domain Area ====== -->
    <div class="domainArea  animated">
    	<div class="container">
    		<div class="row">
    			<div class="col-md-6 clearfix col-md-offset-0 col-sm-10 col-sm-offset-1">
    				<div class="domainTxt">
    					<p>Search your domain, <br>purchase one.</p>
    				</div>
    				<form action="domainSearchl" class="domainForm" method="get">
    					<div class="domainTop">
    						<input type="search" name="search" placeholder="Enter your domain name here">
    						<input type="submit" name="submit" value="Search Domain">
    					</div>
    					<div class="domainCheck">
    						<span class="com"><input type="checkbox" id="com" name="com" value="com"> .com <label for="com"></label></span>
    						<span class="net"><input type="checkbox" id="net" name="net" value="net"> .net<label for="net"></label></span>
    						<span class="org"><input type="checkbox" id="org" name="org" value="org"> .org<label for="org"></label></span>
    						<span class="in"><input type="checkbox" id="in" name="in" value="in"> .in<label for="in"></label></span>
    					</div>
    				</form>
    			</div>
    			<div class="col-md-6 col-md-offset-0 col-sm-10 col-sm-offset-1">
    				<div class="domainContent">
    					<div class="h3">Create your website <br>with only $3/mo.</div>
	    				<p>We have flexible pricing plans for our customers. <br>Starting from $3/mo to $20/mo. Select your plan now.</p>
	    				<a href="" class="Btn domainBtn">get started now</a>
    				</div>
    			</div>
    		</div>
    	</div>
    </div>
    <!-- ======= /1.03 Domain Area ====== -->

    <!-- ======= 1.05 Pricing Area ====== -->
    <div class="pricingArea secPdng  animated">
    	<div class="container">
    		<div class="row">
    			<div class="col-md-12">
    				<div class="sectionTitle">
    					<div class="h2">Pay for what you <span>actually</span> use. No hidden charge!</div>
    				</div>
    			</div>
    		</div>
    		<div class="row">
				<div class="price clearfix">
					<div class="col-md-3 priceCol col-sm-5 col-sm-offset-1 col-md-offset-0">
						<div class="singlePrice">
							<div class="priceHead">
								<span class="priceTitle">Personal</span>
								<div class="priceImg">
									<img src="img\icon\user.png" alt="">
								</div>
								<div class="currency">$3<span>/mo</span></div>
								<p>best for personal use</p>
							</div>
							<ul class="priceBody">
								<li><i class="icofont icofont-ui-check"></i>10GB Space</li>
								<li><i class="icofont icofont-ui-check"></i>1 Free Domain</li>
								<li><i class="icofont icofont-ui-check"></i>300GB SSD Disk</li>
								<li><i class="icofont icofont-ui-close"></i>Special Offers</li>
								<li><i class="icofont icofont-ui-check"></i>Unlimited Support</li>
							</ul>
							<a href="" class="priceBtn Btn">Get Started now</a>
						</div>
					</div>
					<div class="col-md-3 priceCol col-sm-5">
						<div class="singlePrice active">
							<div class="priceHead">
								<span class="priceTitle">small team</span>
								<div class="priceImg">
									<img src="img\icon\users.png" alt="">
								</div>
								<div class="currency">$7<span>/mo</span></div>
								<p>best for personal use</p>
							</div>
							<ul class="priceBody">
								<li><i class="icofont icofont-ui-check"></i>10GB Space</li>
								<li><i class="icofont icofont-ui-check"></i>1 Free Domain</li>
								<li><i class="icofont icofont-ui-check"></i>300GB SSD Disk</li>
								<li><i class="icofont icofont-ui-close"></i>Special Offers</li>
								<li><i class="icofont icofont-ui-check"></i>Unlimited Support</li>
							</ul>
							<a href="" class="priceBtn Btn">Get Started now</a>
						</div>
					</div>
					<div class="col-md-3 priceCol col-sm-5 col-sm-offset-1 col-md-offset-0">
						<div class="singlePrice">
							<div class="priceHead">
								<span class="priceTitle">company</span>
								<div class="priceImg">
									<img src="img\icon\home.png" alt="">
								</div>
								<div class="currency">$15<span>/mo</span></div>
								<p>best for personal use</p>
							</div>
							<ul class="priceBody">
								<li><i class="icofont icofont-ui-check"></i>10GB Space</li>
								<li><i class="icofont icofont-ui-check"></i>1 Free Domain</li>
								<li><i class="icofont icofont-ui-check"></i>300GB SSD Disk</li>
								<li><i class="icofont icofont-ui-close"></i>Special Offers</li>
								<li><i class="icofont icofont-ui-check"></i>Unlimited Support</li>
							</ul>
							<a href="" class="priceBtn Btn">Get Started now</a>
						</div>
					</div>
					<div class="col-md-3 priceCol col-sm-5">
						<div class="singlePrice">
							<div class="priceHead">
								<span class="priceTitle">big shot</span>
								<div class="priceImg">
									<img src="img\icon\earth.png" alt="">
								</div>
								<div class="currency">$25<span>/mo</span></div>
								<p>best for personal use</p>
							</div>
							<ul class="priceBody">
								<li><i class="icofont icofont-ui-check"></i>10GB Space</li>
								<li><i class="icofont icofont-ui-check"></i>1 Free Domain</li>
								<li><i class="icofont icofont-ui-check"></i>300GB SSD Disk</li>
								<li><i class="icofont icofont-ui-close"></i>Special Offers</li>
								<li><i class="icofont icofont-ui-check"></i>Unlimited Support</li>
							</ul>
							<a href="" class="priceBtn Btn">Get Started now</a>
						</div>
					</div>
				</div>
    		</div>
    	</div>
    </div>
    <!-- ======= /1.05 Pricing Area ====== -->
    <!-- ======= 1.04 Service Area ====== -->
    <div class="serviceArea secPdng padTopNone  animated">
    	<div class="container">
    		<div class="row">
    			<div class="col-md-12">
					<div class="sectionTitle">
						<div class="h2">Lots of hosting services in town. <br>Why you should <span>choose us?</span></div>
					</div>
    			</div>
    		</div>
    		<div class="row service">
    			<div class="col-md-4 col-sm-4">
    				<div class="singleService">
    					<div class="serviceIcon">
    						<img src="img\icon\gear.png" alt="">
    					</div>
    					<div class="serviceContent">
    						<span class="h3">Easy to Customize</span>
    						<p>Easily configurable with your popular CMS <br>platforms - Wordpress, Joomla & more.</p>
    					</div>
    				</div>
    			</div>
    			<div class="col-md-4 col-sm-4">
    				<div class="singleService">
    					<div class="serviceIcon">
    						<img src="img\icon\cloud-up.png" alt="">
    					</div>
    					<div class="serviceContent">
    						<span class="h3">99% server uptime</span>
    						<p>Easily configurable with your popular CMS <br>platforms - Wordpress, Joomla & more.</p>
    					</div>
    				</div>
    			</div>
    			<div class="col-md-4 col-sm-4">
    				<div class="singleService">
    					<div class="serviceIcon">
    						<img src="img\icon\care-support.png" alt="">
    					</div>
    					<div class="serviceContent">
    						<span class="h3">24/7 customer support</span>
    						<p>Easily configurable with your popular CMS <br>platforms - Wordpress, Joomla & more.</p>
    					</div>
    				</div>
    			</div>
    		</div>
    	</div>
    </div>
    <!-- ======= /1.04 Service Area ====== -->
    <div class="sectionBar"></div>
    <!-- ======= 1.06 Cta Area ====== -->
    <div class="ctaArea secPdng  animated">
    	<div class="container">
    		<div class="row ctaRow">
    			<div class="col-md-6">
    				<div class="ctaImgOne">
    					<img src="{{ asset('img\server.png')}}" alt="">
    				</div>
    			</div>
    			<div class="col-md-6 ctaCol">
    				<div class="ctaRight ctaTxt">
						<div class="ctaCell">
							<div class="h2">Dedicated and Secured server for your website</div>
							<p>Get the best speed for your website. Don’t lose anymore <br>clients for the slowest speed of your hosting service.</p>
							<a href="#" class="ctaBtn Btn"><i class="icofont icofont-rocket-alt-2"></i>Get Started Now</a>
						</div>
    				</div>
    			</div>
    		</div>
    		<div class="row">
    			<div class="col-md-6 ctaCol">
    				<div class="ctaLeft ctaTxt">
						<div class="ctaCell">
							<div class="h2">Super speed for your website to impress your visitor.</div>
							<p>Get the best speed for your website. Don’t lose anymore <br>clients for the slowest speed of your hosting service.</p>
							<div class="ctaBtn">
								<a href="#" class="btnOne Btn">read more</a>
								<a href="#" class="btnTwo Btn">Get Started Now</a>
							</div>
						</div>
    				</div>
    			</div>
    			<div class="col-md-5 col-md-offset-1 ctaColBtm">
    				<div class="ctaImgTwo">
    					<img src="{{ asset('img\home-dsk-2.png')}}" alt="">
    				</div>
    			</div>
    		</div>
    	</div>
    </div>
    <!-- ======= /1.06 Cta Area ====== -->

    <!-- ======= 1.10 hTestimonialArea Area ====== -->
    <div class="hTstArea secPdng  animated">
    	<div class="container">
    		<div class="row">
    			<div class="sectionTitle">
    				<div class="h2">We give awesome service, <br>See how <span>customers love us.</span></div>
    			</div>
    		</div>
    		<div class="row">
    			<div class="tstSlider owl-carousel">
    				<div class="col-sm-12 singleTstSlide">
						<div class="singleTst">
							<p>“Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie conse quat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore.”</p>
							<span class="clientName">David Ramon</span>
							<a href="#">www.sitename.com</a>
						</div>
    				</div>
    				<div class="col-sm-12 singleTstSlide">
						<div class="singleTst">
							<p>“Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie conse quat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore.”</p>
							<span class="clientName">David Ramon</span>
							<a href="#">www.sitename.com</a>
						</div>
    				</div>
    				<div class="col-sm-12 singleTstSlide">
						<div class="singleTst">
							<p>“Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie conse quat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore.”</p>
							<span class="clientName">David Ramon</span>
							<a href="#">www.sitename.com</a>
						</div>
    				</div>
    				<div class="col-sm-12 singleTstSlide">
						<div class="singleTst">
							<p>“Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie conse quat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore.”</p>
							<span class="clientName">David Ramon</span>
							<a href="#">www.sitename.com</a>
						</div>
    				</div>
    			</div>
    		</div>
    	</div>
    </div>
    <!-- ======= /1.10 hTestimonialArea Area ====== -->

    <!-- ======= 1.07 client Area ====== -->
    <div class="clientArea secPdng  animated">
    	<div class="container">
    		<div class="row">
    			<div class="col-md-2 col-sm-4 col-xs-6">
    				<div class="singleClient"><a href="#"><img src="{{ asset('img\client-1.png')}}" alt=""></a></div>
    			</div>
    			<div class="col-md-2 col-sm-4 col-xs-6">
    				<div class="singleClient"><a href="#"><img src="{{ asset('img\client-2.png')}}" alt=""></a></div>
    			</div>
    			<div class="col-md-2 col-sm-4 col-xs-6">
    				<div class="singleClient"><a href="#"><img src="{{ asset('img\client-3.png')}}" alt=""></a></div>
    			</div>
    			<div class="col-md-2 col-sm-4 col-xs-6">
    				<div class="singleClient"><a href="#"><img src="{{ asset('img\client-4.png')}}" alt=""></a></div>
    			</div>
    			<div class="col-md-2 col-sm-4 col-xs-6">
    				<div class="singleClient"><a href="#"><img src="{{ asset('img\client-5.png')}}" alt=""></a></div>
    			</div>
    			<div class="col-md-2 col-sm-4 col-xs-6">
    				<div class="singleClient"><a href="#"><img src="{{ asset('img\client-6.png')}}" alt=""></a></div>
    			</div>
    		</div>
    	</div>
    </div>
    <!-- ======= /1.07 client Area ====== -->

    <!-- ======= 1.08 ctaTwo Area ====== -->
    <div class="ctaTwo">
    	<div class="container  animated">
    		<div class="row">
    			<div class="col-md-12">
    				<span class="ctaTxtTwo">20,000+ People trust Sparks! Be one of them today.</span>
    				<div class="ctaBtn"><a href="#" class="btnOne Btn">Get Started now</a></div>
    			</div>
    		</div>
    	</div>
    </div>
    <!-- ======= /1.08 ctaTwo Area ====== -->
@endsection
