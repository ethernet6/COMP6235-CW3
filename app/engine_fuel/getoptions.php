<?php
    include("conn.php");
    $selectedmodel = urldecode($_GET['id']);
    $year = $_GET['year'];
  	$models = array();
    $sql = "SELECT Cyl,Trans,Drive,id FROM `$year` where Model='$selectedmodel'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
	    // output data of each row
	    while($row = $result->fetch_assoc()) {
	    	$Cyl = $row["Cyl"];
	    	$id = $row["id"];
	    	$Trans = $row["Trans"];
	    	$Drive = $row["Drive"];
	    	echo "<option value=".$id.">".$Drive." , ".$Cyl." , ".$Trans."</option>";
	    }
	} else {
	    echo "<option value=''>No results</option>";
	}
?>