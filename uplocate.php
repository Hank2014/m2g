<?php session_start(); ?>
<?php
include "config.inc.php";
//$_SESSION['username']="vrteb";//testdata
$user=$_SESSION['username'];
$long = $_POST['longitude'];
$lat = $_POST['latitude'];

$result = mysql_query("UPDATE Online SET place_lon ='$long', place_lat = '$lat' WHERE user='$user'");
if($result === FALSE) {
				die(mysql_error()); // TODO: better error handling
}

?>