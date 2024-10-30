<?php

add_filter( 'manage_clickitibf_insta_posts_columns', function($columns){
    	$newColumns = array();
	$newColumns['title'] = 'Feed Title';
	$newColumns['info'] = 'Feed Info';
	$newColumns['shortcode'] = 'Shortcode';
	$newColumns['date'] = 'Date';
	$newColumns['author'] = 'Created by';
	return $newColumns;
    
    
    } );

add_action( 'manage_clickitibf_insta_posts_custom_column',function($column,$id){
    switch($column){
        case 'shortcode':
            $short="[clickitinsta id='".$id."']";
            
            echo '<span style="font-size:16px;font-weight:;display:inline-block;padding-top:7px;">'.$short.'</span><br/>';            
        break;
        case 'info':
            $clickitinsta_fb_page_name=get_post_meta($id,'clickitinsta_fb_page_name',true);
            $clickitinsta_feed_style=get_post_meta($id,'clickitinsta_feed_style',true);
            $clickitinsta_layout=get_post_meta($id,'clickitinsta_layout',true);
            echo '<span>Page Name: '.$clickitinsta_fb_page_name.'</span><br>';
            echo '<span>Feed Style: '.$clickitinsta_feed_style.'</span><br>';
            echo '<span>Layout Style: '.$clickitinsta_layout.'</span><br>';
                   
        break;


        
    };
    
    
    },10,2);
?>