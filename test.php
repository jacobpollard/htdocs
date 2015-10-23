<?php
	// Start the session
	session_start();
?>

<html>	
  
  <head>
  
  <link type="text/css" href="jquery-ui-1.8.16.custom.css" rel="Stylesheet">	
  <script type="text/javascript" src="jquery-1.6.2.min.js"></script>
  <script type="text/javascript" src="jquery-ui-1.8.16.custom.min.js"></script>
  
	<?php
    	
    	//File containing auido names and the order in which they are played
    	$file = fopen('data/order' . $_SESSION["condition"] . '.txt', r)
    			or die("Unable to open order(n).txt file");
    	
    	$count = 0;
    	
    	//Add names to $audioArray
    	while(!feof($file) && $count < 72) {
			$audioArray[$count] = trim(fgets($file));
			$count++;
		}
		
		//print_r($audioArray);
		
		echo $_SESSION["condition"]. "<br>";
		
		//Grab two audio files for current trial
		$clip_path1 = "data/audio/" . $audioArray[$_SESSION["trial"]] . ".mp3";
		
		echo $audioArray[$_SESSION["trial"]]. "<br>";
		
		$_SESSION["trial"] +=1;
		
		echo $audioArray[$_SESSION["trial"]]. "<br>";
		
		$clip_path2 = "data/audio/" . $audioArray[$_SESSION["trial"]] . ".mp3";
		
		echo $clip_path1 . "<br>";
		echo $clip_path2 . "<br>";
		
		$_SESSION["trial"] +=1;
		   	
    	/*$clip_length_file = fopen($clip_length_path, 'r');
    	$clip_length = fgets($clip_length_file);
    	fclose($clip_length_file);*/
    	
    ?>
    
    
    <style type='text/css'>
	    body {
		    background-color: rgb(180, 200, 255);
		    position: absolute;
		    top: 15%;
		    left: 5%;
		    width: 90%;
		    text-align: center;
		    font-size: 30;
		    font-family: sans-serif;
	    }
	    input {
		    font-size: 30;
		}
	</style>
	
	
 		<title> Florida State University Study </title>
</head>
	
	
	<body onload='on_load()'>
    
		<form id='form' action='index.php' method='post'>
            <div class='slider' id='slider'></div>
			<input type='submit' value='Submit Judgment'>
			<br>
            <br>
            <br>
            <br>
		</form>			

		<script type='text/javascript'>
		
			var clip1 = new Audio();
			var clip2 = new Audio();
			var sliderVal = 0;
			var responseTime = 0;
			
			clip1.src = "<?php echo $clip_path1; ?>";
			clip2.src = "<?php echo $clip_path2; ?>";
	
	    	function on_load() {
				
	        	function on_change(event, ui) {
	                                                                                                  
	            	//document.getElementById('response').setAttribute('value', ui.value)
				}
	    
	        	$( '#slider' ).slider( {
	        
	         	   value: 0,
	        	   change: on_change()
				} )
			}
	    
		</script>
		<!--<script type='text/javascript'>		
	
			/*clip1.addEventListener('loadedmetadata', function() {
				clip.play(); 
				//alert("Duration::: "+clip.duration*1000+", <?php echo $clip_length ?>");
				setTimeout("document.forms['form'].submit();", clip.duration*1000)
				});*/
	

		</script>-->
	</body>
	
</html>