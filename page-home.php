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
				</div>
<div id="outer-content" class="row">
<ul id="projects-sort" class="inline-list">
  <li><a href="#" data-category="all">All</a></li>
  <li><a href="#" data-category="web">Websites</a></li>
  <li><a href="#" data-category="apps">Apps</a></li>
  <li><a href="#" data-category="photo">Photography</a></li>
</ul>
<ul id="projects" class="large-block-grid-4 medium-block-grid-3 small-block-grid-2">
<li data-groups="web"><a class="th [radius]" href="#">
<img src="https://unsplash.it/300/200/?random=0"></a>website</li>
<li data-groups="photo"><a class="th [radius]" href="#">
<img  src="https://unsplash.it/300/200/?random=1"></a>photo</li>
<li data-groups="apps"><a class="th [radius]" href="#">
<img src="https://unsplash.it/300/200/?random=2"></a>apps</li>
<li data-groups="apps"><a class="th [radius]" href="#">
<img  src="https://unsplash.it/300/200/?random=3"></a>apps</li>
<li data-groups="web"><a class="th [radius]" href="#">
<img  src="https://unsplash.it/300/200/?random=4"></a>website</li>
<li data-groups="photo"><a class="th [radius]" href="#">
<img src="https://unsplash.it/300/200/?random=5"></a>photo</li>
  <div class="hide"></div>
</ul>
</div>


				 <!-- end #inner-content -->
    
			</div> <!-- end #content -->

<?php get_footer(); ?>
