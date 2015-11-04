<?php
	// Start the session
	session_start();
?>

<!DOCTYPE html>
<html>
    <head>
    <?php
    
    	$_SESSION["response"] = $_POST["response"];
    	unset($_POST["response"]);
    
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
	    <p><strong>You&lsquo;re doing great!</strong></p><br>
        <p>Take some time to rest before proceeding with the next set of the main trials</p>
        <p>These trials will have the exact same format as the previous ones.</p>
        <p>Click &quot;Continue&quot; when you are ready to go on.</p>
        <br>
        <br>
        <form action='screen2.php' method='post'>
            <input type='submit' value='Continue'>
        </form>
    </body>
    
    
</html>
