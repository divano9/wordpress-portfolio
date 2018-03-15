<?php

/**
 * Portfolio Theme only works in WordPress 4.7 or later.
 */
if (version_compare($GLOBALS['wp_version'], '4.7-alpha', '<')) {
    require get_template_directory() . '/inc/back-compact.php';
    return;
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
 // koristiti za sve
function portfolio_setup() {


    /*
     * Make theme available for translation.
     * Translations can be filed at WordPress.org. See: https://translate.wordpress.org/projects/wp-themes/portfoliotheme
     * If you're building a theme based on Portfolio Theme, use a find and replace
     * to change 'portfolio' to the name of your theme in all the template files.
     */
    //load_theme_textdomain('portfolio', get_template_directory() . '/languages');

    /**
    * Load theme translations.
    *
    * @since  1.0.0
    * @return void
    */
   if (! function_exists('portfolio_load_textdomain')) {
       function writsy_load_textdomain() {
           load_theme_textdomain('portfolio', get_template_directory() . '/languages');
       }

       add_action('after_setup_theme', 'portfolio_load_textdomain');
   }


    /*
     * Let WordPress manage the document title.
     * By adding theme support, we declare that this theme does not use a
     * hard-coded <title> tag in the document head, and expect WordPress to
     * provide it for us.
     */
    add_theme_support('title-tag');

    /*
     * Enable support for Post Thumbnails on posts and pages.
     *
     * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
     */
    add_theme_support('post-thumbnails');

    add_image_size('portfolio-featured-image', 2000, 1200, true);

    add_image_size('portfolio-thumbnail-avatar', 100, 100, true);


    /*
     * Switch default core markup for search form, comment form, and comments
     * to output valid HTML5.
     */
    add_theme_support('html5', array(
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ));

    /*
     * Enable support for Post Formats.
     *
     * See: https://codex.wordpress.org/Post_Formats
     */
    add_theme_support('post-formats', array(
        'aside',
        'image',
        'video',
        'quote',
        'link',
        'gallery',
        'audio',
    ));

    // Add theme support for Custom Logo.
    add_theme_support('custom-logo', array(
        'width' => 250,
        'height' => 250,
        'flex-width' => true,
    ));

    // Add theme support for selective refresh for widgets.
    add_theme_support('customize-selective-refresh-widgets');

}

add_action('after_setup_theme', 'portfolio_setup');


/**
 * Replaces "[...]" (appended to automatically generated excerpts) with ... and
 * a 'Continue reading' link.
 *
 * @since Portfolio Theme 1.0
 *
 * @param string $link Link to single post/page.
 * @return string 'Continue reading' link prepended with an ellipsis.
 */
function portfolio_excerpt_more( $link ) {
	if ( is_admin() ) {
		return $link;
	}

	$link = sprintf( '<p class="link-more"><a href="%1$s" class="more-link">%2$s</a></p>',
		esc_url( get_permalink( get_the_ID() ) ),
		/* translators: %s: Name of current post */
		sprintf( __( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'portfolio' ), get_the_title( get_the_ID() ) )
	);
	return ' &hellip; ' . $link;
}
add_filter( 'excerpt_more', 'portfolio_excerpt_more' );

/**
 * Return text before more tag
 *
 * @since Portfolio Theme 1.0
 *
 * @param string $content - post content
 * @return string
 */
function portfolio_get_more_excerpt( $content ) {
	if ( is_admin() ) {
		return $link;
	}

        $p = preg_split( '/<!--more(.*?)?-->/', $content );
        return $p[0];
}
add_filter( 'excerpt_more', 'portfolio_get_more_excerpt' );


/**
 * Return text after more tag
 *
 * @since Portfolio Theme 1.0
 *
 * @param string $content - post content
 * @return string
 */
function portfolio_get_post_content( $content ) {
	if ( is_admin() ) {
		return $link;
	}

        $p = preg_split( '/<!--more(.*?)?-->/', $content );
        if(isset($p[1]))
            return do_shortcode( nl2br($p[1]) );
        else
            return do_shortcode( nl2br($content) );
}
add_filter( 'excerpt_more', 'portfolio_get_post_content' );

require get_parent_theme_file_path( '/inc/template-functions.php' );
