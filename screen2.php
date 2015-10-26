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
    
	<form id='form' action='screen3.php' method='post'>
    	<div class='slider' id='slider'></div>
    	<p class='left'>No blame<br>at all</p>
        <p class='right'>The most blame<br>you would<br>ever give</p>
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
		var value = 0;
		var firstSlide = false;
			
		clip1.src = "<?php echo $clip_path1; ?>";
		clip2.src = "<?php echo $clip_path2; ?>";
		
		function clip1Play() {
			clip1.play();
			}
			
		function clip2Play() {
			clip2.play();
			}
		
		//Once clip1 is loaded, wait 300ms then play
		/*clip1.addEventListener('loadedmetadata', function() {
			setTimeout('clip1Play()', 300);
			});*/
		
		//When clip1 has finished playing, wait 400ms then play clip2	
		clip1.addEventListener('ended', function() {
			setTimeout('clip2Play()', 400);
		})
		
		//AJAX send value
		function record_value(){
			//Increment time
			responseTime += 200;
			var xmlhttp = new XMLHttpRequest();
			//Not sure if this call is needed
			xmlhttp.onreadystatechange = function() {
            	if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                	//document.getElementById("txtHint").innerHTML = xmlhttp.responseText;
					}
				}
			var valStr = value.toString();
			var timeStr = responseTime.toString();
			var ajaxStr = "saveValue.php?value=".concat(valStr,"&responseTime=",timeStr);
			//console.log(ajaxStr);
            xmlhttp.open("GET", ajaxStr, true);
			xmlhttp.send();
			}
			
		function on_slide(event, ui) {
			value = ui.value;
	        console.log(value); 
			if(firstSlide == false)
			{ 
				setTimeout('clip1Play()', 300);
				firstSlide = true;
				}
			}
		
		$( document ).ready(on_load());

		function on_load() {
			
			//Record the slider value every 200ms
			setInterval( 'record_value()', 200 )
			
			//Do when slider is moved	
			function on_change(event, ui) {
	            
	            value = ui.value;
	            console.log(value);                                                                                      
				}
			
			//Initialize slider
			$( '#slider' ).slider({value: sliderVal, slide: on_slide})
			}
	

	</script>
</body>
	
</html>