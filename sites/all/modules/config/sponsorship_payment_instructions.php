<?php

mail($submission->data[BECOME_SPONSOR_EMAIL_FIELD_ID][0], SITE_NAME.' Sponsorship Payment Instructions','Thank you for suppoprting '.SITE_NAME.' with a sponsorship. You can download an invoice here. '

    .'Please make your check payable to '.SITE_NAME.' and mail to: '. "\r\n \r\n"
    .'Benson Won Department of Surgery Benson Won, MPH'."\r\n"
    .'Chief Administrative Officer'. "\r\n"
    .'Department of Surgery'. "\r\n"
    .'UC Davis School of Medicine'. "\r\n"
    .'UC Davis Health System'."\r\n"
    .'916-734-7886'."\r\n"
    .'http://surgery.ucdmc.ucdavis.edu'."\r\n \r\n"
    .'Thank you,'. "\r\n \r\n"
    .SITE_NAME, HEADERS);