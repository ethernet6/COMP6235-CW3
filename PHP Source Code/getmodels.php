<?php
	include("conn.php");
	$makeid = $_GET['id'];
	$year = $_GET['year'];
		$models = array();
		$sql = "SELECT DISTINCT Model FROM `$year` where Make_ID=$makeid";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
	    // output data of each row
	    echo '<option value="">Select Model</option>';
	    while($row = $result->fetch_assoc()) {
	    	 $Model = $row["Model"];
	    	 echo '<option value="'.$Model.'">'.$Model.'</option>';	
	    }
	} else {
	    echo "0 results";
	}
?>