<?php
/**
 * Template Name: Generic Page
 */
?>
<?php get_template_part('templates/site-nav', 'page'); ?>

<?php while (have_posts()) : the_post(); ?>

	<div class="contentBgi"></div>
	<div class="contentWrp">
		<div  class="contentInr contentInrTemp">
			<?php get_template_part('templates/content', 'page'); ?>
		</div>
	</div>
<?php endwhile; ?>
