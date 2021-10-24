<?php 
get_header();
?>
   <!-- ////////////////start project ////////////////////////// -->

      <!-- //////////////// start bread crumbs /////////////////////// -->
      <section class="all-section section-breadcumbs">
         <div aria-label="breadcrumb">
            <div class="container">
               <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="<?php echo get_site_url(); ?>">الرئيسية</a></li>
                  <li class="breadcrumb-item active" aria-current="page"><a href="<?php echo get_site_url().'/تواصل-معنا'; ?>">تواصل معنا</a></li>
               </ol>
            </div>
         </div>
      </section>
      <!-- //////////////// end bread crumbs /////////////////////// -->

      <section class="section-single-blog section-before-footer wow animate__animated animate__slideInUp ">
         <div class="container">
         <?php 
         if(have_posts()){
             while(have_posts()){
                 the_post();
         the_post_thumbnail( 'large', array('class'=>'img-single-blog'));
         ?>
            <div class="flex content-comment-date mt-3 mb-3">
               <p>
                  <i class="far fa-calendar-alt"></i>
                  <span><?php the_date( 'F j, Y' ); ?></span>
               </p>
               <p>
                  <i class="fas fa-comment-dots"></i>
                  <span><?php comments_popup_link('لايوجد تعليق ','1 تعليق','% تعليقات','comment-url-class','comment Disabled'); ?></span>
               </p>
            </div>
            <h3 class="h3-single-blog mt-2 mb-md-5 mb-3"><?php the_title(); ?></h3>
            <div class="content-p-blog">
               <i></i>
               <p>
            <?php the_content(); ?>   
            </p>

            </div>
            <?php
            
        }
    }
    ?> 
         </div>

      </section>
      <!-- /////////////////////||||||||||||||||||||||||||||| Start Footer |||||||||||||||||||||||||||| -->
<?php get_footer(); ?>