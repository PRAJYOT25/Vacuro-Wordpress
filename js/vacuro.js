 	<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
	<script type="text/javascript" src="js/slick.min.js"></script>
	<!-- Always placed after Jquery file -->
  <script type="text/javascript">
    $(document).ready(function(){
      $('.slides_img').slick({	  
	  infinite: true,
	  slidesToShow: 3,
	  slidesToScroll: 1,
	  prevArrow: '<a class="slick-prev" href="#" ><i class="fa fa-angle-left" aria-hidden="true"></i></a>',
	  nextArrow: '<a class="slick-next " href="#" ><i class="fa fa-angle-right" aria-hidden="true"></i></a>'		
      });
    });
  </script>