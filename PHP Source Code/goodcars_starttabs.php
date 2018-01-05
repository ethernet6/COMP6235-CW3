<ul class="nav nav-pills custom-tabs">
    <li class="active"><a data-toggle="pill" href="#tab2013">2013</a></li>
    <li><a data-toggle="pill" href="#tab2014">2014</a></li>
    <li><a data-toggle="pill" href="#tab2015">2015</a></li>
    <li><a data-toggle="pill" href="#tab2016">2016</a></li>
    <li><a data-toggle="pill" href="#tab2017">2017</a></li>

</ul>
<div class="tab-content">
<div id="tab2013" class="tab-pane fade in active">
  <h3>Best Cars For 2013</h3>
  <p><?php $result = carsbyyear('2013');
  	if ($result->num_rows > 0) {
	    // output data of each row
	    while($row = $result->fetch_assoc()) {
	    	 $Model = $row["Model"];
	    	 $Make_ID = $row["Make_ID"];
	    	 $Displ = $row["Displ"];
	    	 $Cyl = $row["Cyl"];
	    	 $Fuel = $row["Fuel"];
	    	 $City_MPG = $row["City_MPG"];
	    	 $Hwy_MPG = $row["Hwy_MPG"];
	    	 $Trans = $row["Trans"];
	    	 $Cmb_MPG = $row["Cmb_MPG"];
	    	 $Comb_CO2 = $row["Comb_CO2"];
	    	 $Greenhouse_Gas_Score = $row["Greenhouse_Gas_Score"];
	    	 $Air_Pollution_Score = $row["Air_Pollution_Score"];
	    	 $Veh_Class = $row["Veh_Class"];
	    	 $Stnd_Description = $row["Stnd_Description"];
	    	 ?>
	    	   <div class="col-md-6 main_container_box">
						<div class="image_container  col-sm-6">
							<img src="images/car.png">
						</div>
						<div class="text_container col-sm-6">
							<h6 id="v1_year_model"><?php echo $year;?> <?php echo $Model; ?></h6>
							<p style="font-size:11px;" id="v1_litre_cyl_trans">Cyl: <?php echo $Cyl;?>, <?php echo $Trans;?> <br>
								Class: <?php echo ucfirst($Veh_Class);?>
								<br>
								MPG: <?php echo ucfirst($Cmb_MPG);?>
								<br>
								Pollution Score: <?php echo ucfirst($Air_Pollution_Score);?>
								<br>
								<strong>Emission Score: <?php echo ucfirst($Comb_CO2);?></strong>
									<br>
									<strong>Greenhouse Gas Score: <?php echo ucfirst($Greenhouse_Gas_Score);?></strong>
							</p>
						</div>
						<p>
							Description: <?php echo $Stnd_Description;?>
						</p>
					</div>	
	    	 <?php 
	    	
	    }
	}
  ?></p>
