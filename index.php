<?php
	date_default_timezone_set('Africa/Lagos');
?>
<!DOCTYPE html>
<html>
	<head>
		<meta property="fb:app_id" content="1703522383294829" />
		<meta property="og:description" content="Together Forever" />
		<meta property="og:site_name" content="Barbara & Daniel" />
		<meta property="og:title" content="The Okwufuluezes Wedding Anniversary Celebration Countdown" />
		<meta property="og:type" content="website" />
		<meta property="og:url" content="http://danielokwufulueze.com/anniversary-countdown" />
		<meta property="og:image" content="http://danielokwufulueze.com/anniversary-countdown/images/ogcountdown7_2.png" />
		<meta property="og:image:width" content="600" />
    <meta property="og:image:height" content="600" />
		<meta charset="UTF-8">
		<title>The Okwufuluezes Wedding Anniversary Celebration Countdown</title>
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
				<div id="title">Our Wedding Anniversary Celebration</div>
				<div id="date">24 December 2017</div>
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
			</div>
			<div>
				<!-- <span id="timezone">&nbsp;UTC</span> -->
			</div>
			<input type="hidden" name="yy" id="yy" value="<?php echo date('Y'); ?>">
			<input type="hidden" name="mn" id="mn" value="<?php echo date('m'); ?>">
			<input type="hidden" name="dd" id="dd" value="<?php echo date('d'); ?>">
			<input type="hidden" name="hh" id="hh" value="<?php echo date('H'); ?>">
			<input type="hidden" name="mm" id="mm" value="<?php echo date('i'); ?>">
			<input type="hidden" name="ss" id="ss" value="<?php echo date('s'); ?>">
			<input type="hidden" name="ymdhis" id="ymdhis" value="<?php echo date('Y-m-d H:i:s'); ?>">
		</div>

		<script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
		<script src="js/okwufuluezeCountdown.min.js" type="text/javascript"></script>
		<script src="js/fireworks.js" type="text/javascript"></script>
		<script src="js/display.js" type="text/javascript"></script>
	</body>
</html>
