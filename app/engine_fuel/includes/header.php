<?php
  include("functions.php");
  $allyears = getyears();
  $allmakes = getmakes();
?>
<!doctype html>
<html>
<head>
  <style type="text/css">
    .tab-content .fade
    {
      opacity: 1!important;
    }
  </style>
  <?php include("msgprocess.php");?>
  <script type="text/javascript">
    function toggledivs(valuediv)
    {
      if(valuediv=="vh1")
      {
        document.getElementById("box1after").style.display = "none";
        document.getElementById("box1before").style.display = "";
        $("#container").html("");
        $("#veh1_10").html("");
        $("#veh1_yearly").html("");
        $("#veh1_monthly").html("");
        $("#veh1_weekly").html("");
        $("#veh1_mile").html("");

        $("#saving_10").html("");
        $("#saving_yearly").html("");
        $("#saving_monthly").html("");
        $("#saving_weekly").html("");
        $("#saving_mile").html("");

      }
      else
      {
        document.getElementById("box2after").style.display = "none";
        document.getElementById("box2before").style.display = "";
        $("#container").html("");
        $("#veh2_10").html("");
        $("#veh2_yearly").html("");
        $("#veh2_monthly").html("");
        $("#veh2_weekly").html("");
        $("#veh2_mile").html("");

        $("#saving_10").html("");
        $("#saving_yearly").html("");
        $("#saving_monthly").html("");
        $("#saving_weekly").html("");
        $("#saving_mile").html("");

      }
    }
  </script>
<style>
  .remove
  {  
    position: absolute;
    right: 0px;
    color: red;
    cursor: pointer; 
    font-size: 22px;
  } 
</style>
<meta charset="utf-8">
<title>Web App</title>
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
<link rel="stylesheet" href="css/main.css" type="text/css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,500,700" type="text/css">
<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
</head>
<body>
<!--Header start-->
<div id="cont-header">
      <header class="container">
        <nav class="nav-wrap">
          <a class="logo" href="http://itsjal.com/engine_fuel/">
            Fuel WebApp Calculator
          </a>

          <ul id="menu-primary" class="nav">
            <li><a href="#">Find a Car</a></li>
            <li><a href="/guides/">Save Money & Fuel</a></li>
            <li><a href="/tools/">Benefits</a></li>
            <li><a href="/blog/">My MPG</a></li>
      			<li><a href="/blog/">Advanced Cars & Fuels</a></li>
      			<li><a href="/blog/">About EPA Ratings</a></li>
          </ul>

        </nav>
      </header>
    </div>