<?php
/**
 * nokap_ourtown_remake functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package nokap_ourtown_remake
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'nokap_ourtown_remake_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function nokap_ourtown_remake_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on nokap_ourtown_remake, use a find and replace
		 * to change 'nokap-ourtown-remake' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'nokap-ourtown-remake', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Primary', 'nokap-ourtown-remake' ),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'nokap_ourtown_remake_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		// add_theme_support(
		// 	'custom-logo',
		// 	array(
		// 		'height'      => 250,
		// 		'width'       => 250,
		// 		'flex-width'  => true,
		// 		'flex-height' => true,
		// 	)
		// );
	}
endif;
add_action( 'after_setup_theme', 'nokap_ourtown_remake_setup' );

function theme_prefix_setup() {
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}

add_action ('after_setup_theme', 'theme_prefix_setup');

function theme_prefix_the_custom_logo() {
	
	if ( function_exists( 'the_custom_logo' ) ) {
		the_custom_logo();
	}

}

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function nokap_ourtown_remake_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'nokap_ourtown_remake_content_width', 640 );
}
add_action( 'after_setup_theme', 'nokap_ourtown_remake_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function nokap_ourtown_remake_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'nokap-ourtown-remake' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'nokap-ourtown-remake' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

	register_sidebar(
		array(
			'name'          => esc_html__( 'Single-Page Sidebar', 'nokap-ourtown-remake' ),
			'id'            => 'sidebar-single',
			'description'   => esc_html__( 'Add widgets here.', 'nokap-ourtown-remake' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'nokap_ourtown_remake_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function nokap_ourtown_remake_scripts() {
	wp_enqueue_style('bootstrap_stylesheet', get_theme_file_uri('/css/bootstrap.min.css'));
    wp_enqueue_style('main_stylesheet', get_theme_file_uri('/style.css'));
    wp_enqueue_script('bootstrap_javascript' , get_theme_file_uri('/js/bootstrap.min.js'));
	
	// wp_enqueue_style( 'nokap-ourtown-remake-style', get_stylesheet_uri(), array(), _S_VERSION );
	// wp_style_add_data( 'nokap-ourtown-remake-style', 'rtl', 'replace' );

	// wp_enqueue_script( 'nokap-ourtown-remake-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	// if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
	// 	wp_enqueue_script( 'comment-reply' );
	
}
add_action( 'wp_enqueue_scripts', 'nokap_ourtown_remake_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}







/*@ Get Related Posts */
if ( ! function_exists( 'tf_get_related_posts' ) ) {
 
    function tf_get_related_posts() {
         
        ob_start();
 
        $id = get_the_ID();  
 
        /*@ Get current post's categories */
        $categories = get_the_category($id); // Disabled this if you want tag wise posts 
 
        /*@ Get current post's Tags */
        // $categories = wp_get_post_tags($id); // Enable this for tags wise related posts
 
 
        if (!empty($categories)) :
 
            /*@ Pluck all categories Ids */
            $categories_ids = array_column( $categories, 'term_id' );
 
            $related_args = [
                'post_status'         => 'publish',
                'category__in'        => $categories_ids, // Disabled this if you want tag wise posts
                //'tag__in'        => $categories_ids, // Enable this for tag wise related posts
                'post__not_in'        => [ $id ], // Exclude Current Post
                'posts_per_page'      => 5, // Number of related posts to show
                'ignore_sticky_posts' => 1
            ];
 
            $get_posts = new WP_Query( $related_args );
			
            if ( $get_posts->have_posts() ) :

				echo '<div class="position-relative mb-4">
							<p class="widget-title">RELATED ARTICLES</p>
							<div class="single-sidebar-line"></div>
						</div>';
                echo '<ul class="related_posts_list">';
 
                while ( $get_posts->have_posts() ) : $get_posts->the_post();
				$category = get_the_category();
 
					echo '<li class="sidebar-list-item">
							<a class="sidebar-a" href="'.get_the_permalink().'">';
						echo '<div class="gallery-item mb-3">
								<div class="size-thumbnail">'; 
								echo the_post_thumbnail('full', array ('class' => 'size-thumbnail')) . '</div>
									<div>
										<p class="sidebar-category-text mb-0">' . $category[0]->name . '</p>
										<p class="related-list-item mb-0">' . get_the_title() . '</p>
									</div>
								</div>
							</a>
						</li>';
                endwhile;
				
                echo '</ul>';
 
            endif;
           
        endif; 
 
        return ob_get_clean(); 
 
    }
    add_shortcode('tf_related_posts', 'tf_get_related_posts');
}

