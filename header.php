<!doctype html>
	<head>
		<meta charset="utf-8">
		<title>Presentación Verificado 2018</title>
		<link rel="shortcut icon" href="<?php echo THEMEPATH; ?>images/favicon.ico">
		<meta name="description" content="<?php bloginfo('description'); ?>">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
		<meta http-equiv="cleartype" content="on">
		<link href="https://fonts.googleapis.com/css?family=Poppins:400,400i,700" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Roboto+Mono:500" rel="stylesheet">
		<!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
		<?php wp_head(); ?>
	</head>

	<body>
		<!--[if lt IE 9]>
			<p class="chromeframe">Estás usando una versión <strong>vieja</strong> de tu explorador. Por favor <a href="http://browsehappy.com/" target="_blank"> actualiza tu explorador</a> para tener una experiencia completa.</p>
		<![endif]-->
		<div class="container">
			<?php if(is_home()){ ?>
			<div id="video_landing" class="">
				<video width="100%" id="landing_vid" controlsList="nodownload">
				  <source src="http://pablocovarrubias.com/landing.mp4" type="video/mp4">
				</video>
				<div class="play_pause">
					<img id="play" src="<?php echo THEMEPATH; ?>/images/thumb_video.png">
					<!--<img id="play" src="<?php echo THEMEPATH; ?>images/play.svg">-->
					<img id="pause" src="<?php echo THEMEPATH; ?>images/pause.svg">

				</div>
				<!--<div class="logo_white">
					<img src="http://mejoratubarrio.com/wp-content/themes/mejoratubarrio//images/logo_white.png">
				</div>
				<div class="mute mutear">
					<img src="http://mejoratubarrio.com/wp-content/themes/mejoratubarrio//images/mute.png">
				</div>-->
			</div>
			<?php } ?>
			<header>
				<div class="content clearfix">
					<div class="logo">
						<h1>Verificado 2018</h1>
						<?php 
							$logo = THEMEPATH.'images/logo.svg'; 
							//echo $logo;
						?>
						<a href="<?php echo site_url(); ?>">
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 328.4 85.8"><path d="M1.4 13.2h9.8l5.2 17.6c0.5 1.6 0.7 2.7 0.9 4h0.1c0.2-1.3 0.4-2.4 0.9-4l5.4-17.6H33l-10.5 29H12.3L1.4 13.2z"/><path d="M47.1 18.4c-3.4 0-5.3 2.8-5.3 6.4H52C52.1 20.9 50.5 18.4 47.1 18.4M61 29.7H41.8c0 3.8 2.4 6.6 6.2 6.6 2.7 0 4.6-1.5 5.9-3.9l6.9 3.1c-2.4 4.7-7.1 7.5-12.9 7.5 -9.9 0-15.1-5.9-15.1-15.2 0-9.3 5.6-15.2 14.5-15.2 9.1 0 13.8 5.9 13.8 14.7C61.1 28.1 61 28.9 61 29.7"/><path d="M86.7 12.7c2.7 0 4.2 0.4 5.1 0.8v7.9c-1.1-0.3-3.4-0.8-6-0.8 -6 0-11.3 3.2-11.3 11.6v10.2h-9v-29h8.7v8.4C76 15.9 80.6 12.7 86.7 12.7"/><path d="M113.3 9.5h-10.2V0.3h10.2V9.5zM95.5 35.8h8.8v-16h-7.9v-6.5h16.8v22.5h9.2v6.5H95.5V35.8z"/><path d="M174 9.5h-10.2V0.3H174V9.5zM156.2 35.8h8.8v-16h-7.9v-6.5h16.8v22.5h9.2v6.5h-26.9V35.8zM151 19.6h-10.1v22.6h-9V19.6h-8.7v-6.4h8.7V11c0-7.7 4.9-11 13.5-11 1.9 0 4.1 0.2 5.6 0.5v6.6c-1.2-0.2-2.5-0.3-4.5-0.3 -4.1 0-5.6 1.2-5.6 4.5v2H151V19.6z"/><path d="M185.2 27.6c0-8.7 5.2-15.1 15.1-15.1 7.4 0 12.5 3.8 13.6 10.2l-8.8 1.6c-0.5-3.4-2.3-5.2-5.2-5.2 -3.7 0-5.6 3.3-5.6 8.1 0 5.2 1.9 8.7 5.7 8.7 3 0 4.6-2 5.1-5.4l8.7 1.9C213 38 208.4 43 200.1 43 190.6 43 185.2 36.2 185.2 27.6"/><path d="M230.4 29.4c-3.8 0.7-5.5 1.9-5.5 4.1 0 2.1 1.5 3.5 3.9 3.5 3.2 0 5.3-2.3 5.3-5.9v-2.3L230.4 29.4zM243.8 42.3H235c-0.2-1.9-0.4-3.5-0.5-5 -1.5 3.5-4.7 5.7-9.5 5.7 -5.6 0-9.4-3.4-9.4-8.4 0-2.8 1-5 3.1-6.4 1.8-1.3 4.7-2.3 8.9-2.8l6.2-0.9v-1.3c0-3.1-1.2-4.6-3.8-4.6 -2.7 0-4.2 1.4-4.4 4.2h-9.3c0.6-6.5 5.6-10.2 14-10.2 8.6 0 12.7 3.8 12.7 11.8v9.8C243 37.7 243.3 40.5 243.8 42.3"/><path d="M259.6 19c-3.8 0-5.5 3.4-5.5 8.7 0 5.4 2 8.8 5.3 8.8 3.3 0 5.3-3.1 5.3-7.5v-2.3C264.8 22.2 262.7 19 259.6 19M273.6 0.2v42.1h-8.5v-5.1c-1.3 3.1-4 5.8-8.9 5.8 -6.9 0-11.4-6-11.4-15.1 0-9.1 4.5-15.3 12-15.3 3.8 0 6.6 2 7.8 4.7V0.2H273.6z"/><path d="M323.6 8.5c0.3 0 0.6 0.3 0.6 0.6v28.5c0 0.3-0.3 0.6-0.6 0.6h-27.1l-10 8c-0.1 0.1-0.2 0.1-0.4 0.1 -0.1 0-0.2 0-0.2-0.1 -0.2-0.1-0.3-0.3-0.3-0.5v-7.6h-5.2c-0.3 0-0.6-0.3-0.6-0.6V9.1c0-0.3 0.3-0.6 0.6-0.6H323.6M318.6 13.9h-33.3V16h33.3V13.9zM318.6 19.3h-33.3v2.1h33.3V19.3zM312.3 24.7h-27v2.1h27V24.7zM304 30.1h-18.7v2.1H304V30.1z"/><path d="M3.8 55.6c-0.6 0-1.1 0.5-1.1 1.1V82c0 0.6 0.5 1.1 1.1 1.1h72.3c0.6 0 1.1-0.5 1.1-1.1V56.6c0-0.6-0.5-1.1-1.1-1.1H3.8zM76.1 85.8H3.8C1.7 85.8 0 84.1 0 82V56.6c0-2.1 1.7-3.8 3.8-3.8h72.3c2.1 0 3.8 1.7 3.8 3.8V82C80 84.1 78.3 85.8 76.1 85.8"/><path d="M14 74.7c1.7-1.2 3.8-3 5.5-4.7 1.5-1.5 2.1-2.7 2.1-4.1 0-1.4-0.7-2.1-1.9-2.1 -1.2 0-2 0.8-2 2.2 0 0.4 0 0.8 0.1 1.1l-3.7-0.4c-0.1-0.4-0.1-0.6-0.1-0.9 0-3 2.2-5 5.7-5 3.6 0 5.6 1.8 5.6 4.9 0 1.9-0.8 3.5-2.6 5.3 -1.2 1.2-2.5 2.2-4.2 3.4h7.1v3H14V74.7z"/><path d="M36.3 69.3c0-0.9 0-1.7-0.1-2.4l-4.8 6.4c0.4 1.3 1.2 1.7 2.2 1.7C35.4 75 36.3 73.7 36.3 69.3M30.9 69.3c0 0.7 0 1.4 0.1 2l4.7-6.3c-0.4-1-1.1-1.4-2.1-1.4C31.9 63.5 30.9 64.9 30.9 69.3M40 69.3c0 6-2.4 8.5-6.4 8.5 -4 0-6.4-2.5-6.4-8.5 0-6 2.4-8.5 6.4-8.5C37.6 60.8 40 63.3 40 69.3"/><path d="M53.4 74.4v3H41.7v-3h4.1v-8.2c-0.7 0.6-1.8 1-3.3 1h-0.8v-3.4h0.6c2.3 0 3.5-0.9 4.2-2.6h3v13.3H53.4z"/><path d="M58.4 65.4c0 1.2 0.9 1.8 2.3 2.2l0.9 0.2c1-0.5 1.4-1.2 1.4-2.2 0-1.3-0.9-2.1-2.4-2.1C59.3 63.4 58.4 64.1 58.4 65.4M63.5 72.8c0-1.3-1-2-2.5-2.4l-1.2-0.3c-1.2 0.6-1.7 1.4-1.7 2.6 0 1.4 1.1 2.3 2.8 2.3C62.4 75 63.5 74.2 63.5 72.8M67.2 72.9c0 2.9-2.6 4.9-6.5 4.9 -3.9 0-6.4-1.8-6.4-4.6 0-2 0.9-3.3 3-3.9 -1.6-0.7-2.6-1.9-2.6-4 0-2.7 2.4-4.5 5.9-4.5 3.4 0 5.8 1.5 5.8 4.1 0 1.6-0.8 2.8-2.6 3.4C65.9 69.1 67.2 70.4 67.2 72.9"/><path d="M327.8 71.2H88.7c-0.3 0-0.6-0.3-0.6-0.6V68c0-0.3 0.3-0.6 0.6-0.6h239.2c0.3 0 0.6 0.3 0.6 0.6v2.6C328.4 70.9 328.1 71.2 327.8 71.2"/></svg>
						</a>
					</div>
					<nav>
						<ul class="clearfix">
							<?php if (qtranxf_getLanguage() == 'es'){ ?>
							<li><a data="presentacion" href="#presentacion">presentación</a></li>
							<li><a data="perfiles" href="#perfiles">perfiles</a></li>
							<li><a data="innovacion" href="#innovacion">innovación</a></li>
							<li><a data="impacto" href="#impacto">impacto</a></li>
							<?php } else { ?>
							<li><a data="presentacion" href="#presentacion">presentation</a></li>
							<li><a data="perfiles" href="#perfiles">profiles</a></li>
							<li><a data="innovacion" href="#innovacion">innovation</a></li>
							<li><a data="impacto" href="#impacto">impact</a></li>
							<?php } ?> 
						</ul>
					</nav>
					<div class="lang_switcher">
						<li><a href="<?php echo site_url(); ?>/?lang=es">es</a></li>
						<li><a href="<?php echo site_url(); ?>/?lang=en">en</a></li>
					</div>
				</div>
			</header>
		</div>
