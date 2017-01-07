<div class="contentBgi"></div>
<article class="contentWrp contentWrapPush">
	<h2>Blog</h2>
	<div class='contentSectHeader contentSectBorder'></div>
	<div  class="contentInr">
		<?php while (have_posts()) : the_post();
			echo '<div class="contentPost">';
			$postExcerpt = substr(get_the_excerpt(),0,150).'...';
			$postTitle = substr(get_the_title(),0,20).'...';

			$thumb_id = get_post_thumbnail_id();
			$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'large', true);
			$thumb_url = $thumb_url_array[0];

			 echo '<div class="postThumb" style="background-image: url('.$thumb_url.');"><h3 class="postTitle"><a href="'.get_the_permalink().'">'.$postTitle.'</a></h3></div>';
			echo '<p class="postExcerpt">'.$postExcerpt.'</p>';
			echo '<div class="postMoreLinks"><a class="postMoreLink postMore" href="'.get_the_permalink().'">Read More</a><a class="postMoreLink postShare" href="'.get_the_permalink().'">Share</a></div>';
			echo '</div>';
		endwhile; ?>
	</div>
</article>


