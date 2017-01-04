<?php
/**
 * Template Name: Landing Page
 */
?>

<?php while (have_posts()) : the_post(); ?>

	<div class="homepageBg"></div>
	<div class="homepageContent">
		<div class="logoHomepage"></div>
		<h1>Upgrade the system and return power to the people.</h1>
		<h4>When did our politics become so broken? Things must change. Flux is your way to participate directly in parliament. Empowering people in government decisions directly through technology. Let’s break up the party politics, end the gridlock and return the power to where it belongs - you.</h4>
		<div class="btnHex bgcOrng brdOrng"><a>Join Now</a></div>
		<div class="btnHex bgcDark brdDark"><a>Learn More</a></div>
	</div>

<?php endwhile; ?>
