
<?php
/*
Template Name: Brand
*/
?>
<?php get_header(); ?>
 

<div class="jumbotron" id="brand">
	<div class="row">	
		<div class="card" >
  			<div class="card-body">
  				<div class="titleLine">
   			 		<h1 class="card-title">Our Approach</h1>
   			    	<h3 class="card-title">It's science, kinda.</h3>
   				</div>
    		<p class="card-text">Emotion is everything for memory. When we smile, when we’re shocked, these moments are more deeply imprinted. Remember in 5th grade when you laughed so hard milk came out of your nose? The emotion makes it memorable. Brands that make us feel or make us think, brands that provoke a response are more likely to be remembered.</p>
			</div>
		</div>
	</div>
</div>
<div class="brandWrapperTwo">
	<div class="row-fluid">
		<figure class="figure">
				<img class="img-thumbnail float-left" src="http://localhost/wp-content/uploads/2017/10/saratogaLogo.png">
				<img class="img-thumbnail float-left" src="http://localhost/wp-content/uploads/2017/10/riondoLogo.png">
				<img class="img-thumbnail float-left" src="http://localhost/wp-content/uploads/2017/10/alterLogo.png">
				<img class="img-thumbnail float-left" src="http://localhost/wp-content/uploads/2017/10/saratogaLogo.png">
				<img class="img-thumbnail float-left" src="http://localhost/wp-content/uploads/2017/10/riondoLogo.png">
				<img class="img-thumbnail float-left" src="http://localhost/wp-content/uploads/2017/10/alterLogo.png">
			
		</figure>
		<figure class="figure">
				<img class="img-thumbnail float-left" src="http://localhost/wp-content/uploads/2017/10/saratogaLogo.png">
				<img class="img-thumbnail float-left" src="http://localhost/wp-content/uploads/2017/10/riondoLogo.png">
				<img class="img-thumbnail float-left" src="http://localhost/wp-content/uploads/2017/10/alterLogo.png">
				<img class="img-thumbnail float-left" src="http://localhost/wp-content/uploads/2017/10/saratogaLogo.png">
				<img class="img-thumbnail float-left" src="http://localhost/wp-content/uploads/2017/10/riondoLogo.png">
				<img class="img-thumbnail float-left" src="http://localhost/wp-content/uploads/2017/10/alterLogo.png">
		</figure>
		<figure class="figure">
				<img class="img-thumbnail float-left" src="http://localhost/wp-content/uploads/2017/10/saratogaLogo.png">
				<img class="img-thumbnail float-left" src="http://localhost/wp-content/uploads/2017/10/riondoLogo.png">
				<img class="img-thumbnail float-left" src="http://localhost/wp-content/uploads/2017/10/alterLogo.png">
				<img class="img-thumbnail float-left" src="http://localhost/wp-content/uploads/2017/10/saratogaLogo.png">
				<img class="img-thumbnail float-left" src="http://localhost/wp-content/uploads/2017/10/riondoLogo.png">
				<img class="img-thumbnail float-left" src="http://localhost/wp-content/uploads/2017/10/alterLogo.png">
		</figure>
	</div>


<footer>
	<div class="container">
		
		<button type="button" class="btn btn-outline-primary">Meet The Team</button>
	</div>
</div>	

</footer>

	



<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>


	<?php the_content(); ?>





<?php endwhile; else: ?>
	<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>