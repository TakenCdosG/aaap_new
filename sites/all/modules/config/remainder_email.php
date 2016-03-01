<?php

mail($user->mail,'Time to renew AAAP Membership' ,'Greetings!'."\r\n\n"
    .'It is time to renew your AAAP Membership for 2016.'. "\r\n\n"
    .'Amount Due: $500 February 1 - March 1, 2016*'. "\r\n\n"
    .'$600 March 2 - April 15, 2016'. "\r\n\n"
    .'Go to the AAAP website www.aaapeds.org. Sign-in using your AAAP email and password.'. "\r\n\n"
    .'Trouble accessing?  If you haven\'t accessed your account recently or have forgotten your password, use the "forgot password" feature.'. "\r\n\n"
    .'Please follow these instructions for payment of annual dues:'. "\r\n\n"
    .'Active Members must sign-in in order to make payment.'. "\r\n\n"
    .'From the top bar, select "MEMBER RESOURCES"'. "\r\n\n"
    .'From the drop down selection, select "RENEW YOUR MEMBERSHIP" and follow the steps for payment'. "\r\n\n"
    .'If paying by check, print the invoice and send it along with your payment to the Treasurer, Eileen Drames @  The Children’s Hospital of Philadelphia, General Pediatrics, 12NW Room 57, 34th and Civic Center Boulevard, Philadelphia, PA 19104.'. "\n"
    .'This is a good time to update your personal profile to ensure the Membership Directory has the most current contact information.  If you are the senior administrator at your institution, please also take a few minutes to complete the Institutional Profile.'. "\n"
    .'For any membership-related questions, please email Michelle De Guire, mdeguire@ucsd.edu'. "\r\n\n"
    .'Thank You, '. "\n"
    .'Michelle DeGuire'. "\n"
    .'AAAP Membership Director'
    , HEADERS); 

