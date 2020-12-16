<?php  
session_start();
include("connection.php");  
if(isset($_POST['login-submit']))  
{  
    $username=$_POST['username'];  
    $password=$_POST['password'];  
  
    $check_user="select * from admin WHERE username='$username'AND password='$password'";  
    $run=mysqli_query($con,$check_user);  
  
    if(mysqli_num_rows($run))  
    {  
        echo "<script>window.open('deleteuser.php','_self')</script>";  
  
        $_SESSION['username']=$username;//here session is used and value of $username store in $_SESSION.  
  
    }  
    else  
    {  
      echo "<script>alert('Username or Password is incorrect!')</script>";  
    }  
}
//Redirect from login to index if session exist
if(isset($_SESSION['username'])){
        echo "<script> location.href='deleteuser.php'; </script>";
}
?>  
<!doctype html>
<html lang="en">
  <head>
        <style type="text/css">
        body{
/*        background-image: url(https://source.unsplash.com/daily);}
*/    </style>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Login</title>
    
    <script>  
            function validation()  
            {  
                var id=document.f1.user.value;  
                var ps=document.f1.pass.value;  
                if(id.length=="" && ps.length=="") {  
                    alert("User Name and Password fields are empty");  
                    return false;  
                }  
                else  
                {  
                    if(id.length=="") {  
                        alert("User Name is empty");  
                        return false;  
                    }   
                    if (ps.length=="") {  
                    alert("Password field is empty");  
                    return false;  
                    }  
                }                             
            }  
        </script>

  </head>
  <body>
    
    <div id="login">
        <h3 class="text-center text-white pt-5">ADMIN LOGIN</h3>
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" action = "" onsubmit = "return validation()" method = "POST">
                             <h3 class="text-center text-info">ADMIN LOGIN</h3>
                            <div class="form-group">
                                <label for="username" class="text-info">Username:</label><br>
                                <input type="text" name  = "username" id="username" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-info">Password:</label><br>
                                <input type="password" name  = "password" id="password" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="remember-me" class="text-info"><span>Remember me</span> <span><input id="remember-me" name="remember-me" type="checkbox"></span></label><br>
                                <input type="submit" name="login-submit" class="btn btn-info btn-md" value="Login">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>