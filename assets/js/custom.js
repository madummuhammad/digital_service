$(document).ready(function(){
	$(".scrollto").on('click',function(){
		var jml=$(this);
		var target=$(this).data('target');
		for (let i = 0; i < jml.length; i++) {
			$('html, body').animate({
				scrollTop: $(target).offset().top
			},100)
		}
	});
})

//needs jquery for the animations

"use strict";
var counter = 0;
const elem = document.getElementById("changing");

function startChangingText(textList, textDuration = 3){
	textDuration *= 1000
	elem.innerHTML = textList[0];
	const inst = setInterval(function() {change(textList);}, textDuration);
}

function change(textList) {
	$("#changing").fadeOut('slow');
	$("#changing").promise().done(function(){
		elem.innerHTML = textList[counter];
		$("#changing").fadeIn('slow');
	});
	counter++;
	if (counter >= textList.length) {
		counter = 0;
	}
}

startChangingText(['Website', 'Toko Online', 'Apps', 'Landing Page'], 2);


