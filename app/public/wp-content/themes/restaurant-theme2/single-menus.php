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
          <h1 class="mb-3 mt-5 bread">Our <?php the_title() ?></h1>
          <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span><?php the_title() ?></span></p>
      </div>

    </div>
  </div>
</div>
</section>

                        <div>
						<p><a 
                        href="<?php echo get_post_type_archive_link('menus'); ?>">
                        <i ></i> Event Home</a>
                        <span class="text p-4"><?php the_title(); ?> </span></p>
                        </div>
                        <div class="text p-4">
                        <?php the_content(); ?>
                        </div>


<?php get_footer();?>

<!-- loader 
<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>
-->
</body>
</html>