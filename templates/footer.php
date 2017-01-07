<footer class="footerWrp">
	<div class="footerBlk footerBlkAuth">
		<div class="footerInr bgcDark">
			<div class="footerLogo"></div>
			<h4 class="mrgOff">Join the movement</h4>
			<h5 class="mrgOff txtGrey">Modernise our democratic system</h5>
			<p class="txtGrey">Authorised by Max Kaye, L6 50 Carrington St, Sydney, 2000</p>
		</div>
	</div>
	<div class="footerBlk">
		<div class="footerInr">
			<div class="contentCol contentColQuart sHalf">
				<h5 class="mrgOff txtGrey">More Information</h5>
				<?php get_template_part('templates/navFooter', 'page'); ?>
			</div>
			<div class="contentCol contentColQuart sHalf">
				<h5 class="mrgOff txtGrey">Quick Links</h5>
				<?php get_template_part('templates/navQuick', 'page'); ?>
			</div>
			<div class="contentCol contentColQuart sFull">
				<h5 class="mrgOff txtGrey">International Parties</h5>
				<?php //get_template_part('templates/navIntl', 'page'); ?>
				<?php get_template_part('templates/navFooter', 'page'); ?>
			</div>

			<!--<?php dynamic_sidebar('sidebar-footer'); ?>-->
		</div>

	</div>
</footer>