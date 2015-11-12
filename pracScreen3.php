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
		    font-size: 20;
		    font-family: sans-serif;
	    }
	    textarea {
	        width: 500px;
	        height: 300px;
	    }
	    input {
		    font-size: 30;
		}
	</style>
	
	
		<title> Florida State University Study </title>
	</head>
	
	
	<body>
	    <?php
	        switch ($_SESSION['trial']) {
	            case 0: echo "Describe in your own words what Daniel did."; break;
	            case 1: echo "Describe in your own words what Josh did.";   break;
	            case 2: echo "Describe in your own words what Emily did.";  break;
	        }
	        $_SESSION["trial"]++;
	    ?>
        <br>
        <br>
        <form action="<?php echo $destination; ?>" method='post'>
            <textarea name='pracResponse'></textarea>
            <br>
            <br>
            <input class='submit' type='submit' value='Continue'>
        </form>
	</body>
	
	
</html>