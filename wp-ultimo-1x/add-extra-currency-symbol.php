<?php

/**
 * Adds a custom currency symbol to an existing or newly created currency for WP Ultimo
 */
 
add_filter('wu_currency_symbol', 'add_currency_symbol', 10, 2);

function add_currency_symbol($symbol, $currency) {

  if ($currency == 'CODE') {  
    return 'THE SYMBOL'; 
  } else {
    return $symbol;
  }
  
};

?>