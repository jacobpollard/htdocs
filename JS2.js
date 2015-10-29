	var sliderVal = 0;
	var responseTime = 0;
	var value = 0;
	var firstSlide = false;
	
	function clip1Play() {
		clip1.play();
		}
		
	function clip2Play() {
		clip2.play();
		}
	
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
	        //console.log(value);                                                                                      
			}
		
		//Initialize slider
		$( '#slider' ).slider({value: sliderVal, slide: on_slide})
		}