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

	<div id="the_end">
		<h2>You did it!</h2>

		<p>If you need more practice, you can <a class="start_over" href="">start over</a>. Or, if you want to memorize a new paragraph, you can go <a href="index.php">back to home</a>.</p>
	</div>

	<div id="sub">
		<input id="next_round" type="submit" value="Next Round" />
		<div id="words_left">Words left: <span class="num"></span></div>

		<div class="controls">
			<a href="index.php">Back to home</a> &bull;
			<a class="start_over" href="#">Start over</a>
		</div>
	</div>

	<input id="text_length" name="text_length" type="hidden" value="<?php echo $text_length; ?>" />
</div>

<?php include('footer.php'); ?>
