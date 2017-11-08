
<!DOCTYPE html>
<html lang="en">
<head>
<title>MaFranchise</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Farming Company Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!--// bootstrap-css -->
<!-- css -->
<link rel="stylesheet" href="css/stylee1.css" type="text/css" media="all" />
<!--// css -->
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<!-- font -->
<link href="//fonts.googleapis.com/css?family=Righteous&subset=latin-ext" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700italic,700,400italic,300italic,300' rel='stylesheet' type='text/css'>
<!-- //font -->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/SmoothScroll.min.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
</head>
<body>
	<!-- header -->
	<div class="header" >
		<div class="container" >
			<nav class="navbar navbar-default">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
				  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>
					<div class="w3layouts-logo">
						<h1><a href="index.html">MaFranchise <span>Macarina</span></a></h1>
					</div>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
					<nav>
						<ul class="nav navbar-nav">
							<!-- <li class="active"><a href="index.html">Home</a></li> -->
							<li><a href="{{ url('/login') }}" class="hvr-sweep-to-bottom">Login</a></li>
							<li><a href="{{ url(config('laraadmin.adminRoute')) }}" class="hvr-sweep-to-bottom">Dashboard</a></li>
							<!-- <li><a href="#" class="dropdown-toggle hvr-sweep-to-bottom" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Codes<span class="caret"></span></a>
								<ul class="dropdown-menu">
									<li><a class="hvr-sweep-to-bottom" href="icons.html">Icons</a></li>
									<li><a class="hvr-sweep-to-bottom" href="typography.html">Typography</a></li>          
								</ul>
							</li>
							<li><a href="{{ url('/login1') }}" class="hvr-sweep-to-bottom">Mail Us</a></li> -->
						</ul>
					</nav>
				</div>
				<!-- /.navbar-collapse -->
			</nav>
		</div>
	</div>
	<!-- //header -->
	<!-- banner -->
	<div class="bannerr" style="background-image: url(images/m1.jpg)">
		<div class="container">
			<section class="slider">
					<div class="flexslider">
						<ul class="slides">
							<li>	
								<div class="banner_text">
									<h3>Welcome</h3>
									<div class="w3ls-line"> </div>
									<p>MaFranchise</p>
									<div class="w3-button">
										<a href="single.html" class="btn btn-1 btn-1b">Read More</a>
									</div>
								</div>
							</li>
							<li>	
								<div class="banner_text">
									<h3>Keep Calm and Eat Macarina</h3>
									<div class="w3ls-line"> </div>
									<p>MaFranchise</p>
									<div class="w3-button">
										<a href="single.html" class="btn btn-1 btn-1b">Read More</a>
									</div>
								</div>
							</li>
						</ul>
					</div>
			</section>
			<!-- flexSlider -->
			<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" property="" />
			<script defer src="js/jquery.flexslider.js"></script>
			<script type="text/javascript">
				$(window).load(function(){
					$('.flexslider').flexslider({
						animation: "slide",
						start: function(slider){
						$('body').removeClass('loading');
						}
					});
				});
			</script>
			<!-- //flexSlider -->
		</div>
	</div>
	<!-- //banner -->
	<!-- services -->
	<!-- <div class="services">
		<div class="container">
			<div class="services-main">
				<div class="services-heading">
					<h2>services</h2>
					<div class="agileits-line"> </div>
				</div>
				<div class="services-bottom">
					<div class="services-grid">
						<div class="col-md-6 services-grid-left">
							<div class="services-icon"><i class="fa fa-envira" aria-hidden="true"></i></div> 
							<div class="services-text">
								<h4>Nunc vitae temporg</h4>
								<p>Pellentesque non nibh ante. Cras hendrerit finibus eros eget elementum.</p>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="col-md-6 services-grid-right">
							<img src="images/3.jpg" alt="" />
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="services-grid">					
						<div class="col-md-6 services-grid-right ulta-grid">
							<img src="images/4.jpg" alt="" />
						</div>
						<div class="col-md-6 services-grid-left ulta-grid">
							<div class="services-icon"><i class="fa fa-magnet" aria-hidden="true"></i></div> 
							<div class="services-text">
								<h4>Lorem Ipsum</h4>
								<p>Pellentesque non nibh ante. Cras hendrerit finibus eros eget elementum.</p>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="services-grid">
						<div class="col-md-6 services-grid-left">
							<div class="services-icon"><i class="fa fa-cog" aria-hidden="true"></i></div> 
							<div class="services-text">
								<h4>Excepteur Sint</h4>
								<p>Pellentesque non nibh ante. Cras hendrerit finibus eros eget elementum.</p>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="col-md-6 services-grid-right">
							<img src="images/6.jpg" alt="" />
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div> -->
	<!--services -->
	<!-- services-bottom -->
	<!-- <div class="text-grid">
		<div class="container">
			<h4>Improve your Farming..!</h4>
			<p>Pellentesque non nibh ante. Cras hendrerit finibus eros eget elementum. Maecenas sed ultrices dui. Fusce id feugiat arcu. Vivamus sodales mauris sagittis sem tincidunt, vel pretium orci viverra. Nunc pretium, eros id aliquam cursus, tellus nisi gravida sapien, et eleifend ipsum erat eget nisl.</p>
		</div>
	</div> -->
	<!-- //services-bottom -->
	<!-- blog -->
