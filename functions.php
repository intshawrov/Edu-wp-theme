<?php 


add_action( 'wp_enqueue_scripts', 'mentor_theme_files' );

function mentor_theme_files(){

      //CSS Load

      wp_enqueue_style( 'bootstrap', get_template_directory_uri().'/assets/vendor/bootstrap/css/bootstrap.min.css', array(), '1.0.0', 'all' );
      wp_enqueue_style( 'bootstrap-icons', get_template_directory_uri().'/assets/vendor/bootstrap-icons/bootstrap-icons.css', array(), '1.0.0', 'all' );
      wp_enqueue_style( 'aos', get_template_directory_uri().'/assets/vendor/aos/aos.css" rel="stylesheet', array(), '1.0.0', 'all' );
      wp_enqueue_style( 'glightbox', get_template_directory_uri().'/assets/vendor/glightbox/css/glightbox.min.css', array(), '1.0.0', 'all' );
      wp_enqueue_style( 'swiper-bundle', get_template_directory_uri().'/assets/vendor/swiper/swiper-bundle.min.css', array(), '1.0.0', 'all' );
      wp_enqueue_style( 'main', get_template_directory_uri().'/assets/css/main.css', array(), '1.0.0', 'all' );
      wp_enqueue_style( 'style' , get_stylesheet_uri(), array(), '1.0.0', 'all' );


      // JS Load

      wp_enqueue_script( 'bootstrap', get_template_directory_uri().'/assets/vendor/bootstrap/js/bootstrap.bundle.min.js', array(), '1.0.0', true );
      wp_enqueue_script( 'vendor', get_template_directory_uri().'/assets/vendor/php-email-form/validate.js', array(), '1.0.0', true );
      wp_enqueue_script( 'aos', get_template_directory_uri().'/assets/vendor/aos/aos.js', array(), '1.0.0', true );
      wp_enqueue_script( 'glightbox', get_template_directory_uri().'/assets/vendor/glightbox/js/glightbox.min.js', array(), '1.0.0', true );
      wp_enqueue_script( 'purecounter', get_template_directory_uri().'/assets/vendor/purecounter/purecounter_vanilla.js', array(), '1.0.0', true );
      wp_enqueue_script( 'swiper', get_template_directory_uri().'/assets/vendor/swiper/swiper-bundle.min.js', array(), '1.0.0', true );
      wp_enqueue_script( 'main', get_template_directory_uri().'/assets/js/main.js', array(), '1.0.0', true );
}

add_action( 'after_setup_theme', 'mentor_theme_setup' );

function mentor_theme_setup(){

      // Load Theme Text Domain
      load_theme_textdomain( 'mentor', get_template_directory() . '/languages' );


      // Adding Support for Automatic Title tag
      add_theme_support( 'title-tag' );

      //Enable Support for Post Thumbnails
      add_theme_support( 'post-thumbnails' );


      // Menu Register
  	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'mentor' ),
		)
	);

      add_theme_support(
        'html5',
        array(
          'search-form',
          'comment-form',
          'comment-list',
          'gallery',
          'caption',
        )
      );

      // Custom logo support
      add_theme_support(
            'custom-logo',
            array(
                  'height' => 250,
                  'width' => 250,
                  'flex-width' => true,
                  'flex-height' => true,
            )
            );

}

// Register Custom Post Type
function education_theme_custom_post() {
    register_post_type(
        'Slide',
        array(
            'labels' => array(
                'name'          => esc_html__( 'Slides', 'mentor' ),
                'singular_name' => esc_html__( 'Slide', 'mentor' ),
            ),
            'public'      => true,
            'has_archive' => true,
            'supports'    => array( 'title', 'editor','custom-fields',  'thumbnail' , 'page-attributes'),
        )
    );
    register_post_type(
        'Field',
        array(
            'labels' => array(
                'name'          => esc_html__( 'Fields', 'mentor' ),
                'singular_name' => esc_html__( 'Field', 'mentor' ),
            ),
            'public'      => true,
            'has_archive' => true,
            'supports'    => array( 'title', 'editor','custom-fields',  'thumbnail' , 'page-attributes'),
        )
    );
}

