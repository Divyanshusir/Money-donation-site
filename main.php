<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <style>
        *{
            margin:0px;
            padding: 0px;
            box-sizing: border-box;
        }
        a {
	transition: all 0.4s;
	-webkit-transition: all 0.4s;
  -o-transition: all 0.4s;
  -moz-transition: all 0.4s;
}
        .tablelement {
            cursor:pointer;
            font-family:Arial, Helvetica, sans-serif;
            color: white;
            font-size: 20px;
            margin: 0px;
            padding-top: 0px;            
        }
        .tablelement:hover{
            color: white;
            background-color: black;
            cursor:pointer;
            font-family:Arial, Helvetica, sans-serif;
            font-size: 20px;
            padding-top:20px;
            padding-bottom: 20px;
            padding-left: 5px;
            padding-right: 5px;
        }
        .selected{
            color: white;
            background-color: black;
            cursor:pointer;
            font-family:Arial, Helvetica, sans-serif;
            font-size: 20px;
            padding-top:20px;
            padding-bottom: 20px;
            padding-left: 5px;
            padding-right: 5px;
        }
         a{
            text-decoration: none;
        }

        #unitydonation {
            color: #333;
            margin: 0px;
            font-weight: 700;
            font-size: 25px;
            font-family: "Open Sans", "IBM Plex Sans", sans-serif;
            position: relative;
            top: 20px;
            left: 60px;
            margin-right: 700px;
            cursor: pointer;
        }
        #secheading {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            font-size: 50px;
            font-weight: 450;
            margin-top: 10px;
            margin-left: 380px;
            color: #1b6ac6;
        }
        #great{
            color: #ff7400;
        }
        #serve{
            color: #ff7400;
        }
        #together{
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            font-size: 44px;
            margin-top: 2px;
            margin-left: 383px;
            color: #bfff00;
        }
        #grace {
            font-size: 20px;
            font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
            /* position: relative; */
            margin-top:10px;
            margin-left: 385px;
            font-weight: 700;
        }
        #dog {
            width: 330px;
            font-size: 15px;
            font-weight: 700;
            background-color: white;
            filter: drop-shadow(0rem 0rem 1.0rem rgb(185, 183, 183));
            /* border-radius: 30px; */
            overflow: hidden;
            font-family:rubik,sans-serif;
        }
        #dog:hover{
            filter: drop-shadow(0rem 0rem 1.2rem rgb(22, 185, 49));
            border: 2px solid rgb(22, 185, 49);
        }
        #imagedog {
            width: 330px;
            height: 200px;
            width: 100%;
            transition: 0.5s all ease-in-out;
        }
        #imagedog:hover{
            transform: scale(1.1);  
        }
        #raise {
            /* padding:70px; */
            margin: 0px;
        }
        #children {
            width: 330px;
            font-size: 15px;
            font-weight: 700;
            background-color: white;
            filter: drop-shadow(0rem 0rem 1.0rem rgb(185, 183, 183));
            /* border-radius: 30px; */
            overflow: hidden;
            font-family:rubik,sans-serif;
        }
        #children:hover{
            filter: drop-shadow(0rem 0rem 1.2rem rgb(22, 185, 49));
            border: 2px solid rgb(22, 185, 49);
        }
        #imagechild{
            width: 330px;
            height: 200px;
            width: 100%;
            transition: 0.5s all ease-in-out;
        }
        #imagechild:hover{
            transform: scale(1.1);  
        }
        #education {
            width: 330px;
            /* position: relative;
            top: 450px;
            left: 840px; */
            font-size: 15px;
            font-weight: 700;
            background-color: white;
            filter: drop-shadow(0rem 0rem 1.0rem rgb(185, 183, 183));
            /* border-radius: 30px; */
            overflow: hidden;
            font-family:rubik,sans-serif;
        }
        #education:hover{
            filter: drop-shadow(0rem 0rem 1.2rem rgb(22, 185, 49));
            border: 2px solid rgb(22, 185, 49);
        }
        #imageedu{
            width: 330px;
            height: 200px;
            border-radius: 5px;
            /* opacity: 0.7; */
            /* border-top-right-radius: 30px;
            border-top-left-radius: 30px; */
            width: 100%;
            transition: 0.5s all ease-in-out;
            font-family:rubik,sans-serif;
        }
        #imageedu:hover{
            transform: scale(1.1);  
        }
        #hunger{
            width: 330px;
            /* position: relative;
            top: 770px;
            left: 300px; */
            font-size: 15px;
            font-weight: 700;
            background-color: white;
            /* background: radial-gradient(white,rgb(22, 185, 49)); */
            /* border-radius: 30px; */
            overflow: hidden;
            filter: drop-shadow(0rem 0rem 1.0rem rgb(185, 183, 183));
            font-family:rubik,sans-serif;
        }
        #hunger:hover{
            filter: drop-shadow(0rem 0rem 1.2rem rgb(22, 185, 49));
            border: 2px solid rgb(22, 185, 49);
        }
        #imagehunger{
            width: 330px;
            height: 200px;
            /* border-radius: 5px; */
            /* border-top-right-radius: 30px;
            border-top-left-radius: 30px; */
            /* opacity: 0.8; */
            width: 100%;
            transition: 0.5s all ease-in-out;
        }
        #imagehunger:hover{
            transform: scale(1.1);  
        }
        #calamity{
            width: 330px;
            /* position: relative;
            top: 770px;
            left: 660px; */
            font-size: 15px;
            font-weight: 700;
            background-color: white;
            /* background: radial-gradient(white,rgb(22, 185, 49)); */
            /* border: 2px solid rgb(255, 166, 0); */
            /* border-radius: 5px; */
            font-family:rubik,sans-serif;
            margin-left: 40px;
            /* box-shadow: 10px 10px 5px white; */
            overflow: hidden;
            filter: drop-shadow(0rem 0rem 1.0rem rgb(185, 183, 183));
        }
        #calamity:hover{
            filter: drop-shadow(0rem 0rem 1.2rem rgb(22, 185, 49));
            border: 2px solid rgb(22, 185, 49) ;
        }
        #imagecalamity{
            width: 330px;
            height: 200px;
            /* border-radius: 5px; */
            /* border-top-right-radius: 30px;
            border-top-left-radius: 30px; */
            /* opacity: 0.8; */
            background: linear-gradient(rgb(22, 185, 49),white);
            width: 100%;
            transition: 0.5s all ease-in-out;
        }
        #imagecalamity:hover{
            transform: scale(1.1);  
        }
        #row1{
            margin-left: 70px;
        }
        #table1{
            margin-top: 0px;
            margin-left: 200px;
            margin-bottom: 0px;
        }
        #table2{
            margin-top: -2px;
            margin-left:430px;
            /* padding-left: 400px; */
        }
        #tree{
            width: 300px;
            height: 200px;
        }
        .allimg{
  filter: grayscale(0);
  margin: 0px;
  /* background-color: rgb(255, 255, 255); */
}
.allimg:hover{
  filter: grayscale(100%);
  transition: 0s ease-in-out;
  font-size: 120%;
}
#table3{
    background-color: rgb(255, 255, 255);
    height: 100px;
    /* border: 3px solid rgb(174, 0, 255);
    border-radius: 50px; */
    /* height: 100px; */
    /* position: absolute;
    top: 250px; */
    padding-left: 500px;
}
#spanyou{
    padding-left: 4px;  
    font-family: Georgia, 'Times New Roman', Times, serif;
}
#spaninsta{
    padding-left: -1px; 
    font-family: Georgia, 'Times New Roman', Times, serif; 
}
#instaimg{
    padding-left: 4px;  
}
#lastsecdiv{
    height: 300px;
    background-color:rgb(22, 185, 49);

}
.every{
    font-family: "Open Sans","IBM Plex Sans",sans-serif ;
    font-weight: 700;
    color: white;
    font-size: 20px;
    letter-spacing: 2px;
    margin:0px;
}
.every:hover{
  text-decoration: underline;
}
.al{
    font-family: "Open Sans","IBM Plex Sans",sans-serif ;
    /* font-weight: 700; */
    color: white;
    font-size: 17px;
    letter-spacing: 0px;
    margin: 0px;
}
.al:hover{
    color: #ff7400;
}
#lastdiv{
    height:300px;
    background-color: black;
    /* color: white; */
}
.texts{
   color: white;
   font-family: "Open Sans","IBM Plex Sans",sans-serif ;
   margin: 0px;
   /* padding-top: 5px; */
}
/* #bigdiv{
    background: linear-gradient(rgb(129, 252, 135),white,rgb(129, 252, 135),white,rgb(129, 252, 135));
} */

