<?php get_header(); 
$uploads=wp_get_upload_dir();
?>
<main role="main">

<!-- /////////////////////||||||||||||||||||||||||||||| End Navbar |||||||||||||||||||||||||||| -->

<!-- ////////////////start project ////////////////////////// -->

<!-- //////////////// start bread crumbs /////////////////////// -->
<section class="all-section section-breadcumbs">
   <div aria-label="breadcrumb">
      <div class="container">
         <h2 class="title-size bold black">المشاريع الجديدة</h2>
         <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo get_site_url(); ?>">الرئيسية</a></li>
         </ol>
      </div>
   </div>
</section>
<!-- //////////////// end bread crumbs /////////////////////// -->

<section class="all-section section-before-footer">
   <div class="container aligne-center ">
      <div class="content-img-rocket aligne-center">
         <img class="error404 " src="<?php echo $uploads['baseurl'] ?>/2021/10/404.png" alt="">
         <img class="rocket" src="<?php echo $uploads['baseurl'] ?>/2021/10/rocket.png" alt="">
         <img class="planet1" src="<?php echo $uploads['baseurl'] ?>/2021/10/planet1.png" alt="">
         <img class="planet2" src="<?php echo $uploads['baseurl'] ?>/2021/10/planet2.png" alt="">
      </div>
      
      <div class="content-p-error">
         <p class="oops wow bold animate__animated animate__zoomInDown">Oops</p>
         <p class="error-here">هناك خطا ما حدث</p>
         <p class="error-p">الصفحة التي تبحث عنها لا موجودة أو حدث خطأ آخر</p>
         <div class="aligne-center">  <a cl href="<?php echo get_site_url(); ?>" class="call-nw blue-button responsive-none m-auto"> <i class="fas fa-long-arrow-alt-left"></i><span> الذهاب للرئيسية</span> </a></div>
      </div>
   </div>

</section>

</main>
<?php get_footer(); ?>