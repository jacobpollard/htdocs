<?php
	// Start the session
	session_start();
?>

<html>

	<head>

    <?php

    ?>

	<style type='text/css'>

	    body {

		    background-color: rgb(180, 200, 255);

		    margin: 0% 20% 0%;

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

	

	

		<title> Appalachian State University Study </title>

	</head>

	

	

	<body>

        <br>

	    <p><p style="font-size:25px">On the next screen you will read the instructions for the experiment.

        </p>

        <p><p style="font-size:25px">Please pay careful attention to the instructions.

        </p>

        <br>

        <br>

        <form action='instructions.php' method='post'>

            <p style="font-size:24px"> Experimenter, please input the Subject's ID number:<br>

            <input type='text' name='ID' value="">

            <input type='submit' value="BEGIN EXPERIMENT">

        </form>

    </body>

	

	

</html>