<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!-- Consider adding a manifest.appcache: h5bp.com/d/Offline -->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<base href="//localhost/iie/">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="css/flexslider.css">
	<link rel="stylesheet" href="css/gridiculous.css">
	<link href="<?php bloginfo( 'stylesheet_url' ); ?>" rel="stylesheet" media="all" type="text/css" />
	<link href="https://fonts.googleapis.com/css?family=Monda:400,700&subset=latin,latin-ext" rel="stylesheet" type="text/css">
	<script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
	<script type="text/javascript" src="js/jquery.flexslider-min.js"></script>
	<script type="text/javascript" src="js/iie.js"></script>
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<?php wp_head(); ?>
</head>
<body class="gradient">
	<div id="site-container">
		<header class="grid">
			<div class="row naked_vert">
				<div class="c12 end top_links naked_vert">
					<ul>
						<li><a href="http://www.utdallas.edu/directory/">DIRECTORY</a></li>
						<li><a href="http://www.utdallas.edu/maps/">MAPS</a></li>
						<li><a href="http://elearning.utdallas.edu">eLEARNING</a></li>
						<li><a href="http://galaxy.utdallas.edu">GALAXY</a></li>
					</ul>
				</div>
			</div>
			<div class="row naked_vert">
				<div id="our_marks" class="c12 end">
					<a href="http://www.utdallas.edu" title="University of Texas at Dallas"><img src="images/UT_Dallas_tex_flame.png" class="utd_logo"></a>
					<a href="" title="Institute for Innovation & Entrepreneurship" class="wordmark">Institute&nbsp;for&nbsp;Innovation&nbsp;&<span class='hide_small'>&nbsp;</span><br class='hide_large'>Entrepreneurship</a>
				</div>
			</div>
			
			<!-- end separation of nav -->
			<div class="row naked_vert nav_container top_border">
				<div class="c10 bluebar grey_triangle naked_vert nav">
					<?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
				</div>
				<div class="c2 end naked_vert search_container">
					<form id="search_form" action="search/">
						<input id="search" value="Search">
						<input id="search_button" type="submit" value="">
					</form>
				</div>
			</div>
			<div class="row naked_vert unbound hide_small">
				<div class="c6 stratos_blue"></div>
				<div class="c6 end light_grey"></div>
			</div>
			<!-- <div class="row naked_vert nav_contain">
				<div class="c12 end sky_blue_bar nav">
					<?php wp_nav_menu( array( 'theme_location' => 'extra-menu' ) ); ?>
				</div>
			</div>
			<div class="row naked_vert unbound hide_small">
					<div class="c12 sk_blue"></div>
			</div> -->
		</header>
		<div id="site-content" role="main">
