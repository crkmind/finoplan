<?php
require_once('connection.php');
include ('authentication.php');

$addcatname = '';
$usr = $_SESSION['username'];


    $addcatname = $_POST['addcatname'];  
$sql = "INSERT INTO `$usr` (id, excat) VALUES (NULL, '$addcatname')";
$result = mysqli_query($con, $sql);
if($result)
{
	header("Location: categories.php");
}
else
{
	echo "Error :".$sql;
}
?>