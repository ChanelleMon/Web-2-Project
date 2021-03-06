<!DOCTYPE html>
<html>
 <head>
 </head>

 <body>
 <footer class="ftco-footer ftco-section img">
    	<div class="overlay"></div>
      <div class="container">
        <div class="row mb-5">
          <div class="col-lg-3 col-md-6 mb-5 mb-md-5">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">About Us</h2>
              <p>We are a stone's throw from the local market of S. Ambrogio. Here is one of the most historic pizzerias in the whole city: Squisito.</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mb-5 mb-md-5">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Recent Blog</h2>
              <?php
                  $homepagePosts = new WP_Query(array(
                    'posts_per_page' => 2
                  ));
                  while($homepagePosts->have_posts()){ // tied to the default query used on the url
                  $homepagePosts->the_post();?>
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url(<?php the_post_thumbnail_url('menusLandscape'); ?>);"></a>
                <div class="text">
                  <h3 class="heading"><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span> <?php the_time('M j, Y') ?></a></div>
                    <div><a href="#"><span class="icon-person"></span> <?php the_author_posts_link(); ?></a></div>
                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                  </div>
                </div>
              </div>
              <?php } ?>
              
            </div>
          </div>
          <div class="col-lg-2 col-md-6 mb-5 mb-md-5">
             <div class="ftco-footer-widget mb-4 ml-md-4">
              <h2 class="ftco-heading-2">Reviews</h2>
              <ul class="list-unstyled">
                <li><a href="<?php echo site_url('/reviews')?>" class="py-2 d-block">Post a review</a></li>
                <li><a href="<?php echo site_url('/reviews')?>" class="py-2 d-block">Read some reviews</a></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 mb-5 mb-md-5">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Have a Questions?</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+2 392 3929 210</span></a></li>
	                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@yourdomain.com</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>

 </body>
 <?php wp_footer(); ?>

</html>