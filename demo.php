<?php
	// Start the session
	session_start();
	
	//Grab value
	$value = $_POST["array"];
	
	//echo $value;
	//print_r($value);
	$file = fopen('data/responses/'.$_SESSION["ID"].'-info.txt', 'w');
	
	$arrayCount = count($value);
	for($x = 0; $x < $arrayCount; $x++) {
    	fwrite($file,$value[$x]."\n\n");
	}
			
	fclose($file);
?>