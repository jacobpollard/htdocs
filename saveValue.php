<?php
	// Start the session
	session_start();
	
	//Grab value
	$value = "".$_REQUEST["value"]."\n";
	$time = "".$_REQUEST["responseTime"]."\n";
	
	$file = fopen('data/responses/Values-'.$_SESSION["ID"].'.txt', 'a');
	
	fwrite($file,' VALUE: '.$value.'  Time: '.$time);
		
	fclose($file);
?>