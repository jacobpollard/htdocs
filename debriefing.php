<?php
	// Start the session
	session_start();
?>

<html>
	<?php

		// remove all session variables
		session_unset(); 

		// destroy the session
		session_destroy();
	
	?>


	<head>
		
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
		<script type="text/javascript" src="jquery-1.11.3.min.js"></script>
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
		
		<style type='text/css'>
			body {
				background-color: rgb(180, 200, 255);
				margin-left: 10%;
				margin-right: 10%;
				margin-top: 5%;
				margin-bottom: 5%;
				text-align: center;
				font-size: 20px;
				font-family: sans-serif;
			}
			h3 {
				text-align: center;
			}
			.30 {
				font-size: 30px;
			}
			.25 {
				font-size: 25px;
			}
		</style>
		
		<title> Appalachian State University Study </title>
	</head>
	
	
	
	<body>
		<div class="container">
		<h2>Congratulations, you have finished the experiment.</h2>
		<p>
		<br>
	    In this study we are interested in understanding how people update their moral judgments. 
	    Specifically, we are interested whether some types of actions naturally lead people to look for certain types of information. 
	    Oftentimes when people are making decisions about how much blame a person deserves, they consider what was going on 
	    in the head of the person at the time of the act: what the person wanted to accomplish or whether the person thought 
	    they could prevent an outcome. Similarly, our legal system considers both the mental states and the actions of a 
	    defendant when determining blame (e.g. malice aforethought differentiating between Murder 1 and Murder 2). 
	    However, less is known about how people incorporate new information into existing moral or legal judgments. 
	    Thus this study attempts to understand how people update their blame judgments
	    <br>
	    <br>
		Our main interests are your responses to the blame questions for the various behaviors. 
		We are particularly interested in the relationship between certain actions (intentional or unintentional) 
		and the speed with which people are able to make new blame judgments in response to different types of information 
		(e.g., an agent's reason for acting or her ability to prevent a harmful outcome). The additional questionnaire measures 
		you have completed were included because we are interested in the relationships between personality, attitudes, preferences, 
		and the like on the one hand and the moral inferences we assess on the other hand.
		</p>
		<p>
		If you would like to find out more about this topic, 
		please contact <a href='mailto:soc.cog.sci.resrch@gmail.com'>Andrew Monroe</a> at soc.cog.sci.resrch@gmail.com.
		</p>
		</div>	
	</body>
	
</html>