#row2{
    margin-left: 40px;
}
#unity{
    color:#ff8800;
    text-transform:uppercase;
}
#donation{
    color:white;
    text-transform:uppercase;
}
.facebook{
    /* border-radius: 15px; */
    background-color: #1774df;
    font-family:Arial, Helvetica, sans-serif;
            font-weight: 100;
    color: white;
    font-size: 17px;
    border: none;
    cursor: pointer;
    width: 100px;
    height: 30px;
    padding-top:4px;
    padding-bottom: 5px;
    padding-left: 2px;
    padding-right: 3px;
}
.facebook:hover{
    color:#1774df ;
    background-color: white;
    border:2px solid #1774df;
}
.donate_now {
            /* border-radius: 15px; */
            /* background: linear-gradient(red, orange); */
            background-color: rgb(22, 185, 49);
            color: white;
            border: none;
            font-size: 18px;
            cursor: pointer;
            /* border-radius: 30px; */
            /* font-weight: 700; */
            font-family:Arial, Helvetica, sans-serif;
            font-weight: 100;
            padding-top:4px;
            padding-bottom: 5px;
            padding-left: 2px;
            padding-right: 3px;
            height: 30px;
            width: 105px;
        }
.donate_now:hover
        {
            color:rgb(22, 185, 49) ;
            background-color: white;
            border: 2px solid rgb(22, 185, 49);
        }
