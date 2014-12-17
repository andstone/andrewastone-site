<?php
/*
Template Name: Home
*/
?>

<?php get_header(); ?>
			
			<div id="content">
			
				<div id="inner-content" class="row">
					<div class="small-12 large-8 large-centered column">
				    <div id="main" class="small-12 large-6 columns" role="main">
					
					    <?php get_template_part( 'partials/loop', 'page' ); ?>
					    						
				    </div> <!-- end #main -->

    				 <div id="main" class="small-12 large-6 columns" role="complimentary">

				    	<?php get_sidebar(); ?>

				    </div>
				    </div>
<div class="container large-12 column">

</div>

				</div> <!-- end #inner-content -->
    
			</div> <!-- end #content -->

<?php get_footer(); ?>
