<?php
$mysqli = new mysqli('sql202.rf.gd','rfgd_19176149','nihanth007','rfgd_19176149_registrations');
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
echo $mysqli->host_info . "\n";
?>