</div>
<div id="tab2014" class="tab-pane fade">
  <h3>Best Cars For 2014</h3>
  <p><?php $result = carsbyyear('2014');
  	if ($result->num_rows > 0) {
	    // output data of each row
	    while($row = $result->fetch_assoc()) {
	    	 $Model = $row["Model"];
	    	 $Make_ID = $row["Make_ID"];
	    	 $Displ = $row["Displ"];
	    	 $Cyl = $row["Cyl"];
	    	 $Fuel = $row["Fuel"];
	    	 $City_MPG = $row["City_MPG"];
	    	 $Hwy_MPG = $row["Hwy_MPG"];
	    	 $Trans = $row["Trans"];
	    	 $Cmb_MPG = $row["Cmb_MPG"];
	    	 $Comb_CO2 = $row["Comb_CO2"];
	    	 $Greenhouse_Gas_Score = $row["Greenhouse_Gas_Score"];
	    	 $Air_Pollution_Score = $row["Air_Pollution_Score"];
	    	 $Veh_Class = $row["Veh_Class"];
	    	 $Stnd_Description = $row["Stnd_Description"];
	    	 ?>
	    	   <div class="col-md-6 main_container_box">
						<div class="image_container  col-sm-6">
							<img src="images/car.png">
						</div>
						<div class="text_container col-sm-6">
							<h6 id="v1_year_model"><?php echo $year;?> <?php echo $Model; ?></h6>
							<p style="font-size:11px;" id="v1_litre_cyl_trans">Cyl: <?php echo $Cyl;?>, <?php echo $Trans;?> <br>
								Class: <?php echo ucfirst($Veh_Class);?>
								<br>
								MPG: <?php echo ucfirst($Cmb_MPG);?>
								<br>
								Pollution Score: <?php echo ucfirst($Air_Pollution_Score);?>
								<br>
								<strong>Emission Score: <?php echo ucfirst($Comb_CO2);?></strong>
									<br>
									<strong>Greenhouse Gas Score: <?php echo ucfirst($Greenhouse_Gas_Score);?></strong>
							</p>
						</div>
						<p>
							Description: <?php echo $Stnd_Description;?>
						</p>
					</div>	
	    	 <?php 
	    	
	    }
	}
  ?></p>
</div>
<div id="tab2015" class="tab-pane fade">
  <h3>Best Cars For 2015</h3>
  <p><?php $result = carsbyyear('2015');
  	if ($result->num_rows > 0) {
	    // output data of each row
	    while($row = $result->fetch_assoc()) {
	    	 $Model = $row["Model"];
	    	 $Make_ID = $row["Make_ID"];
	    	 $Displ = $row["Displ"];
	    	 $Cyl = $row["Cyl"];
	    	 $Fuel = $row["Fuel"];
	    	 $City_MPG = $row["City_MPG"];
	    	 $Hwy_MPG = $row["Hwy_MPG"];
	    	 $Trans = $row["Trans"];
	    	 $Cmb_MPG = $row["Cmb_MPG"];
	    	 $Comb_CO2 = $row["Comb_CO2"];
	    	 $Greenhouse_Gas_Score = $row["Greenhouse_Gas_Score"];
	    	 $Air_Pollution_Score = $row["Air_Pollution_Score"];
	    	 $Veh_Class = $row["Veh_Class"];
	    	 $Stnd_Description = $row["Stnd_Description"];
	    	 ?>
	    	   <div class="col-md-6 main_container_box">
						<div class="image_container  col-sm-6">
							<img src="images/car.png">
						</div>
						<div class="text_container col-sm-6">
							<h6 id="v1_year_model"><?php echo $year;?> <?php echo $Model; ?></h6>
							<p style="font-size:11px;" id="v1_litre_cyl_trans">Cyl: <?php echo $Cyl;?>, <?php echo $Trans;?> <br>
								Class: <?php echo ucfirst($Veh_Class);?>
								<br>
								MPG: <?php echo ucfirst($Cmb_MPG);?>
								<br>
								Pollution Score: <?php echo ucfirst($Air_Pollution_Score);?>
								<br>
								<strong>Emission Score: <?php echo ucfirst($Comb_CO2);?></strong>
									<br>
									<strong>Greenhouse Gas Score: <?php echo ucfirst($Greenhouse_Gas_Score);?></strong>
							</p>
						</div>
						<p>
							Description: <?php echo $Stnd_Description;?>
						</p>
					</div>	
	    	 <?php 
	    	
	    }
	}
  ?></p>
