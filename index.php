<!DOCTYPE html>
<html>
	<head>
		<meta property="og:description" content="Together Forever" />
		<meta property="og:site_name" content="Daniel Okwufulueze" />
		<meta property="og:title" content="The Okwufuluezes Wedding Anniversary Countdown" />
		<meta property="og:type" content="website" />
		<meta property="og:url" content="http://danielokwufulueze.com" />
		<meta property="og:image" content="http://danielokwufulueze.com/images/ogcountdown6.png" />
		<meta charset="UTF-8">
		<title>The Okwufuluezes Wedding Anniversary Countdown</title>
		<link href="css/display.css" rel="stylesheet" type="text/css" />
		<link href="css/fireworks.css" rel="stylesheet" type="text/css" />
	</head>
	<body>
		<div id='felicitate'></div>
    <canvas id="okwufulueze-sky" width="640" height="480"></canvas>

		<div id="okwufulueze-countdown">
			<pre id="timespan"></pre>
			<div id="top-container">
				Barbara and Daniel
			</div>
			<div id="main-container">
				<div id="purpose">Countdown to</div>
				<div id="title">Our Wedding Anniversary</div>
				<div id="date">18 December 2016</div>
			</div>
			<div id="sub-container">
				<div class="time-holder" id="days-holder">
					<div class="time-text">
						Days
					</div>
					<div class="time-value" id="days-value"></div>
				</div>

				<div class="time-holder" id="hours-holder">
					<div class="time-text">
						Hours
					</div>
					<div class="time-value" id="hours-value"></div>
				</div>

				<div class="time-holder" id="minutes-holder">
					<div class="time-text">
						Minutes
					</div>
					<div class="time-value" id="minutes-value"></div>
				</div>

				<div class="time-holder" id="seconds-holder">
					<div class="time-text">
						Seconds
					</div>
					<div class="time-value" id="seconds-value"></div>
				</div>
				<input type="hidden" name="yy" id="yy" value="<?php echo date('Y'); ?>">
				<input type="hidden" name="mn" id="mn" value="<?php echo date('m'); ?>">
				<input type="hidden" name="dd" id="dd" value="<?php echo date('d'); ?>">
				<input type="hidden" name="hh" id="hh" value="<?php echo date('H'); ?>">
				<input type="hidden" name="mm" id="mm" value="<?php echo date('i'); ?>">
				<input type="hidden" name="ss" id="ss" value="<?php echo date('s'); ?>">
			</div>
			<div>
				<!-- <span id="timezone">&nbsp;UTC</span> -->
			</div>
		</div>

		<script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
		<script src="js/okwufuluezeCountdown.min.js" type="text/javascript"></script>
		<script src="js/fireworks.js" type="text/javascript"></script>
		<script src="js/display.js" type="text/javascript"></script>
	</body>
</html>
