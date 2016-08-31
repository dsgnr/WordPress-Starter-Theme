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

                    <p>&copy; <?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?> A <a href="https://www.designsbytouch.co.uk">Studio Touch</a> project.</p>
                </div>
                </div>

		</div>
		<?php wp_footer(); ?>
	</body>
</html>
