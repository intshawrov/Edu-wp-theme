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
      )

}
