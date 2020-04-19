<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Squisito Restaurant</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
  </head>
  <body>
<?php 

get_header(); // pulls the content from header.php
?>

<section class="home-slider owl-carousel img" style="background-image: url(<?php echo get_theme_file_uri('images/bg_1.jpg') ?>);">
      <div class="slider-item">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row slider-text align-items-center" data-scrollax-parent="true">

            <div class="col-md-6 col-sm-12 ftco-animate">
            	<span class="subheading">Delicious</span>
              <h1 class="mb-4">Italian Cuizine</h1>
              <p class="mb-4 mb-md-5">We propose this mix of expertly cooked dishes trying to follow the Neapolitan tradition even in the chosen names.</p>
              <p><a href="<?php echo site_url('/deals')?>" class="btn btn-primary p-3 px-xl-4 py-xl-3">Order Now</a> <a href="<?php echo site_url('/menu')?>" class="btn btn-white btn-outline-white p-3 px-xl-4 py-xl-3">View Menu</a></p>
            </div>
            <div class="col-md-6 ftco-animate">
            	<img src="<?php echo get_theme_file_uri('images/bg_1.png') ?>" class="img-fluid" alt="">
            </div>

          </div>
        </div>
      </div>

      <div class="slider-item">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row slider-text align-items-center" data-scrollax-parent="true">

            <div class="col-md-6 col-sm-12 order-md-last ftco-animate">
            	<span class="subheading">Crunchy</span>
              <h1 class="mb-4">Italian Pizza</h1>
              <p class="mb-4 mb-md-5">We offer a true Neapolitan taste. Made with simplicity, according to the Neapolitan tradition. </p>
              <p><a href="<?php echo site_url('/deals')?>" class="btn btn-primary p-3 px-xl-4 py-xl-3">Order Now</a> <a href="<?php echo site_url('/menu')?>" class="btn btn-white btn-outline-white p-3 px-xl-4 py-xl-3">View Menu</a></p>
            </div>
            <div class="col-md-6 ftco-animate">
            	<img src="<?php echo get_theme_file_uri('images/bg_2.png') ?>" class="img-fluid" alt="">
            </div>

          </div>
        </div>
      </div>

      <div class="slider-item" style="background-image: url(<?php echo get_theme_file_uri('images/bg_3.jpg') ?>);">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

            <div class="col-md-7 col-sm-12 text-center ftco-animate">
            	<span class="subheading">Welcome</span>
              <h1 class="mb-4">We cooked your desired Pizza Recipe</h1>
              <p class="mb-4 mb-md-5">Pizza: here, just reading this word draws your attention. On the pizza they are said of all colors, made millions of rankings and look for the most ancient origins.</p>
              <p><a href="<?php echo site_url('/deals')?>" class="btn btn-primary p-3 px-xl-4 py-xl-3">Order Now</a> <a href="<?php echo site_url('/menu')?>" class="btn btn-white btn-outline-white p-3 px-xl-4 py-xl-3">View Menu</a></p>
            </div>

          </div>
        </div>
      </div>
    </section>

    <section class="ftco-intro">
    	<div class="container-wrap">
    		<div class="wrap d-md-flex">
	    		<div class="info">
	    			<div class="row no-gutters">
	    				<div class="col-md-4 d-flex ftco-animate">
	    					<div class="icon"><span class="icon-phone"></span></div>
	    					<div class="text">
	    						<h3>000 (123) 456 7890</h3>
	    						<p>A small river named Duden flows</p>
	    					</div>
	    				</div>
	    				<div class="col-md-4 d-flex ftco-animate">
	    					<div class="icon"><span class="icon-my_location"></span></div>
	    					<div class="text">
	    						<h3>198 West 21th Street</h3>
	    						<p>Suite 721 New York NY 10016</p>
	    					</div>
	    				</div>
	    				<div class="col-md-4 d-flex ftco-animate">
	    					<div class="icon"><span class="icon-clock-o"></span></div>
	    					<div class="text">
	    						<h3>Open Monday-Saturday</h3>
	    						<p>8:00am - 9:00pm</p>
	    					</div>
	    				</div>
	    			</div>
	    		</div>
	    		<div class="social d-md-flex pl-md-5 p-4 align-items-center">
	    			<ul class="social-icon">
              <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
              <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
              <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
            </ul>
	    		</div>
    		</div>
    	</div>
    </section>

    <section class="ftco-about d-md-flex">
    	<div class="one-half img" style="background-image: url(<?php echo get_theme_file_uri('images/about.jpg') ?>);"></div>
    	<div class="one-half ftco-animate">
        <div class="heading-section ftco-animate ">
          <h2 class="mb-4">Welcome to <span class="flaticon-pizza">Squisito</span> A Restaurant</h2>
        </div>
        <div>
		<p>We are a stone's throw from the local market of S. Ambrogio. Here is one of the most historic pizzerias in the whole city: Squisito. It is a typically Neapolitan pizza restaurant open for over twenty years. Our restaurant is welcoming and inviting, equipped with air conditioning and access for the disabled, four-legged guests are also welcome. In our restaurant you can also order take-away dishes, thanks to our take away service. Our mission day after day is to be able to involve the customer in a culinary experience outside the city. When you enter we must feel like in Naples, the same smells the same flavors the same sensations. Getting him off the table with "a full stomach and a satisfied palate" and above all with the belief that he has spent his money well is our goal.</p>
  			</div>
    	</div>
    </section>

    <section class="ftco-section ftco-services">
    	<div class="overlay"></div>
    	<div class="container">
    		<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate text-center">
            <h2 class="mb-4">Our Services</h2>
            <p>Where ever you are we will there.</p>
          </div>
        </div>
    		<div class="row">
          <div class="col-md-4 ftco-animate">
            <div class="media d-block text-center block-6 services">
              <div class="icon d-flex justify-content-center align-items-center mb-5">
              	<span class="flaticon-diet"></span>
              </div>
              <div class="media-body">
                <h3 class="heading">Healthy Foods</h3>
                <p>We believe that delicious can also mean nutritious.</p>
              </div>
            </div>      
          </div>
          <div class="col-md-4 ftco-animate">
            <div class="media d-block text-center block-6 services">
              <div class="icon d-flex justify-content-center align-items-center mb-5">
              	<span class="flaticon-bicycle"></span>
              </div>
              <div class="media-body">
                <h3 class="heading">Fastest Delivery</h3>
                <p>We deliver right to your door.</p>
              </div>
            </div>      
          </div>
          <div class="col-md-4 ftco-animate">
            <div class="media d-block text-center block-6 services">
              <div class="icon d-flex justify-content-center align-items-center mb-5"><span class="flaticon-pizza-1"></span></div>
              <div class="media-body">
                <h3 class="heading">Original Recipes</h3>
                <p>Perfected over 5 generations our dishes are as polished as can be.</p>
              </div>
            </div>    
          </div>
        </div>
    	</div>
    </section>

    <section class="ftco-section">
    	<div class="container">
    		<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate text-center">
            <h2 class="mb-4">Hot Pizza Meals</h2>
            <p>Made with love and cooked to perfection. Try out some of our homemade pizzas!</p>
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
									<a href="<?php the_permalink();?>" class="img"  style="background-image: url(<?php the_post_thumbnail_url('menusLandscape'); ?>);"></a> <!--<?php the_post_thumbnail('thumbnail');?>-->
									<div class="text p-4">
										<h3><a href="<?php the_permalink();?>"> <?php the_title(); ?> </a></h3>
										<p><?php echo wp_trim_words(get_the_content(),18); ?></p>
										<p class="price"><span>$<?php the_field('price');?></span> <a href="<?php echo site_url('/deals')?>" class="ml-2 btn btn-white btn-outline-white">Order</a></p>
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
            <p class="mt-5">Check out our affordable prices!</p>
          </div>
		</div>
		
		<!-- PIZZA LISTING-->
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
	        				<p><?php echo wp_trim_words(get_the_content(),8); ?></p>
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
    	</div>
    </section>

    <section class="ftco-gallery">
    	<div class="container-wrap">
    		<div class="row no-gutters">
					<div class="col-md-3 ftco-animate">
						<a href="<?php echo site_url('/blog')?>" class="gallery img d-flex align-items-center" style="background-image: url(<?php echo get_theme_file_uri('images/gallery-1.jpg') ?>);">
							<div class="icon mb-4 d-flex align-items-center justify-content-center">
    						<span class="icon-search"></span>
    					</div>
						</a>
					</div>
					<div class="col-md-3 ftco-animate">
						<a href="<?php echo site_url('/blog')?>" class="gallery img d-flex align-items-center" style="background-image: url(<?php echo get_theme_file_uri('images/gallery-2.jpg') ?>);">
							<div class="icon mb-4 d-flex align-items-center justify-content-center">
    						<span class="icon-search"></span>
    					</div>
						</a>
					</div>
					<div class="col-md-3 ftco-animate">
						<a href="<?php echo site_url('/blog')?>" class="gallery img d-flex align-items-center" style="background-image: url(<?php echo get_theme_file_uri('images/gallery-3.jpg') ?>);">
							<div class="icon mb-4 d-flex align-items-center justify-content-center">
    						<span class="icon-search"></span>
    					</div>
						</a>
					</div>
					<div class="col-md-3 ftco-animate">
						<a href="<?php echo site_url('/blog')?>" class="gallery img d-flex align-items-center" style="background-image: url(<?php echo get_theme_file_uri('images/gallery-4.jpg') ?>);">
							<div class="icon mb-4 d-flex align-items-center justify-content-center">
    						<span class="icon-search"></span>
    					</div>
						</a>
					</div>
        </div>
    	</div>
    </section>


		<section class="ftco-counter ftco-bg-dark img" id="section-counter" style="background-image: url(<?php echo get_theme_file_uri('images/bg_2.jpg') ?>);" data-stellar-background-ratio="0.5">
			<div class="overlay"></div>
      <div class="container">
        <div class="row justify-content-center">
        	<div class="col-md-10">
        		<div class="row">
		          <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		              	<div class="icon"><span class="flaticon-pizza-1"></span></div>
		              	<strong class="number" data-number="10">0</strong>
		              	<span>Pizza Branches</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		              	<div class="icon"><span class="flaticon-medal"></span></div>
		              	<strong class="number" data-number="15">0</strong>
		              	<span>Number of Awards</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		              	<div class="icon"><span class="flaticon-laugh"></span></div>
		              	<strong class="number" data-number="10567">0</strong>
		              	<span>Happy Customer</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		              	<div class="icon"><span class="flaticon-chef"></span></div>
		              	<strong class="number" data-number="125">0</strong>
		              	<span>Staff</span>
		              </div>
		            </div>
		          </div>
		        </div>
		      </div>
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

    <section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate text-center">
            <h2 class="mb-4">Recent from blog</h2>
            <p>Keep up to date with everything that we do!</p>
          </div>
        </div>
        <div class="row d-flex">
			<!-- DISPLAY BLOG POSTS -->
			<?php
				$homepagePosts = new WP_Query(array(
				'posts_per_page' => 3
				));
				while($homepagePosts->have_posts()){ // tied to the default query used on the url
				$homepagePosts->the_post();?>
					<div class="col-md-4 d-flex ftco-animate">
					<div class="blog-entry align-self-stretch">
					<a href="blog-single.html" class="block-20" style="background-image: url(<?php the_post_thumbnail_url('menusLandscape'); ?>);">
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
			<?php } ?> 
        </div>
      </div>
    </section>

		
		<section class="ftco-appointment">
			<div class="overlay"></div>
    	<div class="container-wrap">
    		<div class="row no-gutters d-md-flex align-items-center">
    			<div class="col-md-6 d-flex align-self-stretch">
    				<div id="map"></div>
    			</div>
	    		<div class="col-md-6 appointment ftco-animate">
	    			<h3 class="mb-3">Contact Us</h3>
	    			<form action="#" class="appointment-form">
	    				<div class="d-md-flex">
		    				<div class="form-group">
		    					<input type="text" class="form-control" placeholder="First Name">
		    				</div>
	    				</div>
	    				<div class="d-me-flex">
	    					<div class="form-group">
		    					<input type="text" class="form-control" placeholder="Last Name">
		    				</div>
	    				</div>
	    				<div class="form-group">
	              <textarea name="" id="" cols="30" rows="3" class="form-control" placeholder="Message"></textarea>
	            </div>
	            <div class="form-group">
	              <input type="submit" value="Send" class="btn btn-primary py-3 px-4">
	            </div>
	    			</form>
	    		</div>    			
    		</div>
    	</div>
    </section>

    <?php get_footer(); ?>

  </body>
</html>