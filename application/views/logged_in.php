<!DOCTYPE html>
<html>
	<head>
		<title>Welcome</title>
		<link rel="stylesheet" href="https://cdn.rawgit.com/Chalarangelo/mini.css/v3.0.1/dist/mini-default.min.css">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<style>
			body {
				margin-top: 10%;
			}
			#list {
				margin-left: 30%;
			}
			main {
				text-align: center;
			}
		</style>
	</head>
	<body>
	<main>
		<h1>educhamp Mathematics Assessment Test</h1><br>
		<a class="button tertiary" href="<?php echo base_url();?>index.php/questions/display_quiz">Start Test</a>
		<a class="button secondary" href="<?php echo base_url();?>index.php/logged_in/logout">Logout</a>
	</main><br>	
		<ul id="list">
			<li>The test consists of 20 questions.</li>
			<li>Each question carries 1 mark.</li>
			<li>You have 20 minutes to solve the test.</li>
			<li>After 20 minutes. The test will be auto-submitted.</li>
			<li>Your Scores will be displayed after the test.</li>
		</ul>
	</body>
</html>