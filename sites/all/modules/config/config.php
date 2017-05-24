<?php

/*
 * Get the current node
 */
//define('SUCCESS_PAGE_CHECK_PAYMENT','/thank-you'); // url check payment
//payment stuff
define('PRODUCT_MEMBERSHIP_TYPE', 'product');
define('PRODUCT_MEMBERSHIP_ID', '13');
define('PRODUCT_MEMBERSHIP_RENEWAL_ID', '132');
define('PRODUCT_EVENT_TYPE', 'event');

//Private Pages
define('SYSTEM_MAIL', 'aaap@aaap.com');

define('ADMIN_MAIL', 'drames@email.chop.edu, dawn@thinkcreativegroup.com, mdeguire@ucsd.edu, bobby-thomas@ouhsc.edu, melanie@thinkcreativegroup.com');
define('ADMIN_MAIL_RENEWAL_CONFIRMATION_EMAIL', 'drames@email.chop.edu, dawn@thinkcreativegroup.com, mdeguire@ucsd.edu, bobby-thomas@ouhsc.edu');


define('MEMBERSHIP_DIRECTORY_PATH', 'membership-directory'); //View
define('MEMBER_TOOLKIT_PATH', 'member-toolkit'); //Node (Member Toolkit Landing Page)
define('MEMBER_RESOURCES_NID', '58'); //Node (Internal Page)
define('SUCCESS_PAGE_APPLY_MEMBERSHIP', 'thank-you-for-applying'); //Node (page)
define('INVALID_RENEWAL', 'node/133'); //Node (page)
define('RENEWAL_CONFIG', '131');
define('SITE_NAME', 'AAAP');
define('CAPTCHA', 'Pediatrics');
define('REGISTRATION_FEE', '375');
define('ALT_NUMBER', 'mobile');

//Roles (Statuses of Members)
define('SUPER', '3');
define('PENDING_PAYMENT', '4');
define('ACTIVE', '5');
define('PENDING_APROVAL', '6');
define('ADMINISTRATOR', '7');
define('EXPIRED', '8');
define('INACTIVE', '9');

//Header for outgoing Emails
define('HEADERS', 'From: AAAP (' . SYSTEM_MAIL . ')' . "\r\n" .
        'Reply-To: ' . SYSTEM_MAIL . "\r\n" .
        'X-Mailer: PHP/' . phpversion());

date_default_timezone_set('UTC');
define('MASS_EMAIL_PATH', 'mass-email');

//users to test

global $user_test;

$user_test = array(261, 1134);
