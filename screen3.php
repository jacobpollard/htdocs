<?php
	// Start the session
	session_start();
?>

<!DOCTYPE html>
<html>
    <head>


    <?php
        
        switch ($_SESSION['audioNum']) {
        
            case 11: $destination = 'break2.php'; break;
            case 23: $destination = 'break3.php'; break;
            case 35: $destination = 'break4.php'; break;
            default: $destination = 'screen2.php';
        }
    
    ?>

	
	<style type='text/css'>
	    body {
		    background-color: rgb(180, 200, 255);
		    margin: 5%;
		    text-align: center;
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
	        $names_file = fopen('data/names.txt', 'r');
	        $name_index = $_SESSION["audioNum"];
        	for ($i = 0; $i <= $name_index; $i ++) $name = trim(fgets($names_file));
		    echo 'Describe in your own words what ' . $name . ' did.';
		    fclose($names_file);
	    ?>
        <br>
        <br>
        <form action="<?php echo $destination; ?>" method='post'>
            <textarea name='response'></textarea>
            <br>
            <br>
            <input class='submit' type='submit' value='Continue'>
        </form>
	</body>
	
	
</html>