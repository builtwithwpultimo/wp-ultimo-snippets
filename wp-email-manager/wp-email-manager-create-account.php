<?php

/**
* do_action('wp_email_manager_create_account', $email_account);
*
* Runs when an email account is created
*
* @param $email_account string
*/
add_action('wp_email_manager_create_account', 'my_create_account_function');
function my_create_account_function($email_account){
   //Do something e.g. send welcome email
}

?>