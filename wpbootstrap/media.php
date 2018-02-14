<?php
/*
Template Name: Media
*/
?>
<?php get_header(); ?>
 

<div class="jumbotron" id="media">
	<div class="row">
		<div class="card" style="width: 20rem;" >
  			<div class="card-body">
    		<h4 class="card-title">Sub-head/CTA</h4>
        	<div class="titleLine"></div>
   			 <p class="card-text">A brief summary of our award-wining history.Meeting the clients needs, work process, etc.</p>
		</div>
	</div>
</div>


<div class="brandWrapper">
	<div class="row-fluid">

				<div class="container" id="crmBG">
					<div class="row">
						<div class="card" style="width: 20rem;" >
  							<div class="card-body">
    							<h4 class="card-title">Sub-head/CTA</h4>
        						<div class="titleLine"></div>
    							<p class="card-text">A brief summary of our award-wining history.Meeting the clients needs, work process, etc.</p>
    							 <br><a href="#" class="btn">Go somewhere</a>

							</div>
						</div>
					</div>
				</div>
				<div class="container" id="prgbuyBG">
					<div class="row">
						<div class="card" style="width: 20rem;" >
  							<div class="card-body">
    							<h4 class="card-title">Sub-head/CTA</h4>
        						<div class="titleLine"></div>
    							<p class="card-text">A brief summary of our award-wining history.Meeting the clients needs, work process, etc.</p>
    							<br><a href="#" class="btn">Go somewhere</a>

							</div>
						</div>
					</div>					
				</div>


				
	</div>
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