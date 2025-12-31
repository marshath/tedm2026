<?php 

// update_option('siteurl','http://localhost:8888/tedm.net/wood33/');
// update_option('home','http://localhost:8888/tedm.net/');

function remove_comments_rss( $for_comments ) {
    return;
}
add_filter('post_comments_feed_link','remove_comments_rss');
add_theme_support( 'post-thumbnails' );

add_filter('pre_get_posts', 'query_post_type'); // display taged projects in index file
function query_post_type($query) {
	if(is_category() || is_tag()) {
		$post_type = get_query_var('post_type');
		if($post_type)
		$post_type = $post_type;
		else
		$post_type = array('post','project','nav_menu_item');
		$query->set('post_type', $post_type);
		return $query;
	}
}

function new_excerpt_more( $more ) { // appends Read More onto the end of excerpts
	return ' <a class="read-more" href="'. get_permalink( get_the_ID() ) . '">Read article&nbsp;&raquo;</a>';
}
add_filter( 'excerpt_more', 'new_excerpt_more' );

add_action('wp_enqueue_scripts', 'load_dashicons_front_end');
function load_dashicons_front_end() {
	wp_enqueue_style('dashicons');
}


/*********************
PAGE NAVI
*********************/

// Numeric Page Navi (built into the theme by default)
function bones_page_navi() {
	global $wp_query;
	$bignum = 999999999;
	if ( $wp_query->max_num_pages <= 1 )
	return;
	echo '<nav class="pagination">';
	echo paginate_links( array(
		'base'               => str_replace( $bignum, '%#%', esc_url( get_pagenum_link($bignum) ) ),
		'format'             => '',
		'current'            => max( 1, get_query_var('paged') ),
		'total'              => $wp_query->max_num_pages,
		'prev_text'          => '&larr;',
		'next_text'          => '&rarr;',
		'type'               => 'list',
		'end_size'           => 3,
		'mid_size'           => 3
	) );
	echo '</nav>';
} /* end page navi */



/*******************
CUSTOM LOGIN PAGE 
*******************/

// calling your own login css so you can style it

//Updated to proper 'enqueue' method
//https://codex.wordpress.org/Plugin_API/Action_Reference/login_enqueue_scripts
function bones_login_css() {
	wp_enqueue_style( 'bones_login_css', get_template_directory_uri() . '/library/css/login.css', false );
}

// changing the logo link from wordpress.org to your site
function bones_login_url() {  return home_url(); }

// changing the alt text on the logo to show your site name
function bones_login_title() { return get_option( 'blogname' ); }

// calling it only on the login page
add_action( 'login_enqueue_scripts', 'bones_login_css', 10 );
add_filter( 'login_headerurl', 'bones_login_url' );
add_filter( 'login_headertext', 'bones_login_title' );


/*******************
CUSTOM IMAGE SIZES 
*******************/

// Thumbnail sizes
add_image_size( 'project-thumb-500', 750, 500, true );
add_image_size( 'project-thumb-400', 600, 400, true );
add_image_size( 'project-thumb-300', 450, 300, true );
add_image_size( 'project-thumb-200', 300, 200, true );

/*
to add more sizes, simply copy a line from above
and change the dimensions & name. As long as you
upload a "featured image" as large as the biggest
set width or height, all the other sizes will be
auto-cropped.

To call a different size, simply change the text
inside the thumbnail function.

For example, to call the 300 x 100 sized image,
we would use the function:
<?php the_post_thumbnail( 'bones-thumb-300' ); ?>
for the 600 x 150 image:
<?php the_post_thumbnail( 'bones-thumb-600' ); ?>

*/

add_filter( 'image_size_names_choose', 'bones_custom_image_sizes' );

function bones_custom_image_sizes( $sizes ) {
	return array_merge( $sizes, array(
		'project-thumb-500' => __('750px by 500px'),
		'project-thumb-400' => __('600px by 400px'),
		'project-thumb-300' => __('450px by 300px'),
		'project-thumb-200' => __('300px by 200px'),
	) );
}

/*
The function above adds the ability to use the dropdown menu to select
the new images sizes you have just created from within the media manager
when you add media to your content blocks. If you add more image sizes,
duplicate one of the lines in the array and name it according to your
new image size.
*/
