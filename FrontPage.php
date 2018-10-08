<?php 
get_header();
/* Template Name: MainPage */ ?>
<!--<div class="post-wrapper">
   <div class="container">
       <div class="row" id="ajax-posts">
       <?php
          // $args = array('post_type' => 'post','posts_per_page' => 4);
           //$loop = new WP_Query( $args );
           //while ( $loop->have_posts() ) : $loop->the_post();                                                    
       ?>
           <div class="single_wrap" >
               <div class="col-sm-12">
                   <div class="post-img" style="background-image:url('<?//php echo get_the_post_thumbnail_url(); ?>')">
                       &nbsp;
                   </div>
                   <div class="post-title">
                       <h4><?//php the_title();?></h4>
                   </div>
               </div>
           </div>
       <?php //endwhile;?>
       </div>
   </div>
   
   <div class="container">
       <div class="center">
           <div id="more_posts" data-post_type = "post">
               More posts
           </div>
       </div>
   </div>
</div>-->
<!--<script>

jQuery(document).on('click', '#more_posts', function () {
   load_posts();
});


var ppp = 4; 
var pageNumber = 1;

function load_posts(){
   pageNumber++;
   post_type = jQuery('#more_posts').data('post_type');
   jQuery.ajax({
       type: "post",
       dataType: "json",
       url: myAjax.ajaxurl,
       data: {action: "more_post_ajax", ppp: ppp, pageNumber: pageNumber, post_type: post_type},
       success: function (response) {
           jQuery("#ajax-posts").append(response.html);
           if(response.last == true){
               jQuery('.center').hide();
               jQuery('.center').addClass("done");
           }
           else{
               Waypoint.refreshAll();    
           }
       }
   });
   return false;
}
</script>-->
<div class="banner_img">
<img src="<?php the_field('featured_image');?>" class="img-responsive" >
</div>
<div class="shipping_content">
		<div class="container">		
				<div class="row main_content">
					<div class="leftimg col-sm-2">
						<img class="img-responsive" src="<?php the_field('left_image');?>">
					</div>
					<div class="mid_text col-sm-8 text-center"> 
						<?php the_field('middle_content');?>
						<?php the_field('middle_content_text');?>
					</div>
					<div class="rightimg col-sm-2"> 
						<img class="img-responsive" src="<?php the_field('right_image');?>" >
					</div>
				</div>		
				<div class="row body_content">
					<div class="col-sm-6">
					<?php the_field('left_side_heading');?>
					<?php the_field('left_side_contemt');?>	
						<?php the_field('left_side_list_heading');?>	
						<ul class="list">
							<li>Tidsbesparelse</li>
							<li>Kostnadsbesparelse</li>
							<li>Sikrere merking</li>
							<li>Miljøgevinst</li>
						</ul>
					</div>
					<div class="col-sm-6"> 
						<?php the_field('right_side_heading');?>
						<?php the_field('right_side_content');?>
					</div>
				</div>
				<hr>
		</div>
	</div>	

<?php get_footer(); ?>