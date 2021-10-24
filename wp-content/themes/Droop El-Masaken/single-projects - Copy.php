<?php get_header(); ?>
 
<!-- //////////////// start bread crumbs /////////////////////// -->
<section class="all-section section-breadcumbs ">
    <div aria-label="breadcrumb">
        <div class="container">
            <h2 class="title-size bold black">المشاريع الجديدة</h2>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo get_site_url(); ?>">الرئيسية</a></li>
                <li class="breadcrumb-item active" aria-current="page"><a href="<?php echo get_site_url() . '/المشاريع'; ?>">المشاريع </a></li>
            </ol>
        </div>
    </div>
</section>
<!-- //////////////// end bread crumbs /////////////////////// -->
<!-- /////////////////start first section after navbar////////////////  -->
<section class=" section-single-projects">
  
         <div class="owl-carousel owl-theme latest_matches">
         <?php $images = get_field('project_slider');
        foreach ($images as $img) {
        ?>
            <div class="realsteate1">
                <div class="flex_one">
                    <img src="<?php echo $img; ?>" alt="single-project" title="single-project">
                </div>
            </div>
        <?php } ?>
         <!-- 
         <div class="realsteate1">
               <div class="flex_one">
                  <img src="img/realsteate.png" alt="single-project" title="single-project">
               </div>
           
            </div>
            <div class="realsteate1">
               <div class="flex_one">
                  <img src="img/realsteate2.png" alt="single-project" title="single-project">
               </div>
               
            </div>
            <div class="realsteate1">
               <div class="flex_one">
                  <img src="img/proj3.png" alt="single-project" title="single-project">
               </div>
            </div>
-->
        </div>

      </section>
