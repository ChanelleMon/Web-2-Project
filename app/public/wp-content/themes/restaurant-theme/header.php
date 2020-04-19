<!DOCTYPE html>
<html 
<?php language_attributes(); ?> >
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale =1">
       
        <?php wp_head();?>
    </head>

 <body  <?php body_class(); ?>>
 <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
		      <a href="<?php echo site_url() ?>" class="navbar-brand" href="index.html"><span class="flaticon-pizza-1 mr-1"></span>Squisito<br><small>Restaurant</small></a>
		      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
		        <span class="oi oi-menu"></span> Menu
		      </button>
	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item active"><a href="index.html" class="nav-link">Home</a></li>
	          <li class="nav-item"><a href="menu.html" class="nav-link">Menu</a></li>
	          <li class="nav-item"><a href="services.html" class="nav-link">Services</a></li>
	          <li class="nav-item"><a href="blog.html" class="nav-link">Blog</a></li>
				<li <?php if(is_page('about-us') or wp_get_post_parent_id(0) == 15 ) 
						echo 'class="nav-item"> class="nav-link"'; ?>>
				<a href="<?php echo site_url('/about') ?>">About</a>
	          <li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li>
	        </ul>
	      </div>
		  </div>
	  </nav>
</body>

</html>