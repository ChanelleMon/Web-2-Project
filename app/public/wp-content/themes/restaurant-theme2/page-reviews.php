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

    <section class="ftco-section ftco-services">
    	<div class="overlay"></div>
    	<div class="container" >
    		<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate text-center">
            <h2 class="mb-4">Tell us what you think!</h2>
            <p>Leave a review</p>
          </div>
        </div>
    		<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-4 ftco-animate" >
          <!-- New Post Form -->
          <div id="postbox">
          <form id="new_post" name="new_post" method="post" action="">

          <!-- post name -->
          <p><label for="title">Title</label><br />
          <input type="text" id="title" value="" tabindex="1" size="47" name="title" />
          </p>

          <!-- post Category -->
          <p><label for="Category">Category:</label><br />
          <p><?php wp_dropdown_categories( 'show_option_none=Category&tab_index=4&taxonomy=category' ); ?></p>


          <!-- post Content -->
          <p><label for="description">Content</label><br />
          <textarea id="description" tabindex="3" name="description" cols="50" rows="6"></textarea>
          </p>

          <p><input type="submit" value="Publish" tabindex="6" id="submit" name="submit" /></p>

          <input type="hidden" name="action" value="new_post" />
          <?php wp_nonce_field( 'new-post' ); ?>
          </form>
          </div>
        
        </div>
    	</div>
    </section>

<?php 
  if( 'POST' == $_SERVER['REQUEST_METHOD'] && !empty( $_POST['action'] ) &&  $_POST['action'] == "new_post") {

    // Do some minor form validation to make sure there is content
    if (isset ($_POST['title'])) {
        $title =  $_POST['title'];
    } else {
        echo 'Please enter a  title';
    }
    if (isset ($_POST['description'])) {
        $description = $_POST['description'];
    } else {
        echo 'Please enter the content';
    }

    // Add the content of the form to $post as an array
    $new_post = array(
        'post_title'    => $title,
        'post_content'  => $description,
        'post_category' => array($_POST['reviews']),  // Usable for custom taxonomies too
        'post_status'   => 'publish',           // Choose: publish, preview, future, draft, etc.
        'post_type' => 'reviews'  //'post',page' or use a custom post type if you want to
    );
    //save the new post
    $pid = wp_insert_post($new_post); 
    //insert taxonomies
}
?>

    

    <section class="ftco-section">
    	<div class="container">
<?php
       $homepageEvents = new WP_Query(array(
         'posts_per_page' => 5,
         'post_type' => 'reviews',
         /*'meta_key' => 'price',
          'orderby' => 'meta_value_num',*/
         'orderby' => 'title',
         'order' => 'ASC'

       ));
       while($homepageEvents->have_posts()){
         $homepageEvents->the_post();?>

            <h2 class="mb-4"><?php the_title() ?></h2>
            <div class="meta">
            <div><a href="#">By <?php the_author_posts_link(); ?> </a></div>
            </div>
            <div class="generic-content">
                <?php the_content(); ?>
             </div><br>
     <?php
        }
    ?>
    	</div>
    </section>

  

	
		  <?php echo paginate_links(); ?>

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