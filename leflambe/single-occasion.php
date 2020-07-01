<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package leflambe
 */

get_header(); ?>


<?php
	while ( have_posts() ) : the_post();
?>

<div class="content">
	<div class="blocSingle">
	<h1><?php echo get_the_title() ?></h1>
		<div class="singleOccasion">
			<p><?php the_post_thumbnail('occasion'); ?></p>
			<p class="description"><?php echo get_the_content() ?></p>
		</div>
	</div>
</div>


<?php
	endwhile; // End of the loop.
?>
<?php
get_footer();
