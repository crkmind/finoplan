<?php
include ('authentication.php');

error_reporting(0);
$usr = $_SESSION['username'];
$con = mysqli_connect('localhost', 'root', '', 'finoplan'); 
$id = $_GET['id'];
$query = "DELETE FROM $usr WHERE id = '$id'";
$data = mysqli_query($con,$query);
if($data){
		header("Location: transactions.php");
}
else{
	echo "Oops.. Something Went Wrong... Please Check the code";
}
?>