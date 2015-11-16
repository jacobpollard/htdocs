<?php
	// Start the session
	session_start();
?>

<!DOCTYPE html>
<html>	
  
  <head>
  
  	<link type="text/css" href="jquery-ui.min.css" rel="Stylesheet">	
  	<script type="text/javascript" src="jquery-1.11.3.min.js"></script>
  	<script type="text/javascript" src="jquery-ui.min.js"></script>
  	
  	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  
	<?php
    	
    	$count = 0;
    	
    	switch ($_SESSION["trial"]) {
    		case 0:
    			$clip_path1 = "data/audio/Prac_1.mp3";
    			$clip_path2 = "data/audio/Prac_1_update.mp3";
    			break;
    		case 1:
    			$clip_path1 = "data/audio/Prac_2.mp3";
    			$clip_path2 = "data/audio/Prac_2_update.mp3";
    			break;
    		case 2:
    			$clip_path1 = "data/audio/Prac_3.mp3";
    			$clip_path2 = "data/audio/Prac_3_update.mp3";
    			break;
    	}		 	
    ?>
    
    <style type='text/css'>
	    body {
		    background-color: rgb(180, 200, 255);
		    font-size: 20px;
		    font-family: sans-serif;
	    }
	    .top {
		    margin-top: 10%;
	    }
	    .top-buffer {
	    	margin-top:20px; 
	    }
	</style>
		
 	<title> Appalachian State University Study </title>
</head>
	
	
<body>
	<div class="container-fluid text-center top">
		<div class="row">
			<div class="">
				<p id="name">Default</p>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-8 col-xs-offset-2">
				<div id="slider"></div>
			</div>
		</div>
		<div class="row top-buffer">
			<div class="col-xs-2 col-xs-offset-1">
				<p>No blame</p>
			</div>
			<div class="col-xs-2 col-xs-offset-2">
				<button type="button" onclick="on_click()" class="btn btn-default">Continue</button>
			</div>
			<div class="col-xs-2 col-xs-offset-2">
				<p>The most blame you would ever give</p>
			</div>
		</div>
	</div>   		
</body>

	<script type="text/javascript">
		var clip1 = new Audio();
		var clip2 = new Audio();
		
		clip1.src = "<?php echo $clip_path1; ?>";
		clip2.src = "<?php echo $clip_path2; ?>";
		
		var name = "<?php echo $_SESSION["trial"]; ?>";
	</script>
	
	<script type="text/javascript" src="pracJS2.js"></script>
	
</html>