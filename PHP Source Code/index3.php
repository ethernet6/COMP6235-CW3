<?php include("includes/header.php");?>    
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
    	  <ul class="nav nav-tabs">
    		<li class="active"><a data-toggle="tab" href="#home">GOOD CARS</a></li>
    		<li><a data-toggle="tab" href="#menu1">BETTER CARS</a></li>
   			<li><a data-toggle="tab" href="#menu2">BEST CARS</a></li>
  		  </ul>

  		<div class="tab-content">
    		<div id="home" class="tab-pane fade in active">
      			<?php include 'goodcars3.php';?>
    		</div>
    
    	<div id="menu1" class="tab-pane fade">
      	 <?php include 'bettercars3.php';?>
   		</div>
    	<div id="menu2" class="tab-pane fade">
      	<h3>BEST CARS</h3>
      	<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
   		</div>
  </div>
    </div>
</div>    
<!--main content ends-->
<?php include("includes/footer.php");?>
