<?php

/**
 *Template Name: about us  
 */
get_header();
$uploads=wp_get_upload_dir();
?>
<!-- //////////////// start bread crumbs /////////////////////// -->
<section class="all-section section-breadcumbs">
    <div aria-label="breadcrumb">
        <div class="container">
            <h2 class="title-size bold black">المشاريع الجديدة</h2>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo get_site_url(); ?>">الرئيسية</a></li>
                <li class="breadcrumb-item active" aria-current="page"><a href="">ماذا عنا </a></li>
            </ol>
        </div>
    </div>
</section>
<!-- //////////////// end bread crumbs /////////////////////// -->

<section class="section-single-blog section-before-footer">
    <div class="container">
        <div class="img-single-blog div-about-us relative mb-md-5 mb-3">
        <img class="img-single-blog-img" src="<?php echo the_field('about_video_image'); ?>" alt="">    
            <div class="header-content">
                <a data-fancybox="gallery" class="product1" href="<?php echo the_field('about_us_video'); ?>">
                    <div class="prod-img ovrlay-relative">
                        <img class="width-img-play animate__zoomIn animate__animated wow" src="<?php echo $uploads['baseurl']; ?>/2021/10/group.png">
                        <div class="ovrlay-video"></div>
                    </div>
                </a>
                <p class="p-header"><?php echo the_field('video_us_title'); ?></p>

            </div>
        </div>


        <div class="row">
            <div class="col-12 col-md-6 ">
                <div class="about-smll-content">

                    <div class="content-img">
                        <img class="" src="<?php echo $uploads['baseurl']; ?>/2021/10/chat1.png" alt="">
                    </div>
                    <h5>رسالتنا </h5>
                    <p>
                       <?php echo the_field('about_us_message'); ?>
                    </p>
                </div>
            </div>

            <div class="col-12 col-md-6 mb-3 mb-md-0">
                <div class="about-smll-content">

                    <div class="content-img">
                        <img class="" src="<?php echo $uploads['baseurl']; ?>/2021/10/eye.png" alt="">
                    </div>
                    <h5>رؤيتنا المستقبلية </h5>
                    <p> <?php the_field('about_vision'); ?> </p>
                </div>
            </div>

        </div>



    </div>

</section>
<!-- /////////////////////||||||||||||||||||||||||||||| Start Footer |||||||||||||||||||||||||||| -->

<?php get_footer(); ?>