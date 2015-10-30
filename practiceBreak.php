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

	<style type='text/css'>
	    body {
		    background-color: rgb(180, 200, 255);
		    margin: 5%;
		    text-align: center;
		    font-size: 20;
		    font-family: sans-serif;
	    }
	    form {
	        text-align: center;
	    }
	    input {
		    font-size: 30;
		}
	</style>
	
	
		<title> Florida State University Study </title>
	</head>
	
	
	<body onload='on_load()'>
	    <p>
        You just completed the practice trials.
        </p>
        <p>
        You are about to begin the main trials. These trials will have the exact same format as the practice trials: 
        you will hear about an event, be asked to make a first judgment, then you will hear some new information, and finally
        you will be able to modify your first judgment.
        </p>
        <p>
		You should try to be as accurate as you can for EVERY JUDGMENT. Even if you feel like you do not 
		have very much information, make your BEST GUESS.
        </p>
        <p>
        Click "Continue" below to begin the main trials.
        </p>
        <br>
        <br>
        <form action='screen2.php' method='post'>
            <input type='submit' value='Continue'>
        </form>
    </body>
        
</html>