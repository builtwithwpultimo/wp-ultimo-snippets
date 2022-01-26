<?php

/**
* Remove the language switcher from the wp-login screen.
*
* INSTRUCTION:
* Place this code in your themes functions.php or any other php file. 
*
*/

add_filter( 'login_display_language_dropdown', '__return_false' );
