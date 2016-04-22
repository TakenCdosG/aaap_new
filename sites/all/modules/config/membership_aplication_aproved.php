<?php
mail($edit['mail'], SITE_NAME.' Membership Application Approved; Pending Payment','Thank you for submitting your '.SITE_NAME.' Membership application which has now been reviewed and will be finalized once we receive your payment. Please log on to your account and pay using a credit card by clicking on the link below. If you will be paying by check, please allow approximately 4 weeks for processing and remit  payment to the '.SITE_NAME.' Treasurer at the address below. '."\r\n \r\n"
.SITE_NAME.' Treasurer: Eileen Drames'. "\r\n"
    .'c/o The Children’s Hospital of Philadelphia'. "\r\n"
    .'General Pediatrics, 12NW Room 57'."\r\n"
    .'34th and Civic Center Boulevard'. "\r\n"
    .'Philadelphia, PA 19104.'."\r\n \r\n"
.'Registration Receipt'. "\r\n"
.'Payment Type: Check'. "\r\n"
.'Registration Fee $'.$config_data['registration_fee']."\r\n" //TODO: HARDCODED-- OBTAIN FROM ACTUAL PRODUCT PRICE OR ORDER TOTAL
.'Name: '.$user_data->field_first_name['und'][0]['value']." ".$user_data->field_last_name['und'][0]['value']. "\r\n"
.'Institution: '.$user_data->field_institution['und'][0]['value']. "\r\n"
.'Email: '.$user_data->mail. "\r\n"
.'Address Line 1: '.$user_data->field_address_line_1['und'][0]['value']. "\r\n"
.'Address Line 2: '.$user_data->field_address_line_2['und'][0]['value']. "\r\n"
.'City: '.$user_data->field_city['und'][0]['value']. "\r\n"
.'State/Province: '.$user_data->field_state['und'][0]['value']. "\r\n"
.'Zip/Postal Code: '.$user_data->field_zip['und'][0]['value']. "\r\n \r\n"
.'Make a Credit Card Payment:'. "\r\n"
.$onetime. "\r\n \r\n"
.'If you have any questions please contact our AAAP Membership Director Michelle De Guire: mdeguire@ucsd.edu'. "\r\n \r\n"
.'Thank you,'. "\r\n"
.SITE_NAME, HEADERS);

