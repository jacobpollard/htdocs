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
    	
    	//If there is a response, grab last response and save to session
    	if(isset($_POST["response"])){
    		$response = " Response: ".$_POST["response"];
    		
    		$file = fopen('data/responses/'.$_SESSION["ID"].'-'.$_SESSION["audioNum"].'.txt', 'a');
    		
    		fwrite($file,$response);
		
			fclose($file);
    		}
    	
    	//File containing auido names and the order in which they are played
    	$file = fopen('data/order' . $_SESSION["condition"] . '.txt', r)
    			or die("Unable to open order(n).txt file");
    	
    	$count = 0;
    	
    	//Add names to $audioArray
    	while(!feof($file) && $count < 72) {
			$audioArray[$count] = trim(fgets($file));
			$count++;
		}
		
		fclose($file);
		
		//print_r($audioArray);
		
		//Grab two audio files for current trial
		$clip_path1 = "data/audio/" . $audioArray[$_SESSION["trial"]] . ".mp3";
		
		echo $audioArray[$_SESSION["trial"]]. "<br>";
		
		$_SESSION["trial"] +=1;
		
		echo $audioArray[$_SESSION["trial"]]. "<br>";
		
		$clip_path2 = "data/audio/" . $audioArray[$_SESSION["trial"]] . ".mp3";
		
		echo $clip_path1 . "<br>";
		echo $clip_path2 . "<br>";
		
		$audioNum = round($_SESSION["trial"]/2,0,PHP_ROUND_HALF_DOWN);
		$_SESSION["audioNum"] = $audioNum;
		$audioNum = " AudioNum: ".$audioNum."\n\n";
		
		$condition = " Condition: ".$_SESSION["condition"]."\n";
		$subject = " Subject: ".$_SESSION["subject"]."\n";
		
		$file = fopen('data/responses/'.$_SESSION["ID"].'-'.$_SESSION["audioNum"].'.txt', 'w');
	
		fwrite($file,$subject.$condition.$audioNum);
		
		fclose($file);
		
		echo $_SESSION["condition"]. "<br>";
		echo $_SESSION["trial"]. "<br>";
		echo $_SESSION["audioNum"]. "<br>";
		
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
	
	<script type="text/javascript">
		var clip1 = new Audio();
		var clip2 = new Audio();
		
		clip1.src = "<?php echo $clip_path1; ?>";
		clip2.src = "<?php echo $clip_path2; ?>";
	</script>
	
	<script type="text/javascript" src="JS2.js"></script>	
	
</body>
	
</html>