# WP Email Manager Snippet Library 

### WP Ultimo v1

You'll find the following snippets in 📂 `/wp-email-manager/wp-ultimo-1x` folder.

- Sync domain with email server when added in WP Ultimo - File: `sync-add-domain-with-email-server.php`
- Sync domain with email server when deleted in WP Ultimo - File: `sync-delete-domain-with-email-server.php`

**Prerequisite:**

1) You are using WP Email Manager V 1.0.6.4 + and WP Ultimo V1.0 +.
2) You have enabled WP Ultimo integration in the general settings section.

**Note:** If a particular subsite has the _**Custom Configuration Addon**_ enabled, the domain syncing will be associated with the subsite’s email server and not the network’s email server.

### WP Ultimo v2

You'll find the following snippets in 📂 `/wp-email-manager/wp-ultimo-2x` folder.

- Sync domain with email server when added in WP Ultimo - File: `sync-add-domain-with-email-server.php`
- Sync domain with email server when deleted in WP Ultimo - File: `sync-delete-domain-with-email-server.php`

**Prerequisite:**

1) You are using WP Email Manager V 1.0.6.4 + and WP Ultimo V2.0 +.
2) You have enabled WP Ultimo integration in the general settings section.

**Note:** If a particular subsite has the _**Custom Configuration Addon**_ enabled, the domain syncing will be associated with the subsite’s email server and not the network’s email server.

## Actions

You'll find the following snippets in 📂 `/wp-email-manager` folder.

### wp_email_manager_create_account
This action runs when an email account is created. 
- File: `wp-email-manager-create-account.php`
### wp_email_manager_invalid_credentials
This action runs when a routine cron job (every hour) detects that the server credentials are invalid. 
- File: `wp-email-manager-invalid-credentials.php`
### wp_email_manager_update_account
This action runs when an email account is updated. 
- File: `wp-email-manager-update-account.php`
