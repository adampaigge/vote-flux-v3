<?php
/**
 * Template Name: Landing Page
 */
?>

<?php while (have_posts()) : the_post(); ?>
	<div class="scrollWrp">
		<div class="contentBgi"></div>
		<div class="contentWrp snapCord landingP1">
			<div class="contentInr sFull">
				<div class="landingLogo"></div>
				<div class="hSpecial"><?php the_field('lpIntroHead'); ?></div>
				<?php the_field('lpIntroBody'); ?>
				<div class="btnHex bgcOrng brdOrng sFull"><a>Join Now</a></div>
				<div class="btnHex bgcDark brdDark sFull"><a>Learn More</a></div>
			</div>
		</div>

		<div class="contentWrp contentWrapPush">
			<div  class="contentInr">
				<div class='contentSectHeader sFull'><?php the_field('lpMediaLabel'); ?></div>

				<div class='embed-container sFull'><?php the_field('lpMediaEmbed'); ?></div>

				<h2><?php the_field('lpMediaHead'); ?></h2>
				<div class="contentCol contentColLeft sFull">
					<?php the_field('lpMediaBody'); ?>
				</div>

				<div class="contentCol contentColRight sFull">
					<?php if( have_rows('libLinks') ):
						while ( have_rows('libLinks') ) : the_row();
							if(get_sub_field('type') == 'url'):
								$linkURL = get_sub_field('linkURL');
							else:
								$linkURL = get_sub_field('linkPage');
							endif;
							echo '<div class="btnHex btnHexFull bgc'.get_sub_field('libCol').' brd'.get_sub_field('libCol').'"><a href="'.$linkURL.'">'.get_sub_field('linkLbl').'</a></div>';
						endwhile;
					endif; ?>
				</div>

				<div class="contentBreak"></div>

			</div>
			<div class="contentInr">
				<div class='contentSectHeader'>Recent Posts.</div>
				<div class="postCategories"></div>
				<div class="contentPosts">
					<?php
						$args = array( 'posts_per_page' => 7 );
						$query = new WP_Query($args);
						if ( $query->have_posts() ):
							while ( $query->have_posts() ): $query->the_post();
								echo '<div class="contentPost">';
									$postExcerpt = substr(get_the_excerpt(),0,150).'...';
									$postTitle = substr(get_the_title(),0,20).'...';
									echo '<h3 class="postTitle"><a href="'.get_the_permalink().'">'.$postTitle.'</a></h3>';
									echo '<p class="postExcerpt">'.$postExcerpt.'</p>';
									echo '<div class="postMoreLinks"><a class="postMoreLink postMore" href="'.get_the_permalink().'">Read More</a><a class="postMoreLink postShare" href="'.get_the_permalink().'">Share</a></div>';
								echo '</div>';
							endwhile;
						endif;
						wp_reset_postdata();

						echo '<a class="contentPost contentPostMore" href="'.get_permalink( get_option('page_for_posts')).'">';
							echo '<h3 class="postTitle txtGrey">View all Articles <i class="fa fa-arrow-right" aria-hidden="true"></i></h3>';
							echo '<p class="postExcerpt txtGrey">';
								$count_posts = wp_count_posts()->publish;
								echo wp_count_posts()->publish.' Posts<br />';

								$categories = get_categories(array('parent' => 0, 'hide_empty' => 0));
								echo count( $categories ).' Categories<br />';

								$result = count_users();
								echo $result['total_users'].' Authors';
							echo '</p>';
							echo '<div class="postMoreLinks brdGrey"></div>';
						echo '</a>';
					?>
				</div>
			</div>
<!--			<div class="contentInr">-->
<!--				<div class='contentSectHeader'>Become a Member.</div>-->
<!--				<h2>We're fed up with the political process too</h2>-->
<!--				<p>Feel unrepresented? Fed up with broken promises? Vote to change the system. Flux is a new system, not about ideology, but of progress for process. Elect Flux and make your voice heard. Help us contest the 2016 federal election and change ‪#‎AusPol‬ forever.</p>-->
<!--			</div>-->
		</div>
	</div>
<!--		<div class="contentWrp"></div>-->
	</div>



<?php endwhile; ?>
