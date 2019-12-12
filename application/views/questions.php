<!DOCTYPE html>
<html>
	<head>
		<title>Maths Quiz</title>
		<link rel="stylesheet" href="https://cdn.rawgit.com/Chalarangelo/mini.css/v3.0.1/dist/mini-default.min.css">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script type="text/javascript">
			function startTimer(duration, display) {
			var timer = duration, minutes, seconds;
			setInterval(function () {
				minutes = parseInt(timer / 60, 10);
				seconds = parseInt(timer % 60, 10);

				minutes = minutes < 10 ? "0" + minutes : minutes;
				seconds = seconds < 10 ? "0" + seconds : seconds;

				display.textContent = minutes + ":" + seconds;

				if (--timer < 0) {
				timer = duration;
				}
			}, 1000);
			}

			window.onload = function () {
				var Minutes = 60 * 20,
				display = document.querySelector('#time');
				startTimer(Minutes, display);
				window.setTimeout(function() { document.quiz_form.submit(); }, 1000 * 60 * 20);
			};
			
		</script>
		<style>
			body {
				margin: 5% 10%;
			}
		</style>
	</head>
	<body>
		<h1 align="center">All the Best!</h1>
		<h6 align="center">Test ends in <span id="time">20:00</span> minutes!</h6>
		<a class="button primary" href="<?php echo base_url();?>index.php/logged_in">Go back to Homepage</a>
		<form name="quiz_form" method="POST" action="<?php echo base_url();?>index.php/questions/display_result">
		<?php foreach($questions as $row) { ?>
		<?php
				$ans = array($row->choice1,$row->choice2,$row->choice3,$row->answer);
				shuffle($ans);
		?>
		
		<p><?= $row->id ?>. <?= $row->question ?></p>
		(a)<input type="radio" name="id<?= $row->id ?>" value="<?= $ans[0] ?>"><?= $ans[0] ?><br>
		(b)<input type="radio" name="id<?= $row->id ?>" value="<?= $ans[1] ?>"><?= $ans[1] ?><br>
		(c)<input type="radio" name="id<?= $row->id ?>" value="<?= $ans[2] ?>"><?= $ans[2] ?><br>
		(d)<input type="radio" name="id<?= $row->id ?>" value="<?= $ans[3] ?>"><?= $ans[3] ?><br><br>
		<?php } ?><br>
		<input class="tertiary" type="submit" value="Submit">
		</form>
	</body>
</html>