<?php
mail($user->mail,'AAAP Renewal - Take Advantage of Early Bird Rate' ,'AAAP Members,'."\r\n"
    .'It is time to renew your annual AAAP Membership for 2017.'. "\r\n\n"
	.'Take advantage of the Early Bird membership rate!'. "\r\n\n"
    .'Amount Due: $500 November 2016*'. "\r\n"
    .'            $600 after November 30, 2016'. "\r\n\n"
	.'*Note: Discounted rate if paid in full and received by December 1st.'. "\r\n\n"
	.'Steps for Renewal:'. "\r\n"
    .'1. Go to the AAAP website www.aaapeds.org.'. "\r\n"
	.'2. Sign-in using your AAAP email and password.'. "\r\n"
    .'3. Select Membership Renewal in the Membership tab'. "\r\n\n"
    .'Trouble accessing your account?  If you haven\'t accessed your account recently or have forgotten your password, use the "forgot password" feature or contact mdeguire@ucsd.edu.'. "\r\n\n"
    .'Thank You, '. "\n"
    .'Michelle DeGuire'. "\n"
    .'AAAP Membership Director'
    , HEADERS); 

	
