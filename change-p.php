<?php
session_start();
include "config.php";

// Retrieve the user's ID and new email and password from a form or other source
$Email = $_POST['Email'];
$Password = $_POST['Password'];
$ConfirmPass = $_POST['ConfirmPass'];

// Prepare the UPDATE query
$query = "UPDATE tb_user SET Password = '$Password', ConfirmPass = '$ConfirmPass' WHERE Email = '$Email'";

// Execute the query
$result = mysqli_query($conn, $query);

// Check if the update was successful
if ($result) {
    echo "Update successful!";
	header("Location:login.php");
} else {
    echo "Update failed.";
	header("Location:changepass.php");
}

// Close the database connection
mysqli_close($conn);
    
?>

