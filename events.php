<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1">
	<meta name="description" content="Ace in the Hole Multisport Events is an event company 
									  that hosts multisport athletic events.">
	<title>Check Out Our Events</title>
	<link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Playfair+Display" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
	<link href="css/reset.css" rel="stylesheet" type="text/css">
	<link href="css/helper.css" rel="stylesheet" type="text/css">
	<link href="css/grid.css" rel="stylesheet" type="text/css">
	<link href="css/style.css" rel="stylesheet" type="text/css">
</head>

<body>
	<header>
		<?php include 'includes/header.inc.html.php'; ?>
	</header>

	<nav>
		<?php include 'includes/nav.inc.html.php'; ?>
	</nav>

	<main>
		<!-- Section containing hero image link in CSS file and p class with text that goes over the image -->
		<section class="eventHero">
			<p class="eventHeroText">Event Schedule &amp; Course Details</p>
		</section>

		<section id="satEvents" class="col span_6_of_12">
			<table>
				<h3>Saturday</h3>
				<tr>
					<th>Event</th>
					<th>Start Time</th>
					<th>Cost</th>
				</tr>
				<tr>
					<td>Long Course</td>
					<td>7:00 AM</td>
					<td>$240</td>
				</tr>
				<tr>
					<td>Olympic</td>
					<td>7:30 AM</td>
					<td>$110</td>
				</tr>
				<tr>
					<td>10K</td>
					<td>7:15 AM</td>
					<td>$50</td>
				</tr>
				<tr>
					<td>Half Marathon</td>
					<td>7:15 AM</td>
					<td>$75</td>
				</tr>
			</table>
		</section>

		<section id="sunEvents" class="col span_6_of_12">
			<table>
				<h3>Sunday</h3>
				<tr>
					<th>Event</th>
					<th>Start Time</th>
					<th>Cost</th>
				</tr>
				<tr>
					<td>Sprint</td>
					<td>8:00 AM</td>
					<td>$90</td>
				</tr>
				<tr>
					<td>Try-a-Tri</td>
					<td>8:20 AM</td>
					<td>$65</td>
				</tr>
				<tr>
					<td>Splash n Dash</td>
					<td>12:00 PM</td>
					<td>$25 (Free with Adult sign up)</td>
				</tr>
			</table>
		</section>

		<br clear="all">

		<h3>Event Cost Includes</h3>
		<section id="costIncl1" class="col span_6_of_12">
			<ul>
				<li>Food &amp; Beer</li>
				<li>Access to the weekend's live entertainment &amp; Fitness Expo</li>
				<li>Commemorative Finisher medal</li>
			</ul>
		</section>
		<section id="costIncl2" class="col span_6_of_12">
			<ul>
				<li>Accurate Chip Timing for competitive races</li>
				<li>Ace in the Hole Multisport Weekend Tech Shirt</li>
				<li>Post-event party &amp; entertainment</li>
			</ul>
			<br>
			<p><b>NOTE:</b> Tech shirts guaranteed to pre-registered participants only. </p>
		</section>

		<br clear="all">

		<section id="weather" class="col span_12_of_12">
			<h3>Current Weather</h3>
			<a class="weatherwidget-io" href="https://forecast7.com/en/45d52n122d68/portland/?unit=us" data-label_1="PORTLAND" data-label_2="Forecast" data-icons="Climacons Animated" data-days="3" data-theme="pure">PORTLAND Forecast</a>
			<script>
				! function(d, s, id) {
					var js, fjs = d.getElementsByTagName(s)[0];
					if (!d.getElementById(id)) {
						js = d.createElement(s);
						js.id = id;
						js.src = 'https://weatherwidget.io/js/widget.min.js';
						fjs.parentNode.insertBefore(js, fjs);
					}
				}(document, 'script', 'weatherwidget-io-js');
			</script>
		</section>

		<br clear="all">

		<section id="courseDetails">
			<h3>Course Details</h3>
			<h4>Long Course</h4>
			<p><b>SWIM 1.2mi -</b> Participants will make two counter-clockwise loops. Large buoys will mark the turn points. Kayakers will be positioned on the water to support the swimmers. Medical support will be present on the beach.</p>
			<p><b>BIKE 58 Miles-</b> A scenic point-to-point course that travels over gently rolling hills prior to three hard climbs. The bike course will be marked with large directional signage and there will be course marshals at key intersections to help direct you.</p>
			<p><b>RUN 13.1mi -</b> A mostly flat loop course on widely paved bike paths that traverse through and around this beautiful and scenic destination resort (two hills total with a minimal elevation gain).</p>

			<h4>Olympic</h4>
			<p><b>SWIM 1,500 meters -</b> Participants will make two counter-clockwise loops. Large buoys will mark the turn points. Kayakers will be positioned on the water to support the swimmers. Medical support will be present on the beach.</p>
			<p><b>BIKE 28mi -</b> A scenic point-to-point course that travels over gently rolling hills. The bike course will be marked with large directional signage and course marshals will be present at key intersections. </p>
			<p><b>RUN 10K -</b> A mostly flat loop course on widely paved bike paths that traverse through and around this beautiful and scenic destination resort (one hill total with a minimal elevation gain).</p>

			<h4>10K</h4>
			<p>The 10K event starts and finishes in the Athletes Village. The paths are approximately 6 ft wide, perfectly paved and wind around through the forest. Each course has only two small hills with a minimal elevation gain to navigate and a fast downhill to flat finish to the roaring cheers of the crowd.</p>

			<h4>Half Marathon</h4>
			<p>Half-Marathon (13.1-miles) event starts and finishes in the Athletes Village to the cheers of the enthusiastic crowd. Once finished, runners can enjoy the finish line festivities, including the Sports &amp; Fitness Expo and live entertainment. Post-race refreshments will be provided and the Awards Ceremony for the Half-Marathon will begin once the results have been certified</p>

			<h4>Sprint</h4>
			<p>Course will offer a 1-loop 1/2 mile swim, the exact same 28 mile Bike Course as the Olympic distance and a 5km run.</p>

			<h4>Try-a-Tri</h4>
			<p>This novice race is designed for the first time triathlete, those new to the sport, our Junior Triathletes. The swim is a shorter, more manageable 1/4 mile distance, (instead of the standard 1/2-mile Sprint distance swim), 10 mile bike ride (vs 12 miles and it's a 2 loop course making it very spectator friendly!) and a flat 2 mile run (vs 3 mile sprint course).</p>

			<h4>Splash n Dash</h4>
			<p>Kids event for participants ages 4 to 15. This is a 100 yard swim and a 50 yard dash.</p>
		</section>
	</main>

	<footer>
		<?php include 'includes/footer.inc.html.php'; ?>
	</footer>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="scripts/nav.js"></script>
</body>

</html>