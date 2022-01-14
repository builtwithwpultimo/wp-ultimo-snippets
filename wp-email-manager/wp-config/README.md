# WP Email Manager - WP Config setup

If the credentials entered at the general settings page are not successfully written to wp-config.php, you have to enter the following constants, depending on your server management system or email server:

## CentOS Web Panel

Replace ‘username’, ‘apikey’ and ‘domain.com’ with the appropriate values. Learn more about CentOS Web Panel requirements here.

```
define( 'WP_EM_HOST_API_KEY', 'apikey' );
define( 'WP_EM_HOST_USERNAME', 'username' );
define( 'WP_EM_HOSTNAME', 'domain.com' );       
define( 'WP_EM_HOST_PROVIDER', 'cwp');
```

