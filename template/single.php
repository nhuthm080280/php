<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Fodder a Hotels And Restaurants Category Flat Bootstrap Responsive Website Template | Single :: w3layouts</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Fodder Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script src="js/jquery-1.11.1.min.js"></script>
<!-- //js -->
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Anton' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
</head>
	
<body>
<!-- banner-body -->
	<div class="banner-body">
		<div class="container">
			<!-- banner -->
				<div class="banner">
					<div class="col-md-3 banner-left">
						<ul class="menu">
							<li class="item1"><a href="#"><img class="arrow-img" src="images/menu.png" alt=""/></a>
								<ul class="cute">
									<li><a href="index.html">Home</a></li>
									<li><a href="services.html">Services</a></li>
									<li><a href="index.html">Menu</a></li>
									<li><a href="index.html">About Us</a></li>
									<li><a href="codes.html">Short Codes</a></li>
									<li><a href="blog.html">Blog</a></li>
									<li><a href="#contact" class="scroll">Contact</a></li>
								</ul>
							</li>
						</ul>
						<h2 class="ind1">Single Page</h2>
					</div>
					<div class="col-md-9 banner-right">
						<a href="index.html"><img src="images/logo.png" alt=" " /></a>
					</div>
					<div class="clearfix"> </div>
				</div>
					<!--initiate accordion-->
					<script type="text/javascript">
						$(function() {
							var menu_ul = $('.menu > li > ul'),
								   menu_a  = $('.menu > li > a');
							menu_ul.hide();
							menu_a.click(function(e) {
								e.preventDefault();
								if(!$(this).hasClass('active')) {
									menu_a.removeClass('active');
									menu_ul.filter(':visible').slideUp('normal');
									$(this).addClass('active').next().stop(true,true).slideDown('normal');
								} else {
									$(this).removeClass('active');
									$(this).next().stop(true,true).slideUp('normal');
								}
							});
						
						});
					</script>
			<!-- //banner -->
			<!-- services -->
				<div class="about services">
					<!-- single -->
					<div class="single">
						<h3>Nulla Quis lorum nisl tempus convallis quis ac lactus</h3>
						<div class="single-left">
							<p>Published on <span>November,2015</span></p>
							<img src="images/6-.jpg" alt=" " class="img-responsive" />
						</div>
						<div class="single-right">
							<h4>Curabitur aliquet quam id dui posuere blandit</h4>
							<p><span>There are many variations of passages of Lorem Ipsum available,
							but the majority have suffered alteration in some form, 
							by injected humour, or randomised words which don't look even slightly believable.
							If you are going to use a passage.
							Donec rutrum congue leo eget malesuada.Curabitur non nulla sit amet
							nisl tempus convallis quis ac lactus.Sed porttitor lactus nibh.Proin
							eget tortor risus.Nulla porttitor accumsan tincidunt.Nulla
							porttitoraccumsan tincidunt.
							Curabitur aliquet quam id dui posuere blandit.</span></p>
						</div>
						<div class="clearfix"> </div>
						<p class="tortor">There are many variations of passages of Lorem Ipsum available,
							but the majority have suffered alteration in some form, by injected humour,
							or randomised words which don't look even slightly believable. If you are going
							to use a passage.Nulla Quis lorum nisl tempus convallis quis ac lactus.Sed porttitorlactus nibh
							eget tortor risus.Nulla porttitor accumsan tincidunt.</p>
						<div class="footer-right single-footer">
							<ul>
								<li><a href="#" class="facebook"> </a></li>
								<li><a href="#" class="twitter"> </a></li>
								<li><a href="#" class="p"> </a></li>
								<li><a href="#" class="g"> </a></li>
							</ul>
						</div>
						<div class="tags-cate">
							<div class="cat-grid">
								<h3><span>C</span>ategories</h3>
								<ul>
									<li><a href="#">Donec rutrum curabitur</a></li>
									<li><a href="#">Sed porttitorlactus nibh</a></li>
									<li><a href="#">Curabitur aliquet quam id</a></li>
									<li><a href="#">Nulla toraccumsan tincidunt</a></li>
									<li><a href="#">which don't look even</a></li>
									<li><a href="#">Sed porttitorlactus nibh</a></li>
								</ul>
							</div>
							<div class="cat-grid">
								<h3><span>A</span>rchives</h3>
								<ul>
									<li><a href="#">Jan 24,2010.</a></li>
									<li><a href="#">Arl 15,2012.</a></li>
									<li><a href="#">Sep 24,2012.</a></li>
									<li><a href="#">May 24,2014.</a></li>
									<li><a href="#">Arl 15,2014.</a></li>
									<li><a href="#">November 24,2015.</a></li>
								</ul>
							</div>
							<div class="cat-grid">
								<h3><span>T</span>ags</h3>
								<div class="top-social-icons">
										<a href="#">Cards</a>
										<a href="#">Website</a>
										<a href="#">Icons</a>
									<div class="clearfix"> </div>
										<a href="#">Themeforest</a>
										<a href="#">Interfaces</a>
									<div class="clearfix"> </div>
										<a href="#">Inspiration</a>
									<div class="clearfix"> </div>
								</div>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="three-com">
							<h3>3 Comment <span>on</span> <label>Donec volutpat ligula non dapibus volutpat</label></h3>
							<div class="tom-grid">
								<div class="tom">
									<img src="images/co.png" alt=" " />
								</div>
								<div class="tom-right">
									<div class="Hardy">
										<h4>Tom Hardy</h4>
										<p><label>12 November 2015</label></p>
									</div>
									<div class="reply">
										<a href="#">Reply</a>
									</div>
									<div class="clearfix"> </div>
									<p class="lorem">There are many variations of passages of Lorem Ipsum available,
									but the majority have suffered alteration in some form, by injected humour, 
									or randomised words which don't.</p>
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="tom-grid humour">
								<div class="tom">
									<img src="images/co.png" alt=" " />
								</div>
								<div class="tom-right">
									<div class="Hardy">
										<h4>Prad Pitt</h4>
										<p><label>18 November 2015</label></p>
									</div>
									<div class="reply">
										<a href="#">Reply</a>
									</div>
									<div class="clearfix"> </div>
									<p class="lorem">There are many variations of passages of Lorem Ipsum available,
									but the majority have suffered alteration in some form, by injected humour, 
									or randomised words which don't.</p>
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="tom-grid">
								<div class="tom">
									<img src="images/co.png" alt=" " />
								</div>
								<div class="tom-right">
									<div class="Hardy">
										<h4>Tom Cruis</h4>
										<p><label>20 November 2015</label></p>
									</div>
									<div class="reply">
										<a href="#">Reply</a>
									</div>
									<div class="clearfix"> </div>
									<p class="lorem">There are many variations of passages of Lorem Ipsum available,
									but the majority have suffered alteration in some form, by injected humour, 
									or randomised words which don't.</p>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
						<div class="leave-comment">
							<h4>Leave your comment</h4>
							<p>Suspendisse tempor tellus sed nisl semper, quis condimentum turpis pharetra.</p>
							<form>
								<input type="text" placeholder="Name" required=" ">			           					   
								<input type="text" placeholder="Email" required=" ">
								<input type="text" placeholder="Your Website" required=" ">
								<textarea placeholder="Message" required=" "></textarea>
								<input type="submit" value="SEND">
								<div class="clearfix"> </div>
							</form>
						</div>
					</div>
				<!-- //single -->
				<!-- contact -->
					<div id="contact" class="contact ser">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2564.958900464012!2d36.23097800000001!3d49.993379999999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4127a0f009ab9f07%3A0xa21e10f67fa29ce!2sGeorgia+Education+Center!5e0!3m2!1sen!2sin!4v1436943860334" frameborder="0" style="border:0" allowfullscreen=""></iframe>
						<div class="map-color">
						</div>
						<div class="map-grids">
							<h3>Contact Us</h3>
							<div class="inp-form">
								<form>
									<textarea value="Message:" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message';}" required="">Message..</textarea>
									<input type="text" value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}" required="">
									<input type="email" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
									<input type="submit" value="Send">
								</form>
							</div>
							<h4>Newsletter</h4>
							<p>Enter your email and subscribe to our newsletter and never miss any updates</p>
							<div class="mail-sub">
								<form>
									<input type="email" value="Email Address" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email Address';}" required="">
									<input type="submit" value="">
									<div class="clearfix"> </div>
								</form>
							</div>
							<div class="footer">
								<div class="footer-left">
									<p>© 2016 Fodder. All rights reserved | Design by <a href="http://w3layouts.com">W3layouts.</a></p>
								</div>
								<div class="footer-right">
									<ul>
										<li><a href="#" class="facebook"> </a></li>
										<li><a href="#" class="twitter"> </a></li>
										<li><a href="#" class="p"> </a></li>
										<li><a href="#" class="g"> </a></li>
									</ul>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
					</div>
				<!-- //contact -->
				</div>
			<!-- //services -->
		</div>
	</div>
<!-- //banner-body -->
<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
<!-- //here ends scrolling icon -->
</body>
</html>