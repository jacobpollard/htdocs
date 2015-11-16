<?php
	// Start the session
	session_start();
?>

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
    	
    	if(isset($_POST["response"])){
	    	$_SESSION["response"] = $_POST["response"];
    	}
    	
    	//If there is a response, grab last response and save to file 
    	if(isset($_SESSION["response"])){
    		$response = " Response: ".$_POST["response"];
    		$file = fopen('data/responses/'.$_SESSION["ID"].'-'.$_SESSION["audioNum"].'.txt', 'a');
    		fwrite($file,$response);
			fclose($file);
    		}
    	
    	//File containing auido file names and the order in which they are played
    	$file = fopen('data/order' . $_SESSION["condition"] . '.txt', r)
    			or die("Unable to open order(n).txt file");
    	
    	$count = 0;
    	
    	//Add audio file names to $audioArray
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
		
		//Calculate audioNum
		$audioNum = round($_SESSION["trial"]/2,0,PHP_ROUND_HALF_DOWN);
		
		//Save audioNum to SESSION
		$_SESSION["audioNum"] = $audioNum;
		
		$audioNum = " AudioNum: ".$audioNum."\n\n";	
		$condition = " Condition: ".$_SESSION["condition"]."\n";
		$subject = " Subject: ".$_SESSION["subject"]."\n";
		
		//Create file and header for data. 
		$file = fopen('data/responses/'.$_SESSION["ID"].'-'.$_SESSION["audioNum"].'.txt', 'w');
		fwrite($file,$subject.$condition.$audioNum);		
		fclose($file);
		
		echo "Condition: ".$_SESSION["condition"]."<br>";
		echo "Trial: ".$_SESSION["trial"]."<br>";
		echo "AudioNum: ".$_SESSION["audioNum"]."<br>";
		
		$_SESSION["trial"] +=1;
		
		//Grab current name
		$names_file = fopen('data/names.txt', 'r');
        for ($i = 0; $i <= $_SESSION["audioNum"]; $i ++) $name = trim(fgets($names_file));
		fclose($names_file);
    	
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
		
 		<title> Florida State University Study </title>
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
	
	<script type="text/javascript">
		var clip1 = new Audio();
		var clip2 = new Audio();
		
		clip1.src = "<?php echo $clip_path1; ?>";
		clip2.src = "<?php echo $clip_path2; ?>";
		
		var name = "<?php echo $name; ?>";
	</script>
	
	<script type="text/javascript" src="JS2.js"></script>	
	
</body>
	
</html>