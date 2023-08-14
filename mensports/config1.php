<?php 

$con = mysqli_connect("localhost","root","","sport");

if(!$con){
	echo "Connected Failed" . mysqli_connect_error();
}
?>