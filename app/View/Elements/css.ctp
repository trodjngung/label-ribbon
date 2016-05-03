<?php
	APP::uses ( 'Folder', 'Utility' );
	
	// bootstrap/font-awesome core css 
	echo $this->Html->css('/vendor/bootstrap/css/bootstrap.min.css');
	echo $this->Html->css('/vendor/fontawesome/css/font-awesome.min.css');
	echo $this->Html->css('/vendor/other/animated-circle-progress/css/progress.css');
	echo $this->Html->css('/vendor/other/cubeportfolio/cubeportfolio.min.css');
	echo $this->Html->css('/vendor/other/cubeportfolio/custom-cubeportfolio.css');
	echo $this->Html->css('/vendor/other/slider/css/slider.css');
	echo $this->Html->css('/vendor/other/vertical-timeline/style.css');
	
	// debug level is 0 for product
	if (Configure::read ( 'debug' ) == 0) {
		$dir = new Folder ( CSS );
		$css_hash = md5 ( $dir->dirsize () );
		echo $this->html->css ( 'build/main.min.css?hash=' . $css_hash ); // common
			                                                             
		// debug level is not 0 for development
	} else {
		// Cake webroot
		$css_src_dir = 'src/';
		$dir = new Folder ( CSS . $css_src_dir );
		$css_files = $dir->find ( '.*\.css', false );
		$css_hash = md5 ( $dir->dirsize () );
		foreach ( $css_files as $css )
			echo $this->html->css ( $css_src_dir . $css . '?hash=' . $css_hash );
	}
	echo $this->fetch ( 'css' );
	?>
