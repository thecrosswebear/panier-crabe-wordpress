<?php
	
	// Add RSS links to <head> section
	automatic_feed_links();
	
	// Load jQuery
	if ( !is_admin() ) {
	   wp_deregister_script('jquery');
	   wp_register_script('jquery', ("https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"), false);
	   wp_enqueue_script('jquery');
           wp_register_script('carl', get_bloginfo('template_directory')."/js/carl.js");
           wp_enqueue_script('carl');
	}
	
	// Clean up the <head>
	function removeHeadLinks() {
    	remove_action('wp_head', 'rsd_link');
    	remove_action('wp_head', 'wlwmanifest_link');
    }
    add_action('init', 'removeHeadLinks');
    remove_action('wp_head', 'wp_generator');
    
	// Declare sidebar widget zone
    if (function_exists('register_sidebar')) {
    	register_sidebar(array(
    		'name' => 'Sidebar Widgets',
    		'id'   => 'sidebar-widgets',
    		'description'   => 'These are widgets for the sidebar.',
    		'before_widget' => '<div id="%1$s" class="widget %2$s">',
    		'after_widget'  => '</div>',
    		'before_title'  => '<h2>',
    		'after_title'   => '</h2>'
    	));
    }
    
    
    function theme_add_bootstrap() 
    {
            wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/bootstrap/css/bootstrap.min.css' );
            wp_enqueue_style( 'style-css', get_template_directory_uri() . '/style.css' );
            wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/bootstrap/js/bootstrap.min.js', array(), '3.0.0', true );
             
             
    }

    add_action( 'wp_enqueue_scripts', 'theme_add_bootstrap' );
    
    if (function_exists('register_nav_menus'))
    {
        register_nav_menus(
                array('main_nav'=> 'Main Navigation Menu')

                );
    }
   
    
    
    
    /*  code ajouter pour avoir  boostrap 'active' a chaque menu item lorsque clicke */
    add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2); 
    
    function special_nav_class ($classes, $item) 
    {
        if( in_array('current-menu-item', $classes) )
        {
                $classes[] = 'active ';
        }
            return $classes;
    }
    
    if (function_exists('register_nav_menus'))
    {
        register_nav_menus(
                array('main_nav' => 'Main Navigation Menu'));
    }
?>