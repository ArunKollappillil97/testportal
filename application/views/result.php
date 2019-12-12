<!DOCTYPE html>
<html>
	<head>
		<title>Result</title>
		<link rel="stylesheet" href="https://cdn.rawgit.com/Chalarangelo/mini.css/v3.0.1/dist/mini-default.min.css">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<style>
			body {
				margin: 5% 10%;
			}
			
			#score {
				position: fixed;
				top: 0;
				margin-top: 2%;
			}
		</style>
	</head>
	<body>
		<?php $score = 0;?><br>
		<a class="button tertiary" href="<?php echo base_url();?>index.php/questions/display_quiz">Try Again</a><br>
		<a class="button primary" href="<?php echo base_url();?>index.php/logged_in">Go back to Homepage</a><br><br>
		<?php $option_ar= array();?>
		<?php $answer_ar= array();?>
		<?php $id_ar= array();?>
		<?php $ques_ar= array();?>
		
		<?php foreach($check as $ans_chk) {
			array_push($option_ar,$ans_chk);
		}
		?>
		
		<?php foreach($result as $res) {
			array_push($answer_ar,$res->answer);
			array_push($id_ar,$res->id);
			array_push($ques_ar,$res->question);
		}
		?>
		
		<?php for ($x=0;$x<20;$x++) { ?>
		
		<p><?= $id_ar[$x] ?>. <?= $ques_ar[$x] ?></p>
		
		<?php if($answer_ar[$x]!=$option_ar[$x]) { ?>
				<p><mark class="secondary">Your Answer: <?= $option_ar[$x] ?> was wrong</mark></p>
				<p><mark>Correct Answer: <?= $answer_ar[$x] ?></mark></p><br>
		<?php } else { ?>
				<p><mark class="tertiary">Your Answer: <?= $option_ar[$x] ?> was right</mark></p><br>
				<?php $score = $score + 1;?>
		<?php } ?>
		<?php } ?><br>
		<h1 id="score">Your Results: <?=$score?>/20</h1>
	</body>
</html>