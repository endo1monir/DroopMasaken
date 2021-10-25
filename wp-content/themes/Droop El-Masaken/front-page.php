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
            $postQuery2 = $postQuery;
            if ($postQuery->found_posts == 1) {

                while ($postQuery->have_posts()) {
                    $postQuery->the_post();
            ?>
                    <div class="col-12 mb-3 mb-md-0 col-md-12">
                        <div class="relative content-large-news">

                            <?php the_post_thumbnail('meduim', array('class' => 'width100')); ?>

                            <div class="div-large-news">
                                <div class="flexx">
                                    <p class="time_p"> <i class="far fa-calendar-alt"> </i> <span><?php the_date('F j, Y'); ?></span></p>
                                    <p class="service_comments">
                                        <span><i class="fas fa-comment-dots"></i></span>
                                        <?php comments_popup_link('لايوجد تعليق ', '1 تعليق', '% تعليقات', 'comment-url-class', 'comment Disabled'); ?>
                                    </p>
                                </div>
                                <p class="theme-color p-news-abs"> <?php the_title(); ?> </p>
                                <a href="<?php the_permalink(); ?>" class="block small-title theme-color uder-line">قراءة المزيد</a>
                            </div>
                        </div>
                    </div>
                <?php
                }
                wp_reset_query();
            } else {
                $argumentsPost = array(
                    'post_type' => 'post',
                    'post_per_page' => '4',
                );
                $post_list = get_posts($argumentsPost);
                $execludedID = $post_list[0]->ID;
                //echo $execludedID;
                for ($i = 0; $i < 1; $i++) {

                ?>
                    <div class="col-12 mb-3 mb-md-0 col-md-6">
                        <div class="relative content-large-news">
                            <img class='width100' src="<?php echo get_the_post_thumbnail_url($post_list[$i]->ID, 'large'); ?>" alt="">
                            <div class="div-large-news">
                                <div class="flexx">
                                    <p class="time_p"> <i class="far fa-calendar-alt"> </i> <span><?php echo get_the_date('F j, Y', $post_list[$i]->ID); ?></span></p>
                                    <p class="service_comments">
                                        <span><i class="fas fa-comment-dots"></i></span>
                                        <?php echo get_comments_number($post_list[$i]->ID); ?> تعليق
                                    </p>
                                </div>
                                <p class="theme-color p-news-abs"> <?php echo $post_list[$i]->post_title; ?> </p>
                                <a href="<?php echo get_permalink($post_list[$i]->ID); ?>" class="block small-title theme-color uder-line">قراءة المزيد</a>
                            </div>
                        </div>
                    </div>

                <?php
                }
                wp_reset_query();
                $argumentsPost2 = array(
                    'post_type' => 'post',
                    'post_per_page' => '4',
                    'post__not_in' => array($execludedID)
                );
                $newList = get_posts($argumentsPost2);

                ?>
                <div class="col-12 col-md-6">
                    <?php for ($i = 0; $i < count($newList); $i++) {  ?>
                        <div class="relative mb-3">

                            <img class='width-smll-news' src="<?php echo get_the_post_thumbnail_url($newList[$i]->ID, 'large'); ?>" alt="">
                            <div class="div-smll-news animate__animated animate__rubberBand">
                                <div class="flexx">
                                    <p class="time_p"> <i class="far fa-calendar-alt"> </i> <span><?php echo get_the_date('F j, Y', $newList[$i]->ID); ?></span></p>
                                    <p class="service_comments">
                                        <span><i class="fas fa-comment-dots"></i></span>
                                        <?php echo get_comments_number($newList[$i]->ID); ?> تعليق
                                    </p>
                                </div>
                                <p class="theme-color p-news-abs"> <?php echo $newList[$i]->post_title; ?> </p>
                                <a href="<?php echo get_permalink($newList[$i]->ID); ?>" class="block small-title theme-color uder-line">قراءة المزيد</a>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            <?php

            }
wp_reset_query();

            ?>







        </div>


    </div>
</section>

<!-- ///////////////end news section//////////////// -->


<!-- ////////////////section testmonials//////////////////// -->

<section class="all-section sec-testmonials ">
    <div class="all-section content-bac-img">
        <div class="container">
            <p class="mb-1 small-title white">العميل - دروب - المسكن</p>
            <h2 class="title-size mb-3 mb-md-5 bold white flex justifay-start">
                <p><span class="block"> انظر ماذا ؛</span><span class="block"> يقول عنا</span> </p>
                <span>عملائنا</span>
            </h2>

            <div class="content-testmonials-slider">
                <div class="tesmonials-slider swiper-container">
                    <div class="swiper-wrapper">
<?php 
$reviews=array(
'post_type'=>'testonomiles',
'post_per_page'=>'4',
);
$revs=new WP_Query($reviews);
if($revs->have_posts()){
    while($revs->have_posts()){

   $revs->the_post();
?>
                        <div class="swiper-slide">
                            <div class="slider-content">
                                <div class="flex-star">
                                    <div class="flex-name">
                                      <?php the_post_thumbnail( 'thumbnail', ''); ?>
                                        <div>
                                            <b class="block"><?php the_title(); ?></b>
                                            <span class="block"><?php the_field('job'); ?></span>
                                        </div>
                                    </div>
                                    <ul class="star-testmonials flex">
                                        <li>
                                            <i class="fas fa-star gold"></i>
                                            <i class="fas fa-star gold"></i>
                                            <i class="fas fa-star gold"></i>
                                            <i class="fas fa-star gold"></i>
                                            <i class="fas fa-star gold"></i>
                                        </li>
                                    </ul>
                                </div>
                                <p class="p-tesmonials"><?php the_field('the_rev'); ?></p>

                            </div>
                        </div>

<?php
                    }

                }
                ?>
                        <!-- Add Arrows -->
                        <!--   <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div> -->

                    </div>
                </div>
            </div>
        </div>
</section>
<!-- ////////////////end section testmonials//////////////////// -->




<?php get_footer(); ?>