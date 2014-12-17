<?php
/*
Template Name: Home
*/
?>

<?php get_header(); ?>
			
			<div id="content">
			
				<div id="inner-content" class="row">
					<div id="bio" class="large-8 large-centered columns" data-clearing>
				    <div id="main" class="small-12 large-6 columns first" role="main">
					
					    <?php get_template_part( 'partials/loop', 'home' ); ?>
					    						
				    </div> <!-- end #main -->
				    <div id="sidebar" class="small-12 large-6 columns" role="complementary">
					
					     <?php get_sidebar(); ?>
					    						
				    </div> <!-- end #main -->
    
				   </div>
				<div class="container">
  <div>Spans 1 Column</div>
  <div>Spans 2 Columns</div>
  <div>Spans 3 Columns</div>
  <div>Spans 4 Columns</div>
  ...
</div>
				    

				</div> <!-- end #inner-content -->

			</div> <!-- end #content -->

<?php get_footer(); ?>
