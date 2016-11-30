<?php
session_start();

$event[ 'paper' ] = $_POST[ 'paper' ] == 1 ? 1 : 0;
$event[ 'poster' ] = $_POST[ 'poster' ] == 1 ? 1 : 0;
$event[ 'kode' ] = $_POST[ 'kode' ] == 1 ? 1 : 0;
$event[ 'testurwits' ] = $_POST[ 'testurwits' ] == 1 ? 1 : 0;
$event[ 'app' ] = $_POST[ 'app' ] == 1 ? 1 : 0;
$event[ 'project' ] = $_POST[ 'project' ] == 1 ? 1 : 0;
$event[ 'quiz' ] = $_POST[ 'quiz' ] == 1 ? 1 : 0;
$event[ 'startup' ] = $_POST[ 'startup' ] == 1 ? 1 : 0;
$event[ 'ad' ] = $_POST[ 'ad' ] == 1 ? 1 : 0;
$event[ 'movie' ] = $_POST[ 'movie' ] == 1 ? 1 : 0;
$event[ 'treasure' ] = $_POST[ 'treasure' ] == 1 ? 1 : 0;
$event[ 'picacam' ] = $_POST[ 'picacam' ] == 1 ? 1 : 0;
$event[ 'workshop' ] = $_POST[ 'workshop' ] == 1 ? 1 : 0;
$db = new mysqli( 'sql202.rf.gd', 'rfgd_19176149', 'nihanth007', 'rfgd_19176149_registrations' );
$sql = 'update entry set paper=' . $event[ 'paper' ] . ',poster=' . $event[ 'poster' ] . ',kode=' . $event[ 'kode' ] . ',testurwits=' . $event[ 'testurwits' ] . ',app=' . $event[ 'app' ] . ',project=' . $event[ 'project' ] . ',quiz=' . $event[ 'quiz' ] . ',startup=' . $event[ 'startup' ] . ',ad=' . $event[ 'ad' ] . ',movie=' . $event[ 'movie' ] . ',treasure=' . $event[ 'treasure' ] . ',picacam=' . $event[ 'picacam' ] . ',workshop=' . $event[ 'workshop' ] . ' where pin="' . $_SESSION[ 'pin' ] . '"';
echo '<style>body{background-color:black;color:#20c20e;font-size:20px;}</style>';
echo 'Querying The Database With Your Identification Number :';
if ( $db->query( $sql ) ) {
	echo 'Success<br>';
	if ( $event[ 'ad' ] == 1 ) {
		echo 'Registering For Ad-Making :';
		$sql = 'INSERT INTO `ad` (`id`, `pin`) VALUES (NULL, "' . $_SESSION[ 'pin' ] . '");';
		if($db->query( $sql ) == true){
			echo 'Success<br>';
		}
		else{
			echo 'Failed<br>';
		}

	}
	if ( $event[ 'paper' ] == 1 ) {
		$sql = 'INSERT INTO `paper` (`id`, `pin`) VALUES (NULL, "' . $_SESSION[ 'pin' ] . '");';
		echo 'Registering For Paper Presentation : ';
		if($db->query( $sql ) == true){
			echo 'Success<br>';
		}
		else{
			echo 'Failed<br>';
		}
	}
	if ( $event[ 'kode' ] == 1 ) {
		$sql = 'INSERT INTO `kode` (`id`, `pin`) VALUES (NULL, "' . $_SESSION[ 'pin' ] . '");';
		echo 'Registering For Kode Kraft : ';
		if($db->query( $sql ) == true){
			echo 'Success<br>';
		}
		else{
			echo 'Failed<br>';
		}
	}
	if ( $event[ 'testurwits' ] == 1 ) {
		$sql = 'INSERT INTO `testurwits` (`id`, `pin`) VALUES (NULL, "' . $_SESSION[ 'pin' ] . '");';
		echo 'Registering For Test Ur Wits : ';
		if($db->query( $sql ) == true){
			echo 'Success<br>';
		}
		else{
			echo 'Failed<br>';
		}
			}
	if ( $event[ 'app' ] == 1 ) {
		$sql = 'INSERT INTO `app` (`id`, `pin`) VALUES (NULL, "' . $_SESSION[ 'pin' ] . '");';
		echo 'Registering For App Development : ';
		if($db->query( $sql ) == true){
			echo 'Success<br>';
		}
		else{
			echo 'Failed<br>';
		}
	}
	if ( $event[ 'quiz' ] == 1 ) {
		$sql = 'INSERT INTO `quiz` (`id`, `pin`) VALUES (NULL, "' . $_SESSION[ 'pin' ] . '");';
		echo 'Registering For Technical Quiz : ';
		if($db->query( $sql ) == true){
			echo 'Success<br>';
		}
		else{
			echo 'Failed<br>';
		}
	}
	if ( $event[ 'poster' ] == 1 ) {
		$sql = 'INSERT INTO `poster` (`id`, `pin`) VALUES (NULL, "' . $_SESSION[ 'pin' ] . '");';
		echo 'Registering For Poster Presentation : ';
		if($db->query( $sql ) == true){
			echo 'Success<br>';
		}
		else{
			echo 'Failed<br>';
		}
	}
	if ( $event[ 'startup' ] == 1 ) {
		$sql = 'INSERT INTO `startup` (`id`, `pin`) VALUES (NULL, "' . $_SESSION[ 'pin' ] . '");';
		echo 'Registering For Startup Ideas : ';
		if($db->query( $sql ) == true){
			echo 'Success<br>';
		}
		else{
			echo 'Failed<br>';
		}
	}
	if ( $event[ 'movie' ] == 1 ) {
		$sql = 'INSERT INTO `movie` (`id`, `pin`) VALUES (NULL, "' . $_SESSION[ 'pin' ] . '");';
		echo 'Registering For Movie Making : ';
		if($db->query( $sql ) == true){
			echo 'Success<br>';
		}
		else{
			echo 'Failed<br>';
		}
	}
	if ( $event[ 'treasure' ] == 1 ) {
		$sql = 'INSERT INTO `treasure` (`id`, `pin`) VALUES (NULL, "' . $_SESSION[ 'pin' ] . '");';
		echo 'Registering For Movie Making : ';
		if($db->query( $sql ) == true){
			echo 'Success<br>';
		}
		else{
			echo 'Failed<br>';
		}
	}
	if ( $event[ 'picacam' ] == 1 ) {
		$sql = 'INSERT INTO `picacam` (`id`, `pin`) VALUES (NULL, "' . $_SESSION[ 'pin' ] . '");';
		echo 'Registering For Pic A Cam : ';
		if($db->query( $sql ) == true){
			echo 'Success<br>';
		}
		else{
			echo 'Failed<br>';
		}
	}
	if ( $event[ 'workshop' ] == 1 ) {
		$sql = 'INSERT INTO `workshop` (`id`, `pin`) VALUES (NULL, "' . $_SESSION[ 'pin' ] . '");';
		echo 'Registering For Workshop : ';
		if($db->query( $sql ) == true){
			echo 'Success<br>';
		}
		else{
			echo 'Failed<br>';
		}
	}
	if ( $event[ 'project' ] == 1 ) {
		$sql = 'INSERT INTO `project` (`id`, `pin`) VALUES (NULL, "' . $_SESSION[ 'pin' ] . '");';
		echo 'Registering For Project Expo : ';
		if($db->query( $sql ) == true){
			echo 'Success<br>';
		}
		else{
			echo 'Failed<br>';
		}
	}
	
	

}
else{
	echo 'Failed<br><a href="login.php">Please Click Here to Login again!</a>';
}
echo '<script>if(confirm("Please Check your events and Note Down Your Event ID\'s When you go back to your Page")){window.location.href="mypage.php";}</script>';
?>