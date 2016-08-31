            </div>

                            <footer class="footer">

            <div class="container">

				<div class="one-fourth">
				<?php dynamic_sidebar( 'footer-widget-1' ); ?>
			</div>
			<div class="one-fourth">
				<?php dynamic_sidebar( 'footer-widget-2' ); ?>
			</div>

            </div>
                </footer>
                <div class="absolute-footer">
	                            <div class="container">

                    <p>&copy; <?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?> </p>
                    <p>A <a href="https://www.designsbytouch.co.uk">Studio Touch</a> project.
                </div>
                </div>

		</div>
		<?php wp_footer(); ?>
		<script type="text/javascript">jQuery(document).ready(function(n){n(".js-menu-toggle").on("click",function(){n("body").toggleClass("is-menu-on")})});</script>
	</body>
</html>
