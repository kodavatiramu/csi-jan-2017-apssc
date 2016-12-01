<html>
<?php 
	session_start();
	if(isset($_SESSION['pin'])){
		$db = new mysqli('sql202.rf.gd','rfgd_19176149','nihanth007','rfgd_19176149_registrations');
		$login = true;
		$sql ='select * from entry where pin="15551a0589"';
			if($result = $db->query($sql)){
				$temp = $result->fetch_row();
				$event_name[7]='Paper Presentation';
				$event_name[8]='Poster Presentation';
				$event_name[9]='Kode Kraft';
				$event_name[10]='Test Ur Wits';
				$event_name[11]='App Development';
				$event_name[12]='Technical Quiz';
				$event_name[13]='Project Expo';
				$event_name[14]='Startup Ideas';
				$event_name[15]='Ad Making';
				$event_name[16]='Movie Making';
				$event_name[17]='Pic A Cam';
				$event_name[18]='Treasure Hunt';
				$event_name[19]='Workshop on Cyber Security';
			}
			if($temp[6]==1){
				$sql = 'select * from paper where pin="'.$_SESSION['pin'].'"';
				$result = $db->query($sql);
				$temp1 = $result->fetch_row();
				$id[6] = 'Paper-' . $temp1[0];
			}
		if($temp[7]==1){
				$sql = 'select * from poster where pin="'.$_SESSION['pin'].'"';
				$result = $db->query($sql);
				$temp1 = $result->fetch_row();
				$id[7] = 'Poster-' . $temp1[0];
			}
		if($temp[8]==1){
				$sql = 'select * from kode where pin="'.$_SESSION['pin'].'"';
				$result = $db->query($sql);
				$temp1 = $result->fetch_row();
				$id[8] = 'Kode-' . $temp1[0];
			}
		if($temp[9]==1){
				$sql = 'select * from testurwits where pin="'.$_SESSION['pin'].'"';
				$result = $db->query($sql);
				$temp1 = $result->fetch_row();
				$id[9] = 'Test-' . $temp1[0];
			}
		if($temp[10]==1){
				$sql = 'select * from app where pin="'.$_SESSION['pin'].'"';
				$result = $db->query($sql);
				$temp1 = $result->fetch_row();
				$id[10] = 'App-' . $temp1[0];
			}
		if($temp[11]==1){
				$sql = 'select * from quiz where pin="'.$_SESSION['pin'].'"';
				$result = $db->query($sql);
				$temp1 = $result->fetch_row();
				$id[11] = 'Quiz-' . $temp1[0];
			}
		if($temp[12]==1){
				$sql = 'select * from project where pin="'.$_SESSION['pin'].'"';
				$result = $db->query($sql);
				$temp1 = $result->fetch_row();
				$id[12] = 'Project-' . $temp1[0];
			}
		if($temp[13]==1){
				$sql = 'select * from startup where pin="'.$_SESSION['pin'].'"';
				$result = $db->query($sql);
				$temp1 = $result->fetch_row();
				$id[13] = 'Startup-' . $temp1[0];
			}
		if($temp[14]==1){
				$sql = 'select * from ad where pin="'.$_SESSION['pin'].'"';
				$result = $db->query($sql);
				$temp1 = $result->fetch_row();
				$id[14] = 'Ad-' . $temp1[0];
			}
		if($temp[15]==1){
				$sql = 'select * from movie where pin="'.$_SESSION['pin'].'"';
				$result = $db->query($sql);
				$temp1 = $result->fetch_row();
				$id[15] = 'Movie-' . $temp1[0];
			}
		if($temp[16]==1){
				$sql = 'select * from picacam where pin="'.$_SESSION['pin'].'"';
				$result = $db->query($sql);
				$temp1 = $result->fetch_row();
				$id[16] = 'Pic-' . $temp1[0];
			}
		if($temp[17]==1){
				$sql = 'select * from treasure where pin="'.$_SESSION['pin'].'"';
				$result = $db->query($sql);
				$temp1 = $result->fetch_row();
				$id[17] = 'Treasure-' . $temp1[0];
			}
		if($temp[18]==1){
				$sql = 'select * from workshop where pin="'.$_SESSION['pin'].'"';
				$result = $db->query($sql);
				$temp1 = $result->fetch_row();
				$id[18] = 'Workshop-' . $temp1[0];
			}
		
	}
	else{
		$login = false;
		echo 'Failed to execute<br>';
		echo $db->error;
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
		function modal() {
			document.getElementById( "instrictions" ).style.display = 'block';
		}
	</script>
	<style>
		em {
			color: lavender;
			font-size: 10px;
		}
		
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
                    <em style="font-size: 20px;">Home</em>
                </a>
			


			</li>
			<li data-menu="projects">
				<a href="venue.php" onclick="window.location.href = 'venue.html';">
                    <span>
                        <svg class="nc-icon outline" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="64px" height="64px" viewBox="0 0 64 64"> <g transform="translate(0, 0)"> <polyline data-color="color-2" fill="none" stroke="#9e85d0" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" points=" 22,12 22,4 42,4 42,12 " stroke-linejoin="square"></polyline> <line fill="none" stroke="#9e85d0" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" x1="44" y1="44" x2="20" y2="44" stroke-linejoin="square"></line> <polyline fill="none" stroke="#9e85d0" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" points="12,44 2,44 2,12 62,12 62,44 52,44 " stroke-linejoin="square"></polyline> <polyline fill="none" stroke="#9e85d0" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" points="58,44 58,60 6,60 6,44 " stroke-linejoin="square"></polyline> <rect data-color="color-2" x="22" y="22" fill="none" stroke="#9e85d0" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" width="20" height="10" stroke-linejoin="square"></rect> <rect data-color="color-2" x="12" y="40" fill="none" stroke="#9e85d0" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" width="8" height="8" stroke-linejoin="square"></rect> <rect data-color="color-2" x="44" y="40" fill="none" stroke="#9e85d0" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" width="8" height="8" stroke-linejoin="square"></rect> </g> </svg>
                    </span>
                    <em style="font-size: 20px;">Event Venues and Timings</em>
                </a>
			</li>
			<li data-menu="about">
				<a href="login.php" onclick="window.location.href = 'index.php';">
                    <span>
                        <svg class="nc-icon outline" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="64px" height="64px" viewBox="0 0 64 64"> <g transform="translate(0, 0)"> <polyline data-color="color-2" fill="none" stroke="#9e85d0" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" points=" 38,16 62,16 62,58 2,58 2,16 26,16 " stroke-linejoin="square"></polyline> <path fill="none" stroke="#9e85d0" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" d="M38,20H26V8 c0-3.3,2.7-6,6-6h0c3.3,0,6,2.7,6,6V20z" stroke-linejoin="square"></path> <path fill="none" stroke="#9e85d0" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" d="M20,38L20,38 c-2.2,0-4-1.8-4-4v-2c0-2.2,1.8-4,4-4h0c2.2,0,4,1.8,4,4v2C24,36.2,22.2,38,20,38z" stroke-linejoin="square"></path> <line fill="none" stroke="#9e85d0" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" x1="38" y1="36" x2="54" y2="36" stroke-linejoin="square"></line> <line fill="none" stroke="#9e85d0" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" x1="38" y1="44" x2="48" y2="44" stroke-linejoin="square"></line> <path fill="none" stroke="#9e85d0" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" d="M30,48H10v0 c0-3.3,2.7-6,6-6h8C27.3,42,30,44.7,30,48L30,48z" stroke-linejoin="square"></path> <line fill="none" stroke="#9e85d0" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" x1="32" y1="12" x2="32" y2="10" stroke-linejoin="square"></line> </g> </svg>
                    </span>
                    <em style="font-size: 20px;">Logout</em>
                </a>
			</li>
			<li data-menu="services">
				<a href="about.html" onclick="window.location.href = 'about.html';">
                    <span>
                        <svg class="nc-icon outline" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="64px" height="64px" viewBox="0 0 64 64"><g transform="translate(0, 0)"> <line data-cap="butt" data-color="color-2" fill="none" stroke="#9e85d0" stroke-width="2" stroke-miterlimit="10" x1="46" y1="56" x2="58" y2="44" stroke-linejoin="square" stroke-linecap="butt"></line> <line data-cap="butt" data-color="color-2" fill="none" stroke="#9e85d0" stroke-width="2" stroke-miterlimit="10" x1="24" y1="10" x2="12" y2="22" stroke-linejoin="square" stroke-linecap="butt"></line> <polyline data-color="color-2" fill="none" stroke="#9e85d0" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" points=" 19,29 6,16 18,4 31,17 " stroke-linejoin="square"></polyline> <polyline data-color="color-2" fill="none" stroke="#9e85d0" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" points=" 45,31 58,44 60,58 46,56 33,43 " stroke-linejoin="square"></polyline> <rect x="21.1" y="2.7" transform="matrix(0.7071 0.7071 -0.7071 0.7071 31 -12.8406)" fill="none" stroke="#9e85d0" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" width="19.8" height="56.6" stroke-linejoin="square"></rect> <line fill="none" stroke="#9e85d0" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" x1="24" y1="24" x2="30" y2="30" stroke-linejoin="square"></line> <line fill="none" stroke="#9e85d0" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" x1="18" y1="30" x2="22" y2="34" stroke-linejoin="square"></line> <line fill="none" stroke="#9e85d0" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" x1="36" y1="12" x2="42" y2="18" stroke-linejoin="square"></line> <line fill="none" stroke="#9e85d0" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" x1="30" y1="18" x2="34" y2="22" stroke-linejoin="square"></line> <line fill="none" stroke="#9e85d0" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" x1="12" y1="36" x2="18" y2="42" stroke-linejoin="square"></line> </g></svg>
                    </span>
                    <em style="font-size: 20px;">About</em>
                </a>
			


			</li>
			<li class="cd-selected" data-menu="careers">
				<a href="mypage.php" onclick="window.location.href = 'mypage.php';">
                    <span>
                        <svg class="nc-icon outline" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="64px" height="64px" viewBox="0 0 64 64"> <g transform="translate(0, 0)"> <polyline data-cap="butt" data-color="color-2" fill="none" stroke="#9e85d0" stroke-width="2" stroke-miterlimit="10" points="24,40 28,48 36,48 40,40 " stroke-linejoin="square" stroke-linecap="butt"></polyline> <line data-cap="butt" data-color="color-2" fill="none" stroke="#9e85d0" stroke-width="2" stroke-miterlimit="10" x1="24" y1="62" x2="28" y2="48" stroke-linejoin="square" stroke-linecap="butt"></line> <line data-cap="butt" data-color="color-2" fill="none" stroke="#9e85d0" stroke-width="2" stroke-miterlimit="10" x1="36" y1="48" x2="40" y2="62" stroke-linejoin="square" stroke-linecap="butt"></line> <path data-cap="butt" fill="none" stroke="#9e85d0" stroke-width="2" stroke-miterlimit="10" d="M39.7,40H40c12.2,0,22,9.8,22,22v0H2 v0c0-12.2,9.8-22,22-22h0.3" stroke-linejoin="square" stroke-linecap="butt"></path> <path data-cap="butt" fill="none" stroke="#9e85d0" stroke-width="2" stroke-miterlimit="10" d="M47.9,27.5C47.2,35.7,40.3,42,32,42 h0c-8.3,0-15.2-6.4-15.9-14.5" stroke-linejoin="square" stroke-linecap="butt"></path> <path fill="none" stroke="#9e85d0" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" d="M16,18c0-8.8,7.2-16,16-16 h0c8.8,0,16,7.2,16,16" stroke-linejoin="square"></path> <path data-color="color-2" fill="none" stroke="#9e85d0" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" d="M12.1,18 c0,0.3-0.1,0.7-0.1,1c0,6.1,4.9,11,11,11c3.7,0,7-1.9,9-4.7c2,2.8,5.3,4.7,9,4.7c6.1,0,11-4.9,11-11c0-0.3,0-0.7-0.1-1H12.1z" stroke-linejoin="square"></path> </g> </svg>
                    </span>
                    <em style="font-size: 20px;">My Registered Events</em>
                </a>
			</li>
			<li data-menu="contact">
				<a href="contact.html" onclick="window.location.href = 'contact.html';">
                    <span>
                        <svg class="nc-icon outline" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="64px" height="64px" viewBox="0 0 64 64"><g transform="translate(0, 0)"> <polyline data-cap="butt" data-color="color-2" fill="none" stroke="#9e85d0" stroke-width="2" stroke-miterlimit="10" points="10,18 32,36 54,18 " stroke-linejoin="square" stroke-linecap="butt"></polyline> <rect x="2" y="10" fill="none" stroke="#9e85d0" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" width="60" height="44" stroke-linejoin="square"></rect> <line data-cap="butt" data-color="color-2" fill="none" stroke="#9e85d0" stroke-width="2" stroke-miterlimit="10" x1="10" y1="44" x2="18" y2="34" stroke-linejoin="square" stroke-linecap="butt"></line> <line data-cap="butt" data-color="color-2" fill="none" stroke="#9e85d0" stroke-width="2" stroke-miterlimit="10" x1="54" y1="44" x2="46" y2="34" stroke-linejoin="square" stroke-linecap="butt"></line> </g></svg>
                    </span>
                    <em style="font-size: 20px;">Contact</em>
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
			<link rel="stylesheet" href="Content/bootstrap.min.css"/>
			<link rel="stylesheet" href="Content/w3.css"/>
			<div style="background-color: white;" class="w3-card-8 row">
				<hr>
				<div class="container">
					Registered Name :
					<?php echo '   ' .$_SESSION['name']; echo '<br>'; ?> Registered Pin :
					<?php echo '   ' .$_SESSION['pin']; echo '<br>'; ?> Registered eMail :
					<?php echo '   ' .$_SESSION['email']; echo '<br>'; ?> Registered Phone :
					<?php echo '   ' .$_SESSION['phone']; echo '<br>'; ?> Registered Branch :
					<?php echo '   ' .$_SESSION['branch']; echo '<br>'; ?> Registered College :
					<?php echo '   ' .$_SESSION['college']; echo '<br>'; ?>Accomodation Requested :
					<?php echo '   ' .($_SESSION['accomodation']==1?'Yes':'No'); echo '<br>'; ?>
				</div>
				<hr>
				<div class="row">
					<div role="button" class="w3-card-4 col-md-6 col-sm-6 btn btn-success" data-toggle="modal" data-target="#event">My Events</div>
					<div role="button" class="w3-card-4 col-md-6 col-sm-6 btn btn-success" data-toggle="modal" data-target="#register">Register</div>
				</div>
				<hr>

			</div>
		</div>
		<style>
			em {
				color: lavender;
				font-size: 10px;
			}
		</style>
		<div class="col-lg-3 col-sm-2"></div>
	</div>
	<div class="modal fade" id="register" role="dialog">
		<div class="modal-dialog">

			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Event Registration</h4>

				</div>
				<div class="modal-body">
					<div class="alert alert-info">
						<ul>
							<li>
								<table class="table table-striped table-bordered table-active">
									<thead>
										<tr>
											<td>Event</td>
											<td>Participation Fee</td>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>For Each Individual Event</td>
											<td><i class="fa fa-inr" aria-hidden="true">50</i>
											</td>
										</tr>
										<tr>
											<td>Workshop on Cyber Security</td>
											<td><i class="fa fa-inr" aria-hidden="true">100</i>
											</td>
										</tr>
									</tbody>
								</table>
							</li>
						</ul>
					</div>
					<form class="container-fluid col-md-12 col-sm-12" method="POST" action="event_reg.php"><br>
						<h3>Technical Events</h3>
						<div class="form-check">
							<label class="form-check-label">
     					 <input <?php if($temp[6]==1){echo ' checked hidden';} ?> name="paper" type="checkbox" value=1 class="form-check-input">
     					 Paper Presentation <span><a class="w3-text-blue" target="_blank" href="paper.html">Info</a></span>
   						 </label>
						
							<br>
							<label class="form-check-label">
     					 <input <?php if($temp[7]==1){echo ' checked hidden';} ?> name="poster" type="checkbox" value=1 class="form-check-input">
     					 Poster Presentation <span><a class="w3-text-blue" target="_blank" href="poster.html">Info</a></span>
   						 </label>
						
							<br>
							<label class="form-check-label">
     					 <input <?php if($temp[8]==1){echo ' checked hidden';} ?> name="kode" type="checkbox" value=1 class="form-check-input">
     					 Kode Kraft <span><a class="w3-text-blue" target="_blank" href="kode.html">Info</a></span>
   						 </label>
						
							<br>
							<label class="form-check-label">
     					 <input <?php if($temp[9]==1){echo ' checked hidden';} ?> name="testurwits" type="checkbox" value=1 class="form-check-input">
     					 Test Ur Wits <span><a class="w3-text-blue" target="_blank" href="testurwits.html">Info</a></span>
   						 </label>
						
							<br>
							<label class="form-check-label">
     					 <input <?php if($temp[11]==1){echo ' checked hidden';} ?> name="quiz" type="checkbox" value=1 class="form-check-input">
     					 Technical Quiz <span><a class="w3-text-blue" target="_blank" href="quiz.html">Info</a></span>
   						 </label>
						
							<br>
							<label class="form-check-label">
     					 <input <?php if($temp[12]==1){echo ' checked hidden';} ?> name="project" type="checkbox" value=1 class="form-check-input">
     					 Project Expo <span><a class="w3-text-blue" target="_blank" href="project.html">Info</a></span>
   						 </label>
						
							<br>
							<label class="form-check-label">
     					 <input <?php if($temp[10]==1){echo ' checked hidden';} ?> name="app" type="checkbox" value=1 class="form-check-input">
     					 App Development <span><a class="w3-text-blue" target="_blank" href="app.html">Info</a></span>
   						 </label>
						
							<br>
							<label class="form-check-label">
     					 <input <?php if($temp[13]==1){echo ' checked hidden';} ?> name="startup" type="checkbox" value=1 class="form-check-input">
     					 Startup Ideas <span><a class="w3-text-blue" target="_blank" href="startup.html">Info</a></span>
   						 </label>
						
							<br>
						</div>
						<hr>
						<h2>Fun Events</h2>
						<div class="form-check">
							<label class="form-check-label">
     					 <input <?php if($temp[15]==1){echo ' checked hidden';} ?> name="movie" type="checkbox" value=1 class="form-check-input">
     					 Movie Making <span><a class="w3-text-blue" target="_blank" href="movie.html">Info</a></span>
   						 </label>
						
							<br>
							<label class="form-check-label">
     					 <input <?php if($temp[14]==1){echo ' checked hidden';} ?> name="ad" type="checkbox" value=1 class="form-check-input">
     					 Ad Making <span><a class="w3-text-blue" target="_blank" href="ad.html">Info</a></span>
   						 </label>
						
							<br>
							<label class="form-check-label">
     					 <input <?php if($temp[17]==1){echo ' checked hidden';} ?> name="treasure" type="checkbox" value=1 class="form-check-input">
     					 Treasure Hunt <span><a class="w3-text-blue" target="_blank" href="treasure.html">Info</a></span>
   						 </label>
						
							<br>
							<label class="form-check-label">
     					 <input <?php if($temp[16]==1){echo ' checked hidden';} ?> name="picacam" type="checkbox" value=1 class="form-check-input">
     					 Pic A Cam <span><a class="w3-text-blue" target="_blank" href="picacam.html">Info</a></span>
   						 </label>
						
							<br>
						</div>
						<hr>
						<h2>Workshop</h2>
						<div class="form-check">
							<label class="form-check-label">
     					 <input <?php if($temp[18]==1){echo ' checked hidden';} ?> name="workshop" type="checkbox" value=1 class="form-check-input">
     					 Hands On Cyber-Security <span><a class="w3-text-blue" target="_blank" href="workshop.html">Info</a></span>
   						 </label>
						
							<br>
						</div>
						<input type="submit" name="submit" value="Submit" class="btn btn-success">
					</form>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>
	<div class="modal fade" id="event" role="dialog">
		<div class="modal-dialog">

			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">My Registered Events</h4>
				</div>
				<div class="modal-body">
					<table class="table table-striped table-bordered">
						<thead>
							<tr>
								<td>Event </td>
								<td>ID</td>
							</tr>
						</thead>
						<tbody>
							<?php 
					for($i=6;$i<19;$i++)
					{
						if($temp[$i]==1)
						{
							echo '<tr><td>'.$event_name[$i+1].'</td><td>'.$id[$i].'</td></tr>';
						}
					}
				?>
						</tbody>
					</table>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>
	<script>
		$( function () {
			var tab_height = $( "#tabs" ).height();
			var body_height = $( "body" ).height();
			var margin = ( body_height / 2 ) - ( tab_height / 2 );
			document.getElementById( "tabs" ).style.marginTop = margin;
		} );
	</script>
</body>

</html>