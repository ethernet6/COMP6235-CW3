<?php
  include("conn.php");
  function getyears()
  {
  	return array("2013","2014","2015","2016","2017");
  } 
  function getmakes()
  {
  	include("conn.php");
  	$makes = array();
  	$sql = "SELECT * FROM `makes`";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
	    // output data of each row
	    while($row = $result->fetch_assoc()) {
	    	$id = $row["id"];
	    	$makename = $row["makename"];
	    	$makes[$id] = $makename;
	    }
	    return $makes;
	} else {
	    echo "0 results";
	}
  }

  function carsbyyear($year)
  {
  	include("conn.php");
    $sql = "SELECT * FROM  `$year` LIMIT 0 , 30";
	return $result = $conn->query($sql);
  }
?>