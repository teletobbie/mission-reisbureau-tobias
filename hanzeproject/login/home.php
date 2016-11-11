<?php
session_start();
require 'include/functions.php';
If(!isset($_SESSION['account'])){
    header("Rfresh:0; URL=index.html");
}

if (isset($_GET['logoff'])){
    session_destroy();
    header("Refresh:0; URL=index.html");
}

?>


<!DOCTYPE html>
<!--
Deze website is gemaakt door Henk-Jan Huls
Het gebruik maken van deze code is tenstrengste verboden.
tenzij hier toestemming voor is gegeven.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link href="../css/bootstrap.css" rel='stylesheet' type='text/css' />
	<script src="../js/jquery.min.js"></script>
	<link href="../css/style.css" rel="stylesheet" type="text/css" media="all" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
        <title>HOME||Account</title>
        <style>
body {margin:0;
background-image: url("image/back.jpg");
}
ul.topnav {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

ul.topnav li {float: left;}

ul.topnav li a {
  display: inline-block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  transition: 0.3s;
  font-size: 17px;
}

ul.topnav li a:hover {background-color: #555;}

ul.topnav li.icon {display: none;}

@media screen and (max-width:680px) {
  ul.topnav li:not(:first-child) {display: none;}
  ul.topnav li.icon {
    float: right;
    display: inline-block;
  }
}

@media screen and (max-width:680px) {
  ul.topnav.responsive {position: relative;}
  ul.topnav.responsive li.icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  ul.topnav.responsive li {
    float: none;
    display: inline;
  }
  ul.topnav.responsive li a {
    display: block;
    text-align: left;
  }
}
</style>
    </head>
    <body>
        <ul class="topnav" id="myTopnav">
            <li><a class="active" href="home.php">Home</a></li>
            <li><a href="bookingOverview.php">My Bookings</a></li>
            <li><a href="home.php?logoff=true">Logoff</a></li>
            <li class="icon">
                <a href="javascript:void(0);" style="font-size:15px;" onclick="myFunction()">☰</a>
            </li>
        </ul>

        <script>
        function myFunction() {
            var x = document.getElementById("myTopnav");
            if (x.className === "topnav") {
                x.className += " responsive";
            } else {
                x.className = "topnav";
            }
        }
        </script>



<div style="padding-left:16px">
    <?php
                  $info = new login();
                  $info->getname();
                  
      
      ?>

  <p>On this page you can find your bookings.</p>
  </br>
 
</div>

     
        
    </body>
</html>
