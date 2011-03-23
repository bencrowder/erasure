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

	<input id="nextround" type="submit" value="Next Round" />

	<a class="backlink" href="index.php">Back to home</a>

	<input id="text_length" name="text_length" type="hidden" value="<?php echo $text_length; ?>" />
</div>

<?php include('footer.php'); ?>
