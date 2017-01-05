<?php
/**
 * Template Name: Generic Page
 */
?>

<?php while (have_posts()) : the_post(); ?>
	<div class="contentBgi"></div>
	<article class="contentWrp contentWrapPush">
		<div  class="contentInr">
			<h2><?php the_title(); ?></h2>
			<div class='contentSectHeader contentSectBorder'></div>
			<div class="contentCol contentColLeft">
				<?php the_content(); ?>
			</div>
		</div>
	</article>
<?php endwhile; ?>
