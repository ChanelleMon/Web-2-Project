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
    
		<section class="ftco-section">
    	<div class="container">
    		<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate text-center">
            <h2 class="mb-4">Our Menu</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
          </div>
        </div>
    	</div>
    	<!-- PIZZA GRID -->
    	<div class="container-wrap">
    		<div class="row no-gutters d-flex">
						<!-- DISPLAY MENUS POST TYPES -->
						<?php
							$homepageEvents = new WP_Query(array(
								'posts_per_page' => 6,
								'post_type' => 'menus',
								/*'meta_key' => 'price',
 								'orderby' => 'meta_value_num',*/
								'orderby' => 'title',
								'order' => 'ASC'

							));
							while($homepageEvents->have_posts()){
								$homepageEvents->the_post();?>
							<div class="col-lg-4 d-flex ftco-animate">
								<div class="services-wrap d-flex">
									<a href="<?php the_permalink();?>" class="img" style="background-image: url(<?php the_post_thumbnail_url('menusLandscape'); ?>);"></a> <!--style="background-image: url(<?php echo get_theme_file_uri('images/pizza-1.jpg') ?>);"-->
									<div class="text p-4">
										<h3><a href="<?php the_permalink();?>"> <?php the_title(); ?> </a></h3>
										<p><?php echo wp_trim_words(get_the_content(),18); ?></p>
										<p class="price"><span>$<?php the_field('price');?></span> <a href="#" class="ml-2 btn btn-white btn-outline-white">Order</a></p>
									</div>
								</div>
							</div>
							<?php }
						?> 
    		</div>
    	</div>

		
    	<div class="container">
    		<div class="row justify-content-center mb-5 pb-3 mt-5 pt-5">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <h2 class="mb-4">Our Menu Pricing</h2>
            <p class="flip"><span class="deg1"></span><span class="deg2"></span><span class="deg3"></span></p>
            <p class="mt-5">Check out our affordable prices.</p>
          </div>
		</div>
		<div class="row">
        	<div class="col-md-6">
		<!-- DISPLAY MENUS POST TYPES FOR PRICING -->
		<?php
			$count = 0;
			$homepageEvents = new WP_Query(array(
				'posts_per_page' => 8,
				'post_type' => 'menus',
				'meta_key' => 'price',
				'orderby' => 'meta_value_num',
				'order' => 'ASC'

			));
			while($homepageEvents->have_posts()){
				$homepageEvents->the_post();
				$count = $count + 1; ?>
				<?php 
					if($count == 5)
						echo '<div class="col-md-6">';
				?>      
				<div class="pricing-entry d-flex ftco-animate">
        			<div class="img" style="background-image: url(<?php the_post_thumbnail_url('menusLandscape'); ?>);"></div>
        			<div class="desc pl-3">
	        			<div class="d-flex text align-items-center">
	        				<h3><span><?php the_title(); ?></span></h3>
	        				<span class="price">$<?php the_field('price');?></span>
	        			</div>
	        			<div class="d-block">
	        				<p><?php echo wp_trim_words(get_the_content(),18); ?></p>
	        			</div>
        			</div>
				</div>
				
			<?php 
				if($count == 4)
					echo '</div>';
			}
			?>       
        	</div>

        	
    	</div>
    </section>

    <section class="ftco-menu">
    	<div class="container-fluid">
    		<div class="row d-md-flex">
	    		<div class="col-lg-4 ftco-animate img f-menu-img mb-5 mb-md-0" style="background-image: url(<?php echo get_theme_file_uri('images/about.jpg') ?>);">
	    		</div>
	    		<div class="col-lg-8 ftco-animate p-md-5">
		    		<div class="row">
		          <div class="col-md-12 nav-link-wrap mb-5">
		            <div class="nav ftco-animate nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
		              <a class="nav-link active" id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1" role="tab" aria-controls="v-pills-1" aria-selected="true">Pizza</a>

		              <a class="nav-link" id="v-pills-2-tab" data-toggle="pill" href="#v-pills-2" role="tab" aria-controls="v-pills-2" aria-selected="false">Drinks</a>

		              <a class="nav-link" id="v-pills-3-tab" data-toggle="pill" href="#v-pills-3" role="tab" aria-controls="v-pills-3" aria-selected="false">Burgers</a>

		              <a class="nav-link" id="v-pills-4-tab" data-toggle="pill" href="#v-pills-4" role="tab" aria-controls="v-pills-4" aria-selected="false">Pasta</a>
		            </div>
		          </div>
		          <div class="col-md-12 d-flex align-items-center">
		            
		            <div class="tab-content ftco-animate" id="v-pills-tabContent">

		              <div class="tab-pane fade show active" id="v-pills-1" role="tabpanel" aria-labelledby="v-pills-1-tab">
		              	<div class="row">
		              		 <!-- DISPLAY MENUS POST TYPES -->
						<?php
							$homepageEvents = new WP_Query(array(
								'posts_per_page' => 3,
								'post_type' => 'menus',
								/*'meta_key' => 'price',
 								'orderby' => 'meta_value_num',*/
								'orderby' => 'title',
								'order' => 'ASC'

							));
							while($homepageEvents->have_posts()){
								$homepageEvents->the_post();?>
								<div class="col-md-4 text-center">
		              			<div class="menu-wrap">
		              				<a href="<?php the_permalink();?>" class="menu-img img mb-4" style="background-image: url(<?php the_post_thumbnail_url('menusLandscape'); ?>);"></a>
		              				<div class="text">
		              					<h3><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h3>
		              					<p><?php echo wp_trim_words(get_the_content(),18); ?></p>
		              					<p class="price"><span>$<?php the_field('price');?></span></p>
		              					<p><a href="#" class="btn btn-white btn-outline-white">Add to cart</a></p>
		              				</div>
		              			</div>
		              		</div>
							<?php }
						?> 
		              	</div>
		              </div>

		              <div class="tab-pane fade" id="v-pills-2" role="tabpanel" aria-labelledby="v-pills-2-tab">
		                <div class="row">
		              		<div class="col-md-4 text-center">
		              			<div class="menu-wrap">
		              				<a href="#" class="menu-img img mb-4" style="background-image: url(<?php echo get_theme_file_uri('images/drink-1.jpg'); ?>);"></a>
		              				<div class="text">
		              					<h3><a href="#">Lemonade Juice</a></h3>
		              					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
		              					<p class="price"><span>$2.90</span></p>
		              					<p><a href="#" class="btn btn-white btn-outline-white">Add to cart</a></p>
		              				</div>
		              			</div>
		              		</div>
		              		<div class="col-md-4 text-center">
		              			<div class="menu-wrap">
		              				<a href="#" class="menu-img img mb-4" style="background-image: url(<?php echo get_theme_file_uri('images/drink-2.jpg'); ?>);"></a>
		              				<div class="text">
		              					<h3><a href="#">Pineapple Juice</a></h3>
		              					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
		              					<p class="price"><span>$2.90</span></p>
		              					<p><a href="#" class="btn btn-white btn-outline-white">Add to cart</a></p>
		              				</div>
		              			</div>
		              		</div>
		              		<div class="col-md-4 text-center">
		              			<div class="menu-wrap">
		              				<a href="#" class="menu-img img mb-4" style="background-image: url(<?php echo get_theme_file_uri('images/drink-3.jpg'); ?>);"></a>
		              				<div class="text">
		              					<h3><a href="#">Soda Drinks</a></h3>
		              					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
		              					<p class="price"><span>$2.90</span></p>
		              					<p><a href="#" class="btn btn-white btn-outline-white">Add to cart</a></p>
		              				</div>
		              			</div>
		              		</div>
		              	</div>
		              </div>

		              <div class="tab-pane fade" id="v-pills-3" role="tabpanel" aria-labelledby="v-pills-3-tab">
		                <div class="row">
		              		<div class="col-md-4 text-center">
		              			<div class="menu-wrap">
		              				<a href="#" class="menu-img img mb-4" style="background-image: url(<?php echo get_theme_file_uri('images/burger-1.jpg'); ?>);"></a>
		              				<div class="text">
		              					<h3><a href="#">Itallian Pizza</a></h3>
		              					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
		              					<p class="price"><span>$2.90</span></p>
		              					<p><a href="#" class="btn btn-white btn-outline-white">Add to cart</a></p>
		              				</div>
		              			</div>
		              		</div>
		              		<div class="col-md-4 text-center">
		              			<div class="menu-wrap">
		              				<a href="#" class="menu-img img mb-4" style="background-image: url(<?php echo get_theme_file_uri('images/burger-2.jpg'); ?>);"></a>
		              				<div class="text">
		              					<h3><a href="#">Itallian Pizza</a></h3>
		              					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
		              					<p class="price"><span>$2.90</span></p>
		              					<p><a href="#" class="btn btn-white btn-outline-white">Add to cart</a></p>
		              				</div>
		              			</div>
		              		</div>
		              		<div class="col-md-4 text-center">
		              			<div class="menu-wrap">
		              				<a href="#" class="menu-img img mb-4" style="background-image: url(<?php echo get_theme_file_uri('images/burger-3.jpg'); ?>);"></a>
		              				<div class="text">
		              					<h3><a href="#">Itallian Pizza</a></h3>
		              					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
		              					<p class="price"><span>$2.90</span></p>
		              					<p><a href="#" class="btn btn-white btn-outline-white">Add to cart</a></p>
		              				</div>
		              			</div>
		              		</div>
		              	</div>
		              </div>

		              <div class="tab-pane fade" id="v-pills-4" role="tabpanel" aria-labelledby="v-pills-4-tab">
		                <div class="row">
		              		<div class="col-md-4 text-center">
		              			<div class="menu-wrap">
		              				<a href="#" class="menu-img img mb-4" style="background-image: url(<?php echo get_theme_file_uri('images/pasta-1.jpg'); ?>);"></a>
		              				<div class="text">
		              					<h3><a href="#">Itallian Pizza</a></h3>
		              					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
		              					<p class="price"><span>$2.90</span></p>
		              					<p><a href="#" class="btn btn-white btn-outline-white">Add to cart</a></p>
		              				</div>
		              			</div>
		              		</div>
		              		<div class="col-md-4 text-center">
		              			<div class="menu-wrap">
		              				<a href="#" class="menu-img img mb-4" style="background-image: url(<?php echo get_theme_file_uri('images/pasta-2.jpg'); ?>);"></a>
		              				<div class="text">
		              					<h3><a href="#">Itallian Pizza</a></h3>
		              					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
		              					<p class="price"><span>$2.90</span></p>
		              					<p><a href="#" class="btn btn-white btn-outline-white">Add to cart</a></p>
		              				</div>
		              			</div>
		              		</div>
		              		<div class="col-md-4 text-center">
		              			<div class="menu-wrap">
		              				<a href="#" class="menu-img img mb-4" style="background-image: url(<?php echo get_theme_file_uri('images/pasta-3.jpg'); ?>);"></a>
		              				<div class="text">
		              					<h3><a href="#">Itallian Pizza</a></h3>
		              					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
		              					<p class="price"><span>$2.90</span></p>
		              					<p><a href="#" class="btn btn-white btn-outline-white">Add to cart</a></p>
		              				</div>
		              			</div>
		              		</div>
		              	</div>
		              </div>
		            </div>
		          </div>
		        </div>
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