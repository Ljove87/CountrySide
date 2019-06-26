<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package crosscountry
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'crosscountry' ); ?></a>

	 <!-- header parts -->
	 <header class="header">
	 	<div class="wrapper">
			 <nav class="navbar navbar-expand-lg navbar-light">
				<div class="site-brand">
						<a class="country-logo" href="<?php  echo site_url() ?>">
						<img class="country-logo-style" src="https://crosscountrymoving.supervisewp.com/wp-content/uploads/2019/05/cropped-ccim_homepage_header_logo-1.png" alt="Cross Country Main Logo" ></a>
						<p class="site-title">
							<a href="#">Cross Country Moving Group</a>
						</p>
						<p class="site-description">
							<a href="#">Dependable Florida Movers</a>
						</p>
					</div>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarNavDropdown">
					<ul class="navbar-nav ">
					<li class="nav-item">
						<a class="nav-link" href="<?php  echo site_url() ?>">HOME <span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?php echo site_url('/about-us')?>">ABOUT US</a>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						SERVICES
						</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
						<a class="dropdown-item" href="#">Action</a>
						<a class="dropdown-item" href="#">Another action</a>
						<a class="dropdown-item" href="#">Something else here</a>
						</div>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">BLOG</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">CONTACT US</a>
					</li>
					</ul>
				</div>

					<div>
					<a href="tel:+18886447812" class="vk-header-phone">
					<i class="fa fa-phone" aria-hidden="true"></i>
						888-644-7812
					</a>
					
					<a class="vk-header-estimate" href="#">FREE ESTIMATE</a>
					<span class="vk-header-arrow-span"><i class="fa fa-arrow-circle-right" style="color:white;"></i></span>
					</div>
						
				
			</nav>
		</div>
	 </header>

	 <div id="content" class="site-content">
