
<!DOCTYPE html>
<!-- === Coding by CodingLab | www.codinglabweb.com === -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- ===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <!-- ===== CSS ===== -->
    <link rel="stylesheet" href="style1.css">
         
    <!--<title>Login & Registration Form</title>-->
</head>
<body>
    
    <div class="container">
        <div class="forms">
            <div class="form login">
                <span class="title">Login</span>

                <form action="#" method="POST">
                    <div class="input-field">
                        <input type="text" name="email" placeholder="Enter your email" required>
                        <i class="uil uil-envelope icon"></i>
                    </div>
                    <div class="input-field">
                        <input type="password" name="password" class="password" placeholder="Enter your password" required>
                        <i class="uil uil-lock icon"></i>
                        <i class="uil uil-eye-slash showHidePw"></i>
                    </div>

                    <div class="checkbox-text">
                        <a href="#" class="text">Forgot password?</a>
                    </div>

                    <div class="input-field button">
                        <input type="submit" name="login" value="Login">
                        <li class="nav-item nav-item2">
                  <a class="nav-link" href="movie.html"></a>
                </li>
                    </div>
                </form>
				<?php
if(isset($_POST['login']))
{
error_reporting(1);
include("config.php");
$email=$_POST['email'];
$password=$_POST['password'];
$sql = "select * from user where email='".$email."' and password='".$password."'";
$result = mysqli_query($con,$sql);
$count=mysqlI_num_rows($result);
if($count>0)
{ 
session_start();
$_SESSION['user']=$email;
$aid=$_SESSION['user'];
echo "<script>
alert('Login Successful as $aid');
</script>";
echo "<script> location.href='index1.html'; </script>";
}
else
{
    echo "<script>
alert('Invalid Username or Password');
</script>";
echo "<script> location.href='login1.php'; </script>";
} 
}
?>    

                <div class="login-signup">
                    <span class="text">Not a member?
                        <a href="register.php" class="text signup-link">Signup Now</a>
                    </span>
                </div>
            </div>

        </div>
    </div>

    <script src="script.js"></script>

</body>
</html>
