<?php
require_once('connection.php');
include ('authentication.php');
$catname = '';
$date = '';
$usr = $_SESSION['username'];
$note = '';
$amount = '';

    $catname = $_POST['catos'];
    $date = $_POST['date'];
    $note = $_POST['note'];
    $amount = $_POST['amount'];  
$sql = "INSERT INTO `$usr` (`id`, `date`, `incat`, `iamount`, `note`) VALUES (NULL, '$date', '$catname', '$amount', '$note')";

$result = mysqli_query($con, $sql);
if($result)
{
	header("Location: transactions.php");
}
else
{
	echo "Error :".$sql;
}
?>