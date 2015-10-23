<?php
global $base_root;
$subject = SITE_NAME.' Job Posting Payment Instructions';

$message = 'Thank you for submitting a Job Posting. You can download an invoice <a href="'.$base_root.'/sites/default/files/aasa-job-posting-invoice.pdf">here</a>. '

    .'Please make your check payable to '.SITE_NAME.' and mail to: '. "<br /><br />"
    .'Benson Won Department of Surgery Benson Won, MPH'."<br />"
    .'Chief Administrative Officer'. "<br />"
    .'Department of Surgery'. "<br />"
    .'UC Davis School of Medicine'. "<br />"
    .'UC Davis Health System'."<br />"
    .'916-734-7886'."<br />"
    .'http://surgery.ucdmc.ucdavis.edu'."<br /><br />"
    .'Thank you,'. "<br /><br />"
    .SITE_NAME;

$email = new PHPMailer();
$email->From      = SYSTEM_MAIL;
$email->FromName  = SITE_NAME;
$email->Subject   = $subject;
$email->Body      = $message;
$email->IsHTML(true);
$email->AddAddress($submission->data[POST_JOB_EMAIL_FIELD_ID]['value'][0],'');
return $email->Send();

