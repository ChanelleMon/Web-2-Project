<!DOCTYPE html>
<html lang="en">
  <head>
    <?php get_header(); ?>
  </head>
  <body>

    <section class="home-slider owl-carousel img" style="background-image: url(<?php echo get_theme_file_uri('images/bg_1.jpg') ?>);">

      <div class="slider-item" style="background-image: url(<?php echo get_theme_file_uri('images/bg_1.jpg') ?>);">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row slider-text justify-content-center align-items-center">

            <div class="col-md-7 col-sm-12 text-center ftco-animate">
                <h1 class="mb-3 mt-5 bread"><?php the_title() ?></h1>
                <div class="breadcrumbs">
                <?php
                    while(have_posts()){
                    the_post(); ?>
			<div><span><?php the_time('M j, Y') ?>,</span>
			<span>Posted by <?php the_author_posts_link(); ?> in </span>
            <a href="<?php the_permalink();?>"><?php echo get_the_category_list(', ') ?></a></div>
            <?php } ?>
		  </div>
	            <p class="breadcrumbs"><span class="mr-2"><a href="<?php echo site_url('/blog') ?>">Blog Home</a></span></p>
            </div>

          </div>
        </div>
      </div>
    </section>

    <?php
        while(have_posts()){
        the_post(); ?>

<section class="ftco-section ftco-services">
            <div class="container">
            <h2 class="mb-4"><?php the_title() ?></h2>
            <div class="generic-content">
                <?php the_content(); ?>
             </div>

        </div>
</section>
    
     <?php
        }
    ?>
    
   
	<?php get_footer();?>

  </body>
</html>