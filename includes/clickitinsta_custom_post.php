<?php

add_action( 'init', function(){

    $labels = array(
        'name'               => _x( 'Instagram Feeds', 'post type general name' ),
        'singular_name'      => _x( 'Instagram Feed', 'post type singular name' ),
        'menu_name'          => _x( 'Instagram Feeds', 'admin menu' ),
        'name_admin_bar'     => _x( 'Instagram Feed', 'add new on admin bar' ),
        'add_new'            => _x( 'Add New', 'Form' ),
        'add_new_item'       => __( 'Add New Instagram Feed' ),
        'new_item'           => __( 'New Instagram Feed' ),
        'edit_item'          => __( 'Edit Instagram Feed' ),
        'view_item'          => __( 'View Instagram Feed' ),
        'all_items'          => __( 'All Instagram Feeds' ),
        'search_items'       => __( 'Search Instagram Feeds' ),
        'parent_item_colon'  => __( 'Parent Instagram Feeds:' ),
        'not_found'          => __( 'No Feed Forms found.' ),
        'not_found_in_trash' => __( 'No Feed Forms found in Trash.' )
    );

    $args = array(
        'labels'             => $labels,
        'description'        => __( 'Add responsive instagram feed into your post, page & widgets' ),
        'public'             => true,
        'publicly_queryable' => false,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'rewrite'            => array( 'slug' => 'clickit-instagram-feed' ),
        'capability_type'    => 'post',
        'has_archive'        => false,
        'hierarchical'       => false,
        'menu_position'      => 25,
        'menu_icon'		     => plugins_url('/includes/images/fb-icon-small.png',dirname(__FILE__)),
        'supports'           => array( 'title' , 'custom_fields')
    );

    register_post_type( 'clickitibf_insta', $args );

} );
add_action( 'edit_form_after_title', function(){
    $scr = get_current_screen();
    
    if( $scr-> post_type !== 'clickitibf_insta' )
        return;

    include_once( 'clickitinsta_settings_page.php' );
    
    
    } );

add_action( 'add_meta_boxes' , function(){

    add_meta_box('clickitinsta_support_meta','Support:',function() {
        ?>
        <a href="http://clickitplugins.com/support/" target="_blank" class="clickitinsta-action-btn">Get Support</a>
        <?php
     },'clickitinsta_fb_feed','side','core');


        add_meta_box('clickitinsta_premimum_meta','Premimum Features:',function(){
        
        ?>
        <style type="text/css">
            .clickitinsta-action-btn{
                width: 93%; text-align: center; background: #e14d43;
                display: block; padding: 18px 8px; font-size: 16px;
                border-radius: 5px; color: white; text-decoration:
                none; border: 2px solid #e14d43;
                transition: all 0.2s; }
            .clickitinsta-action-btn:hover{
                width: 93%; text-align: center; display: block;
                padding: 18px 8px; font-size: 16px; border-radius: 5px;
                color: white !important; text-decoration: none;
                background: #bb4138 !important; border: 2px solid #bb4138;
            }
        </style>
        <strong>
            <ul>
                <li> - Unlock All Feed Templates</li>
                <li> - Unlock All Feed Styles</li>
                <li> - Create 3, 4, 5, 6 Columns Masonry Feed</li>
                <li> - Custom Size for Thumbnail View</li>
                <li> - Unlock Widget Support</li>
                <li> - Unlock Hashtage Support</li>
                <li> - Unlock All Customization Optisons</li>
                <li> - Unlock Unlimited Creation of Feeds</li>
                <li> - Get 24/7 Premium Support</li>
                <li> - Unlimited Updates</li>
            </ul>
        </strong>
        <a href="https://www.clickitplugins.com/" target="_blank" class="clickitinsta-action-btn">GET PREMIUM NOW</a> <?php

        },'clickitibf_insta','side','high');
    });
?>