<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Kaarigar Foundation</title>
	<link rel="icon" type="image/x-icon" href="images/fevicon.PNG">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
	<meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
	<meta name="author" content="FREEHTML5.CO" />
	

  <!-- 
	//////////////////////////////////////////////////////

	FREE HTML5 TEMPLATE 
	DESIGNED & DEVELOPED by FREEHTML5.CO
		
	Website: 		http://freehtml5.co/
	Email: 			info@freehtml5.co
	Twitter: 		http://twitter.com/fh5co
	Facebook: 		https://www.facebook.com/fh5co

	//////////////////////////////////////////////////////
	 -->

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">

	<!-- <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'> -->
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Superfish -->
	<link rel="stylesheet" href="css/superfish.css">

	<link rel="stylesheet" href="css/style.css">


	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
		<div id="fh5co-wrapper">
		<div id="fh5co-page">
		<div class="header-top">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-sm-6 text-left fh5co-link">
						<a href="{{route('contact.index')}}">Contact</a>
						<a href="{{route('home')}}">Sign-In</a>
					</div>
					<div class="col-md-6 col-sm-6 text-right fh5co-social">
						<a href="#" class="grow"><i class="icon-facebook2"></i></a>
						<a href="#" class="grow"><i class="icon-twitter2"></i></a>
						<a href="#" class="grow"><i class="icon-instagram2"></i></a>
					</div>
				</div>
			</div>
		</div>
		<header id="fh5co-header-section" class="sticky-banner">
			<div class="container">
				<div class="nav-header">
					<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle dark"><i></i></a>
						<a href="/"><img src="images/kaarigarlogo.png" height="75px" width="250px" alt=""></a>
					<!-- START #fh5co-menu-wrap -->
					<nav id="fh5co-menu-wrap" role="navigation">
						<ul class="sf-menu" id="fh5co-primary-menu">
							<li class="active">
								<a class="active" href="/">Home</a>
							</li>
							<li>
								<a href="#" class="fh5co-sub-ddown">Programs</a>
								<ul class="fh5co-sub-menu">
									<li><a href="{{route('programs.women')}}">Women Employment</a></li>
									<li><a href="{{route('programs.child')}}">Child Education</a></li>
									<li><a href="{{route('programs.disaster')}}">Natural Disaster</a></li>
									<li><a href="{{route('programs.parenting')}}">Proper Parenting</a></li>
								</ul>
							</li>
							<li>
								<a href="#" class="fh5co-sub-ddown">Get Involved</a>
								<ul class="fh5co-sub-menu">
									<li><a href="{{route('donate')}}">Donate</a></li>
									<li><a href="{{route('get_involved.campaign')}}">Campaign</a></li>
									<li><a href="#">Volunteer</a></li>
								</ul>
							</li>
							<li>
								<a href="#" class="fh5co-sub-ddown">Projects</a>
								 <ul class="fh5co-sub-menu">
									<li><a href="{{route('projects.ambagpathshala')}}">AmbagPathshaala</a></li>
									<li><a href="{{route('projects.sewingmachine')}}">Sewing Machine Course</a></li>
									<li><a href="{{route('projects.oxygenbank')}}">Oxygen Bank</a></li>
								    <li><a href="{{route('projects.zakatdistribution')}}">Zakat Distribution</a></li>
								    <li><a href="{{route('projects.ramadanproject')}}">The Ramadan Project</a></li>
								    <li><a href="{{route('projects.disastersnothers')}}">Disasters & Others</a></li>
								</ul>
							</li>
							<li><a href="{{route('about.index')}}">About</a></li>
							<li><a href="{{route('blog.index')}}">Blog</a></li>
							<li><a href="{{route('contact.index')}}">Contact</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</header>
		
		

		<div class="fh5co-hero">
			<div class="fh5co-overlay"></div>
			<div class="fh5co-cover text-center" data-stellar-background-ratio="0.5" style="background-image: url(images/kf2.jpeg);  filter: blur(2px);  -webkit-filter: blur(2px);"></div>
				<div class="desc animate-box">
					<h2 style="color: white"><strong>Donate</strong> for the <strong>Poor Children</strong></h2>
				
					<span><a class="btn btn-primary btn-lg" href="{{route('donate')}}">Donate Now</a></span>
				</div>
			

		</div>
		<!-- end:header-top -->
		{{-- <div id="fh5co-features">
			<div class="container">
				<div class="row">
					<div class="col-md-4">

						<div class="feature-left">
							<span class="icon">
								<i class="icon-profile-male"></i>
							</span>
							<div class="feature-copy">
								<h3>Become a volunteer</h3>
								<p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit.</p>
								<p><a href="#">Learn More</a></p>
							</div>
						</div>

					</div>

					<div class="col-md-4">
						<div class="feature-left">
							<span class="icon">
								<i class="icon-happy"></i>
							</span>
							<div class="feature-copy">
								<h3>Happy Giving</h3>
								<p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit.</p>
								<p><a href="#">Learn More</a></p>
							</div>
						</div>

					</div>
					<div class="col-md-4">
						<div class="feature-left">
							<span class="icon">
								<i class="icon-wallet"></i>
							</span>
							<div class="feature-copy">
								<h3>Donation</h3>
								<p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit.</p>
								<p><a href="#">Learn More</a></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div> --}}

		<div id="fh5co-feature-product" class="fh5co-section-gray">
			<div class="container">
				<div class="row">
					<div class="col-md-12 text-center heading-section">
						<h4 style="font-size:25px"><b>Be charitable and indulgent to everyone but yourself </b><br>--Joseph Joubert--</h4>
					</div>
				</div>

				<div class="row row-bottom-padded-md">
					<div class="col-md-12 text-center animate-box">
						<p><img src="images/a15.jpeg" alt="Free HTML5 Bootstrap Template" class="img-responsive"></p>
					</div>
					<div class="col-md-6 text-center animate-box">
						<p><img src="images/a16.jpeg" alt="Free HTML5 Bootstrap Template" class="img-responsive"></p>
					</div>
					<div class="col-md-6 text-center animate-box">
						<p><img src="images/a1.jpeg" alt="Free HTML5 Bootstrap Template" class="img-responsive"></p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4">
						<div class="feature-text">
							<h3>Love</h3>
							<p>Started off to chase a dream just for the sake of people who are needy, is a note where our love meets!</p>
						</div>
					</div>
					<div class="col-md-4">
						<div class="feature-text">
							<h3>Concern</h3>
							<p>Never to lose our hungriness to stand by the people, for the people.</p>
						</div>
					</div>
					<div class="col-md-4">
						<div class="feature-text">
							<h3>Goal</h3>
							<p>To ensure quality education for kids from all corners of the society, women empowerment,to remove unemployment, to be there where someone is calling for a help.</p>
						</div>
					</div>
				</div>

				
			</div>
		</div>

		
		<div id="fh5co-portfolio">
			<div class="container">

				<div class="row">
					<div class="col-md-6 col-md-offset-3 text-center heading-section animate-box">
						<h3>Our Gallery</h3>
						{{-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit est facilis maiores, perspiciatis accusamus asperiores sint consequuntur debitis.</p> --}}
					</div>
				</div>

				
				<div class="row row-bottom-padded-md">
					<div class="col-md-12">
						<ul id="fh5co-portfolio-list">

							<li class="two-third animate-box" data-animate-effect="fadeIn" style="background-image: url(images/a1.jpeg); ">
								<a href="#" class="color-3">
									<div class="case-studies-summary">
										<span>Give Love</span>
										<h2>Donation is caring</h2>
									</div>
								</a>
							</li>
						
							<li class="one-third animate-box" data-animate-effect="fadeIn" style="background-image: url(images/a2.jpeg); ">
								<a href="#" class="color-4">
									<div class="case-studies-summary">
										<span>Give Love</span>
										<h2>Donation is caring</h2>
									</div>
								</a>
							</li>

							<li class="one-third animate-box" data-animate-effect="fadeIn" style="background-image: url(images/a15.jpeg); "> 
								<a href="#" class="color-5">
									<div class="case-studies-summary">
										<span>Give Love</span>
										<h2>Donation is caring</h2>
									</div>
								</a>
							</li>
							<li class="two-third animate-box" data-animate-effect="fadeIn" style="background-image: url(images/cover_bg_3.jpeg); ">
								<a href="#" class="color-6">
									<div class="case-studies-summary">
										<span>Give Love</span>
										<h2>Donation is caring</h2>
									</div>
								</a>
							</li>
						</ul>		
					</div>
				</div>

				<div class="row">
					<div class="col-md-4 col-md-offset-4 text-center animate-box">
						<a href="#" class="btn btn-primary btn-lg">See Gallery</a>
					</div>
				</div>

				
			</div>
		</div>
		

		
		{{-- <div id="fh5co-content-section" class="fh5co-section-gray">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
						<h3>Our Philantrophist</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit est facilis maiores, perspiciatis accusamus asperiores sint consequuntur debitis.</p>
					</div>
				</div>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<div class="fh5co-testimonial text-center animate-box">
							<figure>
								<img src="images/person_1.jpg" alt="user">
							</figure>
							<blockquote>
								<p>&ldquo;Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.&rdquo;</p>
							</blockquote>
							<span>Jean Doe, XYZ Co.</span>
						</div>
					</div>
					<div class="col-md-4">
						<div class="fh5co-testimonial text-center animate-box">
							<figure>
								<img src="images/person_2.jpg" alt="user">
							</figure>
							<blockquote>
								<p>&ldquo;Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.&rdquo;</p>
							</blockquote>
							<span>John Doe, XYZ Co.</span>
						</div>
					</div>
					<div class="col-md-4">
						<div class="fh5co-testimonial text-center animate-box">
							<figure>
								<img src="images/person_3.jpg" alt="user">
							</figure>
							<blockquote>
								<p>&ldquo;Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.&rdquo;</p>
							</blockquote>
							<span>John Doe, XYZ Co.</span>
						</div>
					</div>
				</div>
			</div>
		</div> --}}
		<!-- fh5co-content-section -->

		<div id="fh5co-services-section">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
						<h3>Our Projects. Support Us</h3>
						{{-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit est facilis maiores, perspiciatis accusamus asperiores sint consequuntur debitis.</p> --}}
					</div>
				</div>
			</div>
			<div class="container">
				<div class="row text-center">
					<div class="containerxx col-md-4 col-sm-4">
					  <img src="images/a17.jpeg" height="350px" width="290px" alt="" />
						<div class="overlay" style="text-align: center">
							<h3 style="color: white;margin-top:20%;margin-right:25px"><b>Ambag Pathshaala</b></h3><br>
							<p style="color: white;margin-right:25px"><b>Ambag Pathshala is an institution we have established to serve the quality education for the Childs who are underprivileged.</b></p>
						</div>
					</div>
					<div class="containerxx col-md-4 col-sm-4">
						<img src="images/a1.jpeg" height="350px" width="290px" alt="" />
						<div class="overlay" style="text-align: center">
							<h3 style="color: white;margin-top:20%;margin-right:25px"><b>Sewing Machine Training Course</b></h3><br>
							<p style="color: white;margin-right:25px"><b>Aiming to creates woman employment as unemployment is one of the key threat for the nation.</b> </p>
						</div>
					</div>
					<div class="containerxx col-md-4 col-sm-4">
						<img src="images/a2.jpeg" height="350px" width="290px" alt="" />
						<div class="overlay" style="text-align: center">
							<h3 style="color: white;margin-top:20%;margin-right:25px"><b>Oxygen Bank </b></h3><br>
							<p style="color: white;margin-top:-10%;margin-right:25px"><b> At a very chaotic situation during the Covid pandemic, when even the hospitals were unable to manage enough Oxygens for the admitted patients, volunteers were on the move to ensure oxygen for peoples around Dhaka.</b> </p>
						</div>
					</div>
					<div class="containerxx col-md-4 col-sm-4">
						<img src="images/a3.jpeg" height="350px" width="290px" alt="" />
						<div class="overlay" style="text-align: center">
							<h3 style="color: white;margin-top:20%;margin-right:25px"><b>Zakat Distributions </b></h3><br>
							<p style="color: white;margin-top:0%;margin-right:25px"><b>From Collecting Zakat and distributed over 200 families to add more families into the list, Kaarigar Foundation set its goal.</b> </p>
						</div>
					</div>
					<div class="containerxx col-md-4 col-sm-4">
						<img src="images/a4.jpeg" height="350px" width="290px" alt="" />
						<div class="overlay" style="text-align: center">
							<h3 style="color: white;margin-top:20%;margin-right:25px"><b>Festival </b></h3><br>
							<p style="color: white;margin-top:0%;margin-right:25px"><b>At every holy festival from the year 2019, we distributed foods, cloths, toys amongst the kids who are underpriviledged.</b> </p>
						</div>
					</div>
				  </div>
				</div>  
		</div>

		<!-- END What we do -->


		<div id="fh5co-blog-section" class="fh5co-section-gray">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
						<h3>Recent From Blog</h3>
						{{-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit est facilis maiores, perspiciatis accusamus asperiores sint consequuntur debitis.</p> --}}
					</div>
				</div>
			</div>
			<div class="container">
				<div class="row row-bottom-padded-md">
					<div class="col-lg-4 col-md-4 col-sm-6">
						<div class="fh5co-blog animate-box">
							<a href="#"><img class="img-responsive" src="images/a5.jpeg" alt=""></a>
							<div class="blog-text">
								<div class="prod-title" style="text-align: center">
									<p style="color: white;  font-family: Garamond, serif;margin-top:10px"><b>Annual Result and prize giving ceremony of Ambag Pathshaala at 31st December.</b></p>
								</div>
							</div> 
						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-6">
						<div class="fh5co-blog animate-box">
							<a href="#"><img class="img-responsive" src="images/a6.jpeg" alt=""></a>
							<div class="blog-text">
								<div class="prod-title" style="text-align: center">
									<p style="color: white;  font-family: Garamond, serif;margin-top:10px"><b>Certificate distribution of 'Sewing Machine training course' at the late afternoon of the last day of 2021.</b></p>
								</div>
							</div> 
						</div>
					</div>
					<div class="clearfix visible-sm-block"></div>
					<div class="col-lg-4 col-md-4 col-sm-6">
						<div class="fh5co-blog animate-box">
							<a href="#"><img class="img-responsive" src="images/a7.jpeg" alt=""></a>
							<div class="blog-text">
								<div class="prod-title" style="text-align: center">
									<p style="color: white;  font-family: Garamond, serif;margin-top:10px"><b>The year started with a discussion session about proper parenting with the gurdians.</b></p>
								</div>
							</div> 
						</div>
					</div>
					<div class="clearfix visible-md-block"></div>
				</div>

				<div class="row">
					<div class="col-md-4 col-md-offset-4 text-center animate-box">
						<a href="{{route('blog.index')}}" class="btn btn-primary btn-lg">Our Blog</a>
					</div>
				</div>

			</div>
		</div>
		<!-- fh5co-blog-section -->
		<footer>
			<div id="footer">
				<div class="container">
					<div class="row">

					<div class="col-lg-3 col-md-6 footer-links">
						<h4 style="color: white"><b>Useful Links</b></h4>
						<ul class="fh5co-sub-menu">
						<li><a  style="color: white" href="#">Home</a></li>
						<li><a  style="color: white" href="#">About us</a></li>
						<li><a  style="color: white" href="#">Services</a></li>
						<li><a  style="color: white" href="#">Terms of service</a></li>
						<li><a  style="color: white" href="#">Privacy policy</a></li>
						</ul>
					</div>

					<div class="col-lg-3 col-md-6 footer-links">
						<h4 style="color: white"><b>Our Programs</b></h4>
						<ul class="fh5co-sub-menu">
						<li><a  style="color: white" href="#">Women Employment</a></li>
						<li><a  style="color: white" href="#">Child Education</a></li>
						<li><a  style="color: white" href="#">Natural Disaster</a></li>
						<li><a  style="color: white" href="#">Proper Parenting</a></li>
						</ul>
					</div>

					<div class="col-lg-3 col-md-6 footer-contact">
						<h4 style="color: white"><b>Contact Us</b></h4>
						<p>
							Address : Wasa Road, Paity Bottola, Demra, Dhaka - 1361 <br><br>
						<strong>Phone:</strong> +8801537207950<br>
						<strong>Email:</strong> Kaarigarorgbd.com<br>
						</p>

					</div>

					<div class="col-lg-3 col-md-6 footer-info">
						<h4 style="color: white"><b>About Us</b></h4>
						<p>Kaarigar Foundation - Started it's journey back to 2019. A group of young students from a private university started off the journey just for the sake of helping poor people prioritising children basically. Despite having a very small finance the foundation had been running the projects by their own and by donation sometimes. Now it has been successfully running some big projects tittled 'AAMBAG PATHSHALA, Sewing Machine Training project.</p>
						<div class="social-links mt-3">
						<a href="https://www.facebook.com/gtclbd" class="twitter"><i class="bx bxl-twitter"></i></a>
						<a href="https://www.facebook.com/gtclbd" class="facebook"><i class="bx bxl-facebook"></i></a>
						<a href="https://www.facebook.com/gtclbd" class="instagram"><i class="bx bxl-instagram"></i></a>
						<a href="https://www.facebook.com/gtclbd" class="linkedin"><i class="bx bxl-linkedin"></i></a>
						</div>
					</div>

					</div>
				</div>
			</div>
		</footer>
	

	</div>
	<!-- END fh5co-page -->

	</div>
	<!-- END fh5co-wrapper -->

	<!-- jQuery -->

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<script src="js/sticky.js"></script>

	<!-- Stellar -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Superfish -->
	<script src="js/hoverIntent.js"></script>
	<script src="js/superfish.js"></script>
	
	<!-- Main JS -->
	<script src="js/main.js"></script>

	<script>
		$(document).ready(function () {
			var scroll_pos = 0;
			$(window).scroll(function () {
				scroll_pos = $(this).scrollTop();
				if (scroll_pos > 210) {
					$("#fh5co-header-section").css('background-color', '#ffffff');
					$("#fh5co-menu-wrap .sf-menu a").css('color', '#000000');
					// console.log(scroll_pos);
				} else {
					$("#fh5co-header-section").css('background-color', 'transparent');
					$("#fh5co-menu-wrap .sf-menu a").css('color', '#ffffff');
				}
				
			});
		});
	</script>

	</body>
</html>

