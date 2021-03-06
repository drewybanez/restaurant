<?php 
/*
 * Template Name: Full Width
*/
get_header();
?>

<div class="page-title">
  <div class="container">
    <div class="row">
      <div class="col-md-6  col-sm-6 "> <span class="foodrecipes-page-breadcrumbs">
        <?php if (function_exists('foodrecipes_custom_breadcrumbs')) foodrecipes_custom_breadcrumbs(); ?>
        </span> </div>
    </div>
  </div>
</div>
<div class="main-container ">
  <div class="foodrecipes-container-recipes container">
    <div class="row">
      <?php while ( have_posts() ) : the_post(); ?>
      <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <div class="col-md-12 no-padding">
          <div class="foodrecipes-inner-blog-bg"> 
            <!-- blog-text-img-post -->
            <?php $foodrecipes_feature_img_url = wp_get_attachment_url(get_post_thumbnail_id(get_the_id())); ?>
            <div class="foodrecipes-inner-blog-text" >
              <h6> <?php echo get_the_date("j F, Y "); ?></h6>
              <h1><?php echo get_the_title(); ?></h1>
              <?php if($foodrecipes_feature_img_url != "") {?>
              <img src="<?php echo esc_url($foodrecipes_feature_img_url); ?>">
              <?php } ?>
              <p>
                <?php the_content(); ?>
              </p>
            </div>
            <?php if ( get_comments_number() > 0 ) : ?>
            <div class="foodrecipes-inner-blog-text" >
              <h6>
                <?php comments_number( __('NO COMMENT','food-recipes'), __('1 COMMENT','food-recipes'),__('%s COMMENTS','food-recipes')  ); ?>
              </h6>
            </div>
            <?php endif; ?>
            <div class="foodrecipes-comment-form">
              <?php comments_template( '', true ); ?>
            </div>
          </div>
        </div>
      </div>
      <?php endwhile; ?>
    </div>
  </div>
</div>
<?php get_footer(); ?>
