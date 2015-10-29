<?php
	// Start the session
	session_start();
	
	//Grab value
	$value = "".$_REQUEST["value"]."\n";
	$time = "".$_REQUEST["responseTime"]."\n\n";
	
	$file = fopen('data/responses/'.$_SESSION["ID"].'-'.$_SESSION["audioNum"].'.txt', 'a');
	
	fwrite($file,' Value: '.$value.' Time: '.$time);
		
	fclose($file);
?>