var clip1 = new Audio();
var clip2 = new Audio();
var sliderVal = 0;
var responseTime = 0;
			
clip1.src = "<?php echo $clip_path1; ?>";
clip2.src = "<?php echo $clip_path2; ?>";
	
function on_load() {
				
	function on_change(event, ui) {
	                                                                                                  
		//document.getElementById('response').setAttribute('value', ui.value)
		}
	    
	$( '#slider' ).slider( {
	        
		value: sliderVal,
	    change: on_change()
		} )
	}