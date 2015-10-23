<html>


    <?php
        
        //$file = fopen('responses.txt', 'a');
        $file = fopen('data/responses/responses-'.$_POST['subject'].'.txt', 'a');
        
        fwrite($file, 'SUBJECT: ' . $_POST['subject']);
        fwrite($file,  ' FIELD: ' . 'ct_' . $_POST['trial'] . '_rt');
        fwrite($file,  ' VALUE: ' . $_POST['rt']);
        fwrite($file, "\n");
        
        fclose($file);
        
    ?>


	<style type='text/css'>
		body {
			background-color: rgb(180, 200, 255);
			margin-left: 10%;
			margin-right: 10%;
			margin-top: 5%;
			margin-bottom: 5%;
			text-align: justify;
			font-size: 20;
			font-family: sans-serif;
		}
		td {
			letter-spacing: 1px;
			font-size: 16px;
			padding-top: .6cm;
			padding-left: 1cm;
		}
		form {
			text-align: center;
		}
		input.button {
			font-size: 30;
		}
	</style>


	<head>
		<title> Appalachian State University Study </title>
	</head>
	<body onload='on_load()'>
		<form action='debriefing.php' method='post' />
			<p><strong>Congratulations, you have completed all the experimental trials!</strong></p><br>
            <p>
                Before you are finished we need to collect several pieces of general information that
                would be asked in a typical Census survey. If a question is uncomfortable for you
                to answer, feel free to skip it.
            </p>
			<hr>
			<table>
				<tr>
					<td>
						Age
					</td>
					<td>
						<input type="text" name="age" size=3/> years
					</td>
				</tr>
				<tr>
					<td>
						Sex
					</td>
					<td>
						<input type="radio" class="radio" name="sex" value=0> Female &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
						<input type="radio" class="radio" name="sex" value=1> Male
					</td>
				</tr>
				<tr>
					<td>
						Ethnicity
					</td>
					<td>
						<select name="ethnicity">
							<option>-- Select One --</option>
							<option value="AmerIndian">American Indian/Alaskan Native</option>
							<option value="Asian">Asian/Pacific Islander</option>
							<option value="Black">Black non-Hispanic</option>
							<option value="Hispanic">Hispanic</option>
							<option value="MEastern">Middle Eastern</option>
							<option value="White">White non-Hispanic</option>
							<option value="Multi">Multiracial</option>
							<option value="other">Other</option>
						</select>
					</td>
				</tr>
				<tr>
					<td>
						&nbsp
					</td>
					<td>
						If Other, please specify:&nbsp&nbsp&nbsp<input type="text" name="other_eth">
					</td>
				</tr>
				<tr>
					<td>
						Education
						<br>
						(highest level
						<br>
						completed)
					</td>
					<td>
						<select name="education">
							<option>-- Select One --</option>
							<option value="elem">Elementary School</option>
							<option value="mid">Middle School</option>
							<option value="high">High School</option>
							<option value="somecoll">Some college</option>
							<option value="Assoc">Associate's Degree</option>
							<option value="Bachelors">Bachelor's Degree</option>
							<option value="Masters">Master's Degree</option>
							<option value="Prof">Professional Degree</option>
							<option value="Doctoral">Doctoral Degree</option>
						</select>
					</td>
				</tr>
				<tr>
					<td>
						Which political party
						<br>
						do you identify with?
					</td>
					<td>
						<input type="radio" class="radio" name="party" value=0> Republican &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
						<input type="radio" class="radio" name="party" value=1> Democrat &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
						<input type="radio" class="radio" name="party" value=2> Neither party
					</td>
				</tr>
				<tr>
					<td>
						How strongly do you
						<br>
						identify with the 
						<br>
						party selected above?
					</td>
					<td>
						Not at all&nbsp&nbsp<input type="radio" class="radio" name="strength" value=0>&nbsp&nbsp&nbsp&nbsp&nbsp
						<input type="radio" class="radio" name="strength" value=1>&nbsp&nbsp&nbsp&nbsp&nbsp
						<input type="radio" class="radio" name="strength" value=2>&nbsp&nbsp&nbsp&nbsp&nbsp
						<input type="radio" class="radio" name="strength" value=3>&nbsp&nbsp&nbsp&nbsp&nbsp
						<input type="radio" class="radio" name="strength" value=4>&nbsp&nbsp&nbsp&nbsp&nbsp
						<input type="radio" class="radio" name="strength" value=5>&nbsp&nbsp&nbsp&nbsp&nbsp												
						<input type="radio" class="radio" name="strength" value=6>&nbsp&nbsp Very strongly
					</td>
				</tr>
				<br>
				<br>
				<tr>
					<td>
						How religious
						<br>
						are you?
					</td>
					<td>
						Not at all&nbsp&nbsp<input type="radio" class="radio" name="religious" value=0>&nbsp&nbsp&nbsp&nbsp&nbsp
						<input type="radio" class="radio" name="religious" value=1>&nbsp&nbsp&nbsp&nbsp&nbsp
						<input type="radio" class="radio" name="religious" value=2>&nbsp&nbsp&nbsp&nbsp&nbsp
						<input type="radio" class="radio" name="religious" value=3>&nbsp&nbsp&nbsp&nbsp&nbsp
						<input type="radio" class="radio" name="religious" value=4>&nbsp&nbsp&nbsp&nbsp&nbsp
						<input type="radio" class="radio" name="religious" value=5>&nbsp&nbsp&nbsp&nbsp&nbsp
						<input type="radio" class="radio" name="religious" value=6>&nbsp&nbsp Very religious
					</td>
				</tr>
			</table>
			<br>
			<br>
			<input type='hidden' id='subject' name='subject' />
			<input type='submit' value='Continue' class='button' />
		</form>
	</body>
	
	
	<script type='text/javascript'>
	
		function on_load() {
		
			var subject = <?php echo $_POST['subject']; ?>;
			document.getElementById( 'subject' ).setAttribute( 'value', subject )
		}
		
	</script>


</html>
