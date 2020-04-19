<!DOCTYPE html>
<html lang="en">
  <head>
    <?php get_header(); ?>
  </head>
  <body>

    <section class="home-slider owl-carousel img" style="background-image: url(<?php echo get_theme_file_uri('images/bg_1.jpg') ?>);">

      <div class="slider-item" style="background-image: url(<?php echo get_theme_file_uri('images/bg_3.jpg') ?>);">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row slider-text justify-content-center align-items-center">

            <div class="col-md-7 col-sm-12 text-center ftco-animate">
            	<h1 class="mb-3 mt-5 bread"><?php the_title() ?></h1>
	            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span><?php the_title() ?></span></p>
            </div>

          </div>
        </div>
      </div>
    </section>
   
    <section class="ftco-section">
    	<div class="container">
    		
            <!-- DISPLAY DEALS POST TYPES -->
						<?php
							$homepageEvents = new WP_Query(array(
								'posts_per_page' => 4,
								'post_type' => 'deal',
								/*'meta_key' => 'price',
 								'orderby' => 'meta_value_num',*/
								'orderby' => 'title',
								'order' => 'ASC'

							));
							while($homepageEvents->have_posts()){
                                $homepageEvents->the_post();?>
                                <div class="row justify-content-center mb-5 pb-3">
                                <div class="col-md-7 heading-section ftco-animate text-center">
                                    <h2 class="mb-4"><?php the_title(); ?></h2>
                                    <p class="flip"><span class="deg1"></span><span class="deg2"></span><span class="deg3"></span></p>
                                    <p class="mt-5"><?php echo wp_trim_words(get_the_content(),18); ?></p>
                                </div>
                                </div>
                                <div class="row">
                                <?php
                                    $relatedMenus = get_field('related_menus');
                                    if($relatedMenus){
                                        foreach($relatedMenus as $post){ 
                                                setup_postdata( $post ); ?>
                                            <div class="col-md-3 text-center ftco-animate">
                                                <div class="menu-wrap">
                                                    <a href="#" class="menu-img img mb-4" style="background-image: url(<?php the_post_thumbnail_url('menusLandscape'); ?>);"></a>
                                                    <div class="text">
                                                        <h3><a href="<?php echo get_the_permalink($menu);?>"><?php echo get_the_title($menu); ?></a></h3>
                                                        <p><?php the_content(); ?></p>
                                                        <p class="price"><span>$<?php the_field('price');?></span></p>
                                                        <p><a href="#" class="btn btn-white btn-outline-white">Add to cart</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                    <?php
                                                        }
                                                        wp_reset_postdata();
                                                    }
                                                ?>
                                            
                                    
                                </div>
							<?php }
						?> 
            
    	</div>
    </section>

	<?php get_footer();?>
  <!-- loader 
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>
-->

  </body>
</html>