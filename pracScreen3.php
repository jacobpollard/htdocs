<?php
	// Start the session
	session_start();
?>

<!DOCTYPE html>
<html>
    <head>
    
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
		<script type="text/javascript" src="jquery-1.11.3.min.js"></script>
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

    <?php
        
    	if ($_SESSION["trial"] == 2) {
	    	$destination = 'practiceBreak.php';
    	}
        else {
        	$destination = 'pracScreen1.php';
        }
    
    ?>

	
	<style type='text/css'>
	    body {
		    background-color: rgb(180, 200, 255);
		    font-size: 20px;
		    font-family: sans-serif;
		    text-align: center;
	    }
		.top {
		    margin-top: 10%;
	    }
	</style>
	
	
		<title> Appalachian State University Study </title>
	</head>
	
	
	<body>
		<div class="container top">
			<div class="row">
				<p id="question"></p>
			</div>
			<div class="row">
				<div class="col-xs-8 col-xs-offset-2">
				<form role="form" action="<?php echo $destination; ?>" method='post'>
					<div class="form-group">
						<textarea class="form-control" rows="10"></textarea>
					</div>
					<button type="submit" class="btn btn-default">Submit</button>
				</form>
				</div>
			</div>
		</div>
		
		<script type="text/javascript">
			var trial = "<?php echo $_SESSION["trial"]; ?>";
			
			$( document ).ready(on_load());
			
			function on_load() {
				switch(trial) {
					case "0":
						document.getElementById("question").innerHTML = "Describe in your own words what Daniel did.";
						break;
					case "1":
						document.getElementById("question").innerHTML = "Describe in your own words what Josh did.";
						break;
					case "2":
						document.getElementById("question").innerHTML = "Describe in your own words what Emily did.";
						break;
					default:
						document.getElementById("question").innerHTML = "Error";
						break;	
				}
			}
		</script>
	</body>
	
	
</html>