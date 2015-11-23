<?php
	// Start the session
	session_start();
?>

<!DOCTYPE html>
<html>
	<?php
		
		//echo $_POST['ID'];
		$_SESSION["ID"] = $_POST['ID'];
	
	?>

<head>
	<!--For Slider-->
    <link type="text/css" href="jquery-ui.min.css" rel="Stylesheet">	
    <script type="text/javascript" src="jquery-1.11.3.min.js"></script>
    <script type="text/javascript" src="jquery-ui.min.js"></script>
    
    <!--Bootstrap-->	
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    
	<style type='text/css'>
	    body {
		    background-color: rgb(180, 200, 255);
		    font-size: 20px;
		    font-family: sans-serif;
	    }
	    
	    .top-buffer {
	    	margin-top:20px; 
	    }
	</style>
	
	
		<title> Appalachian State University Study </title>
</head>
		
	<body onload='on_load()'>
		<div class="container-fluid">
			<row>
				<h1 class="text-center">EXPERIMENT INSTRUCTIONS</h1>
			</row>
			<row class="col-xs-10 col-xs-offset-1">
				<p>
					During this experiment you are going to <strong>HEAR</strong> about several different events. Your task is to determine 
					whether the person described in the event deserves blame (and if so, how much blame). 
				</p>
			</row>
			<row class="top-buffer col-xs-8 col-xs-offset-2">
				<p><strong>First:</strong>  You will <strong>hear a short description of 
					an event</strong> (e.g.,"Floyd insulted Thelma") and then you will be asked to <strong>decide how much blame</strong> 
					the person (e.g., Floyd) deserves.
				</p> 
			</row>
			<row class="col-xs-8 col-xs-offset-2">
				<p><strong>Second:</strong>  You will <strong>hear some new information</strong> about the event (e.g., Floyd
					insulted Thelma because she spread a mean rumor about him). Then you will have a chance to <strong>modify your
					original blame judgment</strong> in light of the new information you just learned. 
				</p>
			</row>
			<row class="top-buffer col-xs-10 col-xs-offset-1">
				<p>
					Sometimes the new information will make you want to blame more, other times you may want to blame less, 
					and sometimes you may feel like you don't need to change anything. All of these responses are fine. 
       		 	</p>
			</row>
			<row class="col-xs-10 col-xs-offset-1">
				<p>
					Your job is to try to make the most accurate judgment you can. Even if you feel like you do not have 
					very much information, make your <strong>BEST GUESS</strong>.
				</p>
			</row>
			<row class="col-xs-10 col-xs-offset-1">
				<p>
					To make your judgment you will use a sliding scale that you can move with your mouse. To
					make your judgment, <strong>click and drag</strong> the cursor to the appropriate place on the scale. 
        		</p>
			</row>
			<row class="top-buffer text-center col-xs-4 col-xs-offset-4">
				<p>
					You can practice using the cursor below:	
				</p>
			</row>
			<row class="top-buffer text-center col-xs-8 col-xs-offset-2">
				<div class="slider" id='slider'></div>	
			</row>
			<row class="top-buffer text-center col-xs-10 col-xs-offset-1">
				<p>
					You will now have a chance to practice the task. The next trials will help you get 
					used to listening to the events, using the sliding cursor, and modifying your judgments.
        		</p>
			</row>
			<row class="col-xs-4 col-xs-offset-5">
				<form action="demographics.php" method="post" role="form">
					<button type="submit" class="btn btn-default">Begin Practice Trials</button>
				</form>
			</row>
		</div> 

	<script>
		function on_load() { $( '#slider' ).slider( { value: 0 } ) } 
	</script>
	
    </body>	
	
</html>
