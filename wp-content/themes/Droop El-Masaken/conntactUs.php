<?php
/**
 *Template Name: Contact Us 
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
                  <li class="breadcrumb-item active" aria-current="page"><a href="">تواصل معنا</a></li>
               </ol>
            </div>
         </div>
      </section>
      <!-- //////////////// end bread crumbs /////////////////////// -->

      <!-- /////////////form contact us section /////////////// -->
      <section class="all-section section-contact-page">
         <div class="container">
            <div class="row">
               <div class="col-12 col-md-7">
               <form class="contact-us-form" action="index.html">
                     <div class="row">
                        <div class="col-md-6 col-12 ">
                           <div class="form-group form-log-in relative">
                              <input type="text" class="effect-8  form-control" id="name" placeholder="الاسم الاول *  "
                                 name="name">
                              <span class="focus-border">
                                 <i></i>
                              </span>
                           </div>
                        </div>
                        <div class="col-md-6 col-12 ">
                           <div class="form-group form-log-in relative">
                              <input type="text" class="effect-8  form-control" id="name" placeholder="الاسم الثاني"
                                 name="name">
                              <span class="focus-border">
                                 <i></i>
                              </span>
                           </div>
                        </div>
                        <div class="col-md-6 col-12 ">
                           <div class="form-group form-log-in relative">
                              <input type="number" class="effect-8  form-control" id="name"
                                 placeholder=" رقم التليفون *  " name="name">
                              <span class="focus-border">
                                 <i></i>
                              </span>
                           </div>
                        </div>
                        <div class="col-md-6 col-12 ">
                           <div class="form-group form-log-in relative">
                              <input type="email" class="effect-8  form-control" id="name" placeholder="الايميل "
                                 name="name">
                              <span class="focus-border">
                                 <i></i>
                              </span>
                           </div>
                        </div>
                        <div class=" col-12 ">
                           <div class="form-group form-log-in relative">
                              <textarea class="effect-8  form-control" id="name" placeholder="اكتب الرسالة هنا ... "
                                 name="name"></textarea>
                              <span class="focus-border">
                                 <i></i>
                              </span>
                           </div>
                        </div>
                     </div>
                     <button type="submit" class="call-nw blue-button"> <span> ارسال الرسالة</span> </a>
                  </form>
               </div>
               <div class="col-12 col-md-5">
                  <div class="foot1 section-foot-contact">
                     <p class="header-secondry-section mb-2 mt-md-0 mt-3">  لا تتردد في الاتصال بنا لأي استفسار.</p>
                     <ul class="linksfooter">
                        <li><img src="<?php echo $uploads['baseurl']; ?>/2021/10/Location.png" alt=""><span><?php echo the_field('con_adress'); ?> </a></li>
                        <li><img src="<?php echo $uploads['baseurl']; ?>/2021/10/Call.png" alt=""><a href="tel:<?php echo the_field('con_phone'); ?>"><?php echo the_field('con_phone'); ?></a></li>
                        <li><img src="<?php echo $uploads['baseurl']; ?>/2021/10/Mail.png" alt=""><a
                              href="mailto:<?php echo the_field('conn_email'); ?>"><?php echo the_field('conn_email'); ?></a></li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- /////////////end form contact us section /////////////// -->


<?php get_footer(); ?>