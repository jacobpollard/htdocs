<?php
	// Start the session
	session_start();
?>

<html>	
  
  <head>
  
  <link type="text/css" href="jquery-ui.min.css" rel="Stylesheet">	
  <script type="text/javascript" src="jquery-1.11.3.min.js"></script>
  <script type="text/javascript" src="jquery-ui.min.js"></script>
  
  
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
    			
		echo $clip_path1 . "<br>";
		echo $clip_path2 . "<br>";
		echo $_SESSION["condition"]. "<br>";
		echo $_SESSION["trial"]. "<br>";
    	
    ?>
    
   <style type='text/css'>
	    body {
		    background-color: rgb(180, 200, 255);
		    margin: 5%;
		    text-align: center;
		    font-size: 20;
		    font-family: sans-serif;
	    }
	    div.slider {
		    margin-left: 15%;
		    margin-right: 15%;
	    }
	    input {
		    font-size: 30;
		}
		p.left {
		    position: absolute;
		    left: 15%;
		}
		p.right {
		    position: absolute;
		    right: 15%;
		}    
	</style>
		
 		<title> Florida State University Study </title>
</head>
	
	
<body>
    
	<form id='form' action='pracScreen3.php' method='post'>
    	<div class='slider' id='slider'></div>
    	<p class='left'>No blame<br>at all</p>
        <p class='right'>The most blame<br>you would<br>ever give</p>
		<input type='submit' value='Submit Judgment'>
		<br>
        <br>
        <br>
        <br>
	</form>	
	
	<script type="text/javascript">
		var clip1 = new Audio();
		var clip2 = new Audio();
		
		clip1.src = "<?php echo $clip_path1; ?>";
		clip2.src = "<?php echo $clip_path2; ?>";
	</script>
	
	<script type="text/javascript" src="pracJS2.js"></script>	
	
</body>
	
</html>