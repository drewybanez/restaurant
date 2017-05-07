	<?php get_header(); ?>
	<div id="kt-main">
	<div class="container">
		<div class="row">
		  <div class="col-md-8">
			<div class="row">
			  <div class="col-md-12" id="kt-article">
			  <?php while ( have_posts() ) : the_post(); ?>
				<h1><?php 
						$thetitle = get_the_title($post->ID);
						$origpostdate = get_the_date('M d, Y', $post->post_parent);
						$origposttime = get_the_time('M d, Y', $post->post_parent);
						$dateline = $origpostdate.' '.$origposttime;
						//var_dump($thetitle);
						if($thetitle==null){echo $dateline;}else{
						the_title();                     
						}
					?></h1>
					
					<div class="kt-divider"></div>
					<p class="kt-price-inner"><?php the_author(); ?>, 
					<?php the_time(get_option('date_format')); ?></p>
					<?php if(get_post_meta($post->ID, 'ketchupthemes_price', true))  : ?>
					<div class="kt-divider clearfix"></div>
					<p class="kt-inner-credentials"><?php _e('Price: ', 'italianrestaurant'); echo get_post_meta($post->ID, 'ketchupthemes_price', true); ?></p>
					<?php endif; ?>
					<?php the_content(); ?>
					<div class="kt-divider clearfix"></div>
					<div id="kt-categories"><div class="glyphicon glyphicon-th-list" id="kt-categories-icon" ></div><?php echo get_the_category_list(',', _e( ' ', 'italianrestaurant' )); ?></div>
					<p>
                    <?php if(has_tag()){?>
                    <span class="glyphicon glyphicon-tags"></span>
                    <?php }?>
                    <span id="kt-tags"><?php the_tags('', ', ', '<br />'); ?></span></p>
					<?php wp_link_pages( array( 'before' => '<div class="page-link"><span>' . __( 'Pages:', 'italianrestaurant' ) . '</span>', 'after' => '</div>' ) ); ?>
					<div class="kt-divider clearfix"></div>
					<?php comments_template( '', true ); ?>
				<?php endwhile; ?>
			  </div>
			</div>
		  </div>
		  <?php get_sidebar(); ?>
		</div>
	</div>
	</div>
	<?php get_footer(); ?>   