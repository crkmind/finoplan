<?php
require_once('connection.php');
$user = $pass = '';

    $username = $_POST['username'];  
    $password = $_POST['password'];

    $fname = $_POST['fname'];  
    $lname = $_POST['lname'];
$sql = "INSERT INTO `login` (`id`, `fname`, `lname`, `username`, `password`) VALUES (NULL, '$fname', '$lname', '$username', '$password')";
$result = mysqli_query($con, $sql);
if($result)
{
	// sql to create table
$sql = "CREATE TABLE `finoplan`.$username ( `id` INT(255) NOT NULL AUTO_INCREMENT , `excat` TEXT NULL , `incat` TEXT NULL , `iamount` BIGINT(255) NULL , `date` DATE NULL DEFAULT CURRENT_TIMESTAMP , `eamount` BIGINT(255) NULL , `note` TEXT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB";
$result = mysqli_query($con, $sql);
	if($result){
		echo '<script>alert("Successfully Registed You Will Be Redircted To Login Page")</script>';
		echo '<script>window.location.replace("login.php")</script>';
	}
}
else
{
	echo "Error :".$sql;
}
?>