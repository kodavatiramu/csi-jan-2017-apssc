<html>
<?php 
	if(isset($_POST["username"])){
		$db = new mysqli('sql202.rf.gd','rfgd_19176149','nihanth007','rfgd_19176149_registrations');
		$username = $_POST["username"];
		$password = $_POST["password"];
		$sql = 'select * from entry where pin="'.$username.'"';
		if($result = $db->query($sql)){
			$temp = $result->fetch_row();
			if($temp[3] == $password){
				$login=true;
				session_start();
				$_SESSION["name"]=$temp[0];
				$_SESSION["pin"]=$temp[1];
				$_SESSION["email"]=$temp[2];
				$_SESSION["phone"]=$temp[3];
				$_SESSION["college"]=$temp[4];
				$_SESSION["branch"]=$temp[5];
				echo '<script>window.location.href="mypage.php";</script>';
			}
			else{
				$login = false;
				echo "Invalid";
			}
			
		}
		else{
			$login = "failed";
			echo $db->error;
		}
		
	}
?>

<head>
	<title>CSI State Level Convention</title>
	<link rel="stylesheet" href="Content/animate.min.css"/>
	<link rel="stylesheet" href="Content/font-awesome.min.css"/>
	<link rel="stylesheet" href="Content/themes/base/jquery-ui.min.css"/>
	<link rel="stylesheet" href="Content/bootstrap.min.css"/>
	<link rel="stylesheet" href="Content/w3.css"/>
	<link href="https://fonts.googleapis.com/css?family=Lobster+Two" rel="stylesheet">
	<script src="Scripts/jquery-3.1.1.min.js"></script>
	<script src="Scripts/jquery-ui-1.12.1.min.js"></script>
	<script src="Scripts/main.js"></script>
	<script src="Scripts/tether.min.js"></script>
	<script src="Scripts/bootstrap.min.js"></script>
	<script src="Scripts/jquery.textillate.js"></script>
	<script src="Scripts/approve.min.js"></script>
	<link rel="stylesheet" href="Content/particles.css"/>
	<link rel="stylesheet" href="Content/reset.css"/>
	<link rel="stylesheet" href="Content/style.css"/>
	<script>
		function modal(){
			document.getElementById("instrictions").style.display='block';
		}
	</script>
	<style>
		.center-div {
			margin: 0 auto;
			width: 100px;
			height: 100px;
			background-color: #ccc;
			border-radius: 3px;
		}
		
		.overlay {
			background: rgba(0, 0, 0, 0.41);
			overflow: hidden;
			height: 100%;
			z-index: 2;
		}
	</style>
</head>

<body>
	<div style="z-index:-1;" id="particles-js"></div>
	<a href="#cd-nav" class="cd-nav-trigger">
        Menu<span></span>
    </a>






	<nav class="cd-nav-container" id="cd-nav">
		<header>
			<h1> Navigation </h1>
			<a href="#0" class="cd-close-nav">Close</a>
		</header>
		<ul class="cd-nav">
			<li data-menu="index">
				<a href="index.php" onclick="window.location.href = 'index.php';">
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
			<li class="cd-selected" data-menu="about">
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
	<script src="http://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
	<script src="Scripts/particles-load.js"></script>
	<div class="row">
		<div class="col-lg-3 col-sm-2"></div>
		<div id="tabs" class="col-lg-6 col-sm-8 ">
			<ul>
				<li><a href="#tabs-1">Login</a>
				</li>
			</ul>
			<div id="tabs-1">
				<form method="post">
					<div class="input-group">
						<span class="input-group-addon" id="basic-addon1"><i class="fa fa-user-o" aria-hidden="true"></i></span>
						<input name="username" type="text" class="form-control" required placeholder="Enter Your Username" aria-describedby="basic-addon1">
					</div><br>
					<div class="input-group">
						<span class="input-group-addon" id="basic-addon2"><i class="fa fa-key" aria-hidden="true"></i></span>
						<input name="password" type="password" class="form-control" required placeholder="Enter Your Password" aria-describedby="basic-addon1">
					</div><br>
					<input class="btn btn-success btn-sm btn-block" type="submit" value="Login">
					
					<hr>
					<p style=<?php echo '"color:red;"'; ?> >
						<?php if($login == "failed"){ echo "You Have Entered an Incorrect Password";} ?> </p>
				</form>
				<a href="registration.html" class="w3-text-blue-grey">Not Registered? Click Here!</a>
			</div>
			
		</div>
		<div class="col-lg-3 col-sm-2"></div>
	</div>
	
	<script>
		$( function () {
			$("#tabs").tabs();
			var tab_height = $( "#tabs" ).height();
			var body_height = $( "body" ).height();
			var margin = ( body_height / 2 ) - ( tab_height / 2 );
			document.getElementById( "tabs" ).style.marginTop = margin;
		} );
		
	</script>
</body>

</html>