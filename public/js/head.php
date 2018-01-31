<?php 
echo '<header>
<div id="head">
    	<div class="headerTopArea">
    		<div class="container">
    			<div class="row">
    				<div class="col-md-5 col-sm-3 col-xs-5">
    					<div class="langOpt">
    						<span class="langTxt">Language: &nbsp;</span>
    						<span class="langIcon"><span class="langCode">en</span><i class="icofont icofont-caret-down"></i> </span>
    						<ul class="lang">
    							<li data-code="en">english</li>
    							<li data-code="bn">bengali</li>
    							<li data-code="ar">aribic</li>
    							<li data-code="da">dansk</li>
    						</ul>
    					</div>
    				</div>
    				<div class="col-md-7 col-sm-9 col-xs-7">
    					<ul class="topInfo">
    						<li class="call"><a href="tel:+214-5212-829"><i class="icofont icofont-ui-call"></i>+214-5212-829</a></li>
    						<li class="email"><a href="mailto:support@spark.com"><i class="icofont icofont-ui-v-card"></i>support@spark.com</a></li>
							<li class="clientAreaLi"><span><i class="icofont icofont-user-alt-3"></i>Client area</span></li>
    					</ul>
    					<div class="clientLogin">
    						<form action="login.php" method="post">
    							<div class="closeBtn"><i class="icofont icofont-close"></i></div>
    							<div class="h5">sign in</div>
    							<div class="userName"><input name="userName" placeholder="Username" type="text"></div>
    							<div class="password"><input name="password" placeholder="Password" type="password"></div>
    							<input type="submit" value="sign in">
    							<div class="h5">Forgot Passsword? <a href="#">Click here</a></div>
    							<div class="logBtm">
    								<div class="h5">Don’t have an account yet?</div>
    								<a href="#" class="signUp">Click here to sign up.</a>
    							</div>
    						</form>
    					</div>
    				</div>
    			</div>
    		</div>
    	</div>
    	<div class="headerBottomArea">
    		<div class="container">
    			<div class="row">
    				<div class="col-md-3 col-sm-3 col-xs-9">
    					<a href="index.htm" class="logo"><img src="img\logo.png" alt=""></a>
    				</div>
    				<div class="col-md-8 menuCol col-sm-9 col-xs-9">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
								<span class="sr-only"></span>
								<i class="fa fa-navicon"></i>
							</button>
						</div>
    					<nav id="navbar" class="collapse navbar-collapse">
    						<ul id="nav">
    							<li class="current-menu-item"><a href="index.htm">Home</a>
    							</li>
    							<li><a href="#">hosting</a>
									<ul class="sub-menu">
    									<li><a href="webHosting.htm">web hosting</a></li>
    									<li><a href="cloudHosting.htm">cloud hosting</a></li>
    									<li><a href="vpnHosting.htm">vpn hosting</a></li>
    									<li><a href="sharedHosting.htm">shared hosting</a></li>
									</ul>
    							</li>
    							<li><a href="domainSearch.htm">domain</a></li>
    							<li class="dropdown-megamenu"><a href="#">pages</a>
    								<ul class="mega-menu clearfix">
										<li class="mMenuCol">
											<ul class="menuRow">
												<li><a href="index-1.htm">homepage v1</a></li>
												<li><a href="index-2.htm">homepage v2</a></li>
											</ul>
											<ul class="menuRow">
												<li><a href="about.htm">about</a></li>
												<li><a href="domainSearch.htm">domain search</a></li>
												<li><a href="webHosting.htm">web hosting</a></li>
												<li><a href="cloudHosting.htm">cloud hosting</a></li>
												<li><a href="vpnHosting.htm">vpn hosting</a></li>
											</ul>
										</li>
   										<li class="mMenuCol">
   											<ul class="menuRow">
   												<li><a href="accountManage.htm">My account</a></li>
   												<li><a href="domainManage.htm">domain settings</a></li>
   												<li><a href="hostManage.htm">hosting settings</a></li>
   											</ul>
   											<ul class="menuRow">
   												<li><a href="testimonial.htm">testimonial</a></li>
   												<li><a href="faq.htm">faq</a></li>
   												<li><a href="support.htm">support</a></li>
   												<li><a href="contact.htm">contact</a></li>
   											</ul>
   										</li>
   										<li class="mMenuCol">
   											<ul class="menuRow">
   												<li><a href="cart.htm">cart</a></li>
   												<li><a href="checkout.htm">checkout</a></li>
   											</ul>
   											<ul class="menuRow">
   												<li><a href="blog.htm">blog</a></li>
   												<li><a href="single-blog.htm">single blog</a></li>
   											</ul>
   											<ul class="menuRow">
   												<li><a href="comingSoon.htm">coming soon</a></li>
   												<li><a href="404.htm">404</a></li>
   											</ul>
   										</li>
   										<li class="mMenuCol">
   											<div class="menuDiscount">
   												<div class="discountImg"><img src="img\icon\menu-img.png" alt=""></div>
   												<span>10% discount on</span>
   												<div class="h3">any hosting</div>
   												<a href="#">Try it now!</a>
   											</div>
   										</li>
    								</ul>
    							</li>
    							<li><a href="support.htm">Support</a></li>
    							<li><a href="#">Blog</a>
									<ul class="sub-menu">
    									<li><a href="blog.htm">Blog</a></li>
    									<li><a href="single-blog.htm">single blog</a></li>
									</ul>
    							</li>
    							<li><a href="contact.htm">Contact</a></li>
    						</ul>
    					</nav>
    				</div>
    				<div class="col-md-1 cartCol">
    					<a href="cart.htm" class="cart">
    						<span class="count">3</span>
    						<i class="icofont icofont-cart-alt"></i>
    					</a>
    				</div>
				</div>
    		</div>
    	</div>
		</div>
		</header>';
?>