add_action( 'init', 'education_theme_custom_post' );


// Register Widget Area

function mentor_widgets_init() {
      register_sidebar(
            array(
                  'name'          => esc_html__( 'Footer One', 'mentor' ),
                  'id'            => 'footer-1',
                  'description'   => esc_html__( 'Add footer one widgets here.', 'mentor' ),
                  'before_widget' => '<div id="%1$s" class="footer-widget %2$s">',
                  'after_widget'  => '</div>',
                  'before_title'  => '<h4 class="widget-title">',
                  'after_title'   => '</h4>',
            )
            );

            register_sidebar(
            array(
                  'name'          => esc_html__( 'Footer Two', 'mentor' ),
                  'id'            => 'footer-2',
                  'description'   => esc_html__( 'Add footer two widgets here.', 'mentor' ),
                  'before_widget' => '<div id="%1$s" class="footer-widget %2$s">',
                  'after_widget'  => '</div>',
                  'before_title'  => '<h4 class="widget-title">',
                  'after_title'   => '</h4>',
            )
            );

            register_sidebar(
            array(
                  'name'          => esc_html__( 'Footer Three', 'mentor' ),
                  'id'            => 'footer-3',
                  'description'   => esc_html__( 'Add footer three widgets here.', 'mentor' ),
                  'before_widget' => '<div id="%1$s" class="footer-widget %2$s">',
                  'after_widget'  => '</div>',
                  'before_title'  => '<h4 class="widget-title">',
                  'after_title'   => '</h4>',
            )
            );

            register_sidebar(
            array(
                  'name'          => esc_html__( 'Footer Four', 'mentor' ),
                  'id'            => 'footer-4',
                  'description'   => esc_html__( 'Add footer four widgets here.', 'mentor' ),
                  'before_widget' => '<div id="%1$s" class="footer-widget %2$s">',
                  'after_widget'  => '</div>',
                  'before_title'  => '<h4 class="widget-title">',
                  'after_title'   => '</h4>',
            )
            );
}

add_action( 'widgets_init', 'mentor_widgets_init' );


add_action('admin_menu', 'orchid_add_site_stats_menu');
function orchid_add_site_stats_menu() {
  add_menu_page(
    'Counters',
    'Counters',
    'manage_options',
    'site-stats',
    'orchid_site_stats_page_html',
    'dashicons-chart-bar',
    60
  );
}

function orchid_site_stats_page_html() {
  if (!current_user_can('manage_options')) {
    echo '<div class="wrap"><h1>No permission</h1></div>';
    return;
  }

  // Save
  if (isset($_POST['site_stats_save'])) {
    check_admin_referer('site_stats_nonce_action', 'site_stats_nonce');

    update_option('site_students', intval($_POST['students'] ?? 0));
    update_option('site_courses',  intval($_POST['courses'] ?? 0));
    update_option('site_events',   intval($_POST['events'] ?? 0));
    update_option('site_trainers', intval($_POST['trainers'] ?? 0));

    echo '<div class="notice notice-success is-dismissible"><p>Stats saved!</p></div>';
  }

  $students = get_option('site_students', 0);
  $courses  = get_option('site_courses', 0);
  $events   = get_option('site_events', 0);
  $trainers = get_option('site_trainers', 0);

  echo '<div class="wrap">';
  echo '<h1>Site Stats</h1>';
  echo '<form method="post">';
  wp_nonce_field('site_stats_nonce_action', 'site_stats_nonce');

  echo '<table class="form-table">';
  echo '<tr><th>Students</th><td><input type="number" name="students" value="'.esc_attr($students).'"></td></tr>';
  echo '<tr><th>Courses</th><td><input type="number" name="courses" value="'.esc_attr($courses).'"></td></tr>';
  echo '<tr><th>Events</th><td><input type="number" name="events" value="'.esc_attr($events).'"></td></tr>';
  echo '<tr><th>Trainers</th><td><input type="number" name="trainers" value="'.esc_attr($trainers).'"></td></tr>';
  echo '</table>';

  echo '<p><button class="button button-primary" type="submit" name="site_stats_save">Save</button></p>';
  echo '</form>';
  echo '</div>';
}


