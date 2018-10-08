<?php
/*
  =============================================================
  Index
  =============================================================

  1.0 - Theme Support

  2.0 - Enqueue Scripts and Styles

  3.0 - Register Menus

  4.0 - Register Widgets Areas

  5.0 - WP_Customize Fields

  -------------------------------------------------------------
  Index Ends
  -------------------------------------------------------------
 */
/*
  =============================================================
  1.0 - Theme Support
  =============================================================
 */
add_action('after_setup_theme', 'theme_setup');

function theme_setup() {
    add_theme_support('html5', array('comment-list', 'comment-form', 'search-form', 'gallery', 'caption'));
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
    add_theme_support('custom-header');
    add_image_size('thumb-300x200', 300, 200, true);
}

/*
  -------------------------------------------------------------
  Theme Support Ends
  -------------------------------------------------------------
 */


/*
  =============================================================
  2.0 - Enqueue Scripts and Styles
  =============================================================
 */

function theme_enqueue_scripts() {

    wp_enqueue_style('bootstrap-css', get_template_directory_uri() . '/css/bootstrap.min.css');

    wp_enqueue_style('font-awesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css');
    
    wp_enqueue_style('theme-style', get_template_directory_uri() . '/css/vacuro.css', '', '1.0.0');
	
	wp_enqueue_style('slick-awesome', '//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css');

    wp_enqueue_style('theme-root-style', get_stylesheet_uri());

    wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '1.0.0', true);

	wp_register_script("theme-script", get_template_directory_uri() . '/js/theme-script.js', array('jquery'), '1.0.0');
	
	wp_enqueue_script('slick-js', '//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js');

    wp_localize_script('theme-script', 'myAjax', array('ajaxurl' => admin_url('admin-ajax.php')));

    wp_enqueue_script('theme-script');
}

add_action('wp_enqueue_scripts', 'theme_enqueue_scripts');
/*
  -------------------------------------------------------------
  Enqueue Scripts and Styles Ends
  -------------------------------------------------------------
 */

/*
  =============================================================
  3.0 - Register Menus
  =============================================================
 */

function register_menus() {
    register_nav_menus(
		array(
			'main-menu' => __('Main Menu'),
			'footer-menu' => ( 'footer Menu')
		)
    );
}
add_action('init', 'register_menus');

/*
  -------------------------------------------------------------
  Register Menus Ends
  -------------------------------------------------------------
 */

/*
  =============================================================
  4.0 - Register Widget Areas
  =============================================================
 */
function custom_widgets() {
    register_sidebar(array(
        'id' => 'footer-widget-area-1',
        'name' => 'Footer Widget Area 1',
        'description' => 'The widget area in the footer. ***For shortcodes, images, maps etc. you MUST set the appropriate width.***',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
        'before_title' => '<h4 class="widget-title">',
        'after_title' => '</h4>',
    ));

    register_sidebar(array(
        'id' => 'footer-widget-area-2',
        'name' => 'Footer Widget Area 2',
        'description' => 'The widget area in the footer. ***For shortcodes, images, maps etc. you MUST set the appropriate width.***',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
        'before_title' => '<h4 class="widget-title">',
        'after_title' => '</h4>',
    ));
	
	register_sidebar(array(
        'id' => 'footer-widget-area-3',
        'name' => 'Footer Widget Area 3',
        'description' => 'The widget area in the footer. ***For shortcodes, images, maps etc. you MUST set the appropriate width.***',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
        'before_title' => '<h4 class="widget-title">',
        'after_title' => '</h4>',
    ));
	
		register_sidebar(array(
        'id' => 'footer-widget-area-4',
        'name' => 'Footer Widget Area 4',
        'description' => 'The widget area in the footer. ***For shortcodes, images, maps etc. you MUST set the appropriate width.***',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
        'before_title' => '<h4 class="widget-title">',
        'after_title' => '</h4>',
    ));
			register_sidebar(array(
        'id' => 'footer-widget-area-5',
        'name' => 'Footer Widget Area 5',
        'description' => 'The widget area in the footer. ***For shortcodes, images, maps etc. you MUST set the appropriate width.***',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
        'before_title' => '<h4 class="widget-title">',
        'after_title' => '</h4>',
    ));
		
		register_sidebar(array(
        'id' => 'header-widget-area-1',
        'name' => 'Header Widget Area 1',
        'description' => 'The widget area in the header. ***For shortcodes, images, maps etc. you MUST set the appropriate width.***',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));
		register_sidebar(array(
        'id' => 'header-widget-area-2',
        'name' => 'Header Widget Area 2',
        'description' => 'The widget area in the header. ***For shortcodes, images, maps etc. you MUST set the appropriate width.***',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));
	/*register_sidebar(array(
        'id' => 'sidebar-widget-1',
        'name' => 'Sidebar widget 1',
        'description' => 'The widget area in the footer. ***For shortcodes, images, maps etc. you MUST set the appropriate width.***',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));
	
	register_sidebar(array(
        'id' => 'header-widget-1',
        'name' => 'header widget left',
        'description' => 'The widget area in the footer. ***For shortcodes, images, maps etc. you MUST set the appropriate width.***',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));*/
}

