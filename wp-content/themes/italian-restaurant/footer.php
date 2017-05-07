    <div id="kt-footer">
		<div class="container">
			<div class="row" id="kt-sidebar">
                <div class="col-md-6">
				<?php if ( ! dynamic_sidebar( 'footer-sidebar-left' ) ) : ?>
                <div class="pre-widget">
                    <h3><?php _e('Widgetized Sidebar', 'italianrestaurant'); ?></h3>
                    <p><?php _e('This panel is active and ready for you to add 
                    some widgets via the WP Admin', 'italianrestaurant'); ?></p>
                </div>
  
            <?php endif; ?>
                </div>
                 <div class="col-md-6">
                <?php if ( ! dynamic_sidebar( 'footer-sidebar-right' ) ) : ?>
                <div class="pre-widget">
                    <h3><?php _e('Widgetized Sidebar', 'italianrestaurant'); ?></h3>
                    <p><?php _e('This panel is active and ready for you to add 
                    some widgets via the WP Admin', 'italianrestaurant'); ?></p>
                </div>
  
            <?php endif; ?>
                </div>
			</div>
		</div>
	</div>
	<div id="kt-copyright">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<p><a href="<?php echo esc_url( __( 'http://ketchupthemes.com/italian-restaurant-theme/', 'italianrestaurant' ) ); ?>"><?php printf( __( 'Italian Restaurant ', 'italianrestaurant' )); ?></a> Theme, Powered by WordPress</p>
				</div>
			</div>
		</div>
	</div>
	<?php wp_footer(); ?> 
  </body>
</html>