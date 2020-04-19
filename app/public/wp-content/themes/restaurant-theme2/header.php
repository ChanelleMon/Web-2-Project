<!DOCTYPE html>
<html>
 <head>
 <?php wp_head();?>
 </head> 

 <body>
 <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
		      <a class="navbar-brand" href="index.html"><span class="flaticon-pizza-1 mr-1"></span>Squisito<br><small>Restaurant</small></a>
		      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
		        <span class="oi oi-menu"></span> Menu
		      </button>
	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item active"><a href="<?php echo site_url() ?>" class="nav-link">Home</a></li>
			  <li class="nav-item"> <a href="<?php echo site_url('/menu')?>" class="nav-link">Menu</a>
			  <li class="nav-item"> <a href="<?php echo site_url('/deals')?>" class="nav-link">Deals</a>
			  <li class="nav-item"> <a href="<?php echo site_url('/reviews')?>" class="nav-link">Reviews</a>
			  <li class="nav-item"> <a href="<?php echo site_url('/blog')?>" class="nav-link">Blog</a>
			  <li class="nav-item"> <a href="<?php echo site_url('/about')?>" class="nav-link">About</a>
			  <li class="nav-item"> <a href="<?php echo site_url('/contact')?>" class="nav-link">Contact</a>
	        </ul>
	      </div>
		  </div>
	  </nav>
</body>

</html>
