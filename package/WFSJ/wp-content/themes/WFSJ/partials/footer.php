					</div>
				</div>
			</div>
		</div>

		<footer>
			<div class="outer_container">
				<div class="container">
					<div>
						<nav class="pull-left">
							<ul>
								<li><a href="<?php echo get_page_link( 7 ); ?>"><span>About the WFSJ</span></a></li>
								<li><a href="<?php echo get_page_link( 28 ); ?>"><span>Disclaimer</span></a></li>
								<li><a href="<?php echo get_page_link( 30 ); ?>"><span>Terms and conditions</span></a></li>
								<li><a href="<?php echo get_page_link( 32 ); ?>"><span>Privacy Policy</span></a></li>
								<li><a href="<?php echo get_page_link( 34 ); ?>"><span>Image Attributions</span></a></li>
								<li><a href="<?php echo get_page_link( 16 ); ?>"><span>Contact</span></a></li>
							</ul>
						</nav>

						<a class="logo pull-right" href="<?php echo get_page_link( 5 ); ?>"><span><?php echo SITE_NAME; ?></span></a>
					</div>
				</div>
			</div>
			
			<!-- jQuery libraries -->
			<script src="<?php bloginfo( 'template_url' ); ?>/scripts/lib/jquery-1.11.3.min.js"></script>
			<script src="<?php bloginfo( 'template_url' ); ?>/scripts/lib/bootstrap.min.js"></script>
			<script src="<?php bloginfo( 'template_url' ); ?>/scripts/lib/jquery-scrollToTop.js"></script>

			<!-- website javascript -->
			<script src="<?php bloginfo( 'template_url' ); ?>/scripts/javascript.js"></script>
		</footer>
		<input class="scrollpoint" type="hidden" name="scrollpoint" value="<?php echo $scrollpoint; ?>" />

		<script>
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
			ga('create', 'UA-60603113-3', 'auto');
			ga('send', 'pageview');
		</script>
		<?php wp_footer(); ?>
	</body>
</html>