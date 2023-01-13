<?php
include ('conn.php');
$userid= $_POST['userid'];
$password= $_POST['password'];

$sql="SELECT * FROM `user` WHERE `userid`='$userid' AND `password`='$password' ;";
$result = mysqli_query($conn,$sql) or die(mysqli_error($conn));
session_start();
$_SESSION['userid']=$userid;
function function_alert($message) {
    echo "<script>alert('$message');</script>";
}

if($results=mysqli_fetch_assoc($result))
{
$text="LOGIN SUCCESSFUL! Welcome ";
$name=$results['name']; 
$display=$text.$name;

function_alert($display);
echo"<script>window.location.href='http://localhost/project2/html/main.php';</script>"; 
}


else
{
$display="LOGIN FAILED! Check your credentials  ";
function_alert($display);

echo"<script>window.location.href='http://localhost/project2/html/login.html';</script>"; 

}

?>