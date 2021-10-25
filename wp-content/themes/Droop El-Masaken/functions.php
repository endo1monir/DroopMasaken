<?php

require_once __DIR__.'/inc/linkstylefiles.php';

add_theme_support('post-thumbnails');


//link the javascripts files and link css files 

linkStyleScriptsFiles::linkStyleAll();

linkStyleScriptsFiles::linkScriptsAll();

// register the main menue
linkStyleScriptsFiles::registerTheMainmenu();

//excerpt length

linkStyleScriptsFiles::addExcerptLength();
linkStyleScriptsFiles::excmore();

// theme setting 
if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Theme General Settings',
		'menu_title'	=> 'اعدادت القالب',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
	
}
add_filter( 'wpcf7_autop_or_not', '__return_false' );


function my_acf_google_map_api( $api ){
   $api['key'] = 'AIzaSyBDM5XOaKwgeFks_USE0tMnZYgA9sMdwho';
   return $api;
}
add_filter('acf/fields/google_map/api', 'my_acf_google_map_api');


//the projects
function create_post_type_projects(){
    $values=array(
       'public'=>true,
       'labels'=>array('name'=>'المشاريع'),
       'menu_icon'=>'dashicons-admin-home',
       'menu_position'=>5,
       'supports' => array('title', 'editor', 'thumbnail','comments'),
        
    );
    register_post_type('projects',$values);

    $values=array(
        'public'=>true,
        'labels'=>array('name'=>'اراء العملاء'),
        'menu_icon'=>'dashicons-testimonial',
        'menu_position'=>5,
        'supports' => array('title', 'thumbnail'),
         
     );
     register_post_type('testonomiles',$values);
    }
    add_action('init','create_post_type_projects');



// make comments by default comments on

// function default_comments_on($data){
// if($data['post_type']== 'projects'){
// $data['comments_status']=1;
// }
// return $data;
// }
// add_filter( 'wp_insert_post_data', 'default_comments_on' );

