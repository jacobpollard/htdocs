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
	
	//Initialize slider
	$( '#slider' ).slider({value: sliderVal, slide: on_slide});
	}