<?php
session_start();
//code for unauthorized access
if(!isset($_SESSION['username'])){
    session_unset();
    session_destroy();
    echo "<script> location.href='login.php'; </script>";
}