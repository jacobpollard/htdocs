<?php
	// Start the session
	session_start();
?>

<html>
	<?php
		
		echo $_POST['ID'];
		$_SESSION["ID"] = $_POST['ID'];
	
	?>

<head>
    <link type="text/css" href="jquery-ui-1.8.16.custom.css" rel="Stylesheet">	
    
	<style type='text/css'>
	    body {
		    background-color: rgb(180, 200, 255);
		    margin-top: 5%;
		    margin-bottom: 5%;
		    margin-right: 18%;
		    margin-left: 18%;
		    text-align: justify;
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
	
	
		<title> Appalachian State University Study </title>
</head>
		
	<body onload='on_load()'>
		<p>
        <h1><center>EXPERIMENT INSTRUCTIONS</center></h1>
        </p>
	    <p>
        During this experiment you are going to <strong>HEAR</strong> about several different events. Your task is to determine 
whether the person described in the event deserves blame (and if so, how much blame). 
        </p>
        <p><p style="margin: 0% 8% 0%"><strong>First:</strong>  You will <strong>hear a short description of 
        an event</strong> (e.g.,"Floyd insulted Thelma") and then you will be asked to <strong>decide how much blame</strong> 
        the person (e.g., Floyd) deserves.
        </p>  
        <p><p style="margin: 0% 8% 0%"><strong>Second:</strong>  You will <strong>hear some new information</strong> about the event (e.g., Floyd
insulted Thelma because she spread a mean rumor about him). Then you will have a chance to <strong>modify your
original blame judgment</strong> in light of the new information you just learned. 
		</p>
		<p>
Sometimes the new information will make you want to blame more, other times you may want to blame less, 
and sometimes you may feel like you don't need to change anything. All of these responses are fine. 
        </p>
        <p>
Your job is to try to make the most accurate judgment you can. Even if you feel like you do not have 
very much information, make your <strong>BEST GUESS</strong>.
        </p>
        <p>
        To make your judgment you will use a sliding scale that you can move with your mouse. To
make your judgment, <strong>click and drag</strong> the cursor to the appropriate place on the scale. 
        </p>
        <p>
        <center>You can practice using the cursor below:</center>
        </p>
        <br>
        <div class='slider' id='slider'></div>
        <br>
        <p>
        <center>You will now have a chance to practice the task. The next trials will help you get 
used to listening to the events, using the sliding cursor, and modifying your judgments.</center>
        </p>
        <br>
        <form action='pracScreen2.php' method='post'>
            <input type='submit' value='Begin Practice Trials'>
        </form>
    
    <script type="text/javascript" src="jquery-1.6.2.min.js"></script>
    <script type="text/javascript" src="jquery-ui-1.8.16.custom.min.js"></script>
	<script> function on_load() { $( '#slider' ).slider( { value: 0 } ) } </script>
    </body>
	
	
</html>
