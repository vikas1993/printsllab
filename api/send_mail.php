<?php

error_reporting(-1);
ini_set('display_errors', 'On');
set_error_handler("var_dump");

if(isset($_REQUEST['email']) && isset($_REQUEST['name'])  && isset($_REQUEST['mobile'])  && isset($_REQUEST['query'])){
$email = $_REQUEST['email'];
$mobile = $_REQUEST['mobile'];
$name = $_REQUEST['name'];
$query = $_REQUEST['query'];

// the message
$msg = "HI \n This is to inform you that ".$name." has sent an enquiry whose mail id is ".$email." and mobile no. is ".$mobile." \n has enquired : ".$query;

// use wordwrap() if lines are longer than 70 characters
$msg = wordwrap($msg,70);

// send email
$headers = "From: noReply@printstallab.com";
$sent_mail = mail("printstallab@gmail.com","Enquiry",$msg,$headers );
//phpinfo();
echo "
        <html>
        <head>
            <meta http-equiv='refresh' content='5;url=https://printstallab.com'>
            <title>Thank You!</title>
        </head>
        <body>
            <h1>Your query has been submitted successfully!</h1>
            <p>You will be contacted shortly. Redirecting you back to the homepage...</p>
        </body>
        </html>
        ";
}else{
	echo " missing parameter email=&name=&mobile=&query";
}


?>