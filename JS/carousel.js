$(document).ready(function() {
		   
	var slider = $("#image_list");                     // slider = ul element
	var leftProperty, newleftProperty;
		
	// the click event handler for the right button						
	$("#right_button").click(function() { 
		// get value of current left property
		leftProperty = parseInt(slider.css("left"));//return 0 for left
		// determine new value of left property
		if (leftProperty - 300 <= -900) { // the first time the newLeftProperty is 0
			newLeftProperty = 0; }
		else {
			newLeftProperty = leftProperty - 300; } // for the first time newLeftProperty = 0-300=-300
		// use the animate function to change the left property
		slider.animate( {left: newLeftProperty}, 1000);
	});  // end click
	
	// the click event handler for the left button
	$("#left_button").click(function() {
		// get value of current right property
		leftProperty = parseInt(slider.css("left"));
		
		// determine new value of left property
		if (leftProperty < 0) {
			newLeftProperty = leftProperty + 300;
		}
		else {
			newLeftProperty = 0;
		}
		
		// use the animate function to change the left property
		slider.animate( {left: newLeftProperty}, 1000);				
	});  // end click		
}); // end ready