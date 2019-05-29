<!DOCTYPE html>
<html lang="en">
<head>
    <title>Get In Touch!</title>
    <meta name="description" content="Ace in the Hole Multisport Events is an event company 
									  that hosts multisport athletic events.">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
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
		<h2>Have a question or comment about an event?</h2>
		<section class="contact">
        <form method="post" action=" " id="inquiryForm">
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" required> <br>
            <label for="email">Email:</label>
            <input type="text" name="email" id="email" required> <br>
            <label for="type">Athlete, volunteer, or interested party?</label>
            <select id="type" name="type" required>
                <option value="">Please Choose One</option>
                <option value="athlete">Athlete</option>
                <option value="volunteer">Volunteer</option>
                <option value="interested">Interested Party</option>
            </select> <br>
            <label for="question">Comments/Questions?</label>
            <textarea form="inquiryForm" rows="8" cols="50" name="question" id="question"></textarea> <br>
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