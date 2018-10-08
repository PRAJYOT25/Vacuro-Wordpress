<?php 
get_header();
/* Template Name: OM OSS */ ?>

<div class="color">	
	 <div class="main_container ">
		<div class="about_sec">
			<div class="container">
				<div class="row">
							<div class="col-sm-9">
								<?php the_field('header_text');?>
								<?php the_field('paragraph_text');?>
								<?php the_field('header_text2');?>
								<?php the_field('paragraph_text2');?>			
								<hr >
							</div>	
				<div class="col-sm-3">			
				</div>
				</div>
			</div>
		</div>	
	</div>
</div>
<?php get_footer(); ?>