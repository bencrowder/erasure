<?php include('header.php'); ?>

<div id="page">
	<h1>Erasure</h1>
	<p>Paste the paragraph you want to memorize into the box, then click <i>Start</i>.</p>

	<form action="erasure.php" method="post">
		<textarea id="text" name="text"></textarea>
		<input type="submit" value="Start" />
	</form>
</div>

<?php include('footer.php'); ?>
