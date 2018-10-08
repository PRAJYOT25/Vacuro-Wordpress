<!DOCTYPE html>
<html <?php language_attributes(); ?> class="">
<head>
	<meta charset="<?php bloginfo('charset'); ?>" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>
	<title><?php wp_title(); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<?php wp_head(); ?>
</head>
	<body <?php body_class(); ?>>
	<div class="site-container">
	
	
	<div class="header_wrapper">
		<div class="site_logo">
			<div class="container">
				<div class="row">
					<div class="logo col-sm-9">
						<a href="#">
						<div class="img-responsive">
						<?php dynamic_sidebar( 'header-widget-area-1' ); ?> 
						</div></a>
					</div>
					<div class="flag_icon col-sm-3 nopadd">
						<a href="#">
						<div class="img-responsive">
						<?php dynamic_sidebar( 'header-widget-area-2' ); ?>
						</div></a>
					</div>
				</div>
			</div>	
		</div>
				<nav class="navbar navbar-default">
			<div class="container">					
				<div class="row">
				 <div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
					<?php wp_nav_menu( array( 'theme_location' => 'main-menu' , 'menu_class' => 'nav navbar-nav') ); ?>
					</ul>
				</div>
				</div>				
			</div>
		</nav>
	</div>
				