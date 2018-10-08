<?php 
get_header();
/* Template Name: Referenser */ ?>
	<div class="referanser_wrapper">
		<div class="banner_wrapper">			
			<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
				<ol class="carousel-indicators">
					<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
					<li data-target="#myCarousel" data-slide-to="1"></li>
					<li data-target="#myCarousel" data-slide-to="2"></li>
					<li data-target="#myCarousel" data-slide-to="3"></li>
				</ol>
    <!-- Wrapper for slides -->
				<div class="carousel-inner">
					<div class="item active">
						<div class="img" style="background-image:url(http://vacuro.com/wp-content/uploads/2016/07/header_bg.jpg)"></div>
						<div class="caption"><?php the_field('heading');?></div>
					</div>
					<div class="item">
						<div class="img" style="background-image:url(http://vacuro.com/wp-content/uploads/2016/07/header_bg.jpg)"></div>
						<div class="caption"><?php the_field('heading2');?></div>
					</div>    
					<div class="item">
						<div class="img" style="background-image:url(http://vacuro.com/wp-content/uploads/2016/07/header_bg.jpg)"></div>
						<div class="caption"><?php the_field('heading3');?></div>
					</div>				
					<div class="item">
						<div class="img" style="background-image:url(http://vacuro.com/wp-content/uploads/2016/07/header_bg.jpg)"></div>
						<div class="caption"><?php the_field('heading4');?></div>
					</div>				
				</div>
    <!-- Left and right controls -->
				<a class="left carousel-control" href="#myCarousel" data-slide="prev" role="button">
					<i class="fa fa-caret-left" aria-hidden="true"></i>
				</a>
				<a class="right carousel-control" href="#myCarousel" data-slide="next" role="button">
					<i class="fa fa-caret-right" aria-hidden="true"></i>
				</a>
				</div>		
		</div>	
		 <div class="slider_section">
		<div class="main-content">
			<div class="container ">
			<div class="slider-block">
				<hr>
				<div class="row car-row">
					<div class="col-md-3 ref_section">
						<?php the_field('main_heding');?>
						<?php the_field('paragraph');?>
					</div>					
					<div class="col-md-9"> 
						<div class="slides_img">
							<div class="main_wrap">
								<div class="slide_wrap clearfix">
												<div class="hoverlay">
													<?php the_field('content_wrapper');?>
													<p></p>
													</div>													
												<div class="sildes_images">
													<img src="<?php the_field('slide_image');?>"/>								
												</div>	
								</div>
							</div>
							<div class="main_wrap">
								<div class="slide_wrap clearfix">
												<div class="hoverlay">
													<?php the_field('content_wrapper');?>
													<p></p>
												</div>													
												<div class="sildes_images">
													<img src="<?php the_field('slide_image2');?>"/>								
												</div>	
								</div>
							</div>
							<div class="main_wrap">
								<div class="slide_wrap clearfix">
												<div class="hoverlay">
													<?php the_field('content_wrapper');?>
													<p></p>
												</div>													
												<div class="sildes_images">
													<img src="<?php the_field('slide_image_3');?>"/>								
												</div>	
								</div>
							</div>
							<div class="main_wrap">
								<div class="slide_wrap clearfix">
												<div class="hoverlay">
													<?php the_field('content_wrapper');?>
													<p></p>
												</div>													
												<div class="sildes_images">
													<img src="<?php the_field('slide_image_4');?>"/>								
												</div>	
								</div>
							</div>
							<div class="main_wrap">
								<div class="slide_wrap clearfix">
												<div class="hoverlay">
													<?php the_field('content_wrapper');?>
													<p></p>
												</div>													
												<div class="sildes_images">
													<img src="<?php the_field('slide_image_5');?>"/>								
												</div>	
								</div>
							</div>																
						</div>
					</div>
				</div>
				</div>
			</div>
		</div>
	</div>	
	</div>

	  <script type="text/javascript">
    jQuery(document).ready(function($){
      $('.slides_img').slick({	  
	  infinite: true,
	  slidesToShow: 3,
	  slidesToScroll: 1,
	  prevArrow: '<a class="slick-prev" href="#" ><i class="fa fa-angle-left" aria-hidden="true"></i></a>',
	  nextArrow: '<a class="slick-next " href="#" ><i class="fa fa-angle-right" aria-hidden="true"></i></a>'		
      });
    });
  </script>

<?php get_footer(); ?>