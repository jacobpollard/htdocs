<?php
	// Start the session
	session_start();
?>

<!DOCTYPE html>
<html>
    <head>
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
	
	
	<body>
	    <p>
        <strong>Congratulations! You just completed the main trials.</strong>
        </p>
        <p>
        There are just a few final questions before you are finished.
        </p>
        <p>
        Click "Continue" below to go on.
        </p>
        <br>
        <br>
        <form action='demographics.php' method='post'>
            <input type='submit' value='Continue'>
        </form>
    </body>
    
    
</html>
