<?php
$path=preg_replace('/wp-content.*$/','',__DIR__);
require_once($path."wp-load.php");
if(isset($_POST['contactSubmit']) && $_POST['contactSubmit'] == 1){
$fname=sanitize_text_field(  $_POST['Fname'] );
$sname=sanitize_text_field(  $_POST['Sname'] );
$email=sanitize_email($_POST['email']);
$message=sanitize_text_field( $_POST['message'] );

$to="andrew.monir@yahoo.com";
$subj="test";
$message='FirstName : '. $fname .' <br> ';
$message='SecondName : '. $sname .' <br> ';
$message .='email : '. $email .' <br> ';
$message .='message : '. $message .' <br> ';
wp_mail( $to, $subj, $message);
$return['success']="1";
$return['mess']="تم استلام رسالتك الان , سنرد عليك في اقرب وقت";
echo json_encode($return);
}