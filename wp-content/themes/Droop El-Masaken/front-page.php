<?php

/**
 * Template Name: the front
 */
?>
<?php get_header();
$uploads = wp_get_upload_dir();
?>

<!-- ///////////////// first section //////////////////////// -->
<section class="section-header">
    <div class="header-content">
        <a data-fancybox="gallery" class="product1" href="<?php echo the_field('home_video', 'option'); ?>">
            <div class="prod-img ovrlay-relative">
                <img class="width-img-play" src="<?php $uploads = wp_upload_dir();
                                                    echo $uploads['baseurl']; ?>/2021/10/group.png">
                <div class="ovrlay-video"></div>
            </div>
        </a>
        <p class="p-header"><?php the_field('header_title', 'option'); ?></p>
        <div>
            <a href="#" class="call-nw blue-button"> <span>تصفح المشاريع</span> </a>
        </div>
    </div>
    </div>
</section>
<!-- ///////////////// end first section ////////////////-->



<!-- ///////////////// seconde section ////////////////-->
<section class="all-section section-two section-absolute">
    <div class="container over-hideen ltr">
        <div class="row">
            <div class="  col-xs-12  col-sm-12 col-md-7">
                <p class="mb-1 small-title theme-color">عن دروب المساكن</p>
                <h2 class="title-size mb-3 mb-md-5 bold black">إعداد مساحات دريم ليفينج بناء جديد</h2>
                <div class="contentflximg">
                    <div class="contflxrtl">
                        <div class="fleximgp">
                            <div class="content-img">
                                <img src="<?php echo $uploads['baseurl'] ?>/2021/10/chat.png" alt="">
                            </div>
                            <div>
                                <p> من نحن</p>
                                <p><?php the_field('about_us', 'option'); ?></p>
                            </div>
                        </div>

                        <div class="fleximgp">
                            <div class="content-img">
                                <img src="<?php echo $uploads['baseurl'] ?>/2021/10/money.png" alt="">
                            </div>
                            <div>
                                <p> الرؤية</p>
                                <p><?php the_field('vesion', 'option'); ?></p>
                            </div>
                        </div>

                        <div class="fleximgp">
                            <div class="content-img">
                                <img src="<?php echo $uploads['baseurl'] ?>/2021/10/chat.png" alt="">
                            </div>
                            <div>
                                <p>الرسالة</p>
                                <p><?php the_field('message', 'option'); ?></p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-5 aligne-center heightau">
                <div class="heightau relative">
                    <div class="serviceMan">
                        <img class=" a-logo-about " src="<?php echo $uploads['baseurl']; ?>/2021/10/realsteate.png">
                    </div>
                    <img class=" a-logo-about serviceBorder" src="<?php echo $uploads['baseurl']; ?>/2021/10/realsteate2.png">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ///////////////// end seconde section ////////////////-->


<!-- ///////////////// third section have slider new projects ////////////////-->
<section class="all-section section-slider home-slider" id="projects">
    <div class="container">
        <h2 class="title-size mb-3 mb-md-5 bold white aligne-center">المشاريع الجديدة</h2>
        <div class="new-projects">
            <div class="owl-carousel owl-theme new-project-slider">
                <?php $args2 = array(
                    'post_type' => 'projects',
                    'posts_per_page' => 100,
                    'post_status' => 'publish',
                );
                $allProjects2 = new WP_Query($args2);
                if ($allProjects2->have_posts()) {
                    while ($allProjects2->have_posts()) {
                        $allProjects2->the_post();
                ?>
                        <div class="swiper-slide">
                            <a href="<?php the_permalink(); ?>">
                                <?php the_post_thumbnail('large', '') ?>
                            </a>
                            <div class="owl-content">
                                <h4 class="title-size mb-3 bold white aligne-center"> <?php the_title(); ?></h4>
                                <p class="pragrph-slider mb-4"><?php echo  get_the_excerpt(); ?></p>
                                <a href="<?php the_permalink(); ?>"> <span>معرفة المزيد</span> <i class="fas fa-long-arrow-alt-left"></i></a>
                            </div>
                        </div>

                <?php }
                }

                wp_reset_query();
                ?>

            </div>

        </div>
</section>
<!-- ///////////////end third section/ have slider projects //////////////// -->

