var round = 1;
var words = [1, 2, 3, 4, 5, 6, 7];
var text_length = 7;
var words_left = text_length;

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

$(document).ready(function() {
	// get length of text
	text_length = $("#text_length").val();
	words_left = text_length;

	// update words_left
	$("#words_left .num").html(words_left);

	// load words[]
	for (i=1; i<text_length; i++) {
		words.push(i);
	}

	$("#next_round").click(erasewords);
});
