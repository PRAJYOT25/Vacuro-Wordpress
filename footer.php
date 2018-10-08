</div>
<?php wp_footer(); ?>
	<div class="footer">
		<div class="container">
			<div class="row"> 
				<div class="links col-sm-3"> 
					<?php //the_field('footer_col_heading');?>
					<ul class="pdf">
						<?php dynamic_sidebar( 'footer-widget-area-3' ); ?>
					</ul>
				</div>
				<div class="animation col-sm-3"> 
					<?php dynamic_sidebar( 'footer-widget-area-2' ); ?>
				</div>				
				<div class="col-sm-3">
				<div class="footer_form"> 
					<?php dynamic_sidebar( 'footer-widget-area-4' ); ?>
					<form>
						<div class="form-group">
							<input  class="foot-input"<?php the_field('footer_col3_text');?> placeholder="Navn"></input>
						</div>
						<div class="form-group">
							<input  <?php the_field('footer_col3_text2');?> placeholder="E-post"  class="foot-input" type="email"></input>
						</div>
						<div class="form-group">								
							<textarea <?php the_field('footer_col3_textarea');?> placeholder="Melding"  class="foot-text"></textarea>
						</div>
						<div class="form-group">
							<button type="reset" class="frm_form_submit_style reset-btn">Slett</button>
							<input class="foot-sub" value="Send" type="submit"></input>
						</div>
					</form>
					<?php// dynamic_sidebar( 'footer-widget-area-4' ); ?>
				</div>					
				</div>
				<div class="address col-sm-3"> 
					<?php dynamic_sidebar( 'footer-widget-area-1' ); ?>
				</div>
			</div>
		</div>
	</div>					
	<div class="footer_bottom">
		<div class="container">
			<div class="row"> 
				<div class="menu_sec col-sm-9">				
					<ul>
					<?php wp_nav_menu( array( 'theme_location' => 'footer-menu' ) ); ?>
					</ul>
				</div>
				<div class="copyright_sec col-sm-3">
						<div class="text-5" class="widget widget_text">	<!--id to class-->
							<div class="textwidget">
								<?php dynamic_sidebar( 'footer-widget-area-5' ); ?>
							</div>
						</div>
				</div>
			</div>	
		</div>		
		<div class="arrow_top" id="arr" style="display: block;">
			<a class="arr" href="#header">
				<i class="fa fa-chevron-up" aria-hidden="true"></i>
			</a>
		</div>
	</div>
</body>
<script>
 $(document).ready(function(){
    $("div.arrow_top").scrollTop(0);
});
</script>
</html>