<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Welcome to Scorpio Project</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<!---- start-smoth-scrolling---->
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
<!---- start-smoth-scrolling---->
<!-- Custom Theme files -->
<link href="css/theme-style.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
</script>
<!----font-Awesome----->
<link rel="stylesheet" href="fonts/css/font-awesome.min.css">
<!----font-Awesome----->
<!----webfonts---->
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Droid+Serif:400,700' rel='stylesheet' type='text/css'>
<!----//webfonts---->
<!----start-top-nav-script---->
		<script>
			$(function() {
				var pull 		= $('#pull');
					menu 		= $('nav ul');
					menuHeight	= menu.height();
				$(pull).on('click', function(e) {
					e.preventDefault();
					menu.slideToggle();
				});
				$(window).resize(function(){
	        		var w = $(window).width();
	        		if(w > 320 && menu.is(':hidden')) {
	        			menu.removeAttr('style');
	        		}
	    		});
			});
		</script>
		<!----//End-top-nav-script---->
</head>
<body>
		<!----start-container---->
			<!----start-header---->
		<div id="home" class="header">
			<div class="container">
				<!---- start-logo---->
				<div class="logo">
					<a href="#"><img src="images/Scorpio.png" title="Scorpio" /></a>
				</div>
				<!---- //End-logo---->
				<!----start-top-nav---->
				 <nav class="top-nav">
					<ul class="top-nav">
						<li class="active"><a href="/home">Dashboard</a></li>
						<li class="page-scroll"><a href="#fea" class="scroll">Values</a></li>
						<li class="page-scroll"><a href="#port" class="scroll">Members</a></li>
						<li class="page-scroll"><a href="#test" class="scroll">Leader</a></li>
					</ul>
					<a href="#" id="pull"><img src="images/nav-icon.png" title="menu" /></a>
				</nav>
				<div class="clearfix"> </div>
				<div class="slide-text text-center">
					<h1>Share your knowledge, speed your success</h1>
					<span>Happy learning !</span>
					<a class="slide-btn" href="/auth/login">Login here</a>
				</div>
				<!----//End-top-nav---->
			</div>
		</div>
		<!----//End-header---->
		<!----start-feartures----->
		<div id="fea" class="features">
			<div class="container">
				<div class="head text-center">
					<h3><span> </span> Our Core Values</h3>
					<p>These are 4 core values of every Scorpio project members.</p>
					<p>We are glad that you are one of us</p>
				</div>
				<!---- start-features-grids---->
				<div class="features-grids text-center">
					<div class="col-md-3 features-grid">
						<span class="fea-icon1"><i class="fa fa-star"> </i> </span>
						<h3><a href="#">Quality mindset</a></h3>
						<p>We do every single simple best thing to bring the best quality product to customer </p>
					</div>
					<div class="col-md-3 features-grid">
						<span class="fea-icon1"><i class="fa fa-thumbs-up"> </i> </span>
						<h3><a href="#">Helping each other</a></h3>
						<p>Job cannot be done by individual will be supported by project team </p>
					</div>
					<div class="col-md-3 features-grid">
						<span class="fea-icon1"><i class="fa fa-tachometer"> </i> </span>
						<h3><a href="#">Learning spirit</a></h3>
						<p>We are always eager to learn, willing to share. We are and we will always be</p>
					</div>
					<div class="col-md-3 features-grid">
						<span class="fea-icon1"><i class="fa fa-mobile"> </i> </span>
						<h3><a href="#">Project culture</a></h3>
						<p>We are friendly, funny, and we trust every project member, regardless birthplace or level of knowledge</p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<!---- //End-features-grids---->
			</div>
		</div>
		<!----//End-feartures----->
		<!----start-portfolio----->
		<div id="port" class="portfolio portfolio-box">
				<div class="head text-center">
					<h3><span> </span> Project Members</h3>
					<p>Scorpio project members (from 2/2013 up to current)</p>
				</div>
				<!----start-portfolio---->
               <div id="port" class="portfolio-main">
	        	<!---- start-portfolio-script----->
					<script type="text/javascript" src="js/jquery.mixitup.min.js"></script>
					<script type="text/javascript">
						$(function () {
							var filterList = {
								init: function () {
								
									// MixItUp plugin
									// http://mixitup.io
									$('#portfoliolist').mixitup({
										targetSelector: '.portfolio',
										filterSelector: '.filter',
										effects: ['fade'],
										easing: 'snap',
										// call the hover effect
										onMixEnd: filterList.hoverEffect()
									});
								},
								hoverEffect: function () {
									// Simple parallax effect
									$('#portfoliolist .portfolio').hover(
										function () {
											$(this).find('.label').stop().animate({bottom: 0}, 200, 'easeOutQuad');
											$(this).find('img').stop().animate({top: -30}, 500, 'easeOutQuad');				
										},
										function () {
											$(this).find('.label').stop().animate({bottom: -40}, 200, 'easeInQuad');
											$(this).find('img').stop().animate({top: 0}, 300, 'easeOutQuad');								
										}		
									);				
								
								}
					
							};
							// Run the show!
							filterList.init();
						});	
					</script>
					<!----//End-portfolio-script----->
					<ul id="filters" class="clearfix">
						<li><span class="filter active" data-filter="current">Current</span></li>
						<li><span class="filter" data-filter="current out">All time</span></li>
					</ul>
					<div id="portfoliolist">
					<div class="portfolio current mix_all" data-cat="current" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper">	
							<div class="port-grid">
								<div class="port-grid-text">
									<p>//DuongVX</p>
									<label class="arrow-icon1"> </label>
								</div>
								<div class="port-grid-pic block last">
									<a href="#" class="b-link-stripe b-animate-go  thickbox">
								     <img src="images/DuongVX.jpg" /><div class="b-wrapper">
								  	</div></a>
								</div>
								<div class="clearfix"> </div>
							</div>	
		                </div>
					</div>
					<div class="portfolio current mix_all" data-cat="current" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper">		
							<div class="port-grid">
								<div class="port-grid-text port-grid-text-c">
									<p>//QuangNH2</p>
									<label class="arrow-icon1 arrow-icon1-l"> </label>
								</div>
								<div class="port-grid-pic block last">
									<a href="#" class="b-link-stripe b-animate-go  thickbox">
								     <img src="images/QuangNH2.jpg" /><div class="b-wrapper">
								  	</div></a>
								</div>
								<div class="clearfix"> </div>
							</div>	
		                </div>
					</div>		
					<div class="portfolio current mix_all" data-cat="current" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper">		
							<div class="port-grid">
								<div class="port-grid-text port-grid-text-c">
									<p>//LanBTH2</p>
									<label class="arrow-icon1 arrow-icon1-l"> </label>
								</div>
								<div class="port-grid-pic block last">
									<a href="#" class="b-link-stripe b-animate-go  thickbox">
								     <img src="images/LanBTH2.jpg" /><div class="b-wrapper">
								  	</div></a>
								</div>
								<div class="clearfix"> </div>
							</div>	
		                </div>
					</div>				
					<div class="portfolio current mix_all" data-cat="current" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper">		
							<div class="port-grid">
								<div class="port-grid-pic block last">
									<a href="#" class="b-link-stripe b-animate-go  thickbox">
								     <img src="images/HoaMT.jpg" /><div class="b-wrapper">
								  	</div></a>
								</div>
								<div class="port-grid-text port-grid-text-c">
									<p>//HoaMT</p>
									<label class="arrow-icon1 arrow-icon1-r"> </label>
								</div>
								<div class="clearfix"> </div>
							</div>	
		                </div>
					</div>	
					<div class="portfolio current mix_all" data-cat="current" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper">		
							<div class="port-grid">
								<div class="port-grid-pic block last">
									<a href="#" class="b-link-stripe b-animate-go  thickbox">
								     <img src="images/DanNV.jpg" /><div class="b-wrapper">
								  	</div></a>
								</div>
								<div class="port-grid-text port-grid-text-c">
									<p>//DanNV</p>
									<label class="arrow-icon1  arrow-icon1-r"> </label>
								</div>
								<div class="clearfix"> </div>
							</div>	
		                </div>
					</div>			
					<div class="portfolio current mix_all" data-cat="current" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper">		
							<div class="port-grid">
								<div class="port-grid-pic block last">
									<a href="#" class="b-link-stripe b-animate-go  thickbox">
								     <img src="images/DuongDV3.jpg" /><div class="b-wrapper">
								  	</div></a>
								</div>
								<div class="port-grid-text port-grid-text-c">
									<p>//DuongDV3</p>
									<label class="arrow-icon1  arrow-icon1-r"> </label>
								</div>
								<div class="clearfix"> </div>
							</div>	
		                </div>
					</div>
					<div class="clearfix"> </div>
				</div>
		</div>
		</div>
		<div class="clearfix"> </div>
		<!----//End-portfolio----->
		<!----start-test-monials---->
		<div  id="test" class="testmonials">
			<div class="container">
				<div class="head text-center">
						<h3><span> </span> Leader messages</h3>
						<p>Messages from BUL, VBUL and SM </p>
				</div>
			<!----start-testmonial-time-line---->
			<div class="test-monial-time-line">
				<div class="col-md-6 test-monial-time-line-left">
					<div class="test-monial-time-line-grid test-monial-time-line-grid-l1">
						<div class="col-md-9 test-monial-time-line-left-text">
							<p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a.</p>
						</div>
						<div class="col-md-3 test-monial-time-line-left-pic">
							<img src="images/pic1.jpg" title="name" />
							<a href="#">TuanLM1</a>
						</div>
						<span class="grid-point"> </span>
					</div>
				</div>
				<div class="col-md-6 test-monial-time-line-right">
					<div class="test-monial-time-line-grid test-monial-time-line-grid-r1">
						<div class="col-md-3 test-monial-time-line-left-pic">
							<img src="images/pic2.png" title="name" />
							<a href="#">DatVT</a>
						</div>
						<div class="col-md-9 test-monial-time-line-left-text">
							<p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a.</p>
						</div>
						<span class="grid-point grid-point1"> </span>
					</div>
					<div class="test-monial-time-line-grid test-monial-time-line-grid-r2">
						<div class="col-md-3 test-monial-time-line-left-pic">
							<img src="images/pic2.png" title="name" />
							<a href="#">NgocNT</a>
						</div>
						<div class="col-md-9 test-monial-time-line-left-text">
							<p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a.</p>
						</div>
						<span class="grid-point grid-point1"> </span>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="test-monial-timeline-connector">
					<span> </span>
				</div>
				<div class="clearfix"> </div>
				<a class="more-testmonial-time-line" href="#"> <span>More</span></a>
			</div>
			</div>
		</div>
		<div class="clearfix"> </div>
			<!----//End-testmonial-time-line---->
		<!----start-footer---->
		<div class="footer">
			<div class="container">
				<div class="footer-left">
					<a href="#"><img src="images/footer-logo.png" title="mabur" /></a>
					<p>Template by <a href="http://w3layouts.com/">W3layouts</a></p>
					<p>Copyrighted by <a href="#">Scorpio Project</a>, 2013- {{ date('Y') }}</p>
				</div>
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
				<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
			</div>
		</div>
		<!----//End-footer---->
		<!----//End-container---->
	</body>
</html>

