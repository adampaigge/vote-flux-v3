<?php while (have_posts()) : the_post(); ?>
	<div class="contentBgi"></div>
	<article class="contentWrp contentWrapPush">
		<div  class="contentInr">
			<h2><?php the_title(); ?></h2>
			<?php get_template_part('templates/entry-meta'); ?>
			<div class='contentSectHeader contentSectBorder'></div>
			<div class="contentCol contentColLeft">
				<p><?php the_content(); ?></p>
			</div>
		</div>
	</article>
<?php endwhile; ?>
