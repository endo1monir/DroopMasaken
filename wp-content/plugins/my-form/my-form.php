<?php
/*
* Plugin Name: My Form
* Description: this my form
**/
/**
 * 1- write the form code as short code
 * 2- the process page that it submits to
 */
function myformsDesign(){
$content=' <div class="contact-us-form">
<div class="row">
   <div class="col-md-6 col-12 ">
      <label for="">الاسم *</label>
      <div class="form-group form-log-in relative">
         <input type="text" class="effect-8  form-control" id="Fname"
            placeholder="اكتب اسمك هنا ... " name="name">
         <span class="focus-border">
            <i></i>
         </span>
      </div>
   </div>
   <div class="col-md-6 col-12 ">
      <label for="">رقم التليفون *</label>
      <div class="form-group form-log-in relative">
         <input type="number" class="effect-8  form-control" id="Sname"
            placeholder="اكتب رقم تليفون هنا ... " name="name">
         <span class="focus-border">
            <i></i>
         </span>
      </div>
   </div>
   <div class="col-12 ">
      <label for="">الايميل *</label>
      <div class="form-group form-log-in relative">
         <input type="email" class="effect-8  form-control" id="email"
            placeholder="اكتب الايميل هنا " name="name">
         <span class="focus-border">
            <i></i>
         </span>
      </div>
   </div>
   <div class=" col-12 ">
      <label for="">الرسالة *</label>
      <div class="form-group form-log-in relative">
         <textarea class="effect-8  form-control" id="name" placeholder="اكتب الرسالة هنا ... "
            name="name" id="mess"></textarea>
         <span class="focus-border">
            <i></i>
         </span>
      </div>
   </div>
</div>
<button type="submit" class="call-nw blue-button" onclick="submit_my_form()"> <span> ارسال الرسالة</span> </a>
</div>';
// // $content.='<form method="post" action>';


// // $content.='</form>';
// $content.='<label for="your_name">Your Name</label>';
// $content.='<input type="text" name="name" id="thename"/>';


// $content.='<label for="your_email">Your email</label>';
// $content.='<input type="email" name="phone" id="email"/>';


// $content.='<label for="your_phone">phone Number</label>';
// $content.='<input type="phone" name="phone" id="phone"/>';




// $content.='<input type="submit" value="send" name="send" id="contactSubmit" onclick="submit_my_form()">';
// $content.='<div id="myres"></div>';
return $content;
}
add_shortcode( 'Andrew_form', 'myformsDesign' );

function myScripts(){
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="<?php echo plugins_url( 'js/myFormhandle.js', __FILE__ ); ?>"></script>
<?php
}
add_action( 'wp_footer', 'myScripts');
?>