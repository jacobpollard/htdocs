<?php
	// Start the session
	session_start();
?>

<!DOCTYPE html>
<html>
    <head>
    
    <?php
    	$_SESSION["trial"] = 0;	
    ?>
    
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<script type="text/javascript" src="jquery-1.11.3.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

	<style type='text/css'>
	    body {
		    background-color: rgb(180, 200, 255);
		    text-align: center;
		    font-size: 20px;
		    margin-top: 10%;
		    font-family: sans-serif;
	    }
	</style>
	
	
		<title> Florida State University Study </title>
	</head>
	
	
	<body>
		<div class="container">
			<h3>You just completed the practice trials.</h3>
			<p>
			You are about to begin the main trials. These trials will have the exact same format as the practice trials: 
			you will hear about an event, be asked to make a first judgment, then you will hear some new information, and finally
            you will be able to modify your first judgment.
            </p>
			<p>
			You should try to be as accurate as you can for EVERY JUDGMENT. Even if you feel like you do not 
			have very much information, make your BEST GUESS.
			</p>
			<p>Click "Continue" below to begin the main trials.</p>
			<button type="button" onclick="on_click()" class="btn btn-default btn-md">Continue</button>
		</div>
		
		<script type="text/javascript">
			function on_click() { window.location = "screen2.php"; }
		</script>
    </body>
        
</html>