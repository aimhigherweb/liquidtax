<?php
    require_once(__DIR__ . '/functions/acf.php');
    require_once(__DIR__ . '/functions/wordpress.php');
    require_once(__DIR__ . '/functions/gutenberg.php');
    require_once(__DIR__ . '/functions/blocks.php');

    // Main Nav
    register_nav_menus(array (
        'main_menu' => 'Main Menu',
        'footer_menu' => 'Footer Menu',
        'social_menu' => 'Social Menu'
    ));

    //Add Social Icons to Nav Menu
    add_filter('wp_nav_menu_objects', 'social_menu_icons', 10, 2);

    function social_menu_icons($items, $args) {
        if($args->theme_location == 'social_menu') {
            global $wp_filesystem;
            
            foreach($items as &$item) {
                $icon = $wp_filesystem->get_contents(get_field('icon', $item));

                if($icon) {
                    $item->title = $icon . '<span class="sr-only">' . $item->title . '</span>';
                }
            }

            return $items;
        }
        else {
            return $items;
        }
    }

    // Support Featured Images
    add_theme_support( 'post-thumbnails' );

    // Custom Image Sizes
    add_image_size( 'block_image', 650, 650, array( 'center', 'center' ) );
    add_image_size( 'block_image_small', 300, 300, array( 'center', 'center' ) );
    add_image_size( 'logos', 300, 300, false );

    // Add Options Page
    if( function_exists('acf_add_options_page') ) {
	
        acf_add_options_page(array(
            'page_title' 	=> 'Business Details',
            'menu_title'	=> 'Business Details',
            'menu_slug' 	=> 'business-details',
            'capability'	=> 'edit_posts',
            'redirect'		=> false
        ));
        
    }
    
?>