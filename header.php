<!doctype html>
<html>

	<title><?php wp_title(); ?></title>
	
	<meta name="author" content="<?php the_author_meta( 'display_name', 1 ); ?>">
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><![endif]-->
	
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<link rel="apple-touch-icon" href="<?php echo get_stylesheet_directory_uri(); ?>/images/apple-touch-icon.png" />
	<link rel="icon" type="image/png" href="<?php echo get_stylesheet_directory_uri(); ?>/images/favicon.png" />
	
	<?php
	// CSS
	wp_enqueue_style( 'normalize', get_stylesheet_directory_uri() . '/css/normalize.css' );
    // ADD your css here
        
	wp_enqueue_style( 'style', get_stylesheet_directory_uri() . '/style.css' );
	
    // JAVASCRIPT
	// Use jquery and jquery core from the google cdn instead of wordpress included
	wp_deregister_script( 'jquery' );
	wp_enqueue_script( 'jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js', array(), '1.8.3' );
	
	// Modernizr for html5 and CSS3 support
	wp_enqueue_script( 'modernizr', get_stylesheet_directory_uri() . '/js/modernizr.js' , array(), '2.6.2', true);
	
    // ADD your js here
        
	// Default js of your theme to add your own js scripts
	wp_enqueue_script( 'scripts', get_stylesheet_directory_uri() . '/js/scripts.js' , array( 'jquery' ), '1.0', true);

        wp_head();
	?>
</head>
<body <?php echo body_class(); ?>>


    <!-- This is the menu -->
    <header class="menu-bar">
        <ul class="menu-center">
            <?php wp_list_pages('sort_column=page_title&title_li='); ?>
        </ul>
	</header>


    <!-- Page starts here -->
	<section class="page-center">