add_action('widgets_init', 'custom_widgets');


/*
  -------------------------------------------------------------
  Register Widget Areas Ends
  -------------------------------------------------------------
 */
/*
  =============================================================
  5.0 - WP_Customize Fields

  => Site Logo
  =============================================================
 */

add_action("customize_register", "security_customize_register");

function security_customize_register($wp_customize) {
    /* Logo */
    $wp_customize->add_section("site_logo_box", array(
        "title" => __("Site Logo", "theme_name"),
        "priority" => 100,
    ));
    $wp_customize->add_setting("site_logo", array(
        "default" => "",
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control(
            $wp_customize, "site_logo", array(
        'label' => __('Site Logo', 'theme_name'),
        'section' => 'site_logo_box',
        'settings' => 'site_logo'
            )
    ));
	
	 $wp_customize->add_setting("footer_logo", array(
        "default" => "",
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control(
            $wp_customize, "footer_logo", array(
        'label' => __('Footer Logo', 'theme_name'),
        'section' => 'site_logo_box',
        'settings' => 'footer_logo'
            )
    ));
    /* Logo Ends */  
}
/*
  -------------------------------------------------------------
  WP_Customize Fields Ends
  -------------------------------------------------------------
 */
 show_admin_bar( false );
 function my_acf_google_map_api( $api ){	
	$api['key'] = 'AIzaSyDUkqE0xa37wOSJFvHXgsgce6_V2qXCbwU';	
	return $api;	
}
add_filter('acf/fields/google_map/api', 'my_acf_google_map_api');


/*add_action('wp_ajax_nopriv_more_post_ajax', 'more_post_ajax');
add_action('wp_ajax_more_post_ajax', 'more_post_ajax');

function more_post_ajax(){
   $ppp = (isset($_POST["ppp"])) ? $_POST["ppp"] : 4;
   $page = (isset($_POST['pageNumber'])) ? $_POST['pageNumber'] : 1;
   $post_type = (isset($_POST['post_type'])) ? $_POST['post_type'] : 'post';
   $postsPerPage = 4;
   $args = array(
           'post_type' => $post_type,
           'paged' => $page,
           'posts_per_page' => $postsPerPage,
           'post_status' => 'publish',
       );
   $loop = new WP_Query($args);
   ob_start();
   while ( $loop->have_posts() ) : $loop->the_post();?>
       
   <div class="single_wrap" id="ajax-posts">
       <div class="col-sm-12">
           <div class="post-img" style="background-image:url('<?php echo get_the_post_thumbnail_url(); ?>')">
               &nbsp;
           </div>
           <div class="post-title">
               <h4><?php the_title();?></h4>
           </div>
       </div>
   </div>    
       
   <?php endwhile;
   $html = ob_get_clean();
   $last = false;
  if ($loop->max_num_pages <= $page) {
      $last = true;
  }
  echo json_encode(array('last' => $last, 'html' => $html));
   die(0);
}*/