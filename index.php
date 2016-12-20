<?php
// Initialize the session.
// If you are using session_name("something"), don't forget it now!
session_start();

// Unset all of the session variables.
$_SESSION = array();

// If it's desired to kill the session, also delete the session cookie.
// Note: This will destroy the session, and not just the session data!
if ( ini_get( "session.use_cookies" ) ) {
	$params = session_get_cookie_params();
	setcookie( session_name(), '', time() - 42000,
		$params[ "path" ], $params[ "domain" ],
		$params[ "secure" ], $params[ "httponly" ]
	);
}

// Finally, destroy the session.
session_destroy();

//$db = new mysqli( 'sql202.rf.gd', 'rfgd_19176149', 'nihanth007', 'rfgd_19176149_registrations' );
//$sql = 'SELECT COUNT(*) FROM entry';
//$result = $db->query( $sql );
//$temp = $result->fetch_row();
//$count = $temp[ 0 ];
//$db->close();

?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>CSI State Level Convention</title>
	<link rel="stylesheet" href="Content/animate.min.css"/>
	<link rel="stylesheet" href="Content/font-awesome.min.css"/>
	<link rel="stylesheet" href="Content/themes/base/jquery-ui.min.css"/>
	<link rel="stylesheet" href="Content/bootstrap.min.css"/>
	<link rel="stylesheet" href="Content/w3.css"/>
	<link rel="stylesheet" href="Content/reset.css"/>
	<link rel="stylesheet" href="Content/style.css"/>
	<link href="https://fonts.googleapis.com/css?family=Rancho" rel="stylesheet">
	<link rel="stylesheet" href="Content/timeTo.css"/>
	<script src="Scripts/jquery-3.1.1.min.js"></script>
	<script src="Scripts/jquery-ui-1.12.1.min.js"></script>
	<script src="Scripts/main.js"></script>
	<script src="Scripts/tether.min.js"></script>
	<script src="Scripts/bootstrap.min.js"></script>
	<script src="Scripts/jquery.lettering.js"></script>
	<script src="Scripts/jquery.textillate.js"></script>
	<script src="Scripts/jquery.time-to.min.js"></script>

	<style>
		.overlay {
			background: rgba(0, 0, 0, 0.41);
			overflow: hidden;
			height: 100%;
			z-index: 2;
		}
		
		.jumbotron {
			background: url("images/giet.png");
			background-size: cover;
			margin-bottom: 0;
			text-shadow: black 0.6em 0.6em 0.6em;
			height: auto;
		}
		
		body {
			background-image: url('images/giet.png');
			background-repeat: no-repeat;
		}
		
		h3 {
			font-size: 40px;
			font-family: 'Rancho', cursive;
		}
	</style>
</head>

