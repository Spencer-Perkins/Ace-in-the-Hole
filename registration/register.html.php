<!DOCTYPE html>
<html lang="en">

<head>
	<title>Register For An Event</title>
	<meta name="description" content="Ace in the Hole Multisport Events is an event company 
									  that hosts multisport athletic events.">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href='../css/style.css' type="text/css">
	<link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Playfair+Display" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
	<!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>

<body>
	<header>
		<?php include '../includes/header.inc.html.php'; ?>
	</header>

	<nav>
		<?php include '../includes/nav.inc.html.php'; ?>
	</nav>
	<main>
		<h2>Event Registration</h2>
		<section class="contact">
			<form method="post" action=" " id="inquiryForm">

				<label for="name">Name:</label>
				<input type="text" name="name" id="name"> <br>

				<label for="age">Age:</label>
				<input type="number" name="age" id="age"> <br>

				<label for="gender">Gender Identification:</label>
				<select id="gender" name="gender">
					<option value="">Please Choose One</option>
					<option value="male">Male</option>
					<option value="female">Female</option>
					<option value="nonbinary">Nonbinary</option>
				</select> <br>

				<label for="email">Email:</label>
				<input type="text" name="email" id="email"> <br>

				<label for="eventSat">Saturday Event:</label>
				<select id="eventSat" name="eventSat">
					<option value="">Please Choose One</option>
					<option value="long">Long Course</option>
					<option value="olympic">Olympic Course</option>
					<option value="10k">10k</option>
					<option value="half marathon">Half Marathon</option>
					<option value="none">No Event</option>
				</select> <br>

				<label for="eventSun">Sunday Event:</label>
				<select id="eventSun" name="eventSun">
					<option value="">Please Choose One</option>
					<option value="sprint">Sprint Triathlon</option>
					<option value="try a tri">Try-A-Tri</option>
					<option value="splash n dash">Splash n' Dash (ages 4 to 15)</option>
					<option value="none">No Event</option>
				</select> <br>

				<label for="type">Athlete or volunteer?</label>
				<select id="type" name="type" required>
					<option value="">Please Choose One</option>
					<option value="athlete">Athlete</option>
					<option value="volunteer">Volunteer</option>
				</select> <br>

				<label for="emergName">Emergency Contact Name:</label>
				<input type="text" name="emergName" id="emergName"> <br>

				<label for="emergNum">Emergency Contact Number:</label>
				<input type="text" name="emergNum" id="emergNum"> <br>

				<label for="specialAccomms">Special Accommodations Request:</label>
				<textarea form="inquiryForm" rows="8" cols="50" name="specialAccomms" id="specialAccomms"></textarea> <br>

				<input id="mySubmit" type="submit" value="Submit">
			</form>
		</section>
	</main>
	<footer>
		<?php include '../includes/footer.inc.html.php'; ?>
	</footer>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="../scripts/nav.js"></script>
</body>

</html>