#header{
    margin-left: 70px;
    background-color:rgb(22, 185, 49);
    /* background:linear-gradient(rgb(46, 46, 46),rgb(255, 255, 255));  */
     height: 63px;
    position: sticky;
    top: 0px;
    z-index:+100;
    width: 90%;
    border-radius: 10em;
    margin-top: 10px;
    padding-right:10px ;
    /* filter: drop-shadow(0rem 0rem 0.2rem rgb(212, 211, 211)); */
}

#cuteboy{
    /* filter: grayscale(100%) brightness(100%) sepia(200%) hue-rotate(50deg) saturate(200%); */
    
width: 100%;
height: 700px;
position: relative;
top:-455px;
    z-index: -1;
}
#cuteboydiv{
    height: 645px;
   /* position: fixed; */
}
#main_div{
            height: 150px;
            /* background:linear-gradient(rgb(0, 153, 255),white); */
            font-size: 50px;
            color: white;
            /* position: relative; */
            /* top: 90px;
            width: 100%; */
            margin-top: 0px;   
            font-family: Arial, Helvetica, sans-serif;
            font-weight: 700;
            position: relative; 
            z-index: +10;
            top:-100px;
        }
        #popular:hover{
            cursor: pointer;
            color:rgb(22, 185, 49) ;
        }
        #line{
            /* border:3px solid black;  */
            height: 6px;
            margin-left:580px;
            margin-right:580px;
            background-color: black;
        }
        #line:hover{
            cursor: pointer;
            border:3px solid rgb(22, 185, 49) ;
        }
    </style>
