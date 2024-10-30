<?php
add_shortcode('clickitinsta',function($atts,$content){
    
    extract( shortcode_atts( array( 'id' => null ) , $atts ) );
    $clickitinsta_fb_page_name=get_post_meta($id,'clickitinsta_fb_page_name',true);
    $clickitinsta_show_photos_only=get_post_meta($id,'clickitinsta_show_photos_only',true);
    $clickitinsta_hide_date_posted=get_post_meta($id,'clickitinsta_hide_date_posted',true);
    $clickitinsta_profile_picture=get_post_meta($id,'clickitinsta_profile_picture',true);
    $clickitinsta_hide_read_more_link=get_post_meta($id,'clickitinsta_hide_read_more_link',true);
    $clickitinsta_hide_caption_text=get_post_meta($id,'clickitinsta_hide_caption_text',true);
    $clickitinsta_feed_style=get_post_meta($id,'clickitinsta_feed_style',true);
    $clickitinsta_thumb_size=get_post_meta($id,'clickitinsta_thumb_size',true);
    $clickitinsta_col_count=get_post_meta($id,'clickitinsta_col_count',true);
    $clickitinsta_num_feed=get_post_meta($id,'clickitinsta_num_feed',true);
    $clickitinsta_caption_text_limit=get_post_meta($id,'clickitinsta_caption_text_limit',true);
    $clickitinsta_color_sceheme='light';
    $clickitinsta_layout=get_post_meta($id,'clickitinsta_layout',true);
    $clickitinsta_max_height=get_post_meta($id,'clickitinsta_max_height',true);
    $clickitinsta_date_lang=get_post_meta($id,'clickitinsta_date_lang',true);
    $clickitinsta_access=get_post_meta($id,'clickitinsta_access',true);
    if($clickitinsta_access=='')
        $clickitinsta_access='4926863040.3a81a9f.2c626f11b9e447d1b9d4da1f29ea28fe';
    //default values
    if($clickitinsta_date_lang=='')
        $clickitinsta_date_lang='en';
    if($clickitinsta_max_height=='')
        $clickitinsta_max_height='520';
    /*
    if($clickitinsta_color_sceheme=='')
        $clickitinsta_color_sceheme='light';  
    */
    if($clickitinsta_fb_page_name=='')
        $clickitinsta_fb_page_name='google';
    if($clickitinsta_layout=='')
        $clickitinsta_layout='classic';  
    if($clickitinsta_col_count=='')
        $clickitinsta_col_count='2';
    if($clickitinsta_thumb_size=='')
        $clickitinsta_thumb_size='250';
    if($clickitinsta_feed_style=='')
        $clickitinsta_feed_style='vertical';
    if($clickitinsta_num_feed=='')
        $clickitinsta_num_feed='20';
    if($clickitinsta_caption_text_limit=='')
        $clickitinsta_caption_text_limit='50';


     if($clickitinsta_layout=="dark")
        $clickitinsta_color_sceheme='dark';    
    if($clickitinsta_feed_style=='grid'){
        $clickitinsta_show_photos_only='1';
        $clickitinsta_layout="classic";
    }

    ?>
    <script>
        console.log("good enough:<?php echo $clickitinsta_access;?>");
    </script>
    <?php


    function clickitinsta_detTamplate($layout){
        if($layout=='default'||$layout=='classic'||$layout=='scroll'||$layout=='dark'){
            $template='';
            $template.='<div class="grid-item">';
            $template.='<div class="social-feed-element {{? !it.moderation_passed}}hidden{{?}}" dt-create="{{=it.dt_create}}" ';
            $template.='social-feed-id = "{{=it.id}}">';
            $template.='<div class="content">';
            $template.='<a class="pull-left" href="{{=it.author_link}}" target="_blank"><img class="media-object" src="{{=it.author_picture}}"></a>';
            $template.='<div class="media-body">';
            $template.='<p>';
            $template.='<span class="muted pull-right"> {{=it.time_ago}}</span>';
            $template.='<strong><a style="font-weight: bold !important;" href="{{=it.author_link}}" target="_blank" >';
            $template.='<span class="author-title">{{=it.author_name}}</span>';
            $template.='</a></strong>';
            $template.='</p>';
            $template.='<div class="text-wrapper">';
            $template.='<p class="social-feed-text">{{=it.text}} <a href="{{=it.link}}" target="_blank" class="read-button">read more</a></p>';
            $template.='</div>';
            $template.='</div>';
            $template.='</div>';
            $template.='<a href="{{=it.link}}" target="_blank" class="">{{=it.attachment}}</a>';
            $template.='</div>';
            $template.='</div>';
            return $template;
        }
        if($layout=='layout-2'){
            $template='';
            $template.='<div class="grid-item">';
            $template.='<div class="social-feed-element {{? !it.moderation_passed}}hidden{{?}}" dt-create="{{=it.dt_create}}" ';
            $template.='social-feed-id = "{{=it.id}}">';
            $template.='<div class="content">';
            $template.='<a class="pull-left" href="{{=it.author_link}}" target="_blank"><img class="media-object" src="{{=it.author_picture}}"></a>';

            $template.='<div class="media-body">';

            $template.='<p>';
            $template.='<strong><a class="time-ago" style="font-weight: bold !important;" href="{{=it.author_link}}" target="_blank" >';
            $template.='<span class="author-title">{{=it.author_name}}</span>';
            $template.='</a></strong>';
            $template.='<span class="muted pull-right"> {{=it.time_ago}}</span>';
            $template.='</p>';
            $template.='<br/>';
            $template.='<a href="{{=it.link}}" target="_blank" class="attachment">{{=it.attachment}}</a>';
            $template.='<div class="text-wrapper">';
            $template.='<p class="social-feed-text">{{=it.text}} <a href="{{=it.link}}" target="_blank" class="read-button">read more</a></p>';
            $template.='</div>';
            $template.='</div>';
            $template.='</div>';
            $template.='</div>';
            $template.='</div>';
            return $template;
        }
        if($layout=='layout-3'){
            $template='';
            $template.='<div class="grid-item">';
            $template.='<div class="social-feed-element {{? !it.moderation_passed}}hidden{{?}}" dt-create="{{=it.dt_create}}" ';
            $template.='social-feed-id = "{{=it.id}}">';
            $template.='<div class="content">';
            /* attachment */
            $template.='<a href="{{=it.link}}" target="_blank" class="clickitinsta-attachment">{{=it.attachment}}</a>';
            /* feed text */
            $template.='<div class="text-wrapper">';
            $template.='<p class="social-feed-text">{{=it.text}} <a href="{{=it.link}}" target="_blank" class="read-button">read more</a></p>';
            $template.='</div>';
            $template.='<div class="clickitinsta-media">';
            $template.='<a class="pull-left" href="{{=it.author_link}}" target="_blank"><img class="media-object" src="{{=it.author_picture}}"></a>';
            $template.='<div class="media-body">';
            $template.='<br/>';
            $template.='<p class="clickitinsta-text">';
            $template.='<span class="muted pull-right"> {{=it.time_ago}}</span>';
            $template.='<strong><a style="font-weight: bold !important;" href="{{=it.author_link}}" target="_blank" >';
            $template.='<span class="author-title">{{=it.author_name}}</span>';
            $template.='</a></strong>';
            $template.='</p>';
            $template.='</div>';
            $template.='</div>';
            $template.='</div>';
            $template.='</div>';
            $template.='</div>';
            return $template;
        }
        else{
            $template='';
            $template.='<div class="grid-item">';
            $template.='<div class="social-feed-element {{? !it.moderation_passed}}hidden{{?}}" dt-create="{{=it.dt_create}}" ';
            $template.='social-feed-id = "{{=it.id}}">';
            $template.='<div class="content">';
            /* feed text */
            $template.='<div class="text-wrapper">';
            $template.='<p class="social-feed-text">{{=it.text}} <a href="{{=it.link}}" target="_blank" class="read-button">read more</a></p>';
            $template.='</div>';
            /* attachment */
            $template.='<a href="{{=it.link}}" target="_blank" class="clickitinsta-attachment">{{=it.attachment}}</a>';
            $template.='<div class="clickitinsta-media">';
            $template.='<a class="pull-left" href="{{=it.author_link}}" target="_blank"><img class="media-object" src="{{=it.author_picture}}"></a>';
            $template.='<div class="media-body">';
            $template.='<br/>';
            $template.='<p class="clickitinsta-text">';
            $template.='<span class="muted pull-right"> {{=it.time_ago}}</span>';
            $template.='<strong><a style="font-weight: bold !important;" href="{{=it.author_link}}" target="_blank" >';
            $template.='<span class="author-title">{{=it.author_name}}</span>';
            $template.='</a></strong>';
            $template.='</p>';
            $template.='</div>';
            $template.='</div>';
            $template.='</div>';
            $template.='</div>';
            $template.='</div>';
            return $template;
        }
    }



    $layout_template=clickitinsta_detTamplate($clickitinsta_layout);
    /*
    if($clickitinsta_caption_text_limit=='')
        $clickitinsta_caption_text_limit='50';
    if($clickitinsta_col_count=='')
        $clickitinsta_col_count='2';
    if($clickitinsta_num_feed=='')
        $clickitinsta_num_feed='20';
    */

    ?>
      <script>
        var asd='<?php echo $clickitinsta_date_lang?>';
        console.log("Thumb Style:"+asd);
    </script>

    <?php
    ob_start();
    if($clickitinsta_layout=='default'||$clickitinsta_layout=='classic'||$clickitinsta_layout=='scroll'||$clickitinsta_layout=='dark'){
        ?>
    <style>
        .insta-feed-container-<?php echo $id;?> .read-button{
            display: inline-block !important;
        }
        <?php }?>


        /* template----1*/
        <?php if($clickitinsta_layout=='layout-1'||$clickitinsta_layout=='layout-3'){?>
        .insta-feed-container-<?php echo $id; ?> .social-feed-text{
            text-align: center;
            padding-bottom: 10px !important;
        }
        .insta-feed-container-<?php echo $id;?> .social-feed-element {
            padding-top: 8px !important;
            padding-bottom: 8px !important;
        }
        .insta-feed-container-<?php echo $id;?> .clickitinsta-attachment{
            padding-bottom: 10px;
        }
        /* end of layout 1*/
        <?php }?>
        /* template----2*/
        <?php if($clickitinsta_layout=='layout-2'){?>
        .insta-feed-container-<?php echo $id; ?> .pull-left{
            display:block !important;
            width: 100% !important;
            float: none !important;
            margin: 0 !important;
            padding: 5px !important;
            text-align:center !important;
        }
        .insta-feed-container-<?php echo $id; ?> .time-ago{
            display:block !important;
            width: 100% !important;
            float: none !important;
            margin: 0 !important;
            text-align:center !important;
        }
        .insta-feed-container-<?php echo $id; ?> .media-object{
            margin: 0 auto !important;
            width: 70px !important;
        }
        .insta-feed-container-<?php echo $id; ?> .social-feed-element .author-title{
            color: black !important;
            font-weight: bold;
            margin: 0 auto !important;
            font-size: 17px !important;
            text-align:center !important;
            float: none !important;
        }
        .insta-feed-container-<?php echo $id; ?> .social-feed-element .pull-right{
            display: block !important;
            width: 100% !important;
            float: none !important;
            margin : 0px !important;
            text-align: center !important;
            color: #969696;
            height: 17px;
        }
        .insta-feed-container-<?php echo $id; ?> .social-feed-text{
            text-align: center !important;
            font-size: 1.4em !important;
        }
        .insta-feed-container-<?php echo $id; ?> .attachment{
            margin: 5px !important;
        }
        <?php }?>
        /* end of layout 2*/

        /*date posted*/
        .insta-feed-container-<?php echo $id; ?> .pull-right{
            <?php if($clickitinsta_hide_date_posted=='1'||$clickitinsta_show_photos_only=='1') echo 'display:none !important;';
                    else echo 'float:right !important;';if($clickitinsta_color_sceheme=='dark') echo 'color:#999;';?>

        }

        <?php if($clickitinsta_hide_caption_text=='1'){?>
         .insta-feed-container-<?php echo $id; ?> .content{
            padding-bottom:20px !important;
         }
         .insta-feed-container-<?php echo $id; ?> .media-body{
            margin-top: 17px !important;
         }

        <?php }?>
        .insta-feed-container-<?php echo $id; ?> .social-feed-element .author-title{
            display:inline-block;
            color: black !important;
            font-weight: bold !important;
            text-decoration: none !important;
            cursor: pointer !important;
        }
        .insta-feed-container-<?php echo $id; ?> .read-button{
            padding: 5px !important;
        }

        /*profile pic*/
        .insta-feed-container-<?php echo $id; ?> .pull-left{
            float: left;
            <?php if($clickitinsta_profile_picture=='1'||$clickitinsta_show_photos_only=='1') echo 'display:none !important;';?>
            /* dark theme*/
            <?php if($clickitinsta_color_sceheme=='dark'){?>
            <?php }?>
                cursor: pointer !important;

        }
        /* read more button*/
        .insta-feed-container-<?php echo $id; ?> .read-button{
            <?php if($clickitinsta_hide_read_more_link=='1'||$clickitinsta_show_photos_only=='1') echo 'display:none !important;';?>
            /* dark theme*/
            <?php if($clickitinsta_color_sceheme=='dark'){?>
            <?php }?>
            cursor: pointer !important;
        }
        /* caption text*/
        .insta-feed-container-<?php echo $id; ?> .social-feed-text{
            <?php if($clickitinsta_hide_caption_text=='1'||$clickitinsta_show_photos_only=='1') echo 'display:none !important;';?>
            /* dark theme*/
            <?php if($clickitinsta_color_sceheme=='dark'){?>
            <?php }?>

        }
        .insta-feed-container-<?php echo $id; ?> .content{
            display: block !important;
            <?php if($clickitinsta_show_photos_only=='1') echo 'display:none !important;';?>
            /* dark theme*/
            <?php if($clickitinsta_color_sceheme=='dark'){?>
                background-color:#414141;
            <?php }?>
        }
        .insta-feed-container-<?php echo $id; ?> .grid-item{
            padding:5px;
            margin: 2px;
            /* dark theme*/
            <?php if($clickitinsta_color_sceheme=='dark'){?>
                background-color:white;
            <?php }?>
        }
        .insta-feed-container-<?php echo $id; ?> .social-feed-element a{
            color: #0088cc !important;
            text-decoration: none !important;

        }
        .insta-feed-container-<?php echo $id; ?> .content .media-body p{
            margin: 0 !important;
        }
        /*Author Title*/
        .insta-feed-container-<?php echo $id; ?> .social-feed-element p.social-feed-text,
        .insta-feed-container-<?php echo $id; ?> .social-feed-element .author-title{
            <?php if($clickitinsta_hide_caption_text=='1'||$clickitinsta_show_photos_only=='1') echo 'display:none !important;';?>
            <?php if($clickitinsta_color_sceheme=='light'){?>
                color: black !important;
            <?php }else{echo 'color:white !important;';}?>

        }

        <?php if($clickitinsta_feed_style=='vertical'){?>
        .insta-feed-container-<?php echo $id; ?> {
            width: 442px !important;
            margin: 0 auto !important;
        }

        <?php } if($clickitinsta_feed_style=='masonry'){ ?>
        /* masonary*/

        .insta-feed-container.<?php $id;?> .social-feed-element{
            box-shadow: 0 0 10px 0 rgba(10, 10, 10, 0.2) !important;
            transition: 0.25s !important;
            -webkit-backface-visibility: hidden !important;
            text-align: left;
            padding: 0 !important;
            margin: 0 !important;
        }
        .insta-feed-container-<?php echo $id; ?> .social-feed-text{
            margin: 0 !important;
            color: black !important;
        }
        .insta-feed-container-<?php echo $id; ?>{
            column-gap:0 !important;
            column-count: <?php echo $clickitinsta_col_count;?> ;
            -webkit-column-count: <?php echo $clickitinsta_col_count;?> ;
            -moz-column-count: <?php echo $clickitinsta_col_count;?> ;
        }
        .insta-feed-container-<?php echo $id; ?> .social-feed-element .author-title{
            font-size: 15px !important;
            font-weight: bold !important;
            text-decoration: none !important;
        }
        .insta-feed-container-<?php echo $id; ?> .social-feed-element  {
            break-inside: avoid;
            padding: 0 !important;
            vertical-align: top !important;
            margin: 0 !important;
        }

        .insta-feed-container-<?php echo $id; ?> .social-feed-element .media-body > p{
            margin: 0 !important;
        }
        @media (max-width: 600px) {
            .insta-feed-container-<?php echo $id; ?> {
                column-count: 2;
                -webkit-column-count:2;
                -moz-column-count: 2;
            }
        }
        @media (max-width: 360px) {
            .insta-feed-container-<?php echo $id; ?> {
                column-count: 1;
                -webkit-column-count: 1 ;
                -moz-column-count: 1 ;
            }
        }




        <?php }?>
        /* Thumbnail CSS */
        <?php if($clickitinsta_feed_style=='grid'){?>
            .insta-feed-container-<?php echo $id; ?> .social-feed-element{
            width: <?php echo $clickitinsta_thumb_size; ?>px !important;
            display: inline-block !important;
            background-color:white !important;
            padding: 0 !important;
            margin: 5px !important;
            vertical-align: middle !important;
        }
        .insta-feed-container-<?php echo $id; ?> .grid-item {
            display: inline-block !important;
        }
        .insta-feed-container-<?php echo $id; ?> {
            text-align: center !important;
        }
        <?php }if($clickitinsta_layout=="scroll"){?>
        .insta-feed-container-<?php echo $id;?>{
            height: <?php echo $clickitinsta_max_height;?>px;
            width: 100%;
            border: 1px solid #ddd;
            overflow-x: scroll;
            padding: 10px;
        }
        <?php }?>
    </style>

    <div id="insta-feed-container-<?php echo $id; ?>" class="insta-feed-container-<?php echo $id; ?>">

    <script>
    var clickitinsta_fb_page_name='<?php echo $clickitinsta_fb_page_name;?>';
   // var	clickitinsta_access_token= '3115610306.54da896.ae799867a8074bcb91b5cd6995b4974e';
    setTimeout(function(){


    jQuery(document).ready(function(){
        jQuery('.insta-feed-container-'+<?php echo $id;?>).socialfeed({
            instagram:{
                accounts:['@'+clickitinsta_fb_page_name],
                limit:<?php echo $clickitinsta_num_feed;?>,
                access_token:'<?php echo $clickitinsta_access;?>'},
            template_html:'<?php echo $layout_template;?>' ,
            date_format: "ll",                              //String: Display format of the date attribute (see http://momentjs.com/docs/#/displaying/format/)
            date_locale: "en",   
        // GENERAL SETTINGS
            length:<?php echo $clickitinsta_caption_text_limit;?>,                                     //Integer: For posts with text longer than this length, show an ellipsis.
                show_media:true
            });
        
        });    
     },1000);
    moment.locale("<?php echo $clickitinsta_date_lang;?>");
    </script>
    </div>
    <?php
    return ob_get_clean();
    });
?>