<?php
    include("conn.php");
    $idrive = $_GET['idrive'];
    $msgsel = $_GET['msgsel'];
	$incity = $_GET['incity'];
	$keepforyears = $_GET['keepforyears'];
	$fpricepremium = $_GET['fpricepremium'];  
    if($msgsel=='0')
    {
    	$optionid_v1 = $_GET['id_v1'];
	    $optionid_v2 = $_GET['id_v2'];

	    $year_v1 = $_GET['yearsel_v1'];
	    $year_v2 = $_GET['yearsel_v2'];
	    $sql = "SELECT * FROM `$year_v1` where id=$optionid_v1";
		$result = $conn->query($sql);
		if ($result->num_rows > 0) {
		    // output data of each row
		    while($row = $result->fetch_assoc()) {
		    	 
		    	 $City_MPG = $incity;
		    	 $Cmb_MPG = $row["Cmb_MPG"];
		    	 $G = $fpricepremium; 
		    	 $X = $idrive;
		    	 $X = str_replace(',', '', $X);
		    	 $M = $Cmb_MPG;
		    	 $R_v1 = round(($G*$X*1) /$M);
		    	 $z = $keepforyears;
		    	 $per10year_v1 = round($R_v1*$z);  
		    	 $per10year_v1 = "$".$per10year_v1;

		    	 $permonth_v1 = round($R_v1/12); 
		    	 $permonth_v1 = "$".$permonth_v1;

		    	 $perweek_v1 = round($R_v1/52); 
		    	 $perweek_v1 = "$".$perweek_v1;

		    	 $permile_v1  = round($R_v1/$X*100);
		    	 $permile_v1 = "$".$permile_v1;

		    	 $R_v1 = "$".$R_v1;
		    }
		} 




		$sql = "SELECT * FROM `$year_v2` where id=$optionid_v2";
		$result = $conn->query($sql);
		if ($result->num_rows > 0) {
		    // output data of each row
		    while($row = $result->fetch_assoc()) {
		    	 
		    	 $City_MPG = $incity;
		    	 $Cmb_MPG = $row["Cmb_MPG"];
		    	 $G = $fpricepremium; 
		    	 $X = $idrive;
		    	 $X = str_replace(',', '', $X);
		    	 $M = $Cmb_MPG;
		    	 $R_v2 = round(($G*$X*1) /$M);
		    	 

		    	 $z = $keepforyears;
		    	 $per10year_v2 = round($R_v2*$z);  
		    	 $per10year_v2 = "$".$per10year_v2;

		    	 $permonth_v2 = round($R_v2/12);
		    	 $permonth_v2 = "$".$permonth_v2;

		    	 $perweek_v2 = round($R_v2/52);
		    	 $perweek_v2 = "$".$perweek_v2;

		    	 $permile_v2  = round($R_v2/$X*100);
		    	 $permile_v2 = "$".$permile_v2;
		    	 $R_v2 = "$".$R_v2;
		    }
		} 

		 $jsontypevalue = array("v1_per10year"=>$per10year_v1,"v1_permonth"=>$permonth_v1,"v1_perweek"=>$perweek_v1,"v1_permile"=>$permile_v1,"v1_yearly"=>$R_v1,"v2_per10year"=>$per10year_v2,"v2_permonth"=>$permonth_v2,"v2_perweek"=>$perweek_v2,"v2_permile"=>$permile_v2,"v2_yearly"=>$R_v2);
		    	 echo json_encode($jsontypevalue);
    }
    else  //if selection is for the mgp
    {
    	$mgp_1 = $_GET['id_v1'];
	    $mgp_2 = $_GET['id_v2'];

	     $per10year_v1 = "";  
		 $permonth_v1 = ""; 
		 $perweek_v1 = ""; 
		 $permile_v1  = "";


		 $per10year_v2 = "";  
		 $permonth_v2 = ""; 
		 $perweek_v2 = ""; 
		 $permile_v2  = "";
	    
	    if($mgp_1!="")
	    {
			$Cmb_MPG = $mgp_1;
			$G = $fpricepremium; 
			$X = $idrive;
			$X = str_replace(',', '', $X);
			$M = $Cmb_MPG;
			$R_v1 = round(($G*$X*1) /$M);
			$z = $keepforyears;
			$per10year_v1 = round($R_v1*$z);
			$per10year_v1 = "$".$per10year_v1;

			$permonth_v1 = round($R_v1/12);
			$permonth_v1 = "$".$permonth_v1;

			$perweek_v1 = round($R_v1/52);
			$perweek_v1 = "$".$perweek_v1;

			$permile_v1  = round($R_v1/$X*100);
			$permile_v1 = "$".$permile_v1;

			$R_v1 = "$".$R_v1;
		}
		if($mgp_2!="")
		{
			 $Cmb_MPG = $mgp_2;
			 $G = $fpricepremium; 
			 $X = $idrive;
			 $X = str_replace(',', '', $X);
			 $M = $Cmb_MPG;
			 $R_v2 = round(($G*$X*1) /$M);
			 $z = $keepforyears;
			 $per10year_v2 = round($R_v2*$z); 
			 $per10year_v2 = "$".$per10year_v2;

			 $permonth_v2 = round($R_v2/12);
			 $permonth_v2 = "$".$permonth_v2;

			 $perweek_v2 = round($R_v2/52);
			 $perweek_v2 = "$".$perweek_v2;

			 $permile_v2  = round($R_v2/$X*100);
			 $permile_v2 = "$".$permile_v2;

			 $R_v2 = "$".$R_v2;
		}



		 $jsontypevalue = array("v1_per10year"=>$per10year_v1,"v1_permonth"=>$permonth_v1,"v1_perweek"=>$perweek_v1,"v1_permile"=>$permile_v1,"v1_yearly"=>$R_v1,"v2_per10year"=>$per10year_v2,"v2_permonth"=>$permonth_v2,"v2_perweek"=>$perweek_v2,"v2_permile"=>$permile_v2,"v2_yearly"=>$R_v2,"keepforyears"=>$z);
		    	 echo json_encode($jsontypevalue);
	   }
    



?>