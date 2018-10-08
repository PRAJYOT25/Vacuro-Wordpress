<?php 
get_header();
/* Template Name: Kontakt */ ?>
<div class="main_container">
<div class="kontakt_wrapper">
			<div id="map" >	
				
				<?php //the_field('map');?>
			</div>	
			
<script>
  function myMap() {
  var mapOptions = {
    center: new google.maps.LatLng(59.933913, 10.879343500000004),
    zoom: 10,
    mapTypeId: google.maps.MapTypeId.ROADMAP
}
var map = new google.maps.Map(document.getElementById("map"), mapOptions);
}
</script> 
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDUkqE0xa37wOSJFvHXgsgce6_V2qXCbwU&callback=myMap"></script>
			
			<div class="contact_info_section">
				<div class="container">
					<div class="row">
						<div class="col-sm-9">			
							<div class="para_text">
								<?php the_field('heading');?>
								<?php the_field('paragraph');?>
								<hr>
							</div>			
							<div class="contact_form">
								<form>
									<div class="form-group">
										<?php the_field('label');?><br>
										<input <?php the_field('text_field');?> placeholder="Navn" class="con-input" ></input>
									</div>
									<div class="form-group">
										<?php the_field('label2');?><br>
										<input <?php the_field('text_field_2');?> placeholder="E-post"  class="con-input" ></input>
									</div>
									<div class="form-group">
										<?php the_field('label3');?><br>
										<textarea <?php the_field('textarea');?> rows="7" placeholder="Melding"  class="con-text"></textarea>
									</div>
									<div class="form-group">
										<button type="reset" class="frm_form_submit_style con-reset">Slett</button>
										<input class="con-sub" value="Send" type="submit"></input>
									</div>
								</form>
							</div>							
						</div>						
						<div class="col-sm-3">
							<div class="address_section">
								<?php the_field('address_heading');?>
								<?php the_field('address');?>
								<ul></ul>
							</div>
						</div>						
					</div>
				</div>			
			</div>			
		</div>
	</div>
	</div>
</div>	
<!--<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY"></script>
<script type="text/javascript">
(function($) {
function new_map( $el ) {
	var $markers = $el.find('.marker');
	var args = {
		zoom		: 16,
		center		: new google.maps.LatLng(0, 0),
		mapTypeId	: google.maps.MapTypeId.ROADMAP
	};    	
	var map = new google.maps.Map( $el[0], args);
	map.markers = [];
	$markers.each(function(){
		
    	add_marker( $(this), map );		
	});
	center_map( map );
	return map;
	
}
function add_marker( $marker, map ) {

	// var
	var latlng = new google.maps.LatLng( $marker.attr('data-lat'), $marker.attr('data-lng') );

	// create marker
	var marker = new google.maps.Marker({
		position	: latlng,
		map			: map
	});

	// add to array
	map.markers.push( marker );

	// if marker contains HTML, add it to an infoWindow
	if( $marker.html() )
	{
		// create info window
		var infowindow = new google.maps.InfoWindow({
			content		: $marker.html()
		});

		// show info window when marker is clicked
		google.maps.event.addListener(marker, 'click', function() {

			infowindow.open( map, marker );

		});
	}

}

/*
*  center_map
*
*  This function will center the map, showing all markers attached to this map
*
*  @type	function
*  @date	8/11/2013
*  @since	4.3.0
*
*  @param	map (Google Map object)
*  @return	n/a
*/

function center_map( map ) {

	// vars
	var bounds = new google.maps.LatLngBounds();

	// loop through all markers and create bounds
	$.each( map.markers, function( i, marker ){

		var latlng = new google.maps.LatLng( marker.position.lat(), marker.position.lng() );

		bounds.extend( latlng );

	});
	if( map.markers.length == 1 )
	{
		// set center of map
	    map.setCenter( bounds.getCenter() );
	    map.setZoom( 16 );
	}
	else
	{
		// fit to bounds
		map.fitBounds( bounds );
	}
}
var map = null;

$(document).ready(function(){
	$('.acf-map').each(function(){
		map = new_map( $(this) );

	});

});

})(jQuery);
</script>-->

	
<?php get_footer(); ?>