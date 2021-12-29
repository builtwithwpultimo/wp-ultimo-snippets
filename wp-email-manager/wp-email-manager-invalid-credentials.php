<?php

/**
* do_action('wp_email_manager_invalid_credentials');
*
* Runs when the email server credentials are invalid
*
*/
add_action('wp_email_manager_invalid_credentials', 'my_invalid_credentials_function');
function my_invalid_credentials_function(){
   //Do something e.g. send sms or email notification
}

?>