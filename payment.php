<?php
include ('conn.php');
session_start();

if(isset($_SESSION['userid']))
{

$userid=$_SESSION['userid'];
$transactionid= $_POST['transactionid'];
$amount= $_POST['amount'];
$causeid = $_GET['causeid'];


                            
                            
$sql="INSERT INTO `donation` (`userid`, `causeid`, `transactionid`, `amount`) VALUES
 ('$userid', '$causeid', '$transactionid', '$amount');";

$result = mysqli_query($conn,$sql) or die(mysqli_error($conn));

$sql3="SELECT *  FROM `cause` where `causeid`= '$causeid';";
$res3 = mysqli_query($conn,$sql3) or die(mysqli_error($conn));
$result3=mysqli_fetch_assoc($res3);
$description=$result3['description'];

$sql2="SELECT *  FROM `user` where `userid`= '$userid';";
$res2 = mysqli_query($conn,$sql2) or die(mysqli_error($conn));
$result2=mysqli_fetch_assoc($res2);

$emailid=$result2['email'];
$name=$result2['name'];

$to = $emailid;
         $subject = "UNITY DONATION";
         
         $message = "<b>Donation Confirmation.</b>";
         $message .= "<h1>Thankyou For your kind support.</h1>";
         $message .="<p>Dear $name we have recieved $amount Rs/- from you with Transaction id '$transactionid' for the support of $description .</p>";
         $message .="<h4>We assure you your money we will be used for the right cause.</h4>";


         $header = "From:21bcs079@iiitdmj.ac.in \r\n";
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";
         
         $retval = mail ($to,$subject,$message,$header);
         
         if( $retval == true ) {

            $sql4 = "UPDATE `cause` SET `amount_donated` = `amount_donated` + '$amount' WHERE `cause`.`causeid` = '$causeid';";
            $res4 = mysqli_query($conn,$sql4) or die(mysqli_error($conn));
            
            
            $sql5="SELECT *  FROM `cause` where `causeid`= '$causeid';";
            $res5 = mysqli_query($conn,$sql5) or die(mysqli_error($conn));
            $result5=mysqli_fetch_assoc($res5);
            $amount_required=$result5['amount_required'];
            $amount_donated=$result5['amount_donated'];
            
            if($amount_donated>=$amount_required){
            
               $to2 = "21bcs079@iiitdmj.ac.in";
                     $subject2 = "UNITY DONATION";
                     
                     $message2 = "<h1>Fund Raised</h1>";
                     $message2 .="<p>Total amount of $amount_required Rs/- has been collected. <br> 
                      For $causeid - '$description' have been collected, please forward this money to required place.</p>";
            
            
                     $header2 = "From:21bcs079@iiitdmj.ac.in \r\n";
                     $header2 .= "MIME-Version: 1.0\r\n";
                     $header2 .= "Content-type: text/html\r\n";
                     
                     $retval2= mail ($to2,$subject2,$message2,$header2);
            
            }


            echo "<script>
            alert('Thank You for the Donation');
            window.location.href='http://localhost/project2/html/main.php';
            </script>";
         }
         
         else {
            echo "<script>
            alert('Some error happend');
            window.location.href='http://localhost/project2/html/main.php';
            </script>";
         }

      }

else{
         echo "<script>
            alert('Please Login First');
            window.location.href='http://localhost/project2/html/main.php';
            </script>";
         }



?>