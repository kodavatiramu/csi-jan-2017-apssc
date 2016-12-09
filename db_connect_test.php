<?php
session_start();
	$db = new mysqli( 'sql202.rf.gd', 'rfgd_19176149', 'nihanth007', 'rfgd_19176149_registrations' );
	$login = true;
	$sql = 'SELECT COUNT(*) FROM entry';
	if ( $result = $db->query( $sql ) ) {
		$temp = $result->fetch_row();
		$count = $temp[0];
	}
 else {
	$login = false;
	echo $_SESSION[ 'pin' ];
	echo 'Failed to execute<br>';
	echo $db->error;
}
?>