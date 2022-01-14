# WP Email Manager - WP Config setup

If the credentials entered at the general settings page are not successfully written to `wp-config.php`, you have to enter the following constants, depending on your server management system or email server:

## CentOS Web Panel

Replace `username`, `apikey` and `domain.com` with the appropriate values. Learn more about CentOS Web Panel requirements here.

```
define( 'WP_EM_HOST_API_KEY', 'apikey' );
define( 'WP_EM_HOST_USERNAME', 'username' );
define( 'WP_EM_HOSTNAME', 'domain.com' );       
define( 'WP_EM_HOST_PROVIDER', 'cwp' );
```

## cPanel Constants

Replace `password`, `username`, `port`, and `domain.com` with the appropriate values.

```
define( 'WP_EM_HOST_PASSWORD', 'password' );
define( 'WP_EM_HOST_USERNAME', 'username' );
define( 'WP_EM_HOST_PORT', 'port' ); //Default value is 2083              
define( 'WP_EM_HOSTNAME', 'domain.com' );       
define( 'WP_EM_HOST_PROVIDER', 'cpanel' );
```

## DirectAdmin / MXRoute

Replace `password`, `username`, `port`, and `domain.com` with the appropriate values.

```
define( 'WP_EM_HOST_PASSWORD', 'password' );
define( 'WP_EM_HOST_USERNAME', 'username' );
define( 'WP_EM_HOST_PORT', 'port' ); //Default value is 2222            
define( 'WP_EM_HOSTNAME', 'domain.com' );       
define( 'WP_EM_HOST_PROVIDER', 'directadmin' ); 
```

## Mailcheap / Mailbux

Replace `password`, `username`, and `domain.com` with the appropriate values. The domain value is typically the url to where you manage accounts e.g. for Mailbux, the domain would be mail.mailbux.com. Learn more [here](https://wpemailmanager.com/documentation/mailbux/how-to-setup-mailbux/).

```
define( 'WP_EM_HOST_PASSWORD', 'password' );
define( 'WP_EM_HOST_USERNAME', 'username' );       
define( 'WP_EM_HOSTNAME', 'domain.com' );       
define( 'WP_EM_HOST_PROVIDER', 'mailcheap' ); 
```

## Mailcow Email Server

Replace `api_key` and `domain.com` with the appropriate values. Learn how to create an API key [here](https://wpemailmanager.com/documentation/mailcow/how-to-get-a-mailcow-api-key/).

```
define( 'WP_EM_HOST_API_KEY', 'api_key' ); 
define( 'WP_EM_HOSTNAME', 'domain.com' );       
define( 'WP_EM_HOST_PROVIDER', 'mailcow' );
```

## Mailbox

Replace `username`, `password`, and `domain.com` with the appropriate values. The typical value for the domain is api.mailbox.org.

```
define( 'WP_EM_HOSTNAME', 'domain.com' ); 
define( 'WP_EM_HOST_USERNAME', 'username' );      
define( 'WP_EM_HOST_PASSWORD', 'password' );
define( 'WP_EM_HOST_PROVIDER', 'mailbox' );
```

## Modoboa Email Server

Replace `api_key` and `domain.com` with the appropriate values. Learn how to create an API key [here](https://wpemailmanager.com/documentation/modoboa/how-to-get-a-modoboa-api-key/).

```
define( 'WP_EM_HOST_API_KEY', 'api_key' ); 
define( 'WP_EM_HOSTNAME', 'domain.com' );       
define( 'WP_EM_HOST_PROVIDER', 'modoboa' );
```

## Poste Email Server

Replace `username`, `password`, and `domain.com` with the appropriate values.

```
define( 'WP_EM_HOSTNAME', 'domain.com' ); 
define( 'WP_EM_HOST_USERNAME', 'username' );      
define( 'WP_EM_HOST_PASSWORD', 'password' );
define( 'WP_EM_HOST_PROVIDER', 'poste' );
```

## 20i / StackCP

Replace `api_key`, `package_id` [(?)](https://wpemailmanager.com/documentation/20i-stackcp/how-do-i-determine-my-package-id/), and `domain.com` with the appropriate values. Learn how to generate an access token [here](https://my.20i.com/reseller/api) and the account requirements [here](https://wpemailmanager.com/documentation/20i-stackcp/20i-stackcp-requirements/).

```
define( 'WP_EM_HOST_API_KEY', 'api_key' ); // General API key
define( 'WP_EM_HOST_USERNAME', 'package_id' );
define( 'WP_EM_HOSTNAME', 'domain.com' );       
define( 'WP_EM_HOST_PROVIDER', 'twentyi' );
```