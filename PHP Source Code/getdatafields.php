<?php
    include("conn.php");
    $optionid = $_GET['id'];
    $year = $_GET['yearsel'];
    $sql = "SELECT * FROM `$year` where id=$optionid";
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
	    	 $G = 3.01; 
	    	 $X = 15000;
	    	 $M = $Cmb_MPG;
	    	 $R = round(($G*$X*1) /$M);
	    	 $z = 10;
	    	 $per10year = round($R*$z);  
	    	 $permonth = round($R/12); 
	    	 $perweek = round($R/52); 
	    	 $permile  = round($R/$X*100);


	    	 //calculation for the fuel usage
	    	 $M_FUEL = $row["Comb_CO2"];

	    	 $permile_fuel  = $M_FUEL;
	    	// echo $M_FUEL."*".$X."*".$z;

	    	 $per10year_fuel = round($M_FUEL*$X*$z);
	    	 $yearly_fuel = round($M_FUEL*$X);
	    	 $permonth_fuel = round($yearly_fuel/12); 
	    	 $perweek_fuel = round($yearly_fuel/52);
	    	 //calculation for fuel usage ends




	    	 $jsontypevalue = array("Model"=>$Model,"Make_ID"=>$Make_ID,"Displ"=>$Displ,"Cyl"=>$Cyl,"Fuel"=>$Fuel,"City_MPG"=>$City_MPG,"Hwy_MPG"=>$Hwy_MPG,"Trans"=>$Trans,"Cmb_MPG"=>$Cmb_MPG,"per10year"=>"$".$per10year,"permonth"=>"$".$permonth,"perweek"=>"$".$perweek,"permile"=>"¢".$permile,"yearly"=>"$".$R,"per10year_fuel"=>$per10year_fuel,"yearly_fuel"=>$yearly_fuel,"permonth_fuel"=>$permonth_fuel,"perweek_fuel"=>$perweek_fuel,"permile_fuel"=>$permile_fuel);
	    	 echo json_encode($jsontypevalue);
	    	
	    	
	    }
	} else {
	    echo "0 results";
	}
?>