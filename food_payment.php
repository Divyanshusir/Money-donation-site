<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/donation.css">
    <link rel="stylesheet" href="css/login.css">
    <title>Donation Page</title>
</head>
<body background="image/hungerbackground.jpg" style="    background-repeat: no-repeat;
background-size: 100%; ">

    <div class="navbar"><header id="header">
        <table cellspacing="20px" align="right">
            <tr>
                <td class="all"><a  href="main.php" class="tablelement">
                        HOME
                    </a></td>
                </div>
                
                <?PHP
                            if(isset($_SESSION['userid']))
                            {echo'<td class="all"><a href="logout.php" class="tablelement">';
                            echo"LOGOUT";
                            echo'</a></td>';
                            }
                            else{
                            echo'<td class="all"><a href="login.html" class="tablelement">';
                            echo"LOGIN";
                            echo'</a></td>';
                            }
                             
                            ?>
                <td class="all"><a class="tablelement" href="aboutus.html">
                        ABOUT US
                    </a></td>
                <td class="all"><a class="tablelement" href="register.html">
                        REGISTER
                    </a></td>
                <td class="all"><a class="tablelement" href="gethelp.html">
                        GET HELP
                    </a></td>
                <td class="all"><a href="#" class="selected">
                        PAYMENT
                    </a></td>
            </tr>
        </table>
        <div id="unitydonation"><b id="unity">Unity</b> <b id="donation">Donation</b></div>
    </header></div>


    <div class="qr">
    <h1 style="color:rgb(0, 0, 0);">Safe pay with QR </h1>

	<div class="myProducts">
		<div class="myProducts-gallery">
			<img src="image/qrcode1.jpeg"
				alt="click here"
				onclick="myImageFunction(this)">
			<img src="image/qrcode2.jpeg"
				alt="click here"
				onclick="myImageFunction(this)">
			<img src="image/qrcode3.jpeg"
				alt="click here"
				onclick="myImageFunction(this)">
			<img src="image/qrcode4.jpeg"
				alt="click here"
				onclick="myImageFunction(this)">
		</div>

		<div class="image-container">
			<img id="img-Box" src="image/qrcode1.jpeg"
				alt="click here">
		</div>
	</div>
</div>
<div class="paymentform" >
    <form action="payment.php?causeid=Hunger1" method="post" >
        <span class="formtitle">
           <font style="color:rgb(0, 0, 0) ;">TRANSACTION DETAILS</font> 
        </span>

        <div class="commoninput" >
            <input class="data" type="text" required name="transactionid" placeholder="Enter the transactionid">
            <span class="focusonselect"></span>
            <span class="inputcontent">
            </span>
        </div>
        
        <div class="commoninput" >
            <input class="data" type="number" name="amount" required placeholder="Amount in Rs.">
            <span class="focusonselect"></span>
            <span class="inputcontent">
                
            </span>
        </div>
        
        <div class="container-btn">
            <button class="btn">
                Submit
            </button>
        </div>

        <div class="Register">
            <font style="color:rgb(0, 0, 0);">
            First Time Donation ? </font>
            <a class="txt2" href="register.html" style=" color:rgb(45, 112, 0);">
                Register
                
            </a>
        </div>
    </form>
    </div>
	<script>
		function myImageFunction(productSmallImg) {
			var productFullImg = document.getElementById("img-Box");
			productFullImg.src = productSmallImg.src;
		}
	</script>
</body>
</html>

