<?php
/**
 * Template Name: Projects Page
 */
get_header();
?>
   <section class="all-section section-breadcumbs">
         <div aria-label="breadcrumb">
            <div class="container">
               <h2 class="title-size bold black">المشاريع الجديدة</h2>
               <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="<?php echo get_site_url(); ?>">الرئيسية</a></li>
                  <li class="breadcrumb-item active" aria-current="page"><a href="">المشاريع </a>
                  </li>
               </ol>
            </div>
         </div>
      </section>
      <!-- //////////////// end bread crumbs /////////////////////// -->

      <section
         class="section-single-blog section-blogs section-before-footer wow animate__animated animate__slideInUp  ">
         <div class="container">
            <div class="row">
                <?php $args=array(
                    'post_type'=>'projects',
                    'posts_per_page'=>100,
                    'post_status' => 'publish',
                ); 
                $allProjects=new WP_Query($args);
                if($allProjects->have_posts()){
while($allProjects->have_posts()){
    $allProjects->the_post();
    ?>
    
               <div class="col-12 col-md-6 div-blogs ">
                  <div class="content-blogsss">
                     <a href=" <?php the_permalink() ?> ">
                     <?php the_post_thumbnail( 'large', '' ) ?>
                     </a>
                     <div class="flex content-comment-date">
                        <p>
                           <i class="far fa-calendar-alt"></i>
                           <span> <?php the_date( 'F j,Y' ); ?> </span>
                        </p>
                        <p>
                           <i class="fas fa-comment-dots"></i>
                           <span><?php comments_popup_link('zero تعليق ','1 تعليق','% تعليقات','comment-url-class','comment Disabled'); ?></span>
                        </p>

                     </div>
                     <p class="p-blogss mb-2 mb-md-3"><?php the_title(); ?></p>
                     <a class="read-more" href="<?php the_permalink(); ?>">قراءة المزيد</a>
                  </div>

               </div>
               <?php

wp_reset_query();
}
                }
                ?>

            
            </div>
         </div>

      </section>
<?php get_footer(); ?>