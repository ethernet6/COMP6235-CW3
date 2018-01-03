<?php
    include("conn.php");
    $mgp_1 = $_GET['mgp_1'];
    $mgp_2 = $_GET['mgp_2'];

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
		$G = 3.01; 
		$X = 15000;
		$X = str_replace(',', '', $X);
		$M = $Cmb_MPG;
		$R_v1 = round(($G*$X*1) /$M);
		$z = 10;
		$per10year_v1 = round($R_v1*$z);  
		$permonth_v1 = round($R_v1/12); 
		$perweek_v1 = round($R_v1/52); 
		$permile_v1  = round($R_v1/$X*100);
	}
	if($mgp_2!="")
	{
		 $Cmb_MPG = $mgp_2;
		 $G = 3.01; 
		 $X = 15000;
		 $X = str_replace(',', '', $X);
		 $M = $Cmb_MPG;
		 $R_v2 = round(($G*$X*1) /$M);
		 $z = 10;
		 $per10year_v2 = round($R_v2*$z);  
		 $permonth_v2 = round($R_v2/12); 
		 $perweek_v2 = round($R_v2/52); 
		 $permile_v2  = round($R_v2/$X*100);
	}



	 $jsontypevalue = array("v1_per10year"=>"$".$per10year_v1,"v1_permonth"=>"$".$permonth_v1,"v1_perweek"=>"$".$perweek_v1,"v1_permile"=>"$".$permile_v1,"v1_yearly"=>"$".$R_v1,"v2_per10year"=>"$".$per10year_v2,"v2_permonth"=>"$".$permonth_v2,"v2_perweek"=>"$".$perweek_v2,"v2_permile"=>"$".$permile_v2,"v2_yearly"=>"$".$R_v2,"keepforyears"=>$z);
	    	 echo json_encode($jsontypevalue);

?>