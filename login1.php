<?php
if(isset($_POST['login']))
{
error_reporting(1);
include("config.php");
$gmail=$_POST['gmail'];
$password=$_POST['password'];
$sql = "select * from user where email='".$gmail."' and password='".$password."'";
$result = mysqli_query($con,$sql);
$count=mysqlI_num_rows($result);
if($count>0)
{ 
session_start();
$_SESSION['user']=$gmail;
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