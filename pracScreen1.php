<?php
	// Start the session
	session_start();
?>

<html>

	<head>
	
	<?php
		$_SESSION["trial"]++;
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
		    font-family: sans-serif;
		    margin-top: 10%;
	    }

	</style>

		<title> Appalachian State University Study </title>

	</head>

	

	

	<body>
		<div class="container">
				<p>Please pay careful attention to the following scenarios.</p>
				<button type="button" onclick="on_click()" class="btn btn-default btn-md">Continue</button>
		</div>
		
		<script type="text/javascript">
			function on_click() { window.location = "pracScreen2.php"; }
		</script>
    </body>

</html>