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
            	<h1 class="mb-3 mt-5 bread">Read our Blog</h1>
	            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Blog</span></p>
            </div>

          </div>
        </div>
      </div>
    </section>

<section class="ftco-section">
<div class="container">
  <div class="row justify-content-center mb-5 pb-3">
	<div class="col-md-7 heading-section ftco-animate text-center">
	  <h2 class="mb-4">Read our blog</h2>
	  <p>Keep up to date with everything that we do!</p>
	</div>
  </div>
  <div class="row d-flex">
	   <!-- DISPLAY MENUS POST TYPES -->
	   <?php
			while(have_posts()){
				the_post();?>
					<div class="col-md-4 d-flex ftco-animate">
		<div class="blog-entry align-self-stretch">
		<a href="<?php the_permalink();?>" class="block-20" style="background-image: url(<?php the_post_thumbnail_url('menusLandscape'); ?>);">
		</a>
		<div class="text py-4 d-block">
			<div class="meta">
			<div><a href="#"><?php the_time('M j, Y') ?></a></div>
			<div><a href="#"><?php the_author_posts_link(); ?></a></div>
			<div><a href="#"><?php echo get_the_category_list(', ') ?></a></div>
			<div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
		  </div>
		  <h3 class="heading mt-2"><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h3>
		  <p><?php echo wp_trim_words(get_the_content(),18); ?></p>
		</div>
	  </div>
	</div>
							<?php }
						?> 

	
</div>
  </div>
  <div class="row mt-5">
	<div class="col text-center">
	  <div class="block-27">
		  <?php echo paginate_links(); ?>
		<!-- <ul>
		  <li><a href="#">&lt;</a></li>
		  <li class="active"><span>1</span></li>
		  <li><a href="#">2</a></li>
		  <li><a href="#">3</a></li>
		  <li><a href="#">4</a></li>
		  <li><a href="#">5</a></li>
		  <li><a href="#">&gt;</a></li>
		</ul></div>-->
	  </div>
	</div>
  </div>

</section>

	<?php get_footer();?>
  <!-- loader 
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>
-->

  </body>
</html>