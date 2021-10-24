<?php get_header();
$uploads=wp_get_upload_dir();
?>

<!-- ///////////////// first section //////////////////////// -->
<section class="section-header">
         <div class="header-content">
            <a data-fancybox="gallery" class="product1" href="<?php echo the_field('home_video', 'option');?>">
               <div class="prod-img ovrlay-relative">
                  <img class="width-img-play" src="<?php $uploads= wp_upload_dir();echo $uploads['baseurl']; ?>/2021/10/group.png">
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
                              <p><?php the_field('about_us','option'); ?></p>
                           </div>
                        </div>

                        <div class="fleximgp">
                           <div class="content-img">
                              <img src="<?php echo $uploads['baseurl'] ?>/2021/10/money.png" alt="">
                           </div>
                           <div>
                              <p> الرؤية</p>
                              <p><?php the_field('vesion','option'); ?></p>
                           </div>
                        </div>

                        <div class="fleximgp">
                           <div class="content-img">
                              <img src="<?php echo $uploads['baseurl'] ?>/2021/10/chat.png" alt="">
                           </div>
                           <div>
                              <p>الرسالة</p>
                              <p><?php the_field('message','option'); ?></p>
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
                  <?php  $args=array(
                     'post_type'=>'projects',
                     'posts_per_page'=>100,
                     'post_status' => 'publish',
                  ); 
                  $allProjects=new WP_Query($args);
                  
                  if($allProjects->have_posts()){
                  
                     while($allProjects->have_posts()){
                        
                        $allProjects->the_post();?>
               <div class="swiper-slide">
                     <a href="single-project.html">
                     <?php $allProjects->the_post_thumbnail( 'large' , ''); ?>
                     </a>
                     <div class="owl-content">
                        <h4 class="title-size mb-3 bold white aligne-center"><?php  $allProjects->title(); ?></h4>
                        <p class="pragrph-slider mb-4">هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة،لقد تم توليد
                           هذا النص
                           من مولد النص العربى، حيث يمكنك أنتولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلىزيادة
                           عدد
                           الحروف التى يولدها التطبيق</p>
                        <a href="single-project.html"> <span>معرفة المزيد</span> <i
                              class="fas fa-long-arrow-alt-left"></i></a>
                     </div>
                  </div>
                  
               </div>

               <?php } } ?>
            </div>

         </div>
      </section>
      <!-- ///////////////end third section/ have slider projects //////////////// -->



<?php get_footer(); ?>