<body>
	<a href="#cd-nav" class="cd-nav-trigger">
        Menu<span></span>
    </a>

	<nav class="cd-nav-container" id="cd-nav">
		<header>
			<h1> Navigation </h1>
			<a href="#0" class="cd-close-nav">Close</a>
		</header>
		<ul class="cd-nav">
			<li class="cd-selected" data-menu="index">
				<a href="index.html" onclick="window.location.href = 'index.php';">
                    <span>
                        <svg class="nc-icon outline" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="64px" height="64px" viewBox="0 0 64 64"><g transform="translate(0, 0)"> <polyline data-cap="butt" fill="none" stroke="#9e85d0" stroke-width="2" stroke-miterlimit="10" points="10,24.9 10,60 26,60 26,44 38,44 38,60 54,60 54,24.9 " stroke-linejoin="square" stroke-linecap="butt"></polyline> <polyline data-color="color-2" fill="none" stroke="#9e85d0" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" points=" 4,30 32,6 60,30 " stroke-linejoin="square"></polyline> <rect data-color="color-2" x="26" y="24" fill="none" stroke="#9e85d0" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" width="12" height="10" stroke-linejoin="square"></rect> </g></svg>
                    </span>
                    <em>Home</em>
                </a>
			</li>
			<li data-menu="projects">
				<a href="venue.php" onclick="window.location.href = 'venue.html';">
                    <span>
                        <svg class="nc-icon outline" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="64px" height="64px" viewBox="0 0 64 64"> <g transform="translate(0, 0)"> <polyline data-color="color-2" fill="none" stroke="#9e85d0" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" points=" 22,12 22,4 42,4 42,12 " stroke-linejoin="square"></polyline> <line fill="none" stroke="#9e85d0" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" x1="44" y1="44" x2="20" y2="44" stroke-linejoin="square"></line> <polyline fill="none" stroke="#9e85d0" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" points="12,44 2,44 2,12 62,12 62,44 52,44 " stroke-linejoin="square"></polyline> <polyline fill="none" stroke="#9e85d0" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" points="58,44 58,60 6,60 6,44 " stroke-linejoin="square"></polyline> <rect data-color="color-2" x="22" y="22" fill="none" stroke="#9e85d0" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" width="20" height="10" stroke-linejoin="square"></rect> <rect data-color="color-2" x="12" y="40" fill="none" stroke="#9e85d0" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" width="8" height="8" stroke-linejoin="square"></rect> <rect data-color="color-2" x="44" y="40" fill="none" stroke="#9e85d0" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" width="8" height="8" stroke-linejoin="square"></rect> </g> </svg>
                    </span>
                    <em>Event Venues and Timings</em>
                </a>
			</li>
			<li data-menu="about">
				<a href="login.php" onclick="window.location.href = 'login.php';">
                    <span>
                        <svg class="nc-icon outline" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="64px" height="64px" viewBox="0 0 64 64"> <g transform="translate(0, 0)"> <polyline data-color="color-2" fill="none" stroke="#9e85d0" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" points=" 38,16 62,16 62,58 2,58 2,16 26,16 " stroke-linejoin="square"></polyline> <path fill="none" stroke="#9e85d0" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" d="M38,20H26V8 c0-3.3,2.7-6,6-6h0c3.3,0,6,2.7,6,6V20z" stroke-linejoin="square"></path> <path fill="none" stroke="#9e85d0" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" d="M20,38L20,38 c-2.2,0-4-1.8-4-4v-2c0-2.2,1.8-4,4-4h0c2.2,0,4,1.8,4,4v2C24,36.2,22.2,38,20,38z" stroke-linejoin="square"></path> <line fill="none" stroke="#9e85d0" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" x1="38" y1="36" x2="54" y2="36" stroke-linejoin="square"></line> <line fill="none" stroke="#9e85d0" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" x1="38" y1="44" x2="48" y2="44" stroke-linejoin="square"></line> <path fill="none" stroke="#9e85d0" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" d="M30,48H10v0 c0-3.3,2.7-6,6-6h8C27.3,42,30,44.7,30,48L30,48z" stroke-linejoin="square"></path> <line fill="none" stroke="#9e85d0" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" x1="32" y1="12" x2="32" y2="10" stroke-linejoin="square"></line> </g> </svg>
                    </span>
                    <em>Login</em>
                </a>
			</li>
			<li data-menu="services">
				<a href="about.html" onclick="window.location.href = 'about.html';">
                    <span>
                        <svg class="nc-icon outline" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="64px" height="64px" viewBox="0 0 64 64"><g transform="translate(0, 0)"> <line data-cap="butt" data-color="color-2" fill="none" stroke="#9e85d0" stroke-width="2" stroke-miterlimit="10" x1="46" y1="56" x2="58" y2="44" stroke-linejoin="square" stroke-linecap="butt"></line> <line data-cap="butt" data-color="color-2" fill="none" stroke="#9e85d0" stroke-width="2" stroke-miterlimit="10" x1="24" y1="10" x2="12" y2="22" stroke-linejoin="square" stroke-linecap="butt"></line> <polyline data-color="color-2" fill="none" stroke="#9e85d0" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" points=" 19,29 6,16 18,4 31,17 " stroke-linejoin="square"></polyline> <polyline data-color="color-2" fill="none" stroke="#9e85d0" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" points=" 45,31 58,44 60,58 46,56 33,43 " stroke-linejoin="square"></polyline> <rect x="21.1" y="2.7" transform="matrix(0.7071 0.7071 -0.7071 0.7071 31 -12.8406)" fill="none" stroke="#9e85d0" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" width="19.8" height="56.6" stroke-linejoin="square"></rect> <line fill="none" stroke="#9e85d0" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" x1="24" y1="24" x2="30" y2="30" stroke-linejoin="square"></line> <line fill="none" stroke="#9e85d0" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" x1="18" y1="30" x2="22" y2="34" stroke-linejoin="square"></line> <line fill="none" stroke="#9e85d0" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" x1="36" y1="12" x2="42" y2="18" stroke-linejoin="square"></line> <line fill="none" stroke="#9e85d0" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" x1="30" y1="18" x2="34" y2="22" stroke-linejoin="square"></line> <line fill="none" stroke="#9e85d0" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" x1="12" y1="36" x2="18" y2="42" stroke-linejoin="square"></line> </g></svg>
                    </span>
                    <em>About</em>
                </a>
			




			</li>
			<li data-menu="careers">
				<a href="mypage.php" onclick="window.location.href = 'mypage.php';">
                    <span>
                        <svg class="nc-icon outline" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="64px" height="64px" viewBox="0 0 64 64"> <g transform="translate(0, 0)"> <polyline data-cap="butt" data-color="color-2" fill="none" stroke="#9e85d0" stroke-width="2" stroke-miterlimit="10" points="24,40 28,48 36,48 40,40 " stroke-linejoin="square" stroke-linecap="butt"></polyline> <line data-cap="butt" data-color="color-2" fill="none" stroke="#9e85d0" stroke-width="2" stroke-miterlimit="10" x1="24" y1="62" x2="28" y2="48" stroke-linejoin="square" stroke-linecap="butt"></line> <line data-cap="butt" data-color="color-2" fill="none" stroke="#9e85d0" stroke-width="2" stroke-miterlimit="10" x1="36" y1="48" x2="40" y2="62" stroke-linejoin="square" stroke-linecap="butt"></line> <path data-cap="butt" fill="none" stroke="#9e85d0" stroke-width="2" stroke-miterlimit="10" d="M39.7,40H40c12.2,0,22,9.8,22,22v0H2 v0c0-12.2,9.8-22,22-22h0.3" stroke-linejoin="square" stroke-linecap="butt"></path> <path data-cap="butt" fill="none" stroke="#9e85d0" stroke-width="2" stroke-miterlimit="10" d="M47.9,27.5C47.2,35.7,40.3,42,32,42 h0c-8.3,0-15.2-6.4-15.9-14.5" stroke-linejoin="square" stroke-linecap="butt"></path> <path fill="none" stroke="#9e85d0" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" d="M16,18c0-8.8,7.2-16,16-16 h0c8.8,0,16,7.2,16,16" stroke-linejoin="square"></path> <path data-color="color-2" fill="none" stroke="#9e85d0" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" d="M12.1,18 c0,0.3-0.1,0.7-0.1,1c0,6.1,4.9,11,11,11c3.7,0,7-1.9,9-4.7c2,2.8,5.3,4.7,9,4.7c6.1,0,11-4.9,11-11c0-0.3,0-0.7-0.1-1H12.1z" stroke-linejoin="square"></path> </g> </svg>
                    </span>
                    <em>My Registered Events</em>
                </a>
			</li>
			<li data-menu="contact">
				<a href="contact.html" onclick="window.location.href = 'contact.html';">
                    <span>
                        <svg class="nc-icon outline" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="64px" height="64px" viewBox="0 0 64 64"><g transform="translate(0, 0)"> <polyline data-cap="butt" data-color="color-2" fill="none" stroke="#9e85d0" stroke-width="2" stroke-miterlimit="10" points="10,18 32,36 54,18 " stroke-linejoin="square" stroke-linecap="butt"></polyline> <rect x="2" y="10" fill="none" stroke="#9e85d0" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" width="60" height="44" stroke-linejoin="square"></rect> <line data-cap="butt" data-color="color-2" fill="none" stroke="#9e85d0" stroke-width="2" stroke-miterlimit="10" x1="10" y1="44" x2="18" y2="34" stroke-linejoin="square" stroke-linecap="butt"></line> <line data-cap="butt" data-color="color-2" fill="none" stroke="#9e85d0" stroke-width="2" stroke-miterlimit="10" x1="54" y1="44" x2="46" y2="34" stroke-linejoin="square" stroke-linecap="butt"></line> </g></svg>
                    </span>
                    <em>Contact</em>
                </a>
			




			</li>
		</ul>
		<!-- .cd-3d-nav -->
	</nav>

	<!-- Jumbotron -->
	<div id="header" class="jumbotron">
		<div id="header2" style="margin-bottom: 0px; padding-bottom: 0px;" class="row">
			<div class="col-md-3 w3-center hidden-sm-down" style="margin-bottom: 0px; padding-bottom: 0px;">
				<img src="images/logo.png">
			</div>
			<div style="margin-bottom: 0px; padding-bottom: 0px;" class="col-md-6 w3-center col-sm-12">
				<br>
				<hr>
				<h1 class="w3-center tlt" style="font-size:60px;color:yellow;font-family: 'Rancho', cursive;"><strong> <b>CSI  AP State Student Convention 2017</b></strong></h1>
				<br>
				<h1 id="countdown" class="w3-center w3-text-white" >On 6th and 7th Jan 2017</h1>
				<hr>
			</div>
			<script type="text/javascript">
				$( '#countdown' ).timeTo( {
					timeTo: new Date( new Date( 'Fri Jan 6 2017 09:00:00 GMT+0530 (India Standard Time)' ) ),
					theme: "black",
					displayCaptions: true,
					fontSize: 48,
					captionSize: 14
				} );
			</script>
			<div class="col-md-3 w3-center hidden-sm-down" style="margin-bottom: 0px; padding-bottom: 0px;">
				<img src="images/csi-logo.png">
			</div>
		</div>
		<div class="overlay" style="height: auto;font-size: 30px;margin-top: 0px;padding-top:0px; color: yellow;">
			<marquee><strong>Registration now Open!!..  Paper Presentation, Poster Presentation, Project Expo are only for CSE,ECE,EEE and remaining events are for Everyone!!..</strong> </marquee>
		</div>
		<button class="btn w3-center btn-block btn-outline-danger" onClick="window.location.href='login.php';"><h2 style="font-size: 40px;color:white;font-family: 'Rancho', cursive;"><strong>Register</strong></h2></button>
	</div>


	<div class="row">
		<div role="button" id="event-pp" onclick="window.location.href='about.html'" class=" animated fadeInLeftBig w3-card-8 w3-padding-tiny w3-hover-amber w3-yellow col-md-3 col-sm-12">
			<div class="w3-container w3-center">
				<h3>About CSI</h3>
				<img src="images/csi-logo.png" alt="Avatar" style="width:80%">
				<div>
					<br/>
				</div>
			</div>
		</div>
		<div role="button" id="event-pp" onclick="window.location.href='about/'" class=" animated fadeInLeftBig w3-card-8 w3-padding-tiny w3-hover-amber w3-purple col-md-3 col-sm-12">
			<div class="w3-container w3-center">
				<h3>About GIET</h3>
				<img src="images/logo.png" alt="Avatar" style="width:80%">
				<div>
					<br/>
				</div>
			</div>
		</div>
		<div role="button" id="event-pp" onclick="window.location.href='rules.html'" class=" animated fadeInLeftBig w3-card-8 w3-padding-tiny w3-hover-amber w3-dark-grey col-md-3 col-sm-12">
			<div class="w3-container w3-center">
				<h3>General Guidelines</h3>
				<img src="images/cam.jpg" alt="Avatar" style="width:80%">
				<div>
					<br/>
				</div>
			</div>
		</div>
		<div role="button" id="event-pp" onclick="window.location.href='quiz.html'" class="animated fadeInUpBig w3-card-8 w3-padding-tiny w3-hover-amber w3-green col-md-3 col-sm-12">
			<div class="w3-container w3-center">
				<h3>Technical Quiz</h3>
				<img src="images/quiz1.jpg" alt="Avatar" style="width:80%">
				<div>
					<br/>
				</div>
			</div>
		</div>
	</div>



	</div>


	<div class="row">
		<div id="event" class=" row ">
			<div role="button" id="event-pp" onclick="window.location.href='paper.html'" class="animated fadeInRightBig w3-card-8 w3-padding-tiny w3-hover-amber w3-blue col-md-3 col-sm-12">
				<div class="w3-container w3-center">
					<h3>Paper Presentation</h3>
					<img src="images/paper.png" style="width:80%">
					<div>
						<br/>
					</div>
				</div>
			</div>

			<div role="button" id="event-pp" onclick="window.location.href='poster.html'" class="animated fadeInLeftBig w3-card-8 w3-padding-tiny w3-hover-amber w3-green col-md-3 col-sm-12">
				<div class="w3-container w3-center">
					<h3>Poster Presentation</h3>
					<img src="images/poster.jpg" style="width:80%">
					<div>
						<br/>
					</div>
				</div>
			</div>

			<div role="button" id="event-pp" onclick="window.location.href='app.html'" class=" animated fadeInDownBig w3-card-8 w3-padding-tiny w3-hover-amber w3-red col-md-3 col-sm-12">
				<div class="w3-container w3-center">
					<h3>App Development</h3>
					<img src="images/app.jpg" alt="Avatar" style="width:80%">
					<div>
						<br/>
					</div>
				</div>
			</div>



			<div role="button" id="event-pp" onclick="window.location.href='project.html'" class="animated fadeInRightBig w3-card-8 w3-padding-tiny w3-hover-amber w3-yellow col-md-3 col-sm-12">
				<div class="w3-container w3-center">
					<h3>Project Expo</h3>
					<img src="images/project.gif" alt="Avatar" style="width:80%">
					<div>
						<br/>
					</div>
				</div>
			</div>
		</div>
		<div class="row">

			<div role="button" id="event-pp" onclick="window.location.href='kode.html'" class="animated fadeInUpBig w3-card-8 w3-padding-tiny w3-hover-amber w3-black col-md-3 col-sm-12">
				<div class="w3-container w3-center">
					<h3>Kode Kraft</h3>
					<img src="images/kode.gif" alt="Avatar" style="width:80%">
					<div>
						<br/>
					</div>
				</div>
			</div>

			<div role="button" id="event-pp" onclick="window.location.href='testurwits.html'" class="animated fadeInRightBig w3-card-8 w3-padding-tiny w3-hover-amber w3-purple col-md-3 col-sm-12">
				<div class="w3-container w3-center">
					<h3>Test ur Wits</h3>
					<img src="images/wits.gif" alt="Avatar" style="width:80%">
					<div>
						<br/>
					</div>
				</div>
			</div>



			<div role="button" id="event-pp" onclick="window.location.href='treasure.html'" class="animated fadeInLeftBig w3-card-8 w3-padding-tiny w3-hover-amber w3-pink col-md-3 col-sm-12">
				<div class="w3-container w3-center">
					<h3>Treasure Hunt</h3>
					<img src="images/hunt.jpg" alt="Avatar" style="width:80%">
					<div>
						<br/>
					</div>
				</div>
			</div>

			<div role="button" id="event-pp" onclick="window.location.href='cam.html'" class=" animated fadeInLeftBig w3-card-8 w3-padding-tiny w3-hover-amber w3-indigo col-md-3 col-sm-12">
				<div class="w3-container w3-center">
					<h3>Pic A Cam</h3>
					<img src="images/cam.jpg" alt="Avatar" style="width:80%">
					<div>
						<br/>
					</div>
				</div>
			</div>
		</div>

		<div class="row">
			<div role="button" id="event-pp" onclick="window.location.href='startup.html'" class=" animated fadeInDownBig w3-card-8 w3-padding-tiny w3-hover-amber w3-orange col-md-3 col-sm-12">
				<div class="w3-container w3-center">
					<h3>Start Up Ideas</h3>
					<img src="images/idea.png" alt="Avatar" style="width:80%">
					<div>
						<br/>
					</div>
				</div>
			</div>




			<div role="button" id="event-pp" onclick="window.location.href='ad.html'" class=" animated fadeInRightBig w3-card-8 w3-padding-tiny w3-hover-amber w3-red col-md-3 col-sm-12">
				<div class="w3-container w3-center">
					<h3>Ad Making</h3>
					<img src="images/add.gif" alt="Avatar" style="width:80%">
					<div>
						<br/>
					</div>
				</div>
			</div>

			<div role="button" id="event-pp" onclick="window.location.href='movie.html'" class=" animated fadeInDownBig w3-card-8 w3-padding-tiny w3-hover-amber w3-green col-md-3 col-sm-12">
				<div class="w3-container w3-center">
					<h3>Movie Making</h3>
					<img src="images/movie.jpg" alt="Avatar" style="width:80%">
					<div>
						<br/>
					</div>
				</div>
			</div>

			<div role="button" id="event-pp" onclick="window.location.href='workshop.html'" class=" animated fadeInRightBig w3-card-8 w3-padding-tiny w3-hover-amber w3-black col-md-3 col-sm-12">
				<div class="w3-container w3-center">
					<h3>Cyber security Workshop</h3>
					<img src="images/workshop.png" alt="Avatar" style="width:80%">
					<div>
						<br/>
					</div>
				</div>
			</div>


		</div>

	</div>

	<script>
		// $("#header2").height($("#header").height());
		$( '.tlt' ).textillate( { in: {
				effect: 'fadeInLeftBig'
			}
		} );
		$( '.tlt' ).textillate( 'start' );
	</script>


	<script>
		$( "img:not(.exclude)" ).width( 200 ).height( 200 );
		$( ".exclude" ).width( 35 ).height( 35 );
	</script>
	<div class="jumbotron" style="background:url('images/');background-repeat:no-repeat;background-size:cover;">

	</div>

</body>

</html>