</div>
<div id="tab2016" class="tab-pane fade">
  <h3>Best Cars For 2016</h3>
  <p><?php $result = carsbyyear('2016');
  	if ($result->num_rows > 0) {
	    // output data of each row
	    while($row = $result->fetch_assoc()) {
	    	 $Model = $row["Model"];
	    	 $Make_ID = $row["Make_ID"];
	    	 $Displ = $row["Displ"];
	    	 $Cyl = $row["Cyl"];
	    	 $Fuel = $row["Fuel"];
	    	 $City_MPG = $row["City_MPG"];
	    	 $Hwy_MPG = $row["Hwy_MPG"];
	    	 $Trans = $row["Trans"];
	    	 $Cmb_MPG = $row["Cmb_MPG"];
	    	 $Comb_CO2 = $row["Comb_CO2"];
	    	 $Greenhouse_Gas_Score = $row["Greenhouse_Gas_Score"];
	    	 $Air_Pollution_Score = $row["Air_Pollution_Score"];
	    	 $Veh_Class = $row["Veh_Class"];
	    	 $Stnd_Description = $row["Stnd_Description"];
	    	 ?>
	    	   <div class="col-md-6 main_container_box">
						<div class="image_container  col-sm-6">
							<img src="images/car.png">
						</div>
						<div class="text_container col-sm-6">
							<h6 id="v1_year_model"><?php echo $year;?> <?php echo $Model; ?></h6>
							<p style="font-size:11px;" id="v1_litre_cyl_trans">Cyl: <?php echo $Cyl;?>, <?php echo $Trans;?> <br>
								Class: <?php echo ucfirst($Veh_Class);?>
								<br>
								MPG: <?php echo ucfirst($Cmb_MPG);?>
								<br>
								Pollution Score: <?php echo ucfirst($Air_Pollution_Score);?>
								<br>
								<strong>Emission Score: <?php echo ucfirst($Comb_CO2);?></strong>
									<br>
									<strong>Greenhouse Gas Score: <?php echo ucfirst($Greenhouse_Gas_Score);?></strong>
							</p>
						</div>
						<p>
							Description: <?php echo $Stnd_Description;?>
						</p>
					</div>	
	    	 <?php 
	    	
	    }
	}
  ?></p>
</div>
 <div id="tab2017" class="tab-pane fade">
  <h3>Best Cars For 2017</h3>
  <p><?php $result = carsbyyear('2017');
  	if ($result->num_rows > 0) {
	   // output data of each row
	    while($row = $result->fetch_assoc()) {
	    	 $Model = $row["Model"];
	    	 $Make_ID = $row["Make_ID"];
	    	 $Displ = $row["Displ"];
	    	 $Cyl = $row["Cyl"];
	    	 $Fuel = $row["Fuel"];
	    	 $City_MPG = $row["City_MPG"];
	    	 $Hwy_MPG = $row["Hwy_MPG"];
	    	 $Trans = $row["Trans"];
	    	 $Cmb_MPG = $row["Cmb_MPG"];
	    	 $Comb_CO2 = $row["Comb_CO2"];
	    	 $Greenhouse_Gas_Score = $row["Greenhouse_Gas_Score"];
	    	 $Air_Pollution_Score = $row["Air_Pollution_Score"];
	    	 $Veh_Class = $row["Veh_Class"];
	    	 $Stnd_Description = $row["Stnd_Description"];
	    	 ?>
	    	   <div class="col-md-6 main_container_box">
						<div class="image_container  col-sm-6">
							<img src="images/car.png">
						</div>
						<div class="text_container col-sm-6">
							<h6 id="v1_year_model"><?php echo $year;?> <?php echo $Model; ?></h6>
							<p style="font-size:11px;" id="v1_litre_cyl_trans">Cyl: <?php echo $Cyl;?>, <?php echo $Trans;?> <br>
								Class: <?php echo ucfirst($Veh_Class);?>
								<br>
								MPG: <?php echo ucfirst($Cmb_MPG);?>
								<br>
								Pollution Score: <?php echo ucfirst($Air_Pollution_Score);?>
								<br>
								<strong>Emission Score: <?php echo ucfirst($Comb_CO2);?></strong>
									<br>
									<strong>Greenhouse Gas Score: <?php echo ucfirst($Greenhouse_Gas_Score);?></strong>
							</p>
						</div>
						<p>
							Description: <?php echo $Stnd_Description;?>
						</p>
					</div>	
	    	 <?php 
	    	
	    }
	}
  ?></p>
</div>
</div>