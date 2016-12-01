<?php
mail($user->mail,'AAAP Renewal - Time to Renew Your Membership' ,'AAAP Members,'."\r\n\n"
    .'It is time to renew your annual AAAP Membership for 2017!'. "\r\n\n"
    .'Amount Due: $600 '. "\r\n\n"
	.'Steps for Renewal:'. "\r\n"
    .'1. Go to the AAAP website www.aaapeds.org.'. "\r\n"
	.'2. Sign-in using your AAAP email and password.'. "\r\n"
    .'3. Select Membership Renewal in the Membership tab'. "\r\n\n"
    .'Trouble accessing your account?  If you haven\'t accessed your account recently or have forgotten your password, use the "forgot password" feature or contact mdeguire@ucsd.edu.'. "\r\n\n"
    .'Thank You, '. "\n"
    .'Michelle DeGuire'. "\n"
    .'AAAP Membership Director'
    , HEADERS); 

	
