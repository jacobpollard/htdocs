<?php
	// Start the session
	session_start();
?>

<!DOCTYPE html>
<html>
    <head>
    
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<script type="text/javascript" src="jquery-1.11.3.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	
    <?php
    
    	//If there is a response, grab last response and save to file 
    	if(isset($_POST["response"])){
    		$response = " Response: ".$_POST["response"];
    		
    		$file = fopen('data/responses/'.$_SESSION["ID"].'-'.$_SESSION["audioNum"].'.txt', 'a');
    		
    		fwrite($file,$response);
		
			fclose($file);
    		}
    
    ?>

	
	<style type='text/css'>
	    body {
		    background-color: rgb(180, 200, 255);
		    margin: 5%;
		    text-align: center;
		    font-size: 20px;
		    font-family: sans-serif;
	    }
	</style>
	
	
		<title> Appalachian State University Study </title>
	</head>
	
	
	<body>
		<div class="container">
			<p><strong>Congratulations! You just completed the main trials.</strong></p>
			<br>
	        <p>There are just a few final questions before you are finished.</p>
	        <p>Click "Continue" below to go on.</p>
	        <br>
	        <br>
			<button type="button" onclick="on_click()" class="btn btn-default btn-md">Continue</button>
		</div>
		
		<script type="text/javascript">
			function on_click() { window.location = "demographics.php"; }
		</script>
    </body>
    
    
</html>
