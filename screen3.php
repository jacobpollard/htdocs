<!DOCTYPE html>
<html>
    <head>


    <?php
        
        //$file = fopen('responses.txt', 'a');
        /*$file = fopen('data/responses/responses-'.$_POST['subject'].'.txt', 'a');

        
        fwrite($file, 'SUBJECT: ' . $_POST['subject']);
        fwrite($file,  ' FIELD: ' . 'et_' . $_POST['trial'] . '_updt');
        fwrite($file,  ' VALUE: ' . $_POST['response']);
        fwrite($file, "\n");
        
        fwrite($file, 'SUBJECT: ' . $_POST['subject']);
        fwrite($file,  ' FIELD: ' . 'et_' . $_POST['trial'] . '_updt_rt1');
        fwrite($file,  ' VALUE: ' . $_POST['rt1']);
        fwrite($file, "\n");
        
        fwrite($file, 'SUBJECT: ' . $_POST['subject']);
        fwrite($file,  ' FIELD: ' . 'et_' . $_POST['trial'] . '_updt_rt2');
        fwrite($file,  ' VALUE: ' . $_POST['rt2']);
        fwrite($file, "\n");
        
        fclose($file);
        
        switch ($_POST['trial']) {
        
            case 11: $destination = 'break2.php'; break;
            case 23: $destination = 'break3.php'; break;
            case 35: $destination = 'break4.php'; break;
            default: $destination = 'et1.php';
        }*/
    
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
	        $name_index = $_POST['trial'];
        	for ($i = 0; $i <= $name_index; $i ++) $name = trim(fgets($names_file));
		    echo 'Describe in your own words what ' . $name . ' did.';
		    fclose($names_file);
	    ?>
        <br>
        <br>
        <form action="index.php" method='post'>
            <input type='hidden' name='subject' value="<?php echo $_POST['subject']; ?>">
            <input type='hidden' name='condition' value="<?php echo $_POST['condition']; ?>">
            <input type='hidden' name='trial' value="<?php echo $_POST['trial'] + 1; ?>">
            <textarea name='response'></textarea>
            <br>
            <br>
            <input class='submit' type='submit' value='Continue'>
        </form>
	</body>
	
	
</html>