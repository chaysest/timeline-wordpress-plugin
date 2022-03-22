(function( $ ) {
	'use strict';

	// Get Base Elements
	let bar = document.querySelector('.progress-bar');
	let emptyBar = document.querySelector('.empty-bar');
	let labels = document.querySelector('.labels');
	let wrapper = document.querySelector('.progress-bar-wrap')

	// progArray is defined in the HTML created by the shortcode.
	if(typeof progArray == 'undefined'){
		return;
	}
	// It is the JSON of the PHP array created by the get_field_object() function.
	// get_field_object() documentation: https://www.advancedcustomfields.com/resources/get_field_object/
	// to see the object in the console uncomment below:
	// console.log(progArray);
	var currentTier = progArray['value']; // progArray is defined in the HTML created by the shortcode.
	const tiers = progArray['choices']; // progArray is defined in the HTML created by the shortcode.

	function createMarkers(){
		for (let i = 0; i < Object.keys(tiers).length; i++){
			let circle = document.createElement('div');
			circle.setAttribute('class', 'marker');
			wrapper.appendChild(circle);
		}
		positionAllMarkers();
	}


	function positionAllMarkers(){
		var markers = document.getElementsByClassName('marker');
		let i = 0;

		let wrapperBB = wrapper.getBoundingClientRect();
		let fillUpToCurrentTier = true;
		for (const key in tiers){
			let marker = markers.item(i);
			// Move Each Circle to a cooresponding label
			let moveToLabel = document.querySelector('.' + key);
			let moveToLabelBB = moveToLabel.getBoundingClientRect();
			let endOffset = moveToLabelBB.left - wrapperBB.left
			let offset = (moveToLabel.offsetWidth / 2) + endOffset - (marker.offsetWidth / 2);
			marker.style.left = offset + 'px';

			if(fillUpToCurrentTier){
				marker.style.backgroundColor = '#3173AF';
				if (key === currentTier){
					fillUpToCurrentTier = false;
				}
			}

			i++;
		};
	}


	function createLabels(){
		for (const key in tiers){
			let li = document.createElement('li');
			li.innerHTML = tiers[key];
			li.setAttribute('class', key);
			labels.appendChild(li);
		};
	}


	function update(active){

		let firstLabel = labels.firstElementChild;
		let currentLabel = document.querySelector('.' + active);
		let lastLabel = labels.lastElementChild;

		// Bounding Boxes for x position
		let currentLabelBB = currentLabel.getBoundingClientRect();
		let lastLabelBB = lastLabel.getBoundingClientRect();
		let wrapperBB = wrapper.getBoundingClientRect();

		// Offset amounts
		let startOffset = firstLabel.offsetWidth / 2;
		let endOffset = currentLabelBB.left - wrapperBB.left;
		let fullOffset = lastLabelBB.left - wrapperBB.left;
		let lastLabelOffset = lastLabel.offsetWidth / 2;
		let currentLabelOffset = currentLabel.offsetWidth / 2;

		// Adjust bars starting X
		bar.style.left = startOffset + 'px';
		emptyBar.style.left = startOffset + 'px';

		// Change Bars Widths
		let progBarPxWidth = currentLabelOffset + endOffset - startOffset + 'px';
		let fullBarPxWidth = lastLabelOffset + fullOffset - startOffset + 'px';

		bar.style.width = progBarPxWidth;
		emptyBar.style.width = fullBarPxWidth;
	};

	createLabels();

	createMarkers();

	update(currentTier);

	window.onresize = function(){
		update(currentTier);
		positionAllMarkers();
	}

})( jQuery );
