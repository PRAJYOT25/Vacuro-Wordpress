<?php 
get_header();
/* Template Name: PRODUKTER */ ?>
	<div class="color">	
	<div class="main-container">
		<div class="produkter-wrapper">
			<div class="container">
				<div class="row">
					<div class="col-sm-4 portfolio">
						<div class="img-wrap" style="background-image:url(http://vacuro.com/wp-content/uploads/2016/07/Faresedler.jpg)">
						<div class="hoverlay" style="display:block;left:0px;top:-100%;transition:all 300ms ease 0s;"></div>
						</div>
						<h4><a href="#" target="_blank"><?php the_field('heading_left');?></a>
						</h4>
						<?php the_field('paragraph_left');?>					
				</div>
				<div class="col-sm-4 portfolio">
					<div class="img-wrap" style="background-image:url(http://vacuro.com/wp-content/uploads/2016/07/Transportdokumenter.jpg)">
					<div class="hoverlay" style="display:block;left:-100%;top:0px;transition:all 300ms ease 0s;"></div>
						</div>
						<h4><a href="#" target="_blank"><?php the_field('heading_center');?></a></h4>	
				<?php the_field('paragraph_center');?>
				</div>
				<div class="col-sm-4 portfolio">
					<div class="img-wrap" style="background-image:url(http://vacuro.com/wp-content/uploads/2016/07/limfrie.jpg)">
					<div class="hoverlay" style="display:block; left: 0px; top: -100%; transition:all 300ms ease 0s;"></div>
						</div>						
					<h4><a href="#" target="_blank"><?php the_field('heading_right');?></a></h4>					
					<?php the_field('paragraph_right');?>
			</div>
		</div>
	</div>
</div>	
</div>
</div>
	
<?php get_footer(); ?>