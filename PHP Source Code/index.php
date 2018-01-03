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
     <input type="text" name="mgp_v1" id="mgp_v1"><input type="button" id="mgp_v1" value="MGP" onclick="msgprocess('mgp_v1');"></form>

   <?php include("modalbox1.php");?>
  </div>
</div>
  <div id="box1after" style="width:100%;float: left;display:none;">
  <div class="col-lg-6 block-1"> 
  <h2>Vehicle A</h2>
  <div class="block_car">
   <img src="images/gasBlue.png">
    <img src="images/car.png" style="height: 100px;">  
  	<h6 id="v1_year_model">2018 Acura RDX AWD</h6>
    <p style="font-size:11px;" id="v1_litre_cyl_trans">3.5 L, 6 cyl, Automatic</p>
  </div>  
  </div>
<div class="col-lg-6 block-1">
<span class="remove" onclick="toggledivs('vh1');">X</span>   
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
        </div>
        <div class="col-lg-6 block-2">
         <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal2">Select Vehicle</button>
   <h6>OR</h6>
   <h4>Enter a value</h4>
  <form action="#" type="post"><input name="mgp_v2" id="mgp_v2" type="text"><input type="button" value="MGP" id="mgp_v2" onclick="msgprocess('mgp_v2');"></form>
  <?php include('modelbox2.php');?>
    </div>
</div>

<div id="box2after" style="display:none;">
<div class="col-lg-6 block-2">

  <h2>Vehicle B</h2>
  <div class="block_car">
   <img src="images/gasBlue.png">
    <img src="images/car.png" style="height: 100px;">  
	<h6 id="v2_year_model">2018 Acura RDX AWD</h6>
<p style="font-size:11px;" id="v2_litre_cyl_trans">3.5 L, 6 cyl, Automatic</p>
  </div> </div>
<div class="col-lg-6 block-2">
<span class="remove" onclick="toggledivs('vh2');">X</span> 
<div class="block_table_2" style="width:100%;float: left;">
   <table>
   <tr>
   <th colspan="2" id="v2_fuel">Premium Gasoline</th>
   </tr>
   <tr>
   <td><span  id="v1_comb">22</span> <br/> Comb</td>
   <td>MPG <span id="v2_city_hw">19 27 </span><br/>city hwy</td>
   </tr>
   </table>
  </div>
</div>  

</div>

</div>

</div>
</div>
<!--accordian---->
<div class="row" id="fullaccord" style="display:none;">
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

    <?php include("recalculate.php");?>
    <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">
      <div class="card-body">
      	<div class="calcu_form">
        <ul class="cal_form">
        <li>I drive</li>
        <li><input class="cal_input" type="text" value="15,000" id="idrive"></li>
        <li>miles each year.</li>
        </ul>
        <ul class="cal_form">
        <li>I drive</li>
        <li><input class="cal_input2" type="text" value="50" id="incity"></li>
        <li>% in city driving.</li>
        </ul>
         <ul class="cal_form">
        <li>I plan to keep my vehicle</li>
        <li><input class="cal_input3" type="text" value="10" id="keepforyears"></li>
        <li>years</li>
        </ul>
        <h6>Fuel Price:</h6>
        Premium
        <div class="input-group">
			<div class="input-group-addon input-sm">$</div>
				<input class="form-control input-sm" id="fpricepremium" value="3.01" type="text">
			<div class="input-group-addon input-sm">/gal</div>
        </div>
        <button type="button" id="recalcfuel" onclick="recalculate();" class="btn btn-success btn-xs" style="margin-top: 10px;">Recalculate</button>
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
    <div id="collapseTwo" class="collapse show" role="tabpanel" aria-labelledby="headingTwo" data-parent="#accordion">
      <div class="card-body">
      <div class="col-lg-6 cal-graph">
        <table>
        <tr>
        <th></th>
        <th style="color:red;">Vehicle A</th>
        <th style="color:green;">Vehicle B</th>
        <th style="display: none;" id="savings">Veh. <span id="whosaves">A</span> Saves</th>
        </tr>
        <tr>
        <td><strong id="yearcalfor">10</strong><strong> Years</strong></td>
        <td id="veh1_10"></td>
        <td id="veh2_10"></td>
        <td><strong id="saving_10_dollar" style="display: none;">$</strong><strong id="saving_10"></strong></td>
        </tr>
        <tr>
        <td><strong>Yearly</strong></td>
        <td id="veh1_yearly"></td>
        <td id="veh2_yearly"></td>
        <td><strong id="saving_yearly_dollar" style="display: none;">$</strong><strong id="saving_yearly"></strong></td>
        </tr>
        <tr>
        <td><strong>Monthly</strong></td>
        <td id="veh1_monthly"></td>
        <td id="veh2_monthly"></td>
        <td><strong id="saving_monthly_dollar" style="display: none;">$</strong><strong id="saving_monthly"></strong></td>
        </tr>
        <tr>
        <td><strong>Weekly</strong></td>
        <td id="veh1_weekly"></td>
        <td id="veh2_weekly"></td>
        <td><strong id="saving_weekly_dollar" style="display: none;">$</strong><strong id="saving_weekly"></strong></td>
        </tr>
        <tr>
        <td><strong>Per Mile</strong></td>
        <td id="veh1_mile"></td>
        <td id="veh2_mile"></td>
        <td><strong id="saving_mile_dollar" style="display: none;">$</strong><strong id="saving_mile"></strong></td>
        </tr>
        </table>
        </div>
		<div class="col-lg-6 cal-graph">
	  <script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/data.js"></script>
<script src="https://code.highcharts.com/modules/drilldown.js"></script>





<ul class="nav nav-pills">
    <li class="active"><a data-toggle="pill" href="#10years"><strong id="graphyears">10</strong> Years</a></li>
    <li><a data-toggle="pill" href="#yearly">Yearly</a></li>
    <li><a data-toggle="pill" href="#monthly">Monthly</a></li>
    <li><a data-toggle="pill" href="#weekly">Weekly</a></li>
    <li><a data-toggle="pill" href="#mile">Mile</a></li>
  </ul>
  

  <div class="tab-content">
    <div id="10years" class="tab-pane fade in active">
      <div id="container" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
    </div>
    <div id="yearly" class="tab-pane fade">
      <div id="container_yearly" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
    </div>
    <div id="monthly" class="tab-pane fade">
      <div id="container_monthly" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
    </div>
    <div id="weekly" class="tab-pane fade">
      <div id="container_weekly" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
    </div>
    <div id="mile" class="tab-pane fade">
      <div id="container_miles" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
    </div>
  </div>



 

	  </div>
      </div>
    </div>
  </div> 

   <!--for the fuel usage-->
   <?php include("fuelusage.php");?>
  <!--fuel usage ends-->


</div>
</div>
</div>
<!--main content ends-->
<?php include("includes/footer.php");?>
