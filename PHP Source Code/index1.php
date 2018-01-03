<?php
  include("functions.php");
  $allyears = getyears();
  $allmakes = getmakes();
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Web App</title>
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
<link rel="stylesheet" href="css/main.css" type="text/css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,500,700" type="text/css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
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

    <div id="cont-masthead">
      <div class="container">
        
        <h1>How much can I save fuel? </h1>
        <p>Fuel economy calculator</p>
      </div>
    </div>
<!--Header End-->
<!--main content start-->
<div class="row">
	<div class="container">
		<div class="col-lg-12">
    		<h1>Save Money</h1>
    		<h4>Improved fuel economy saves you money every time you fill up!</h4>
    		<p>A vehicle that gets 30 MPG will cost you $625 less to fuel each year than one that gets 20 MPG (assuming 15,000 miles of driving annually and a fuel cost of $2.50). Over a period of 5 years, the 30-MPG vehicle will save you $3,125.</p></div>
		</div>
	</div>
</div>	
<div class="row">
	<div class="container">
    	<div class="col-lg-12">
        	<strong><p class="text-center">Calculate Fuel Costs and Savings</p></strong>
        </div>	
</div>	
    <div class="container">
    	<div class="col-lg-6 block">
		<div id="box1before">
        <div class="col-lg-6 block-1">
        	<h2>Vehicle A</h2>
        </div>
<div class="col-lg-6 block-1">
    
           <!-- Trigger the modal with a button -->
    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal1">Select Vehicle</button>
     <h6>OR</h6>
     <h4>Enter a value</h4>
     <form action="#" type="post">
     <input type="text" name="MGP"><input type="submit" value="MGP"></form>

   <?php include("modalbox1.php");?>
  </div>
</div>
  <div id="box1after" style="width:100%;float: left;display:none;">
  <div class="col-lg-6 block-1">
  <h2>Vehicle A</h2>
  <div class="block_car">
   <img src="images/gasBlue.png">
    <img src="images/2018_Acura_MDX.jpg">  
  	<h6 id="v1_year_model">2018 Acura RDX AWD</h6>
    <p style="font-size:11px;" id="v1_litre_cyl_trans">3.5 L, 6 cyl, Automatic</p>
  </div>  
  </div>
<div class="col-lg-6 block-1">
<div id="box1after" class="block_table_2" style="width:100%;float: left;">
   <table>
   <tr>
   <th colspan="2" id="v1_fuel">Premium Gasoline</th>
   </tr>
   <tr>
   <td><span  id="v1_comb">22</span> <br/> Comb</td>
   <td>MPG <span id="v1_city_hw">19 27</span> <br/>city hwy</td>
   </tr>
   </table>
  </div>
</div>
</div>
</div>    
        <div class="col-lg-6 block">
<div id="box2before">
        <div class="col-lg-6 block-2">
        	<h2>Vehicle B</h2>
        </div><div class="col-lg-6 block-2">
         <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal2">Select Vehicle</button>
   <h6>OR</h6>
   <h4>Enter a value</h4>
  <form action="#" type="post"><input id="mgp" type="text" name="MGP"><input type="submit" value="MGP"></form>
  <?php include('modelbox2.php');?>
    </div>
</div>

<div id="box2after" style="display:none;">
<div class="col-lg-6 block-2">
  <h2>Vehicle B</h2>
  <div class="block_car">
   <img src="images/gasBlue.png">
    <img src="images/2018_Acura_MDX.jpg">  
	<h6>2018 Acura RDX AWD</h6>
<p style="font-size:11px;">3.5 L, 6 cyl, Automatic</p>
  </div> </div>
<div class="col-lg-6 block-2">
<div class="block_table_2" style="width:100%;float: left;">
   <table>
   <tr>
   <th colspan="2">Premium Gasoline</th>
   </tr>
   <tr>
   <td>22 <br/> Comb</td>
   <td>MPG 19 27 <br/>city hwy</td>
   </tr>
   </table>
  </div>
</div>  

</div>

</div>

