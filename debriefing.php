<?php
	// Start the session
	session_start();
?>

<html>
	<?php
	
		//$file = fopen('responses.txt', 'a');
		$file = fopen('data/responses/responses-'.$_POST['subject'].'.txt', 'a');
		
		
		fwrite($file, 'SUBJECT: ' . $_POST['subject']);
		fwrite($file,  ' FIELD: ' .            'age' );
		fwrite($file,  ' VALUE: ' . $_POST[    'age']);
		fwrite($file, "\n");
		fwrite($file, 'SUBJECT: ' . $_POST['subject']);
		fwrite($file,  ' FIELD: ' .            'sex' );
		fwrite($file,  ' VALUE: ' . $_POST[    'sex']);
		fwrite($file, "\n");
		fwrite($file, 'SUBJECT: ' . $_POST[  'subject']);
		fwrite($file,  ' FIELD: ' .        'ethnicity' );
		fwrite($file,  ' VALUE: ' . $_POST['ethnicity']);
		fwrite($file, "\n");
		fwrite($file, 'SUBJECT: ' . $_POST[  'subject']);
		fwrite($file,  ' FIELD: ' .        'other_eth' );
		fwrite($file,  ' VALUE: ' . $_POST['other_eth']);
		fwrite($file, "\n");
		fwrite($file, 'SUBJECT: ' . $_POST[  'subject']);
		fwrite($file,  ' FIELD: ' .        'education' );
		fwrite($file,  ' VALUE: ' . $_POST['education']);
		fwrite($file, "\n");
		//fwrite($file, 'SUBJECT: ' . $_POST['subject']);
		//fwrite($file,  ' FIELD: ' .        'country' );
		//fwrite($file,  ' VALUE: ' . $_POST['country']);
		//fwrite($file, "\n");
		fwrite($file, 'SUBJECT: ' . $_POST[  'subject']);
		fwrite($file,  ' FIELD: ' .        'party' );
		fwrite($file,  ' VALUE: ' . $_POST['party']);
		fwrite($file, "\n");
		fwrite($file, 'SUBJECT: ' . $_POST[  'subject']);
		fwrite($file,  ' FIELD: ' .        'strength' );
		fwrite($file,  ' VALUE: ' . $_POST['strength']);
		fwrite($file, "\n");
		fwrite($file, 'SUBJECT: ' . $_POST[  'subject']);
		fwrite($file,  ' FIELD: ' .        'religious' );
		fwrite($file,  ' VALUE: ' . $_POST['religious']);
		fwrite($file, "\n");
		
		fclose($file);
		
		// remove all session variables
		session_unset(); 

		// destroy the session
		session_destroy();
	
	?>
	
	<style type='text/css'>
		body {
			background-color: rgb(180, 200, 255);
			margin-left: 10%;
			margin-right: 10%;
			margin-top: 5%;
			margin-bottom: 5%;
			text-align: center;
			font-size: 20;
			font-family: sans-serif;
		}
		h3 {
			text-align: center;
		}
	</style>


	<head>
		<title> Appalachian State University Study </title>
	</head>
	
	
	
	<body id='body' onload='on_load()'>	
	    <p><p style="font-size:30px">
		Congratulations, you have finished the experiment.
		</p>
		<p><p style="font-size:25px">
		Your payment number is <strong>-NUMBER-</strong>. Please type it into Mechanical Turk to receive your payment.
		</p>
	    <p><p style="font-size:20px">
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
	</body>
	
</html>
