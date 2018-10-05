<?php 
	 add_action( 'wp_enqueue_scripts', 'unite_child_enqueue_styles' );
	 function unite_child_enqueue_styles() {
 		  wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' ); 
		   } 
		   
		   

add_action('init',function(){

    

    register_post_type( 'unite_film',
        array(
            'labels' => array(
                'name'                  => __('Films'                  ,'unite'),
                'singular_name'         => __('Film'                   ,'unite'),
                'add_new'               => __('Add Film'               ,'unite'),
                'all_items'             => __('Films'                  ,'unite'),
                'add_new_item'          => __('Add New Film'           ,'unite'),
                'edit_item'             => __('Edit Film'              ,'unite'),
                'new_item'              => __('New Film'               ,'unite'),
                'view_item'             => __('View Film'              ,'unite'),
                'search_items'          => __('Search Films'           ,'unite'),
                'not_found'             => __('No Film found'          ,'unite'),
                'not_found_in_trash'    => __('No Film found in Trash' ,'unite'),
            ),
            'show_in_menu'          => true,
            'public'                => true,
            'publicly_queryable'    => true,
            'has_archive'           => true,
            'rewrite'               => array('slug'=>'film','with_front' => false),
            'supports'              => array('title', 'editor', 'custom-fields', 'thumbnail', 'page-attributes', 'author'),
        )
    );

    register_taxonomy('unite_genre' ,'unite_film',
        array(
            'labels' => array(
                'name'                  => __( 'Genres'             ,'unite'),
                'singular_name'         => __( 'Genre'              ,'unite'),
                'search_items'          => __( 'Search Genres'      ,'unite'),
                'all_items'             => __( 'All Genres'         ,'unite'),
                'parent_item'           => __( 'Parent Genre'       ,'unite'),
                'parent_item_colon'     => __( 'Parent Genre:'      ,'unite'),
                'edit_item'             => __( 'Edit Genre'         ,'unite'),
                'update_item'           => __( 'Update Genre'       ,'unite'),
                'add_new_item'          => __( 'Add New Genre'      ,'unite'),
                'new_item_name'         => __( 'New Genre'          ,'unite'),
                'menu_name'             => __( 'Genre'              ,'unite'),
            ),
            'hierarchical'          => true,
            'show_ui'               => true,
            'show_admin_column'     => true,
            'update_count_callback' => '_update_post_term_count',
            'query_var'             => true,
            'rewrite'               => array('slug' => 'genre'),
        )
    );

    register_taxonomy('unite_country' ,'unite_film',
        array(
            'labels' => array(
                'name'                  => __( 'Countries'             ,'unite'),
                'singular_name'         => __( 'Country'              ,'unite'),
                'search_items'          => __( 'Search Countries'      ,'unite'),
                'all_items'             => __( 'All Country'         ,'unite'),
                'parent_item'           => __( 'Parent Country'       ,'unite'),
                'parent_item_colon'     => __( 'Parent Country:'      ,'unite'),
                'edit_item'             => __( 'Edit Country'         ,'unite'),
                'update_item'           => __( 'Update Country'       ,'unite'),
                'add_new_item'          => __( 'Add New Country'      ,'unite'),
                'new_item_name'         => __( 'New Country'          ,'unite'),
                'menu_name'             => __( 'Country'              ,'unite'),
            ),
            'hierarchical'          => true,
            'show_ui'               => true,
            'show_admin_column'     => true,
            'update_count_callback' => '_update_post_term_count',
            'query_var'             => true,
            'rewrite'               => array('slug' => 'country'),
        )
	);
	
	register_taxonomy('unite_year' ,'unite_film',
        array(
            'labels' => array(
                'name'                  => __( 'Years'             ,'unite'),
                'singular_name'         => __( 'Year'              ,'unite'),
                'search_items'          => __( 'Search Years'      ,'unite'),
                'all_items'             => __( 'All Year'          ,'unite'),
                'parent_item'           => __( 'Parent Year'       ,'unite'),
                'parent_item_colon'     => __( 'Parent Year:'      ,'unite'),
                'edit_item'             => __( 'Edit Year'         ,'unite'),
                'update_item'           => __( 'Update Year'       ,'unite'),
                'add_new_item'          => __( 'Add New Year'      ,'unite'),
                'new_item_name'         => __( 'New Year'          ,'unite'),
                'menu_name'             => __( 'Year'              ,'unite'),
            ),
            'hierarchical'          => true,
            'show_ui'               => true,
            'show_admin_column'     => true,
            'update_count_callback' => '_update_post_term_count',
            'query_var'             => true,
            'rewrite'               => array('slug' => 'year'),
        )
	);
	
	register_taxonomy('unite_actor' ,'unite_film',
        array(
            'labels' => array(
                'name'                  => __( 'Actors'             ,'unite'),
                'singular_name'         => __( 'Actor'              ,'unite'),
                'search_items'          => __( 'Search Actors'      ,'unite'),
                'all_items'             => __( 'All Actor'          ,'unite'),
                'parent_item'           => __( 'Parent Actor'       ,'unite'),
                'parent_item_colon'     => __( 'Parent Actor:'      ,'unite'),
                'edit_item'             => __( 'Edit Actor'         ,'unite'),
                'update_item'           => __( 'Update Actor'       ,'unite'),
                'add_new_item'          => __( 'Add New Actor'      ,'unite'),
                'new_item_name'         => __( 'New Actor'          ,'unite'),
                'menu_name'             => __( 'Actor'              ,'unite'),
            ),
            'hierarchical'          => true,
            'show_ui'               => true,
            'show_admin_column'     => true,
            'update_count_callback' => '_update_post_term_count',
            'query_var'             => true,
            'rewrite'               => array('slug' => 'actor'),
        )
    );
});
function latest_films_shortcode() {
    $args = array(
        'post_type' => 'unite_film',
		'post_status' => 'publish',
		'posts_per_page' => 5
    );

    $my_query = null;
    $my_query = new WP_query($args);
    if($my_query->have_posts()):
        while($my_query->have_posts()) : $my_query->the_post();
            //$custom = get_post_custom( get_the_ID() );
            echo "<p>".get_the_title()."</p>";
            //echo "<p>".get_the_content()."</p>";
        endwhile;
        wp_reset_postdata();
    else :
    _e( 'Sorry, no posts matched your criteria.' );
    endif;
}

add_shortcode( 'latest_films', 'latest_films_shortcode' );
 ?>