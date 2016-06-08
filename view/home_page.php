
<!DOCTYPE HTML>
<html>
<head>
<title>Portfolio Muhammad Rahmatullah</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Portfolio  Responsive web , Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="../view/css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="../view/js/jquery.min.js"></script>
<!-- Custom Theme files -->
<link href="../view/css/style.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<!---- start-smoth-scrolling---->
<script type="text/javascript" src="../view/js/move-top.js"></script>
<script type="text/javascript" src="../view/js/easing.js"></script>
<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
</script>
<!----webfonts--->
<link href='http://fonts.googleapis.com/css?family=Raleway:200,400,300,600,500,900,700,100,800' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Cookie' rel='stylesheet' type='text/css'>
<!---//webfonts--->
<!------ light-box-script ----->
<script src="../view/js/jquery.chocolat.js"></script>
<link rel="stylesheet" href="../view/css/chocolat.css" type="text/css" media="screen" charset="utf-8" />
<script type="text/javascript" charset="utf-8">
	$(function() {
		$('.about-grid a').Chocolat({linkImages:false});
	});
</script>
<!------ light-box-script ----->
</head>
<body>
	<!-- container -->
		<!-- header -->
		<div id="home" class="header">
			<div class="container">
				<!-- -->
				<div class="nav-icon">
					 <a href="#" class="right_bt" id="activator"><span> </span> </a>
				</div>
				 <div class="box" id="box">
					 <div class="box_content">
						<div class="box_content_center">
						 	<div class="form_content">
								<div class="menu_box_list">
									<ul>
										<li><a class="scroll" href="#home">home</a></li>
										<li><a class="scroll" href="#about">About</a></li>
										<li><a class="scroll" href="#services">Services</a></li>
										<li><a class="scroll" href="#port">portfolio</a></li>
										<li><a class="scroll" href="#blog">Blog</a></li>
										<li><a class="scroll" href="#contact">Contact</a></li>
										<div class="clear"> </div>
									</ul>
								</div>
								<a class="boxclose" id="boxclose"> <span> </span></a>
							</div>
						</div>
					</div>
				</div>
				<!-- script-for-box -->
				 <script type="text/javascript">
					var $ = jQuery.noConflict();
						$(function() {
							$('#activator').click(function(){
								$('#box').animate({'top':'0px'},500);
							});
							$('#boxclose').click(function(){
							$('#box').animate({'top':'-700px'},500);
							});
						});
						$(document).ready(function(){
						//Hide (Collapse) the toggle containers on load
						$(".toggle_container").hide();
						//Switch the "Open" and "Close" state per click then slide up/down (depending on open/close state)
						$(".trigger").click(function(){
							$(this).toggleClass("active").next().slideToggle("slow");
								return false; //Prevent the browser jump to the link anchor
						});

					});
				</script>
				<!-- script-for-box -->
				<!----->
				<!-- banner-info -->
				<div class="banner-info text-center">
					<img src="../view/images/pic_prop.jpg" style="width:370px;border-radius:370px;cursor:pointer;border:solid 15px;border-color:rgba(255,255,255,0.1);"class="img-responsive" alt=""/>
					<h1>Muhammad Rahmatullah</h1>
					<p>Love to Design and Develope 'Something'</p>
					<ul>
						<li><a href="../model/main.php?p=contact_page">Hire Me	</a></li>
						<li><a href="../model/main.php?p=contact_page">Follow Me</a></li>
					</ul>
				</div>
				<!-- banner-info -->
			</div>
		</div>
		<!-- /header -->
		<!-- about -->
		<div id="about" class="about">
			<div class="container">
				<!-- head-section -->
				<div class="head-section text-center">
					<h2>About Me</h2>
					<span></span>
				</div>
				<!-- head-section -->
				<!-- about-grids -->
				<div class="about-grids">
					<div class="col-md-6 about-left-grid">
						<h3>Muhammad Rahmatullah</h3>
						<span>Web Developer and UI/UX Designer </span>
						<p>Saya adalah salah seorang siswa di SMKN 1 Cimahi disaat waktu luang biasanya saya gunakan untuk membuat berbagai aplikasi baik yang berbasis website maupun mobile. selain itu juga saya sangat gemar mencoba hal-hal baru dan mengembangkan ide-ide </p>
						<p>Selain itu saya juga sangat senang berkecimpung di dunia yang berhubungan dengan Teknologi , sekarang saya menjadi freelance di sampulcreativ dan Web Developer di SEB11</p>
					</div>
					<div class="col-md-6 about-right-grid">
						<a class="popup-with-zoom-anim" href="#small-dialog"><img src="../view/images/fb_pic.jpg" title="name" /></a>
					</div>
				</div>
				<!-- about-grids -->
			</div>
		</div>
		<!-- about -->
		<!---pop-up-box---->
				<script type="text/javascript" src="../view/js/modernizr.custom.min.js"></script>
				<link href="../view/css/popuo-box.css" rel="stylesheet" type="text/css" media="all"/>
				<script src="../view/js/jquery.magnific-popup.js" type="text/javascript"></script>
				<!---//pop-up-box---->
				<div id="small-dialog" class="mfp-hide">
					<iframe src="//player.vimeo.com/video/38584262"> </iframe>
				</div>
				 <script>
						$(document).ready(function() {
						$('.popup-with-zoom-anim').magnificPopup({
							type: 'inline',
							fixedContentPos: false,
							fixedBgPos: true,
							overflowY: 'auto',
							closeBtnInside: true,
							preloader: false,
							midClick: true,
							removalDelay: 300,
							mainClass: 'my-mfp-zoom-in'
						});

						});
				</script>
			<!----//fea-video---->
		<!-- services -->
		<div id="services" class="services">
			<!-- head-section -->
				<div class="head-section service-head text-center">
					<h2>My Services</h2>
					<span></span>
				</div>
				<!-- head-section -->
				<!-- services-grids -->

				<div class="service-grids text-center">
					<div class="container">
						<div class="col-md-4">
							<div class="service-grid t-service-grid">
								<span class="s-cion1"> </span>
								<h3>WEB DEVELOPMENT</h3>
									<p>membuat aplikasi berbasis website baik menggunakan framework ataupun native php</p>
							</div>
						</div>
						<div class="col-md-4">
							<div class="service-grid t-service-grid">
								<span class="s-cion2"> </span>
								<h3>PRODUCT DESIGN</h3>
								<p>mendesain semua jenis produk seperti desain poster , desain banner dsb</p>
							</div>
						</div>
						<div class="col-md-4">
							<div class="service-grid t-service-grid">
								<span class="s-cion3"> </span>
								<h3>WEB DESIGN</h3>
								<p>Mendesign website baik mendesign website dari awal maupun melakukan re-design website yang telah ada</p>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
				<!-- services-grids -->
		</div>
		<!-- services -->
		<!-- portfolio -->
		<div id="port" class="portfolio">
			<div class="container">
				<!-- head-section -->
				<div class="head-section text-center">
					<h2>Portfolio</h2>
					<span></span>
				</div>
				<!-- /head-section -->
				<!-- portfolio-grids -->

				<div class="portfolio-grids">
						<?php get_port_data();?>
				</div>
				<!-- portfolio-grids -->
			</div>
		</div>
		<!-- /portfolio -->
		<!-- blog -->
		<div id="blog" class="blog">
			<div class="container">
				<!-- head-section -->
				<div class="head-section text-center">
					<h2>My Blog</h2>
					<span> </span>
				</div>
				<!-- /head-section -->
				<!-- blog-articals -->
				<div class="blog-articals">

				<?php get_blog_data(); ?>

					<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>
				<!-- blog-articals -->
					<!-- <p class="more-articals text-center">Check Out My <a href="#">Blog</a> And Subscribe To Get All The Updates</p> -->
			</div>
		</div>
		<!-- /blog -->
		<!-- projects -->
		<div class="projects">
			<div class="container">
				<div class="project-grids">
					<div class="cycle">
						<span> </span>
					</div>
					<div class="project-grid total-project">
						<p>3</p>
						<p>Projects</p>
						<span> <i class="p-icon"> </i></span>
					</div>
					<div class="project-grid clientsgrid">
						<div>
						<p>2	</p>
						<p>Clients</p>
						</div>
						<span> <i class="p-icon"> </i></span>
					</div>
					<div class="project-grid people-grid">
						<div>
						<p>100%</p>
						<p>Satisfaction</p>
						</div>
						<span> <i class="p-icon"> </i></span>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
		<!-- projects -->
		<!-- catch-on -->
		<div id="contact" class="catch-on text-center">
			<p>Want To Discuss Any Creative Projct ? <a class="catch" href="../model/main.php?p=contact_page">Contact Me</a></p>
		</div>
		<!-- /catch-on -->
		<!-- footer -->
		<div class="container">
		<div class="footer">
				<div class="footer-left">

				</div>
				<div class="footer-right">
					<ul>
						<li><a href="#"><span class="face"> </span></a></li>
						<li><a href="#"><span class="twit"> </span></a></li>
						<li><a href="#"><span class="dri"> </span></a></li>
						<li><a href="#"><span class="tech"> </span></a></li>
					</ul>
				</div>
				<div class="clearfix"> </div>
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
		<!-- /footer -->
	<!-- /container -->
</body>
</html>