<!-- ////////////////////end first section after navbar////////////////////// -->
<!-- /////////////////srtart last section ////////////////  -->
<section class=" section-before-footer  ">
    <div class="container">
    <?php if(have_posts()){
while(have_posts()){
the_post();
?>
        <div class="flex content-comment-date mt-3 mb-3">
            <p>
                <i class="far fa-calendar-alt"></i>
                <span><?php the_date('F j, Y'); ?></span>
            </p>
            <p>
                <i class="fas fa-comment-dots"></i>
                <span><?php if(get_comments_number( get_the_ID() )==0) {echo 'لا يوجد تعليقات ';}
                elseif(get_comments_number( get_the_ID() )==1){echo 'تعليق واحد';}
                elseif(get_comments_number( get_the_ID() )==2){echo 'تعليقان';}
                else{
                    echo get_comments_number( get_the_ID() ).' تعليق  ';
                }
                ?></span>
            </p>
        </div>
        <div class="row">
            <div class="col-md-12 col-lg-8">



                <h3 class="h3-single-blog"><?php the_title(); ?></h3>
                <div class="content-p-blog">
                    <div class="div-padding-single">
                        <p class="single-project-title">وصف المشروع </p>
                        <p class="color-p-single-proj">
<?php the_content(); ?>
                        </p>

                    </div>
                    <?php
}
}
?>

                    <div class="div-padding-single ">
                       
                        <?php if(get_field('building_number') || get_field('rooms') || get_field('space') || get_field('building_year')){ ?>
                         <p class="single-project-title">تفاصيل المشروع </p>
                            <div class="project-details">
                            <div class="row">
                            <?php if( get_field('building_number')){ ?>
                                <div class="col-md-6">
                                    <div class="flx-content-desc">
                                       
                                        <span class="desription-data">رقم العقار</span>
                                        <span class="desription-data"><?php echo get_field('building_number'); ?></span>
                                 
                                    </div>
                                </div>
                                <?php } ?>
                                <?php if( get_field('space')){ ?>
                                <div class="col-md-6">
                                    <div class="flx-content-desc">
                                        <span class="desription-data">مساحة المنزل</span>
                                        <span class="desription-data"><?php echo  get_field('space'); ?></span>
                                    </div>
                                </div>
                                <?php } ?>

                                <?php if( get_field('rooms')){ ?>
                                <div class="col-md-6">
                                    <div class="flx-content-desc">
                                        <span class="desription-data">الغرف</span>
                                        <span class="desription-data"><?php echo get_field('rooms'); ?></span>
                                    </div>
                                </div>
                                <?php } ?>
                                <?php if( get_field('building_year')){ ?>
                                <div class="col-md-6">
                                    <div class="flx-content-desc">
                                        <span class="desription-data">سنة البناء</span>
                                        <span class="desription-data"><?php echo get_field('building_year'); ?></span>
                                    </div>
                                </div>
                                <?php } ?>
                            </div>
                        </div>
                        <?php } ?>
                        <div class="div-padding-single edit-padding-col">
                        <p class="single-project-title">معرض الصور</p>
                        <div class="row img-flats">
                           <div class="col-md-6 ">
                              <img class="flat1" src="img/flat2.png" alt="">
                           </div>
                           <div class="col-md-6">
                              <img class="flat2" class="block mb-2" src="img/flat1.png" alt="">
                              <img class="block flat3" src="img/flat3.png" alt="">
                           </div>
                        </div>
                    </div>
                    
                    <div class="div-padding-single">
                        <p class="single-project-title">الموقع علي الخريطة </p>
                        <div class="single-project-map" id="map"> </div>
                    </div>
                    <div class="div-padding-single">
                        <p class="single-project-title"> فيديو عن المشروع </p>
                        <div class="img-single-blog div-about-us relative mb-md-5 mb-3">
                            <img class="img-single-blog-img" src="img/realsteat22.png" alt="">
                            <div class="header-content">
                                <a data-fancybox="gallery" class="product1" href="img/2.mp4">
                                    <div class="prod-img ovrlay-relative">
                                        <img class="width-img-play" src="img/video.png" style="visibility: visible;">
                                        <div class="ovrlay-video"></div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="div-padding-single">
                        <p class="single-project-title"> تعليقات علي المشروع </p>
                        <div class="box-content-testmonials">
                            <div class="box-top">
                                <!--profile----->
                                <div class="profile">
                                    <!--img---->
                                    <div class="profile-img">
                                        <img src="img/3tef.jpg">
                                    </div>
                                    <!--name-and-username-->
                                    <div class="name-user">
                                        <strong>ahmed mohamed</strong>
                                        <span>ui / ux</span>
                                    </div>
                                </div>
                                <!--reviews------>
                                <div class="reviews">
                                    <i class="fas fa-star" aria-hidden="true"></i>
                                    <i class="fas fa-star" aria-hidden="true"></i>
                                    <i class="fas fa-star" aria-hidden="true"></i>
                                    <i class="fas fa-star" aria-hidden="true"></i>
                                    <i class="far fa-star" aria-hidden="true"></i>
                                    <!--Empty star-->
                                </div>
                            </div>
                            <div class="client-comment">
                                <p>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد
                                    النصيمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة</p>
                            </div>
                        </div>
                    </div>
                    <div class="div-padding-single">
                        <form class="contact-us-form form-single-project relative" action="">
                            <p class="single-project-title">اكتب تعليق لك</p>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group form-log-in relative">
                                        <input type="text" class="effect-8  form-control" id="name" placeholder="الاسم  *  " name="name">
                                        <span class="focus-border">
                                            <i></i>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group form-log-in relative">
                                        <input type="email" class="effect-8  form-control" id="name" placeholder="الايميل" name="name">
                                        <span class="focus-border">
                                            <i></i>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group form-log-in relative">
                                        <textarea class="effect-8  form-control" id="name" placeholder=" الرسالة  ... " name="name"></textarea>
                                        <span class="focus-border">
                                            <i></i>
                                        </span>
                                    </div>
                                </div>



                                <div class="col-12 aligne-center mb-3">
                                    <div class="rating">
                                        <ul>
                                            <li class="current">
                                                <svg>
                                                    <use xlink:href="#star"></use>
                                                </svg>
                                            </li>
                                            <li>
                                                <svg>
                                                    <use xlink:href="#star"></use>
                                                </svg>
                                            </li>
                                            <li>
                                                <svg>
                                                    <use xlink:href="#star"></use>
                                                </svg>
                                            </li>
                                            <li><span></span>
                                                <svg>
                                                    <use xlink:href="#star"></use>
                                                </svg>
                                            </li>
                                            <li><span></span>
                                                <svg>
                                                    <use xlink:href="#star"></use>
                                                </svg>
                                            </li>
                                        </ul>
                                        <div><span>
                                                <svg>
                                                    <use xlink:href="#star"></use>
                                                </svg></span></div>
                                    </div>
                                    <svg xmlns="http://www.w3.org/2000/svg" style="display: none">
                                        <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 36 34" id="star">
                                            <path fill="currentColor" d="M19.6859343,0.861782958 L24.8136328,8.05088572 C25.0669318,8.40601432 25.4299179,8.6717536 25.8489524,8.80883508 L34.592052,11.6690221 C35.6704701,12.021812 36.2532905,13.1657829 35.8938178,14.2241526 C35.8056709,14.4836775 35.6647294,14.7229267 35.4795411,14.9273903 L29.901129,21.0864353 C29.5299163,21.4962859 29.3444371,22.0366367 29.3872912,22.5833831 L30.1116131,31.8245163 C30.1987981,32.9368499 29.3506698,33.9079379 28.2172657,33.993502 C27.9437428,34.0141511 27.6687736,33.9809301 27.4085205,33.8957918 L18.6506147,31.0307612 C18.2281197,30.8925477 17.7713439,30.8925477 17.3488489,31.0307612 L8.59094317,33.8957918 C7.51252508,34.2485817 6.34688429,33.6765963 5.98741159,32.6182265 C5.90066055,32.3628116 5.86681029,32.0929542 5.88785051,31.8245163 L6.61217242,22.5833831 C6.65502653,22.0366367 6.46954737,21.4962859 6.09833466,21.0864353 L0.519922484,14.9273903 C-0.235294755,14.0935658 -0.158766688,12.8167745 0.690852706,12.0755971 C0.899189467,11.8938516 1.14297067,11.7555303 1.40741159,11.6690221 L10.1505113,8.80883508 C10.5695458,8.6717536 10.9325319,8.40601432 11.1858308,8.05088572 L16.3135293,0.861782958 C16.9654141,-0.0521682813 18.2488096,-0.274439442 19.1800736,0.365326425 C19.3769294,0.500563797 19.5481352,0.668586713 19.6859343,0.861782958 Z">
                                            </path>
                                        </symbol>
                                        <path class="shadow" d="M18.7022469,29.7633426 L29.1611722,33.6861584 C28.8859085,33.8576358 28.5650147,33.9672494 28.2172657,33.993502 C27.9437428,34.0141511 27.6687736,33.9809301 27.4085205,33.8957918 L18.6506147,31.0307612 C18.2281197,30.8925477 17.7713439,30.8925477 17.3488489,31.0307612 L8.59094317,33.8957918 C7.98083887,34.0953792 7.34281791,33.9989813 6.83864817,33.6859784 L17.2977531,29.7633426 C17.7505234,29.5935537 18.2494766,29.5935537 18.7022469,29.7633426 Z">
                                        </path>
                                    </svg>
                                </div>
                                <div class="col-md-12">
                                    <button type="submit" class="call-nw blue-button"><i class="fas fa-long-arrow-alt-left"></i> <span> ارسل التعليق</span>
                                    </button>
                                </div>
                            </div>

                        </form>

                    </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-4">
                  <form class="contact-us-form form-single-project relative" action="">
                     <p>ابعت رسالة للحجز والاستفسار</p>
                     <div class="form-group form-log-in relative">
                        <input type="text" class="effect-8  form-control" id="name" placeholder="الاسم  *  "
                           name="name">
                        <span class="focus-border">
                           <i></i>
                        </span>

                     </div>
                     <div class="form-group form-log-in relative">
                        <input type="email" class="effect-8  form-control" id="name" placeholder="الايميل" name="name">
                        <span class="focus-border">
                           <i></i>
                        </span>

                     </div>

                     <div class="form-group form-log-in relative">
                        <textarea class="effect-8  form-control" id="name" placeholder=" الرسالة  ... "
                           name="name"></textarea>
                        <span class="focus-border">
                           <i></i>
                        </span>

                     </div>

                     <button type="submit" class="call-nw blue-button"> <span> ارسال الرسالة</span>
                     </button>
                  </form>
                  <div class="div-padding-single">
                     <p
                        class="single-project-title ">
                        مشاريع مشابهة </p>
                     <div class="relative content-projs mb-3">
                        <a href="single-project.html">
                           <img class='width-smll-news' src="img/proj1.png" alt="">
                        </a>
                        <div class="div-smll-news animate__animated animate__rubberBand edit-icon">
                           <div class="flexx">
                              <p class="time_p"> <i class="far fa-calendar-alt"> </i> <span>july 24 2021</span></p>
                              <p class="service_comments">
                                 <span><i class="fas fa-comment-dots"></i></span>
                                 15 تعليق
                              </p>
                           </div>
                           <p class="theme-color p-news-abs"> كيف تستعد لمسارك الأول في مسارك مستهلكه - تركز </p>
                           <a href="single-project.html" class="block small-title theme-color uder-line">قراءة
                              المزيد</a>
                        </div>
                     </div>
                     <div class="relative content-projs mb-3">
                        <a href="single-project.html">
                           <img class='width-smll-news' src="img/proj1.png" alt="">
                        </a>
                        <div class="div-smll-news animate__animated animate__rubberBand edit-icon">
                           <div class="flexx">
                              <p class="time_p"> <i class="far fa-calendar-alt"> </i> <span>july 24 2021</span></p>
                              <p class="service_comments">
                                 <span><i class="fas fa-comment-dots"></i></span>
                                 15 تعليق
                              </p>
                           </div>
                           <p class="theme-color p-news-abs"> كيف تستعد لمسارك الأول في مسارك مستهلكه - تركز </p>
                           <a href="single-project.html" class="block small-title theme-color uder-line">قراءة
                              المزيد</a>
                        </div>
                     </div>
                  </div>
               </div>
        </div>
</section>

<!-- /////////////////end last section ////////////////  -->

  <!-- ///////////////special for this page /////////////////// -->
  

<?php get_footer(); ?>