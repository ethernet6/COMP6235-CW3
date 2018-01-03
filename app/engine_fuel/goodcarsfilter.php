<?php session_start();
    include("conn.php");
    $type = $_GET['type'];
    $action = $_GET['action'];
    
    if($type=='make')
    {
      $make = $_GET['make'];
      if($action=='add')
      {
        $_SESSION['make'][$make] = $make;
        $makes = "";
        foreach ($_SESSION['make'] as $key => $value) {
          $makes = $value.",";
        }
      }
      else
      {
        unset($_SESSION['make'][$make]);
      }
    }
      


    if($type=='fuel')
    {
      $fuelname = $_GET['fuelname'];
      if($action=='add')
      {
        $_SESSION['fuelname'][$fuelname] = $fuelname;
        foreach ($_SESSION['fuelname'] as $key => $value) {
         $fuelname = $value.",";
        }
      }
      else
      {
        unset($_SESSION['fuelname'][$fuelname]);
      }
    }

    if($type=='year')
    {
      $year = $_GET['year'];
      if($action=='add')
      {
        $_SESSION['year'][$year] = $year;
      }
      else
      {
        unset($_SESSION['year'][$year]);
      }
      	
    }
    
    if(count($_SESSION['year'])==0 || $_SESSION['year']=="")
    {
      $yearwas = 0;
      for ($i=2013; $i < 2018 ; $i++) { 
        $_SESSION['year'][$i] = $i;
      }
      
    }

    foreach ($_SESSION['year'] as $key => $value) {
    	$sqlvalue = $value;
    	$sql = "SELECT * FROM  `$sqlvalue`";
    	$where = "";
    	if($_SESSION['make']!="")
    	{
        if($makes!="")
        {
    		  $makes = rtrim($makes,",");
        }
        else
        {
          $makes = "";
          foreach ($_SESSION['make'] as $key => $value) {
            $makes = $value.",";
          }
          $makes = rtrim($makes,",");

        }
    		$where.= "Make_ID IN ('$makes')";

    	}
    	if($_SESSION['fuelname']!="")
    	{
        if(isset($fuelname) && $fuelname!="")
        {
            $fuelname = $fuelname;
            $fuelname = rtrim($fuelname,",");
        }
        else
        {
          foreach ($_SESSION['fuelname'] as $key => $value) {
              $fuelname = $value.",";
            }
          $fuelname = rtrim($fuelname,",");
        }

    		if($where!="")
    		{
    			$where.= "AND Fuel IN ('$fuelname')";	
    		}
    		else
    		{
    			$where.= "Fuel IN ('$fuelname')";	
    		}

    	}

    	if($where!="")
    	{
    		$sql = "$sql where $where LIMIT 0 , 2";
    	}
    	else
    	{
    		$sql = "$sql LIMIT 0 , 2";
    	}
      //echo $sql;

		$result = $conn->query($sql);
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
								<h6 id="v1_year_model"><?php echo $sqlvalue;?> <?php echo $Model; ?></h6>
								<p style="font-size:11px;" id="v1_litre_cyl_trans">Cyl: <?php echo $Cyl;?>, <?php echo $Trans;?> <br>
									Class: <?php echo ucfirst($Veh_Class);?>
									<br>
									MPG: <?php echo ucfirst($Cmb_MPG);?>
									<br>
									Pollution Score: <?php echo ucfirst($Air_Pollution_Score);?>
								</p>
							</div>
							<p>
								Description: <?php echo $Stnd_Description;?>
							</p>
						</div>	
		    	 <?php 
		    	
		    }
        $sql = "";
		}

    }

    if($yearwas=="0")
    {
      $_SESSION['year'] = "";
    }
    
?>

