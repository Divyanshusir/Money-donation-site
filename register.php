<?php
include ('conn.php');

$name= $_POST['name'];
$emailid= $_POST['emailid'];
$phone= $_POST['phone'];
$country= $_POST['country'];
$state= $_POST['state'];
$location= $_POST['location']; 
$userid= $_POST['userid'];
$password= $_POST['password'];

$sql="INSERT INTO `user` (`userid`, `password`, `name`, `phone`, `email`, `country`, `state`, `location`) VALUES
 ('$userid', '$password', '$name', '$phone', '$emailid', '$country', '$state', '$location');";

$results = mysqli_query($conn,$sql);
// $results = mysqli_query($conn,$sql) or die(mysqli_error($conn));

session_start();


if($results===false)
{
    echo "<script>
alert('PLEASE ENTER A UNIQUE USERID');
window.location.href='http://localhost/project2/html/register.html';
</script>";
}
else{
    $_SESSION['userid']=$userid; 
echo "<script>
alert('Registration Successfull');
window.location.href='http://localhost/project2/html/main.php';
</script>";
}

?>