</head>
<body>
    
    <header id="header">
        <table cellspacing="20px" align="right">
            <tr>
                <td class="all"><a  href="main.php" class="selected">
                        Home
                    </a></td>
                </div>
                
                    <?PHP
                            if(isset($_SESSION['userid']))
                            {echo'<td class="all"><a href="logout.php" class="tablelement">';
                            echo"Logout";
                            echo'</a></td>';
                            }
                            else{
                            echo'<td class="all"><a href="login.html" class="tablelement">';
                            echo"Login";
                            echo'</a></td>';
                            }
                             
                            ?>

                <td class="all"><a class="tablelement" href="aboutus.html">
                        About Us
                    </a></td>
                <td class="all"><a class="tablelement" href="register.html">
                        Register
                    </a></td>
                <td class="all"><a class="tablelement" href="gethelp.html">
                        Get Help
                    </a></td>
            </tr>
        </table>
        <div id="unitydonation"><b id="unity">Unity</b> <b id="donation">Donation</b></div>
    </header>

    <div id="cuteboydiv">
       <table cellspacing="50px" style="position: relative; z-index:2;top:300px;left: 30px;">
        <tr>
            <td><img src="image/health.png" alt="error" style="width:60px; height:60px;"></td>
            <td><img src="image/icons8-neighborhood-50.png" alt="error" style="width:55px; height:55px"></td>
            <td><img src="image/icons8-user-groups-50 (1).png" alt="error" style="width:50px; height:50px"></td>
        </tr>
        <tr>
            <td><div align="center" style="font-weight:700;">....</div></td>
            <td></td>
        </tr>
       </table>
        <div id="main_div">Everyone can be <br> <b id="great">Great</b> <br> because everyone can <b id="serve">Serve</b>
        </div>
        <img src="image/finalcutechild.jpg" alt="error" id="cuteboy">
    </div>
    <div style="display: grid; place-items: center; font-family:cursive;font-weight: 700;font-size: 50px;" id="popular">Popular Causes</div>
    <hr id="line"><br><br>
    <div id="bigdiv">
        <table id="table1" cellspacing="40px">
            <tr>
                <td id="row1">
                    <div id="dog" align="center">
                        <img id="imagedog" src="image/dogimage.jpg" alt="error">
                        <br><br> Support our work for animals while also fulfilling your own financial goals and objectives.
                        <br><br><p id="raise" align="center">Help us raise Rs 1,00,000.</p>
                        <table align="center" cellspacing="20px">
                            <tr>
                            <td><a href="https://en.wikipedia.org/wiki/Animal_welfare" class="facebook">Read more</a></td>
                                <td><a href="animal_payment.php" class="donate_now">Donate now</a></td>
                            
                            </tr>
                        </table>
                    </div>
                </td>
    
                <td>
                    <div id="children" align="center">
                        <img id="imagechild" src="image/children.jpg" alt="error">
                        <br><br></b> Support us in uplifting the life of street children with shelter, education,nutrition and health.
                        <br><br><p id="raise" align="center">Help us raise Rs 1,00,000.</p>
                        <table align="center" cellspacing="20px">
                            <tr>
                            <td><a href="https://en.wikipedia.org/wiki/Child_support" class="facebook">Read more</a></td>
                                <td><a href="child_payment.php" class="donate_now">Donate now</a></td>
                               
                            </tr>
                        </table>
                    </div>
                </td>
                <td>
                    <div id="education" align="center">
                        <img id="imageedu" src="image/education.jpg" alt="error">
                        <br><br> Don't Let Poverty Come in the Way of Learning. Be the Reason Every Child Goes to School.
                        <br><br><p id="raise" align="center">Help us raise Rs 1,00,000.</p>
                        <table align="center" cellspacing="20px">
                            <tr>
                            <td><a href="https://en.wikipedia.org/wiki/Education_Support" class="facebook">Read more</a></td>
                                <td><a href="education_payment.php" class="donate_now">Donate now</a></td>
                            </tr>
                        </table>
                    </div>
                </td>
            </tr>
        </table>
    
    
        <table id="table2" >
            <tr>
                <td>
                    <div id="hunger" align="center">
                        <img id="imagehunger" src="image/hunger.jfif" alt="error">
                        <br><br> Raise Your Helping Hands & Donate A Small Amount To Feed Hungry People.
                        <br><br><p id="raise" align="center">Help us raise Rs 1,00,000.</p>
                        <table align="center" cellspacing="20px">
                            <tr>
                            <td><a href="https://en.wikipedia.org/wiki/Hunger" class="facebook">Read more</a></td>
                                <td><a href="food_payment.php" class="donate_now">Donate now</a></td>
                              
                            </tr>
                        </table>
                    </div>
                </td>
    
                <td id="row2">
                    <div id="calamity" align="center">
                        <img id="imagecalamity" src="image/calamity.jpg" alt="error">
                        <br><br> Offer to help sort through donations to families affected by the disaster.
                        <br><br><p id="raise" align="center">Help us raise Rs 1,00,000.</p>
                        <table align="center" cellspacing="20px">
                            <tr>
                            <td><a href="https://en.wikipedia.org/wiki/Disaster" class="facebook">Read more</a></td>
                                <td><a href="disaster_payment.php" class="donate_now">Donate now</a></td>
                               
                            </tr>
                        </table>
                    </div>
                </td>
            </tr>
        </table>
    </div>

    <table class="links" id="table3" cellspacing="20px" align="center">
        <tr>
            <td id="youtube">
                <a href="https://www.youtube.com/watch?v=VN24wR4qfzY"><img class="allimg" src="image/icons8-youtube-64 (1).png" alt="youtube" ></a>
            </td>
            <td>
                <a href="#"><img class="allimg" id="instaimg" src="image/icons8-instagram-64 (1).png" alt="insta"></a>
            </td>
            <td>
                <a href="#"><img class="allimg" src="image/icons8-twitter-64.png" alt="Twitter"></a>
            </td>
            <td>
                <a href="#"><img class="allimg" src="image/icons8-github-64.png" alt="github"></a>
            </td>
            <td>
                <a href="#"><img class="allimg" src="image/icons8-linkedin-64.png" alt="linkedin"></a>
            </td>
            <td>
                <a href="#"><img class="allimg" src="image/icons8-mail-64.png" alt="mail"></a>
            </td>
        </tr>
    </table>
         
    <div id="lastsecdiv">
       <table cellspacing="30px" align="center" style="padding-left:275px; cursor:pointer;">
        <tr>
            <td class="every">ABOUT</td>
            <td class="every">COMMUNITY</td>
            <td class="every">PARTICIPATE</td>
            <td class="every">GET HELP</td>
            <td class="every">DOWNLOAD</td>
        </tr>
        <tr>
            <td class="al">Who's Who</td>
            <td class="al">Mailing lists</td>
            <td class="al">Submitting Pull</td>
            <td class="al">Documentation</td>
            <td class="al">Releases</td>
        </tr>
        <tr>
            <td class="al">Thanks</td>
            <td class="al">Becoming a committer</td>
            <td class="al">Requests</td>
            <td class="al">Wiki</td>
            <td class="al">Plugins</td>
        </tr>
        <tr>
            <td class="al">Sponsorship</td>
            <td class="al">Events</td>
            <td class="al">Reporting issues</td>
            <td class="al">Community Support</td>
            <td class="al">Building from source</td>
        </tr>
        <tr>
            <td class="al">Security</td>
            <td class="al">Donation events</td>
            <td class="al">Improvements</td>
            <td class="al">Commercial support</td>
            <td class="al">Previous Releases</td>
        </tr>
       </table>
    </div>

    <div id="lastdiv">       
     <p align="center" class="texts"><br><br><br> Copyright © 2022-2023 The Unity Donation Foundation.</p><br>
     <p align="center" class="texts">Licensed under the national license, version 2.0</p><br>
     <p align="center" class="texts">Unity, Unity Donation, Donation, the Unity feather logo and the Unity</p><br>
     <p align="center" class="texts">Donations logo are trademarks of The Donation Software Foundation.</p><br>
     <p align="center" class="texts">HTML and CSS are registered trademarks of this project and/or its affiliates.</p><br>
     <p align="center" class="texts">The Unity Donation website conforms to the Unity Software Foundation Privacy Policy</p>
    </div>

</body>
</html>