var round;
var words;
var text_length;
var words_left;

function erase(id) {
	var span = "#" + id;

	var width = $(span).width();

	$(span).addClass("erased");
	$(span).css("width", width);
}

function erasewords() {
	// calculate number of words to erase this round
	var num_words = parseInt(round / 3) + 2;
	
	// no more than seven words at a time
	if (num_words > 7) {
		num_words = 7;
	}

	// if we're at the end, don't go past the number of words left
	if (num_words > words_left) { 
		num_words = words_left;
	}

	for (var i=0; i<num_words; i++) {
		// find a word we haven't erased yet
		var index;
		do {
			index = parseInt(Math.random() * text_length);
		} while (words[index] == 0)

		// now erase the word
		words[index] = 0;
		erase(index + 1);
		words_left--;
	}

	// update words_left
	$("#words_left .num").html(words_left);

	round++;

	return false;
}

function init() {
	words_left = text_length;

	// update words_left
	$("#words_left .num").html(words_left);

	// load words[]
	words = [];
	for (i=1; i<text_length; i++) {
		words.push(i);
	}

	round = 1;
}

$(document).ready(function() {
	// get length of text
	text_length = $("#text_length").val();

	init();

	$("#next_round").click(erasewords);

	$("#start_over").click(function() {
		$("#paragraph span").removeClass("erased");

		init();

		return false;
	});
});
