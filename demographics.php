<?php
	// Start the session
	session_start();
?>

<html>

	<head>
		<meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
		<title> Florida State University Study </title>
		
		<style type='text/css'>
			body {
				background-color: rgb(180, 200, 255);
			}
			
			#container {
				margin-left: 0px;
				margin-right: 0px;
			}
			
			#Sex {
				margin-right: 15px;
			}
		</style>
	</head>
	
	<body>
		<div class="container-fluid">
			<div class="col-lg-6">
				<form class="form-horizontal" role="form">
					<div class="form-group">
						<label class="control-label col-md-1 col-md-offset-4" for="Age">Age:</label>
						<div class="col-md-4 col-md-offset-1">
							<input type="text" class="form-control" id="Age" placeholder="Enter age">
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-1 col-md-offset-4" for="Male" id="Sex">Sex:</label>
						<label class="radio-inline col-md-1 col-md-offset-1"><input type="radio" name="optradio" id="Male">Male</label>
						<label class="radio-inline col-md-1"><input type="radio" name="optradio">Female</label>
					</div>
					<div class="form-group">
						<label class="control-label col-md-1 col-md-offset-4" for="Ethn">Ethnicity:</label>
						<div class="col-md-4 col-md-offset-1">
							<select class="form-control" id="Ethn">
								<option value="AmerIndian">American Indian/Alaskan Native</option>
								<option value="Asian">Asian/Pacific Islander</option>
								<option value="Black">Black non-Hispanic</option>
								<option value="Hispanic">Hispanic</option>
								<option value="MEastern">Middle Eastern</option>
								<option value="White">White non-Hispanic</option>
								<option value="Multi">Multiracial</option>
								<option value="other">Other</option>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-1 col-md-offset-4" for="Ethn">Education:</label>
						<div class="col-md-4 col-md-offset-1">
							<select class="form-control" id="Educ">
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
						</div>
					</div>
				</form>
			</div>
			<div class="col-md-6">
				<form class="form-horizontal" role="form">
					<div class="form-group">
						<label class="control-label col-md-1 col-md-offset-4" for="Ethn">Country:</label>
						<div class="col-md-4 col-md-offset-1">
							<select class="form-control" id="country">
								<option>-- Select One --</option>
								<option value="US">United States</option>
								<option value="AF">Afghanistan</option>
								<option value="AL">Albania</option>
								<option value="DZ">Algeria</option>
								<option value="AS">American Samoa</option>
								<option value="AD">Andorra</option>
								<option value="AO">Angola</option>
								<option value="AI">Anguilla</option>
								<option value="AQ">Antarctica</option>
								<option value="AG">Antigua and Barbuda</option>
								<option value="AR">Argentina</option>
								<option value="AM">Armenia</option>
								<option value="AW">Aruba</option>
								<option value="AU">Australia</option>
								<option value="AT">Austria</option>
								<option value="AZ">Azerbaijan</option>
								<option value="BS">Bahamas</option>
								<option value="BH">Bahrain</option>
								<option value="BD">Bangladesh</option>
								<option value="BB">Barbados</option>
								<option value="BY">Belarus</option>
								<option value="BE">Belgium</option>
								<option value="BZ">Belize</option>
								<option value="BJ">Benin</option>
								<option value="BM">Bermuda</option>
								<option value="BT">Bhutan</option>
								<option value="BO">Bolivia</option>
								<option value="BA">Bosnia and Herzegovina</option>
								<option value="BW">Botswana</option>
								<option value="BV">Bouvet Island</option>
								<option value="BR">Brazil</option>
								<option value="IO">British Indian Ocean Territory</option>
								<option value="BN">Brunei Darussalam</option>
								<option value="BG">Bulgaria</option>
								<option value="BF">Burkina Faso</option>
								<option value="BI">Burundi</option>
								<option value="KH">Cambodia</option>
								<option value="CM">Cameroon</option>
								<option value="CA">Canada</option>
								<option value="CV">Cape Verde</option>
								<option value="KY">Cayman Islands</option>
								<option value="CF">Central African Republic</option>
								<option value="TD">Chad</option>
								<option value="CL">Chile</option>
								<option value="CN">China</option>
								<option value="CX">Christmas Island</option>
								<option value="CC">Cocos (Keeling) Islands</option>
								<option value="CO">Colombia</option>
								<option value="KM">Comoros</option>
								<option value="CG">Congo</option>
								<option value="CD">Congo</option>
								<option value="CK">Cook Islands</option>
								<option value="CR">Costa Rica</option>
								<option value="CI">Cote D'ivoire</option>
								<option value="HR">Croatia</option>
								<option value="CU">Cuba</option>
								<option value="CY">Cyprus</option>
								<option value="CZ">Czech Republic</option>
								<option value="DK">Denmark</option>
								<option value="DJ">Djibouti</option>
								<option value="DM">Dominica</option>
								<option value="DO">Dominican Republic</option>
								<option value="EC">Ecuador</option>
								<option value="EG">Egypt</option>
								<option value="SV">El Salvador</option>
								<option value="GQ">Equatorial Guinea</option>
								<option value="ER">Eritrea</option>
								<option value="EE">Estonia</option>
								<option value="ET">Ethiopia</option>
								<option value="FK">Falkland Islands (Malvinas)</option>
								<option value="FO">Faroe Islands</option>
								<option value="FJ">Fiji</option>
								<option value="FI">Finland</option>
								<option value="FR">France</option>
								<option value="GF">French Guiana</option>
								<option value="PF">French Polynesia</option>
								<option value="TF">French Southern Territories</option>
								<option value="GA">Gabon</option>
								<option value="GM">Gambia</option>
								<option value="GE">Georgia</option>
								<option value="DE">Germany</option>
								<option value="GH">Ghana</option>
								<option value="GI">Gibraltar</option>
								<option value="GR">Greece</option>
								<option value="GL">Greenland</option>
								<option value="GD">Grenada</option>
								<option value="GP">Guadeloupe</option>
								<option value="GU">Guam</option>
								<option value="GT">Guatemala</option>
								<option value="GG">Guernsey</option>
								<option value="GN">Guinea</option>
								<option value="GW">Guinea-bissau</option>
								<option value="GY">Guyana</option>
								<option value="HT">Haiti</option>
								<option value="HM">Heard and Mcdonald Islands</option>
								<option value="VA">Holy See (Vatican City State)</option>
								<option value="HN">Honduras</option>
								<option value="HK">Hong Kong</option>
								<option value="HU">Hungary</option>
								<option value="IS">Iceland</option>
								<option value="IN">India</option>
								<option value="ID">Indonesia</option>
								<option value="IR">Iran</option>
								<option value="IQ">Iraq</option>
								<option value="IE">Ireland</option>
								<option value="IL">Israel</option>
								<option value="IT">Italy</option>
								<option value="JM">Jamaica</option>
								<option value="JP">Japan</option>
								<option value="JO">Jordan</option>
								<option value="KZ">Kazakhstan</option>
								<option value="KE">Kenya</option>
								<option value="KI">Kiribati</option>
								<option value="KP">Korea, North</option>
								<option value="KR">Korea, South</option>
								<option value="KW">Kuwait</option>
								<option value="KG">Kyrgyzstan</option>
								<option value="LA">Laos</option>
								<option value="LV">Latvia</option>
								<option value="LB">Lebanon</option>
								<option value="LS">Lesotho</option>
								<option value="LR">Liberia</option>
								<option value="LI">Liechtenstein</option>
								<option value="LT">Lithuania</option>
								<option value="LU">Luxembourg</option>
								<option value="MO">Macao</option>
								<option value="MK">Macedonia</option>
								<option value="MG">Madagascar</option>
								<option value="MW">Malawi</option>
								<option value="MY">Malaysia</option>
								<option value="MV">Maldives</option>
								<option value="ML">Mali</option>
								<option value="MT">Malta</option>
								<option value="MH">Marshall Islands</option>
								<option value="MQ">Martinique</option>
								<option value="MR">Mauritania</option>
								<option value="MU">Mauritius</option>
								<option value="YT">Mayotte</option>
								<option value="MX">Mexico</option>
								<option value="FM">Micronesia</option>
								<option value="MD">Moldova</option>
								<option value="MC">Monaco</option>
								<option value="MN">Mongolia</option>
								<option value="ME">Montenegro</option>
								<option value="MS">Montserrat</option>
								<option value="MA">Morocco</option>
								<option value="MZ">Mozambique</option>
								<option value="MM">Myanmar</option>
								<option value="NA">Namibia</option>
								<option value="NR">Nauru</option>
								<option value="NP">Nepal</option>
								<option value="NL">Netherlands</option>
								<option value="AN">Netherlands Antilles</option>
								<option value="NC">New Caledonia</option>
								<option value="NZ">New Zealand</option>
								<option value="NI">Nicaragua</option>
								<option value="NE">Niger</option>
								<option value="NG">Nigeria</option>
								<option value="NU">Niue</option>
								<option value="NF">Norfolk Island</option>
								<option value="MP">Northern Mariana Islands</option>
								<option value="NO">Norway</option>
								<option value="OM">Oman</option>
								<option value="PK">Pakistan</option>
								<option value="PW">Palau</option>
								<option value="PS">Palestinian Territory, Occupied</option>
								<option value="PA">Panama</option>
								<option value="PG">Papua New Guinea</option>
								<option value="PY">Paraguay</option>
								<option value="PE">Peru</option>
								<option value="PH">Philippines</option>
								<option value="PN">Pitcairn</option>
								<option value="PL">Poland</option>
								<option value="PT">Portugal</option>
								<option value="PR">Puerto Rico</option>
								<option value="QA">Qatar</option>
								<option value="RE">Reunion</option>
								<option value="RO">Romania</option>
								<option value="RU">Russian Federation</option>
								<option value="RW">Rwanda</option>
								<option value="SH">Saint Helena</option>
								<option value="KN">Saint Kitts and Nevis</option>
								<option value="LC">Saint Lucia</option>
								<option value="PM">Saint Pierre and Miquelon</option>
								<option value="VC">Saint Vincent and The Grenadines</option>
								<option value="WS">Samoa</option>
								<option value="SM">San Marino</option>
								<option value="ST">Sao Tome and Principe</option>
								<option value="SA">Saudi Arabia</option>
								<option value="SN">Senegal</option>
								<option value="RS">Serbia</option>
								<option value="SC">Seychelles</option>
								<option value="SL">Sierra Leone</option>
								<option value="SG">Singapore</option>
								<option value="SK">Slovakia</option>
								<option value="SI">Slovenia</option>
								<option value="SB">Solomon Islands</option>
								<option value="SO">Somalia</option>
								<option value="ZA">South Africa</option>
								<option value="GS">South Georgia</option>
								<option value="ES">Spain</option>
								<option value="LK">Sri Lanka</option>
								<option value="SD">Sudan</option>
								<option value="SR">Suriname</option>
								<option value="SJ">Svalbard and Jan Mayen</option>
								<option value="SZ">Swaziland</option>
								<option value="SE">Sweden</option>
								<option value="CH">Switzerland</option>
								<option value="SY">Syrian Arab Republic</option>
								<option value="TW">Taiwan</option>
								<option value="TJ">Tajikistan</option>
								<option value="TZ">Tanzania</option>
								<option value="TH">Thailand</option>
								<option value="TL">Timor-leste</option>
								<option value="TG">Togo</option>
								<option value="TK">Tokelau</option>
								<option value="TO">Tonga</option>
								<option value="TT">Trinidad and Tobago</option>
								<option value="TN">Tunisia</option>
								<option value="TR">Turkey</option>
								<option value="TM">Turkmenistan</option>
								<option value="TC">Turks and Caicos Islands</option>
								<option value="TV">Tuvalu</option>
								<option value="UG">Uganda</option>
								<option value="UA">Ukraine</option>
								<option value="AE">United Arab Emirates</option>
								<option value="GB">United Kingdom</option>
								<option value="US">United States</option>
								<option value="UM">United States Minor Outlying Islands</option>
								<option value="UY">Uruguay</option>
								<option value="UZ">Uzbekistan</option>
								<option value="VU">Vanuatu</option>
								<option value="VE">Venezuela</option>
								<option value="VN">Viet Nam</option>
								<option value="VG">Virgin Islands, British</option>
								<option value="VI">Virgin Islands, U.S.</option>
								<option value="WF">Wallis and Futuna</option>
								<option value="EH">Western Sahara</option>
								<option value="YE">Yemen</option>
								<option value="ZM">Zambia</option>
								<option value="ZW">Zimbabwe</option>
							</select>
						</div>	
					</div>
				</form>
			</div>
		</div>
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
						How would you
						<br>
						describe your
						<br>
						political beliefs?
					</td>
					<td>
						<select name="political" id="political">
							<option>-- Select One --</option>
							<option value="E_Lib">Extremely Liberal</option>
							<option value="St_Lib">Strongly Liberal</option>
							<option value="Lib">Liberal</option>
							<option value="Sl_Lib">Slightly Liberal</option>
							<option value="Mod">Moderate</option>
							<option value="Sl_Con">Slightly Conservative</option>
							<option value="Con">Conservative</option>
							<option value="St_Con">Strongly Conservative</option>
							<option value="Ex_Con">Extremely Conservative</option>
							<option value="other">Other</option>
						</select>
					</td>
				</tr>
				<tr>
					<td>
						&nbsp
					</td>
					<td>
						If Other, please specify:&nbsp&nbsp&nbsp<input type="text" name="other_pol">
					</td>
				</tr>
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
						<input type="radio" class="radio" name="religious" value=4>&nbsp&nbsp Extremely
					</td>
				</tr>
			</table>
			<br>
			<br>
			<input type='submit' value='Continue' class='button' />
		</form>-->
		</div>
	</body>

</html>
