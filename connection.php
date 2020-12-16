<?php
    $con = mysqli_connect('localhost', 'root', '', 'finoplan');  
    if(mysqli_connect_errno()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    }  
?>  