<!-- /////////////// news section  //////////////// -->
<section class="all-section ">
    <div class="container">
        <p class="mb-1 small-title theme-color aligne-center">اخبار وتحديثات </p>
        <h2 class="title-size mb-3 mb-md-5 bold black aligne-center"> اخبار وتحديثات</h2>
        <div class="row content-news">
            <?php
            $argsPosts = array(
                'post_type' => 'post',
                'post_per_page' => '4',
            );
            $postQuery = new WP_Query($argsPosts);
            $postQuery2=$postQuery;
            if ($postQuery->found_posts == 1) {

                while ($postQuery->have_posts()) {
                    $postQuery->the_post();
            ?>
                    <div class="col-12 mb-3 mb-md-0 col-md-12">
                        <div class="relative content-large-news">
                            <img class='width100' src="img/newsbulding.png" alt="">
                            <div class="div-large-news">
                                <div class="flexx">
                                    <p class="time_p"> <i class="far fa-calendar-alt"> </i> <span>july 24 2021</span></p>
                                    <p class="service_comments">
                                        <span><i class="fas fa-comment-dots"></i></span>
                                        15 تعليق
                                    </p>
                                </div>
                                <p class="theme-color p-news-abs"> كيف تستعد لمسارك الأول في مسارك مستهلكه - تركز </p>
                                <a href="#" class="block small-title theme-color uder-line">قراءة المزيد</a>
                            </div>
                        </div>
                    </div>
                <?php
                }
            } else {
                while ($postQuery->have_posts()) {
                    $postQuery->the_post();
                ?>
                    <div class="col-12 mb-3 mb-md-0 col-md-6">
                        <div class="relative content-large-news">
                            <?php $postQuery->the_post_thumbnail('large', array('class' => 'width100')); ?>
                            <div class="div-large-news">
                                <div class="flexx">
                                    <p class="time_p"> <i class="far fa-calendar-alt"> </i> <span>july 24 2021</span></p>
                                    <p class="service_comments">
                                        <span><i class="fas fa-comment-dots"></i></span>
                                        15 تعليق
                                    </p>
                                </div>
                                <p class="theme-color p-news-abs"> <?php $postQuery->the_title(); ?></p>
                                <a href="#" class="block small-title theme-color uder-line">قراءة المزيد</a>
                            </div>
                        </div>
                    </div>
                <?php
                break;
                }
                $i = 0;
                while ($postQuery2->have_posts()) {
                    $postQuery2->the_post();
                    echo $postQuery2->found_posts.'---->'. $postQuery->found_posts;
                    if ($i == 0) {
                        echo $postQuery2->found_posts.'---->'. $postQuery->found_posts;
                        continue;
                    }
                    else{
                        echo $i;
               ?>
                    
                        <div class="col-12 col-md-6">
                            <div class="relative mb-3">
                                <?php $postQuery2->the_post_thumbnail('large', array('class' => 'width-smll-news')); ?>
                                <div class="div-smll-news animate__animated animate__rubberBand">
                                    <div class="flexx">
                                        <p class="time_p"> <i class="far fa-calendar-alt"> </i> <span>july 24 2021</span></p>
                                        <p class="service_comments">
                                            <span><i class="fas fa-comment-dots"></i></span>
                                            15 تعليق
                                        </p>
                                    </div>
                                    <p class="theme-color p-news-abs"> كيف تستعد لمسارك الأول في مسارك مستهلكه - تركز </p>
                                    <a href="#" class="block small-title theme-color uder-line">قراءة المزيد</a>
                                </div>
                            </div>
                            <div class="relative mb-3">
                                <img class='width-smll-news' src="img/proj2.png" alt="">
                                <div class="div-smll-news animate__animated animate__rubberBand">
                                    <div class="flexx">
                                        <p class="time_p"> <i class="far fa-calendar-alt"> </i> <span>july 24 2021</span></p>
                                        <p class="service_comments">
                                            <span><i class="fas fa-comment-dots"></i></span>
                                            15 تعليق
                                        </p>
                                    </div>
                                    <p class="theme-color p-news-abs"> كيف تستعد لمسارك الأول في مسارك مستهلكه - تركز </p>
                                    <a href="#" class="block small-title theme-color uder-line">قراءة المزيد</a>
                                </div>
                            </div>
                            <div class="relative mb-3">
                                <img class='width-smll-news' src="img/proj3.png" alt="">
                                <div class="div-smll-news animate__animated animate__rubberBand">
                                    <div class="flexx">
                                        <p class="time_p"> <i class="far fa-calendar-alt"> </i> <span>july 24 2021</span></p>
                                        <p class="service_comments">
                                            <span><i class="fas fa-comment-dots"></i></span>
                                            15 تعليق
                                        </p>
                                    </div>
                                    <p class="theme-color p-news-abs"> كيف تستعد لمسارك الأول في مسارك مستهلكه - تركز </p>
                                    <a href="#" class="block small-title theme-color uder-line">قراءة المزيد</a>
                                </div>
                            </div>
                        </div>
            <?php
                    }
                    $i++;
                }
            }



            ?>




        </div>


    </div>
</section>

<!-- ///////////////end news section//////////////// -->






<?php get_footer(); ?>