<?php
/**
 * Template Name: Landing Page
 */
?>

<?php while (have_posts()) : the_post(); ?>

	<div class="contentBgi"></div>
	<div class="contentWrp landingP1">
		<div class="contentInr">
			<div class="landingLogo"></div>
			<h1>Upgrade the system and return power to the people.</h1>
			<h4>When did our politics become so broken? Things must change. Flux is your way to participate directly in parliament. Empowering people in government decisions directly through technology. Let’s break up the party politics, end the gridlock and return the power to where it belongs - you.</h4>
			<div class="btnHex bgcOrng brdOrng"><a>Join Now</a></div>
			<div class="btnHex bgcDark brdDark"><a>Learn More</a></div>
		</div>
	</div>
	<div class="contentWrp landingP2">
		<div  class="contentInr">
			<div class='contentSectHeader'>What is Flux?</div>
			<div class='embed-container'>
				<iframe src='https://www.youtube.com/embed/i7MCxADcrwE' frameborder='0' allowfullscreen></iframe>
			</div>
			<div class="contentCol contentColLeft">
				<h2>Flux in a Nutshell.</h2>
				<p>This is us in a nutshell. We’re fed up with the political process too! Flux is your answer for a real democratic voice in parliament.</p>
				<p><strong>Help us get the word out! #share</strong></p>

			</div>
			<div class="contentCol contentColRight">
				<div class="btnHex btnHexFull bgcOrng brdOrng"><a>Join Now</a></div>
				<div class="btnHex btnHexFull bgcDark brdDark"><a>Learn More</a></div>
			</div>

		</div>
	</div>

<?php endwhile; ?>
