<?php
add_action( 'admin_enqueue_scripts', function(){
		wp_enqueue_script('jquery');
		wp_register_script( 'clickitinsta_custom_jq', plugin_dir_url( __FILE__ ) . '../js/my-custom.js', array('jquery','jquery-ui-core','jquery-ui-tabs') );
		wp_enqueue_script( 'clickitinsta_custom_jq');
		wp_enqueue_style( 'clickitinsta_jquery_style', plugin_dir_url( __FILE__ )  . '../css/jquery-ui.css', false, '1.0.0' );
	
		
	}, 10);

add_action( 'wp_enqueue_scripts', function(){
	
		wp_enqueue_script('jquery-ui-tabs');     
		
		wp_register_script( 'clickitinsta_jquery', plugin_dir_url( __FILE__ ) . '../bower_components/jquery/dist/jquery.min.js', array( 'jquery' ) );
		wp_register_script( 'clickitinsta_codebird', plugin_dir_url( __FILE__ ) . '../bower_components/codebird-js/codebird.js', array( 'jquery' ) );
		wp_register_script( 'clickitinsta_doT', plugin_dir_url( __FILE__ ) . '../bower_components/doT/doT.min.js', array( 'jquery' ) );
		wp_register_script( 'clickitinsta_moment', plugin_dir_url( __FILE__ ) . '../bower_components/moment/min/moment.min.js', array( 'jquery' ) );
		wp_register_script( 'clickitinsta_fr', plugin_dir_url( __FILE__ ) . '../bower_components/moment/locale/fr.js', array( 'jquery' ) );
		wp_register_script( 'clickitinsta_socialfeed', plugin_dir_url( __FILE__ ) . '../js/jquery.socialfeed.js', array( 'jquery' ) );
		wp_enqueue_style( 'clickitinsta_socialfeed_style', plugin_dir_url( __FILE__ )  . '../css/jquery.socialfeed.css', false, '1.0.0' );
		
		wp_enqueue_style( 'clickitinsta_jquery');
		wp_enqueue_style( 'clickitinsta_fontawesome_style');
   		wp_enqueue_script( 'clickitinsta_codebird');
   		wp_enqueue_script( 'clickitinsta_doT');
   		wp_enqueue_script( 'clickitinsta_moment');
   		wp_enqueue_script( 'clickitinsta_socialfeed');


		wp_enqueue_script('jquery-ui-tabs');
		//Enqueue the jQuery UI theme css file from google:
		wp_enqueue_style('e2b-admin-ui-css','http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.0/themes/base/jquery-ui.css',false,"1.9.0",false);

	wp_register_script( 'clickitinsta_en', plugin_dir_url( __FILE__ ) . '../bower_components/moment/locale/en-ca.js', array( 'jquery' ) );
	   		wp_enqueue_script( 'clickitinsta_en');
		
			wp_register_script( 'clickitinsta_ar', plugin_dir_url( __FILE__ ) . '../bower_components/moment/locale/ar.js', array( 'jquery' ) );
	   		wp_enqueue_script( 'clickitinsta_ar');
			wp_register_script( 'clickitinsta_bn', plugin_dir_url( __FILE__ ) . '../bower_components/moment/locale/bn.js', array( 'jquery' ) );
	   		wp_enqueue_script( 'clickitinsta_bn');
				
			wp_register_script( 'clickitinsta-cs', plugin_dir_url( __FILE__ ) . '../bower_components/moment/locale/cs.js', array( 'jquery' ) );
	   		wp_enqueue_script( 'clickitinsta-cs');
			wp_register_script( 'clickitinsta-da', plugin_dir_url( __FILE__ ) . '../bower_components/moment/locale/da.js', array( 'jquery' ) );
	   		wp_enqueue_script( 'clickitinsta-da');
			wp_register_script( 'clickitinsta-nl', plugin_dir_url( __FILE__ ) . '../bower_components/moment/locale/nl.js', array( 'jquery' ) );
	   		wp_enqueue_script( 'clickitinsta-nl');
			wp_register_script( 'clickitinsta-fr', plugin_dir_url( __FILE__ ) . '../bower_components/moment/locale/fr.js', array( 'jquery' ) );
	   		wp_enqueue_script( 'clickitinsta-fr');
			wp_register_script( 'clickitinsta-de', plugin_dir_url( __FILE__ ) . '../bower_components/moment/locale/de.js', array( 'jquery' ) );
	   		wp_enqueue_script( 'clickitinsta-de');
			wp_register_script( 'clickitinsta-it', plugin_dir_url( __FILE__ ) . '../bower_components/moment/locale/it.js', array( 'jquery' ) );
	   		wp_enqueue_script( 'clickitinsta-it');
			wp_register_script( 'clickitinsta-ja', plugin_dir_url( __FILE__ ) . '../bower_components/moment/locale/ja.js', array( 'jquery' ) );
	   		wp_enqueue_script( 'clickitinsta-ja');
			wp_register_script( 'clickitinsta-ko', plugin_dir_url( __FILE__ ) . '../bower_components/moment/locale/ko.js', array( 'jquery' ) );
	   		wp_enqueue_script( 'clickitinsta-ko');
			wp_register_script( 'clickitinsta-pt', plugin_dir_url( __FILE__ ) . '../bower_components/moment/locale/pt.js', array( 'jquery' ) );
	   		wp_enqueue_script( 'clickitinsta-pt');
			wp_register_script( 'clickitinsta-ru', plugin_dir_url( __FILE__ ) . '../bower_components/moment/locale/ru.js', array( 'jquery' ) );
	   		wp_enqueue_script( 'clickitinsta-ru');
			wp_register_script( 'clickitinsta-es', plugin_dir_url( __FILE__ ) . '../bower_components/moment/locale/es.js', array( 'jquery' ) );
	   		wp_enqueue_script( 'clickitinsta-es');
			wp_register_script( 'clickitinsta-tr', plugin_dir_url( __FILE__ ) . '../bower_components/moment/locale/tr.js', array( 'jquery' ) );
	   		wp_enqueue_script( 'clickitinsta-tr');
			wp_register_script( 'clickitinsta-uk', plugin_dir_url( __FILE__ ) . '../bower_components/moment/locale/uk.js', array( 'jquery' ) );
	   		wp_enqueue_script( 'clickitinsta-uk');
}, 10);

