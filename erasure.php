<?php

$text = $_POST["text"];

// split the words into an array
$words = explode(" ", $text);

// number of words in paragraph
$text_length = count($words);

$count = 1;

?>

<?php include('header.php'); ?>

<div id="page">
	<div id="paragraph">
	<?php
		foreach ($words as $word) {
			echo "<span id='$count'>$word</span> ";
			$count++;
		}
	?>
	</div>

	<input id="next_round" type="submit" value="Next Round" />
	<div id="words_left">Words left: <span class="num"></span></div>

	<a class="back_link" href="index.php">Back to home</a>

	<input id="text_length" name="text_length" type="hidden" value="<?php echo $text_length; ?>" />
</div>

<?php include('footer.php'); ?>
