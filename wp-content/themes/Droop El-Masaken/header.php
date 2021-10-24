<?php require('class-wp-bootstrap-navwalker.php'); ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>

   <!-- <link rel="stylesheet" href="css/animate.css"> -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php bloginfo('name'); ?></title>
    <link rel="pingback" href="<?php bloginfo("pingback_url"); ?>">
  <!--  <link rel="icon" href="img/logo.png">-->
    <?php wp_head(); //scripts ?>
  
</head>
<body data-bs-spy="scroll" data-bs-target="#navbar-example">
<header role="banner" class="">
      <!-- Top Navigation -->
      <nav class="background-transparent background-primary-dott full-width sticky">
         <!-- mobile version logo -->
         <div class="logosmll">
            <a href="<?php echo get_site_url(); ?>" class="">
               <img class="logo1" src="<?php $uploads= wp_upload_dir();echo $uploads['baseurl']; ?>/2021/10/logo.png" alt="">
            </a>
         </div>
         <div class="top-nav heigh100">
            <!-- left menu items -->
            <div class="top-nav right-menu heigh100">
               <div class="container heigh100">
                  <div class="row heigh100">
                     <div class="col-md-2 editfloat">
                        <a href="<?php echo get_site_url(); ?>" class="logo">
                           <img class="logo1" src="http://localhost/droopElmasaken/wordpress/wp-content/uploads/2021/10/logo.png" alt="">
                        </a>
                     </div>

                     <div class="col-md-7 col-lg-8 editfloat aligne-center flex j-center">
   <?php 
   wp_nav_menu( [
    'theme_location'=>'Main-Menu',
    'menu_class'=>'top-ul chevron',
    'walker' => new WP_Bootstrap_Navwalker()

   ] );
   ?>
   
                     <!--  <ul class=" top-ul chevron">
                           <li class="active"><a class="active" href="index.html">الصفحة الرئيسية</a></li>
                           <li><a href="projects.html">المشاريع</a></li>
                           <li><a href="about-us.html">ماذا عنا</a></li>
                           <li><a href="blogs.html">مقالات</a></li>
                           <li><a href="contact-us.html">تواصل معنا</a></li>

                        </ul>
-->
                     </div>
                     <div class="col-md-3 col-lg-2 editfloat">
                        <a href="projects.html" class="call-nw blue-button responsive-none"> <span>تصفح المشاريع</span> </a>
                     </div>


                  </div>
               </div>
            </div>
         </div>
      </nav>
   </header>
   <main role="main">