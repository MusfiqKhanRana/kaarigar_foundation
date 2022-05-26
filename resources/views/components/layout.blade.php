<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Kaarigar Foundation</title>
	<link rel="icon" type="image/x-icon" href="{{asset('images/fevicon.PNG')}}">
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
	<link rel="stylesheet" href="{{asset('css/animate.css')}}">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="{{asset('css/icomoon.css')}}">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
	<!-- Superfish -->
	<link rel="stylesheet" href="{{asset('css/superfish.css')}}">

	<link rel="stylesheet" href="{{asset('css/style.css')}}">


	<!-- Modernizr JS -->
	<script src="{{asset('js/modernizr-2.6.2.min.js')}}"></script>
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
						<a href="https://www.facebook.com/kaarigarfoundation/" class="grow"><i class="icon-facebook2"></i></a>
						<a href="https://youtube.com/channel/UCmILcPd7RWvo9UR1m-Hj2Bw" class="grow"><i class="icon-youtube2"></i></a>
						<a href="#" class="grow"><i class="icon-instagram2"></i></a>
					</div>
				</div>
			</div>
		</div>
		<header id="fh5co-header-section" class="sticky-banner">
			<div class="container">
				<div class="nav-header">
					<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle dark"><i></i></a>
						<a href="/"><img src="{{asset('images/kaarigarlogo.png')}}" height="75px" width="250px" alt=""></a>
					<!-- START #fh5co-menu-wrap -->
					<nav id="fh5co-menu-wrap" role="navigation">
						<ul class="sf-menu" id="fh5co-primary-menu">
							<li class="{{ (request()->is('/')) ? 'active' : '' }}">
								<a class="{{ (request()->is('/')) ? 'active' : '' }}" href="/">Home</a>
							</li>
							<li class="@if( request()->path() == 'women' || request()->path() == 'child'|| request()->path() == 'disaster'|| request()->path() == 'parenting' )) active @endif">
								<a href="#" class="fh5co-sub-ddown @if( request()->path() == 'women' || request()->path() == 'child'|| request()->path() == 'disaster'|| request()->path() == 'parenting' )) active @endif">Programs</a>
								<ul class="fh5co-sub-menu">
									<li class="{{ (request()->is('women')) ? 'active' : '' }}"><a class="{{ (request()->is('women')) ? 'active' : '' }}" href="{{route('programs.women')}}">Women Employment</a></li>
									<li class="{{ (request()->is('child')) ? 'active' : '' }}"><a class="{{ (request()->is('child')) ? 'active' : '' }}" href="{{route('programs.child')}}">Child Education</a></li>
									<li class="{{ (request()->is('disaster')) ? 'active' : '' }}"><a class="{{ (request()->is('disaster')) ? 'active' : '' }}" href="{{route('programs.disaster')}}">Natural Disaster</a></li>
									<li class="{{ (request()->is('parenting')) ? 'active' : '' }}"><a class="{{ (request()->is('parenting')) ? 'active' : '' }}" href="{{route('programs.parenting')}}">Proper Parenting</a></li>
								</ul>
							</li>
							<li class="@if( request()->path() == 'donate' || request()->path() == 'campaign' )) active @endif">
								<a href="#" class="fh5co-sub-ddown @if( request()->path() == 'Donate' || request()->path() == 'campaign' )) active @endif">Get Involved</a>
								<ul class="fh5co-sub-menu">
									<li class="{{ (request()->is('Donate')) ? 'active' : '' }}"><a class="{{ (request()->is('Donate')) ? 'active' : '' }}" href="{{route('donate')}}">Donate</a></li>
									<li class="{{ (request()->is('campaign')) ? 'active' : '' }}"><a class="{{ (request()->is('campaign')) ? 'active' : '' }}" href="{{route('get_involved.campaign')}}">Campaign</a></li>
									<li class="#"><a>Volunteer</a></li>
								</ul>
							</li>
							<li class="@if( request()->path() == 'ambagpathshala' || request()->path() == 'sewingmachine' || request()->path() == 'oxygenbank' || request()->path() == 'zakatdistribution' || request()->path() == 'ramadanproject' || request()->path() == 'disastersnothers' ) active @endif">
								<a href="#" class="fh5co-sub-ddown @if( request()->path() == 'ambagpathshala' || request()->path() == 'sewingmachine' || request()->path() == 'oxygenbank' || request()->path() == 'zakatdistribution' || request()->path() == 'ramadanproject' || request()->path() == 'disastersnothers' ) active @endif">Projects</a>
								 <ul class="fh5co-sub-menu">
								 	<li class="@if( request()->path() == 'ambagpathshala') active @endif"><a href="{{route('projects.ambagpathshala')}}">AmbagPathshaala</a></li>
								 	<li class="@if(request()->path() == 'sewingmachine' ) active @endif"><a href="{{route('projects.sewingmachine')}}">Sewing Machine Course</a></li>
								 	<li class="@if(request()->path() == 'oxygenbank' ) active @endif"><a href="{{route('projects.oxygenbank')}}">Oxygen Bank</a></li>
									<li class="@if(request()->path() == 'zakatdistribution' ) active @endif"><a href="{{route('projects.zakatdistribution')}}">Zakat Distribution</a></li>
									<li class="@if(request()->path() == 'ramadanproject' ) active @endif"><a href="{{route('projects.ramadanproject')}}">The Ramadan Project</a></li>
									<li class="@if(request()->path() == 'disastersnothers' ) active @endif"><a href="{{route('projects.disastersnothers')}}">Disasters & Others</a></li>
								</ul>
							</li>
							<li class="@if(request()->path() == 'about' ) active @endif"><a class="@if(request()->path() == 'about' ) active @endif" href="{{route('about.index')}}">About</a></li>
							<li class="@if(request()->path() == 'blog' ) active @endif"><a class="@if(request()->path() == 'blog' ) active @endif" href="{{route('blog.index')}}">Blog</a></li>
							<li class="@if(request()->path() == 'contact' ) active @endif"><a class="@if(request()->path() == 'contact' ) active @endif" href="{{route('contact.index')}}">Contact</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</header>
        @yield('content')
        <footer>
			<div id="footer">
				<div class="container">
					<div class="row">

					<div class="col-lg-3 col-md-6 footer-links">
						<h4 style="color: white"><b>Useful Links</b></h4>
						<ul class="footer_ele">
						<li><a  style="color: white" href="/">Home</a></li>
						<li><a  style="color: white" href="{{route('about.index')}}">About us</a></li>
						<li><a  style="color: white" href="{{route('blog.index')}}">Services</a></li>
						{{-- <li><a  style="color: white" href="#">Terms of service</a></li>
						<li><a  style="color: white" href="#">Privacy policy</a></li> --}}
						</ul>
					</div>

					<div class="col-lg-3 col-md-6 footer-links">
						<h4 style="color: white"><b>Our Programs</b></h4>
						<ul class="footer_ele">
						<li><a  style="color: white" href="{{route('programs.women')}}">Women Employment</a></li>
						<li><a  style="color: white" href="{{route('programs.child')}}">Child Education</a></li>
						<li><a  style="color: white" href="{{route('programs.disaster')}}">Natural Disaster</a></li>
						<li><a  style="color: white" href="{{route('programs.parenting')}}">Proper Parenting</a></li>
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
	<script src="{{asset('js/jquery.min.js')}}"></script>
	<!-- jQuery Easing -->
	<script src="{{asset('js/jquery.easing.1.3.js')}}"></script>
	<!-- Bootstrap -->
	<script src="{{asset('js/bootstrap.min.js')}}"></script>
	<!-- Waypoints -->
	<script src="{{asset('js/jquery.waypoints.min.js')}}"></script>
	<script src="{{asset('js/sticky.js')}}"></script>

	<!-- Stellar -->
	<script src="{{asset('js/jquery.stellar.min.js')}}"></script>
	<!-- Superfish -->
	<script src="{{asset('js/hoverIntent.js')}}"></script>
	<script src="{{asset('js/superfish.js')}}"></script>
	
	<!-- Main JS -->
	<script src="{{asset('js/main.js')}}"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.2/jspdf.debug.js"></script>
	@yield('script')
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
			var doc = new jsPDF();
				var specialElementHandlers = {
					'.editor': function (element, renderer) {
						return true;
					}
				};

				$('.btn_pdf').click(function () {
					console.log('good');
					doc.fromHTML($('.editor').html(), 15, 15, {
						'width': 170,
							'elementHandlers': specialElementHandlers
					});
					doc.save('kaarigar-foundation-donation-info.pdf');
				});
		});
	</script>

	</body>
</html>

