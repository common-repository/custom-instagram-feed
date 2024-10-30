<?php

add_action( 'save_post', function($post_id){

	did_action( 'save_post');
    $post_type = get_post_type($post_id);
   if ( "clickitibf_insta" != $post_type)
		return;
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE ||(defined('DOING_AJAX') && DOING_AJAX))
		return;
	if(isset($_POST['clickitinsta_fb_page_name']))
        update_post_meta($post_id,'clickitinsta_fb_page_name',sanitize_text_field( $_POST['clickitinsta_fb_page_name'] ));
 	if(isset($_POST['clickitinsta_date_lang']))
        update_post_meta($post_id,'clickitinsta_date_lang',sanitize_text_field( $_POST['clickitinsta_date_lang'] ));
    
	if(isset($_POST['clickitinsta_num_feed']))
        update_post_meta($post_id,'clickitinsta_num_feed',sanitize_text_field( $_POST['clickitinsta_num_feed'] ));
    if(isset($_POST['clickitinsta_col_count']))
        update_post_meta($post_id,'clickitinsta_col_count',sanitize_text_field( $_POST['clickitinsta_col_count'] ));
    if(isset($_POST['clickitinsta_caption_text_limit']))
        update_post_meta($post_id,'clickitinsta_caption_text_limit',sanitize_text_field( $_POST['clickitinsta_caption_text_limit'] ));
  	if(isset($_POST['clickitinsta_access']))
        update_post_meta($post_id,'clickitinsta_access',sanitize_text_field( $_POST['clickitinsta_access']));

    if(isset($_POST['clickitinsta_thumb_size']))
		update_post_meta($post_id,'clickitinsta_thumb_size',sanitize_text_field( $_POST['clickitinsta_thumb_size']));
	if(isset($_POST['clickitinsta_max_height']))
		update_post_meta($post_id,'clickitinsta_max_height',sanitize_text_field( $_POST['clickitinsta_max_height']));
	if(isset($_POST['clickitinsta_feed_style'])&&$_POST['clickitinsta_feed_style']!='')
		update_post_meta($post_id,'clickitinsta_feed_style',sanitize_text_field( $_POST['clickitinsta_feed_style']));
	if(isset($_POST['clickitinsta_layout']))
		update_post_meta($post_id,'clickitinsta_layout',sanitize_text_field( $_POST['clickitinsta_layout']));
	  if(isset($_POST['clickitinsta_color_sceheme']))
		update_post_meta($post_id,'clickitinsta_color_sceheme',sanitize_text_field( $_POST['clickitinsta_color_sceheme']));
	
	if(isset($_POST['clickitinsta_show_photos_only']))
        update_post_meta($post_id,'clickitinsta_show_photos_only',TRUE );
    else
        update_post_meta($post_id,'clickitinsta_show_photos_only',FALSE );
	if(isset($_POST['clickitinsta_hide_date_posted']))
        update_post_meta($post_id,'clickitinsta_hide_date_posted',TRUE );
    else
        update_post_meta($post_id,'clickitinsta_hide_date_posted',FALSE );
	if(isset($_POST['clickitinsta_profile_picture']))
        update_post_meta($post_id,'clickitinsta_profile_picture',TRUE );
    else
        update_post_meta($post_id,'clickitinsta_profile_picture',FALSE );
	if(isset($_POST['clickitinsta_hide_read_more_link']))
        update_post_meta($post_id,'clickitinsta_hide_read_more_link',TRUE );
    else
        update_post_meta($post_id,'clickitinsta_hide_read_more_link',FALSE );
	if(isset($_POST['clickitinsta_hide_caption_text']))
        update_post_meta($post_id,'clickitinsta_hide_caption_text',TRUE );
    else
        update_post_meta($post_id,'clickitinsta_hide_caption_text',FALSE );


});
?>