</div>
</div>
<!--accordian---->
<div class="row">
<div class="container">
<div id="accordion" role="tablist">
  <div class="card">
    <div class="card-header" role="tab" id="headingOne">
      <h5 class="mb-0">
        <a data-toggle="collapse" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          Personalize Fuel Prices and Drive Habits 1
        </a>
      </h5>
    </div>

    <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">
      <div class="card-body">
      	<div class="calcu_form">
        <ul class="cal_form">
        <li>I drive</li>
        <li><input class="cal_input" type="text" value="15,000"></li>
        <li>miles each year.</li>
        </ul>
        <ul class="cal_form">
        <li>I drive</li>
        <li><input class="cal_input2" type="text" value="50"></li>
        <li>% in city driving.</li>
        </ul>
         <ul class="cal_form">
        <li>I plan to keep my vehicle</li>
        <li><input class="cal_input3" type="text" value="5"></li>
        <li>years</li>
        </ul>
        <h6>Fuel Price:</h6>
        Premium
        <div class="input-group">
			<div class="input-group-addon input-sm">$</div>
				<input class="form-control input-sm" id="fpricepremium" value="50.00" type="text">
			<div class="input-group-addon input-sm">/gal</div>
        </div>
        <button type="button" id="recalcfuel" class="btn btn-success btn-xs" style="margin-top: 10px;">Recalculate</button>
      	</div>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" role="tab" id="headingTwo">
      <h5 class="mb-0">
        <a class="collapsed" data-toggle="collapse" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
         Fuel Costs 
        </a>
      </h5>
    </div>
    <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo" data-parent="#accordion">
      <div class="card-body">
      <div class="col-lg-6">
        <table>
        <tr>
        <th></th>
        <th style="color:red;">Vehicle A</th>
        <th style="color:green;">Vehicle B</th>
        <th>Veh. A Saves</th>
        </tr>
        <tr>
        <td><strong>10 Years</strong></td>
        <td>$892,860</td>
        <td>$2,500,000</td>
        <td><strong>$1,607,140</strong></td>
        </tr>
        <tr>
        <td><strong>Yearly</strong></td>
        <td>$89,286</td>
        <td>$250,000</td>
        <td><strong>$160,714</strong></td>
        </tr>
        <tr>
        <td><strong>Monthly</strong></td>
        <td>$7,441</td>
        <td>$20,833</td>
        <td><strong>$13,392</strong></td>
        </tr>
        <tr>
        <td><strong>Weekly</strong></td>
        <td>$1,717</td>
        <td>$4,808</td>
        <td><strong>$3,091</strong></td>
        </tr>
        <tr>
        <td><strong>Per Mile</strong></td>
        <td>178.6¢</td>
        <td>500.0¢</td>
        <td><strong>321.4¢</strong></td>
        </tr>
        </table>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</div>
<!--main content ends-->
<!--footer start-->

        <div id="cont-footer">
      <footer class="container white">
        <div class="row">
          <div class="grid-third">
            <h4>About us</h4>
            <p>
              Improved fuel economy saves you money every time you fill up!
            </p>
          </div>          
          <div class="grid-third">
            <h4>Content Delivery Networks</h4>
            <div class="row">
              <div class="grid-half">
                <ul class="list-unstyled white">
                    
                  <li><a href="#">Find a Car</a></li>
            <li><a href="/guides/">Save Money & Fuel</a></li>
            <li><a href="/tools/">Benefits</a></li>
            <li><a href="/blog/">My MPG</a></li>
			<li><a href="/blog/">Advanced Cars & Fuels</a></li>
			<li><a href="/blog/">About EPA Ratings</a></li>
                   
                </ul>
              </div>
              <div class="grid-half">
                <ul class="list-unstyled white">
                     
                  <li><a href="#">Find a Car</a></li>
            <li><a href="/guides/">Save Money & Fuel</a></li>
            <li><a href="/tools/">Benefits</a></li>
            <li><a href="/blog/">My MPG</a></li>
			<li><a href="/blog/">Advanced Cars & Fuels</a></li>
			<li><a href="/blog/">About EPA Ratings</a></li>
                  
                </ul>
              </div>
            </div>
          </div>
          <div class="grid-third">
            <h4>Vehicle Blog</h4>
            <ul>
              
              <li><a href="#">Find a Car</a></li>
            <li><a href="/guides/">Save Money & Fuel</a></li>
            <li><a href="/tools/">Benefits</a></li>
            <li><a href="/blog/">My MPG</a></li>
			<li><a href="/blog/">Advanced Cars & Fuels</a></li>
			<li><a href="/blog/">About EPA Ratings</a></li>
              
            </ul>
          </div>
        </div>
      </footer>
    </div>



    <div>
      <div class="container gray padding-top-small">
        <ul class="list-inline margin-bottom-small gray">
          <li><small>© 2011-2017 All rights reserved.</small></li>
          <!--<li><small> <a href="http://www.turbobytes.com/">TurboBytes</a></small></li>-->
        </ul>
      </div>
    </div>
	<!--footer ends-->
</body>
</html>
