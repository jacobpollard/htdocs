<?php
	// Start the session
	session_start();
	
	$value = "".$_REQUEST["value"]."\n";
	
	$file = fopen('data/responses/Values-'.$_SESSION["ID"].'.txt', 'a');
	
	/*if(count($_SESSION["values"]) <= 0)
	{
		$values = array($value);
		//$values[] = $value;
	}
	else
	{
		
	}*/
	
	fwrite($file,  ' VALUE: ' . $value);
		
	fclose($file);
?>