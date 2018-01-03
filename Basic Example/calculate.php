<?php include 'connection.php';




$name= $_POST['carform'];




$command = 'SELECT * FROM dataset1 WHERE Model="'.$name.'"';





foreach ($conn->query($command) as $line)
{
$MPG = $line['City MPG'];
}


$years = 10;
$annualMiles = 15000;
$combo = $MPG;
$fuelPrice =3;

#Fuel cost per year 
$fuelCost = ($fuelPrice * $annualMiles * 1.0  ) / $MPG ;

#Fuel cost per X years
$fuelCost = $fuelCost * $years;

echo '<h1>' . $name . '</h1>'; 
echo '<h2>Fuel costs: $' . $fuelCost .'</h2>';

?>