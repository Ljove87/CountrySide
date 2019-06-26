<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package crosscountry
 */

get_header();
?>

<!-- section breadcrump -->
<section class="breadcrumb text-center">
	<div class="container">
		<p class="breadcrumbs">
			<span class="span-1"><span class="span-2"><a href="<?php echo site_url() ?>">Home</a> » </span><?php the_title(); ?></span>
		</p>
	</div>
</section>

<!-- Section First - About us -->
<?php
$image = get_field('about_banner_img');
	if(!empty($image)) ?>
<section class="vk-about-img" style="background: url(<?php echo $image['url']; ?>)">
	<div class="container">
		<h1><?php the_field('about_main_title') ?></h1>
	</div>
</section>
<?php  ?>




<?php get_footer(); ?>

