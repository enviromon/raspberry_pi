<?php
session_start();
//var_dump(file_exists($_SERVER['DOCUMENT_ROOT'].'/yieldbuddy/www/sql/sql_sensors_firstrow.php'));
include $_SERVER['DOCUMENT_ROOT'].'/yieldbuddy/www/sql/sql_sensors_firstrow.php';
	  $pH1=$_SESSION['Sensors_pH1'];
	  echo "pH 1: ";
	  echo $pH1. "<br />";
	  
	  $pH2=$_SESSION['Sensors_pH2'];
	  echo "pH 2: ";
	  echo $pH2. "<br />";

	  $Temp=$_SESSION['Sensors_Temp'];
	  echo "Temp: ";
	  echo $Temp. "<br />";

	  $Temp2=$_SESSION['Sensors_Temp2'];
	  echo "Temp2: ";
	  echo $Temp2. "<br />";

	  $Temp3=$_SESSION['Sensors_Temp3'];
	  echo "Temp3: ";
	  echo $Temp3. "<br />";
	  
	  $Temp4=$_SESSION['Sensors_Temp4'];
	  echo "Temp4: ";
	  echo $Temp4. "<br />";
	  
	  $RH=$_SESSION['Sensors_RH'];
	  echo "RH: ";
	  echo $RH. "<br />";

	  $TDS1=$_SESSION['Sensors_TDS1'];
	  echo "TDS 1: ";
	  echo $TDS1. "<br />";

	  $TDS2=$_SESSION['Sensors_TDS2'];
	  echo "TDS 2: ";
	  echo $TDS2. "<br />";

	  $CO2=$_SESSION['Sensors_CO2'];
	  echo "CO2: ";
	  echo $CO2. "<br />";

	  $Light=$_SESSION['Sensors_Light'];
	  echo "Light: ";
	  echo $Light. "<br />";
	  
?>
