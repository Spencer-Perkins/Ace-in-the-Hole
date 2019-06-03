<!DOCTYPE html>
<html lang="en">

<head>
	<title>Success!</title>
	<meta name="description" content="Ace in the Hole Multisport Events is an event company that hosts multisport athletic events.">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href=../css/style.css> <link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet">
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
		<h2>Success! Your message has been sent.</h2>
		<section class="success">
			<p class="successP">Ace in the Hole will contact you soon:<br>
				<br>
				Name: <?php echo htmlspecialchars($name, ENT_QUOTES, 'UTF-8'); ?><br>
				Email: <?php echo htmlspecialchars($email, ENT_QUOTES, 'UTF-8'); ?><br>
				Interested Party: <?php echo htmlspecialchars($type, ENT_QUOTES, 'UTF-8'); ?><br>
				Question/Comment: <?php echo htmlspecialchars($question, ENT_QUOTES, 'UTF-8'); ?>
			</p>
		</section>
	</main>
	<footer>
		<?php include '../includes/footer.inc.html.php'; ?>
	</footer>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="../scripts/nav.js"></script>
</body>

</html>