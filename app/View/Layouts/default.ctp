<!DOCTYPE html>
<html>
	<head>
		<!-- meta data -->
		<meta http-equiv="Content-Type" content="text/html;
		charset=utf-8">
		<title>Real Estate Professional</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="format-detection" content="telephone=no">
		<!-- End meta data -->
		<!-- styles -->
		<?php echo $this->element ( 'css' ); ?>

		<script type="text/javascript" charset="UTF-8" src="http://maps.googleapis.com/maps-api-v3/api/js/23/10/common.js"></script>
		<script type="text/javascript" charset="UTF-8" src="http://maps.googleapis.com/maps-api-v3/api/js/23/10/util.js"></script>
		<script type="text/javascript" charset="UTF-8" src="http://maps.googleapis.com/maps-api-v3/api/js/23/10/stats.js"></script>
	</head>
	<body style="visibility: visible; background: rgb(255, 255, 255);">
		<div id="container" class="full-width">
			<div id="out">
				<?php echo $this->element('header')?>
				<?php echo $this->fetch('content')?>
				<!--  ==== Start Scroll Top ==== -->
				<div class="top">
					<a href="#" class="scrollup" style="display: inline;"></a>
				</div>
				<!--  ==== End Scroll Top ==== -->
			</div>
		</div>
		<?php echo $this->element('footer'); ?>
		<?php echo $this->element ( 'js' ); ?>
	</body>
</html>