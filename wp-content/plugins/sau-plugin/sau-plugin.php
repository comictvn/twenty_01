<?php
/**
 * Plugin Name: Tuts+ CRM
 * Plugin URI: #
 * Version: 1.0
 * Author: Tuts+
 * Author URI: http://code.tutsplus.com
 * Description: A simple CRM system for WordPress
 * License: GPL2
 */


class WPTutsCRM {
     
    /**
     * Constructor. Called when plugin is initialised
     */

    function WPTutsCRM() {
         add_action( 'init', array( $this, 'register_custom_post_type' ) );
	 	 add_action( 'plugins_loaded', array( $this, 'acf_fields' ) );
         add_filter( 'manage_edit-notice_columns', array( $this, 'add_table_columns' ) );
	 	 add_action( 'manage_notice_posts_custom_column', array( $this, 'output_table_columns_data'), 10, 2 );
         add_filter( 'manage_edit-notice_sortable_columns', array( $this, 'define_sortable_table_columns') );
         add_shortcode( 'list-posts-basic', 'rmcc_post_listing_shortcode1' );
         if ( is_admin() ) {
	        add_filter( 'request', array( $this, 'orderby_sortable_table_columns' ) );
	     }
    }
	function define_sortable_table_columns( $columns ) {
     
    return $columns;
     
	}

	function orderby_sortable_table_columns( $vars ) {
	 
	 
	    return $vars;
	     
	}	
   function add_table_columns( $columns ) {
	    
	    return $columns;
     
    }

	
    function register_custom_post_type() {
    register_post_type('notice', array(
        'labels' => array(
            'name'               => _x( 'Notice', 'post type general name', 'tuts-crm' ),
            'singular_name'      => _x( 'Notice', 'post type singular name', 'tuts-crm' ),
            'menu_name'          => _x( 'Notices', 'admin menu', 'tuts-crm' ),
            'name_admin_bar'     => _x( 'Notice', 'add new on admin bar', 'tuts-crm' ),
            'add_new'            => _x( 'Add New', 'notice', 'tuts-crm' ),
            'add_new_item'       => __( 'Add New Notice', 'tuts-crm' ),
            'new_item'           => __( 'New Notice', 'tuts-crm' ),
            'edit_item'          => __( 'Edit Notice', 'tuts-crm' ),
            'view_item'          => __( 'View Notice', 'tuts-crm' ),
            'all_items'          => __( 'All Notice', 'tuts-crm' ),
            'search_items'       => __( 'Search Notice', 'tuts-crm' ),
            'parent_item_colon'  => __( 'Parent Notice:', 'tuts-crm' ),
            'not_found'          => __( 'No notices found.', 'tuts-crm' ),
            'not_found_in_trash' => __( 'No notices found in Trash.', 'tuts-crm' ),
        ),
         
        // Frontend
        'has_archive'        => true,
        'public'             => true,
        'publicly_queryable' => true,
         
        // Admin
        'capability_type' => 'post',
        'menu_icon'     => 'dashicons-businessman',
        'menu_position' => 10,
        'query_var'     => true,
        'show_in_menu'  => true,
        'show_ui'       => true,
        'supports'      => array(
            'title',
	    	'editor',
            'author',
            'comments', 
        ),
	
        'hierarchical' => false, //Cho phép phân cấp, nếu là false thì post type này giống như Post, false thì giống như Page
        'public' => true, //Kích hoạt post type
        'show_ui' => true, //Hiển thị khung quản trị như Post/Page
        'show_in_menu' => true, //Hiển thị trên Admin Menu (tay trái)
        'show_in_nav_menus' => true, //Hiển thị trong Appearance -> Menus
        'show_in_admin_bar' => true, //Hiển thị trên thanh Admin bar màu đen.
        'menu_position' => 5, //Thứ tự vị trí hiển thị trong menu (tay trái)
        'menu_icon' => '', //Đường dẫn tới icon sẽ hiển thị
        'can_export' => true, //Có thể export nội dung bằng Tools -> Export
        'has_archive' => true, //Cho phép lưu trữ (month, date, year)
        'exclude_from_search' => false, //Loại bỏ khỏi kết quả tìm kiếm
        'publicly_queryable' => true, //Hiển thị các tham số trong query, phải đặt true
        'capability_type' => 'post' //
    )); 
}


   
}
// create shortcode to list all clothes which come in blue

function rmcc_post_listing_shortcode1( $atts ) {
    ob_start();
    $query = new WP_Query( array(
        'post_type' => 'notice',
        'limit' => 5
    ) );


    if ( $query->have_posts() ) { ?>
            <?php foreach($query->posts as $value) : ?>
            <div id="post-<?php the_ID(); ?>">
				<?php echo $value->post_content ?>
            </div>
            <?php endforeach;
          ?>
    <?php $myvariable = ob_get_clean();
    return $myvariable;
    }
    wp_reset_postdata();
}

$wpTutsCRM = new WPTutsCRM;

?>