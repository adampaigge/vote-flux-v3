<?php
/**
 * Template Name: Landing Page
 */
?>

<?php while (have_posts()) : the_post(); ?>
	<div class="scrollWrp">
		<div class="contentBgi"></div>
		<div class="contentWrp snapCord landingP1">
			<div class="contentInr">
				<div class="landingLogo"></div>
				<h1>Upgrade the system and return power to the people.</h1>
				<p>When did our politics become so broken? Things must change. Flux is your way to participate directly in parliament. Empowering people in government decisions directly through technology. Let’s break up the party politics, end the gridlock and return the power to where it belongs - you.</p>
				<div class="btnHex bgcOrng brdOrng"><a>Join Now</a></div>
				<div class="btnHex bgcDark brdDark"><a>Learn More</a></div>
			</div>
		</div>

		<div class="contentWrp contentWrapPush">
			<div  class="contentInr">
				<div class='contentSectHeader'>What is Flux?</div>

				<div class='embed-container'>
					<iframe src='https://www.youtube.com/embed/i7MCxADcrwE' frameborder='0' allowfullscreen></iframe>
				</div>

				<h2>Flux in a Nutshell.</h2>
				<div class="contentCol contentColLeft">
					<p>This is us in a nutshell. We’re fed up with the political process too! Flux is your answer for a real democratic voice in parliament.</p>
					<p><strong>Help us get the word out! #share</strong></p>
				</div>

				<div class="contentCol contentColRight">
					<div class="btnHex btnHexFull bgcOrng brdOrng"><a>Join Now</a></div>
					<div class="btnHex btnHexFull bgcDark brdDark"><a>Learn More</a></div>
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
