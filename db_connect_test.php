<?php
session_start();
if ( isset( $_SESSION[ 'pin' ] ) ) {
	$db = new mysqli( 'sql202.rf.gd', 'rfgd_19176149', 'nihanth007', 'rfgd_19176149_registrations' );
	$login = true;
	$sql = 'select * from entry where pin="15551a0589";';
	if ( $result = $db->query( $sql ) ) {
		$temp = $result->fetch_row();
		echo $temp;
		$event_name[ 7 ] = 'Paper Presentation';
		$event_name[ 8 ] = 'Poster Presentation';
		$event_name[ 9 ] = 'Kode Kraft';
		$event_name[ 10 ] = 'Test Ur Wits';
		$event_name[ 11 ] = 'App Development';
		$event_name[ 12 ] = 'Technical Quiz';
		$event_name[ 13 ] = 'Project Expo';
		$event_name[ 14 ] = 'Startup Ideas';
		$event_name[ 15 ] = 'Ad Making';
		$event_name[ 16 ] = 'Movie Making';
		$event_name[ 17 ] = 'Pic A Cam';
		$event_name[ 18 ] = 'Treasure Hunt';
		$event_name[ 19 ] = 'Workshop on Cyber Security';
	}

} else {
	$login = false;
	echo $_SESSION[ 'pin' ];
	echo 'Failed to execute<br>';
	echo $db->error;
}
?>