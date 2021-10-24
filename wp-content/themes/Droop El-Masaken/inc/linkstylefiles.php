<?php
class linkStyleScriptsFiles
{

//add scripts to the page

    static function droopAddstlye()
    {
        // wp_enqueue_style('droppstyle', get_template_directory_uri() . '/css/style.css', array());
       // wp_enqueue_style('droop-bootstrap', get_template_directory_uri() . '/css/bootstrap.css', array());
     
     
       if(is_singular('projects')){
        wp_enqueue_style('droop-all', get_template_directory_uri() . '/fonts/font-awsome/css/all.min.css', array());
        wp_enqueue_style('droop-animate', get_template_directory_uri() . '/css/animate.css', array());
        wp_enqueue_style('droop-bootstarp-min', get_template_directory_uri() . '/css/bootstrap.min.css', array());
        wp_enqueue_style('droop-swiper-min', get_template_directory_uri() . '/css/swiper.min.css', array());
        wp_enqueue_style('droop-jquery-fancybox-min', get_template_directory_uri() . '/css/jquery.fancybox.min.css', array());
        wp_enqueue_style('droop-animate', get_template_directory_uri() . '/css/animate.css', array());
        wp_enqueue_style('droop-main', get_template_directory_uri() . '/css/main.css', array());
        wp_enqueue_style('droop-first', get_template_directory_uri() . '/css/first.css', array());
        wp_enqueue_style('droop-owl-carousel', get_template_directory_uri() . '/css/owl.carousel.css', array());
        wp_enqueue_style('droop-owl-theme-default-min', get_template_directory_uri() . '/css/owl.theme.default.min.css', array());
      
    }

else{
        wp_enqueue_style('droop-all', get_template_directory_uri() . '/fonts/font-awsome/css/all.min.css', array());
        wp_enqueue_style('droop-bootstarp-min', get_template_directory_uri() . '/css/bootstrap.min.css', array());
        wp_enqueue_style('droop-animate', get_template_directory_uri() . '/css/animate.css', array());
        wp_enqueue_style('droop-first', get_template_directory_uri() . '/css/first.css', array());
        wp_enqueue_style('droop-first', get_template_directory_uri() . '/fonts/font-awsome/css/all.min.css', array());
     //   wp_enqueue_style('droop-freeformatter-out', get_template_directory_uri() . '/css/freeformatter-out.css', array());

        wp_enqueue_style('droop-jquery-fancybox-min', get_template_directory_uri() . '/css/jquery.fancybox.min.css', array());

        wp_enqueue_style('droop-main', get_template_directory_uri() . '/css/main.css', array());

        wp_enqueue_style('droop-owl-carousel', get_template_directory_uri() . '/css/owl.carousel.css', array());

        // wp_enqueue_style('droop-owl-carousel-min', get_template_directory_uri() . '/css/owl.carousel.min.css', array());
        wp_enqueue_style('droop-owl-theme-default-min', get_template_directory_uri() . '/css/owl.theme.default.min.css', array());
        wp_enqueue_style('droop-swiper-min', get_template_directory_uri() . '/css/swiper.min.css', array());
    }
}
    static function linkStyleAll()
    {
        add_action('wp_enqueue_scripts', array('linkStyleScriptsFiles', 'droopAddstlye'));
    }
    
    
    
    //add styles
    
    static function linkScriptsAll()
    {
        add_action('wp_enqueue_scripts', array('linkStyleScriptsFiles', 'droopAddScript'));
    }
    static function droopAddScript()
    {

        
        wp_enqueue_script('accordion-js', get_template_directory_uri() . '/js/accordion.js', array(), false, true);
        wp_enqueue_script('jquerys-js', get_template_directory_uri() . '/js/jquery-3.3.1.min.js', array(), false, true);
        wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/js/bootstrap.js', array(), false, true);
        wp_enqueue_script('bootstrap-min-js', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), false, true);
        wp_enqueue_script('jquery-fancybox', get_template_directory_uri() . '/js/jquery.fancybox.min.js', array(), false, true);
        wp_enqueue_script('jquery-mind', get_template_directory_uri() . '/js/jquery-3.3.1.min', array(), false, true);
        wp_enqueue_script('js-mind', get_template_directory_uri() . '/js/js.js', array(), false, true);
        wp_enqueue_script('owlcarousel-min', get_template_directory_uri() . '/js/owl.carousel.min.js', array(), false, true);
        wp_enqueue_script('swiper-min-min', get_template_directory_uri() . '/js/swiper.min.js', array(), false, true);
        wp_enqueue_script('swipers-min-min', get_template_directory_uri() . '/js/wow.min.js', array(), false, true);
        wp_enqueue_script('sliderCrousel', get_template_directory_uri() . '/js/sliderCrousel.js', array(), false, true);
    }


//register the main menu
static function registerTheMainmenu(){
    add_action( 'init', array('linkStyleScriptsFiles','createTheMainmenu') );
}

static function createTheMainmenu(){
    register_nav_menus( ['Main-Menu'=>'القائمة الرئيسية' ] );
}
//add excerpt length
static function addExcerptLength(){
    add_filter( 'excerpt_length', array('linkStyleScriptsFiles','elzero_extend_excepert_length'));
}

static function elzero_extend_excepert_length($length){
 return 30;
 }
 

 static function excmore(){
    add_filter('excerpt_more', array('linkStyleScriptsFiles','new_excerpt_more'));

 }
 static function new_excerpt_more( $more ) {
    return '..';
}






}


