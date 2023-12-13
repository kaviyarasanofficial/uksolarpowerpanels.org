<?php
/**
Template Name: Page Left Sidebar Page
**/

get_header();
erapress_breadcrumbs_style();
?>
<section id="page-section" class="page-right-section">
	<div class="container">
		<div class="row wow fadeInUp">	
			<div class="col-lg-4">
				<?php  get_sidebar(); ?>
			</div>
			
			<div id="primary-content" class="col-lg-8 wow fadeInUp">
			<?php 		
				while(have_posts()){
				   the_post();
				   the_content();
			   }
			?>
			</div>
			
		</div>
	</div>
</section> 
<?php get_footer(); ?>