<!DOCTYPE html>
<html>
<head>
<title><?php echo $title_for_layout;?></title>
		<?php
		echo $this->element ( 'meta' );
		echo $this->element ( 'css' );
		echo $this->element ( 'js' );
		?>
	</head>
<body style="visibility: visible; background: rgb(255, 255, 255);">
	<div id="container" class="full-width">
		<div id="out">
		<?php echo $this->element('header')?>
		<?php // echo $this->fetch('content')?>
		<!--  ==== Start Scroll Top ==== -->
			<div class="top">
                            <a href="#" class="scrollup" style="display: inline;"></a>
                        </div>
			<!--  ==== End Scroll Top ==== -->
		</div>
	</div>
	 <?php echo $this->element('footer')?>
	
</body>
</html>
