<?php
include('conn.php');
$amount_needed = $_POST['amount_needed'];
$details = $_POST['details'];
session_start();
$userid = $_SESSION['userid'];


$sql = "INSERT INTO `request` (`userid`, `amount_needed`, `details`) VALUES
 ('$userid', '$amount_needed', '$details');";

$results = mysqli_query($conn, $sql) or die(mysqli_error($conn));

$sql2 = "SELECT *  FROM `user` where `userid`= '$userid';";
$res2 = mysqli_query($conn, $sql2) or die(mysqli_error($conn));
$result2 = mysqli_fetch_assoc($res2);

$name = $result2['name'];

$to = "21bcs079@iiitdmj.ac.in";
$subject = "UNITY DONATION";

$message = "<h1>Request for Donation.</h1>";
$message .= "<p>We have received a request for collecting Fund from $name of $amount_needed Rs/- for the reason-'$details' .</p>";
$message .= "<h4>Contact the above user to verify if the request is valid or not.</h4>";


$header = "From:21bcs079@iiitdmj.ac.in \r\n";
$header .= "MIME-Version: 1.0\r\n";
$header .= "Content-type: text/html\r\n";

$retval = mail($to, $subject, $message, $header);

if ($retval == true) {

    echo "<script>
         alert('We have taken your Issue into consideration');
        window.location.href='http://localhost/project2/html/main.php';
        </script>";
} else {
    echo "<script>
            alert('Some error happend');
            window.location.href='http://localhost/project2/html/gethelp.html';
            </script>";
}
