<?php

/**
* do_action('wp_email_manager_update_account', $email_account);
*
* Runs when an email account is updated
*
* @param $email_account string
*/
add_action('wp_email_manager_update_account', 'my_update_account_function');
function my_update_account_function($email_account){
   //Do something 
}

?>