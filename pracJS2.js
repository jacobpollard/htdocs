var sliderVal = 0;
var responseTime = 0;
var value = 0;
var firstSlide = false;
var musicFin = false;

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

//When clip2 has finished, allow user to continue	
clip2.addEventListener('ended', function() {
	musicFin = true;
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
	
	switch(name) {
		case "0":
			document.getElementById("name").innerHTML = "Daniel";
			break;
		case "1":
			document.getElementById("name").innerHTML = "Fran";
			break;
		case "2":
			document.getElementById("name").innerHTML = "Man";
			break;
		default:
			document.getElementById("name").innerHTML = "Isn't working";
			break;	
	}
}

function on_click() {
	if(musicFin == true) {
		window.location = "pracScreen3.php";
	}
}