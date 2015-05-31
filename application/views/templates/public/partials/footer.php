<footer>
	<div class="container">
		<div class="row">

			<!-- recent tweets -->
			<div class="col-sm-3">
				<h1 class="first-child">Recent Tweets</h1>
				<!-- tweet #1 -->
				<div class="tweet">
					No Tweets Found!!!
				</div><!-- tweet #2 -->
			</div><!-- recent tweets col -->

			<!-- quick links -->
			<div class="col-sm-3">
				<h1>Quicks Links</h1>
				<ul class="links">
					<li><a href="<?php echo site_url('about') ?>">About</a></li>
					<li><a href="<?php echo site_url('faq') ?>">FAQ</a></li>
					<li><a href="<?php echo site_url('disclaimer') ?>">Disclaimer</a></li>
					<li><a href="<?php echo site_url('rules') ?>">Rules and Criteria</a></li>
					<li><a href="<?php echo site_url('contact') ?>">Contact Us</a></li>
				</ul>
			</div><!-- quick links col -->

			<!-- Contact -->
			<div class="col-sm-3">
				<h1>Contact Us</h1>
				<p>Do not hesitate to contact us if you have any questions or problems:</p>
				<p>
					Research Center,<br>
					Innovative Ghar Nepal<br>
					Balkumari, Kharibot, Lalitpur<br>
					Phone: +977-980-297-2075<br>
					Email: <?php echo safe_mailto('info@ingnepal.org', 'info@ingnepal.org') ?>
					<?php echo safe_mailto('android@ingnepal.org', 'android@ingnepal.org') ?>
	            </p>
			</div><!-- contact col -->

			<!-- copyright -->
			<div class="col-sm-3">
				<img class="footer-brand img-responsive" src="<?php echo base_url() ?>assets/sites/images/khudkila-android-challenge.png" alt="">
				<p>&copy; <?php echo date('Y') ?> - <a href="http://www.ingnepal.org" target="_blank">Innovative Ghar Nepal</a></p>
				<p>All Rights Reserved.</p>

				<ul class="social-links">
					<li class="twitter"><a href="https://www.twitter.com/InnovativeGhar" target="_blank"><i class="fa fa-twitter"></i></a></li>
					<li class="facebook"><a href="https://www.facebook.com/ingnepal" target="_blank"><i class="fa fa-facebook"></i></a></li>
					<li class="linkedin"><a href="#linkedin" target="_blank"><i class="fa fa-linkedin"></i></a></li>
				</ul>

				<p>Hosting &amp; Web Support by <a href="http://www.puncoz.com" target="_blank">Puncoz.com</a></p>
			</div><!-- copyright -->

		</div><!-- row -->
	</div><!-- container -->
	</footer><!-- footer -->