<?php
mail($user->mail,'Reminder Email for AAAP Renewal' ,'Reminder Email.'."\r\n"
//.'It is time to renew your '.SITE_NAME.' '.date("Y",$config_data['now']).' membership. An early dues payment rate of '.' available now through'
  . 'Go here to pay by CreditCard. '.$base_root.'/renewal-membership'."\r\n"
  .'If you want to pay by check please make check payable to: "'.SITE_NAME.'" and send to:'. "\r\n"
  .'Mail Checks to:'. "\r\n"
    .'Eileen Drames'."\r\n"
    .'The Children’s Hospital of Philadelphia'. "\r\n"
    .'General Pediatrics, 12NW Room 57'. "\r\n"
    .'34th and Civic Center Boulevard'. "\r\n"
    .'Philadelphia, PA 19104.'."\r\n \r\n"
    .'Thank you, '. "\r\n"
  .SITE_NAME, HEADERS);