<!-- 	<div class="blog">
		<div class="container">
			<div class="services-heading">
				<h3>Our Blog</h3>
				<div class="agileits-line"> </div>
			</div>
			<div class="agileinfo-blog-grids">
				<div class="col-md-4 wthree-blog">
					<div class="w3-agileits-blog">
						<div class="w3-agileits-blog-img">
							<a href="single.html"><img src="images/7.jpg" alt="" /></a>
						</div>
						<div class="w3-agileits-blog-text">
							<a href="single.html">Fusce nec quam vulputate</a>
							<p>Nunc vitae tempor dolor, sed euismod mauris. Vivamus ornare convallis tincidunt. Morbi orci leo, vulputate et aliquam nec, pulvinar sed nibh.</p>
						</div>
					</div>
				</div>
				<div class="col-md-4 wthree-blog">
					<div class="w3-agileits-blog">
						<div class="w3-agileits-blog-img">
							<a href="single.html"><img src="images/8.jpg" alt="" /></a>
						</div>
						<div class="w3-agileits-blog-text">
							<a href="single.html">Interdum et malesuada</a>
							<p>Nunc vitae tempor dolor, sed euismod mauris. Vivamus ornare convallis tincidunt. Morbi orci leo, vulputate et aliquam nec, pulvinar sed nibh.</p>
						</div>
					</div>
				</div>
				<div class="col-md-4 wthree-blog">
					<div class="w3-agileits-blog">
						<div class="w3-agileits-blog-img">
							<a href="single.html"><img src="images/9.jpg" alt="" /></a>
						</div>
						<div class="w3-agileits-blog-text">
							<a href="single.html">Vivamus ornare convallis</a>
							<p>Nunc vitae tempor dolor, sed euismod mauris. Vivamus ornare convallis tincidunt. Morbi orci leo, vulputate et aliquam nec, pulvinar sed nibh.</p>
						</div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div> -->
	<!-- //blog -->
	<!-- footer -->
	<div class="footer">
		<div class="container">
			<div class="agileinfo_footer_grids">
				<div class="col-md-4 agileinfo_footer_grid">
					<div class="agile-logo">
						<h4><a href="index.html">MaFranchise <span>Macarina</span></a></h4>
					</div>
					<!-- <p>kkkkk</p> -->
					<!-- <div class="agileinfo-social-grids">
						<ul>
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-rss"></i></a></li>
							<li><a href="#"><i class="fa fa-vk"></i></a></li>
						</ul>
					</div> -->
				</div>
				<div class="col-md-4 agileinfo_footer_grid">
					<h3>Contact Info</h3>
					<ul class="agileinfo_footer_grid_list">
						<li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>Jalan Sriwijaya XX No 11 <span>Jember</span></li>
						<li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a href="mailto:info@example.com">grahamacarina@gmail.com</a></li>
						<li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>+1234 567 567</li>
					</ul>
				</div>
				<!-- <div class="col-md-4 agileinfo_footer_grid">
					<h3>Navigation</h3>
					<ul class="agileinfo_footer_grid_nav">
						<li><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span><a href="index.html">Home</a></li>
						<li><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span><a href="about.html">Login Us</a></li>
						<li><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span><a href="gallery.html">Gallery</a></li>
						<li><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span><a href="typography.html">Typography</a></li>
						<li><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span><a href="icons.html">Icons</a></li>
						<li><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span><a href="mail.html">Mail Us</a></li>
					</ul>
				</div> -->
				<div class="clearfix"> </div>
			</div>
			<!-- <div class="w3agile_footer_copy">
				<p>&copy; 2017 Farming Company. All rights reserved | Design by <a href="http://w3layouts.com/">W3layouts</a></p>
			</div> -->
		</div>
	</div>
	<!-- //footer -->
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
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