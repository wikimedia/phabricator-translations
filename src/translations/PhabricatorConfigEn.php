<?php

final class PhabricatorConfigEn
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'en';
  }

  protected function getTranslations() {
    return array(
      'When users write comments which have URIs, they will be automatically turned into clickable links if the URI protocol appears in this set.
    This set of allowed protocols is primarily intended to prevent security issues with "javascript:" and other potentially dangerous URI handlers.
    This set is also used to enforce valid redirect URIs. This service will refuse to issue a HTTP "Location" redirect to a URI with a protocol not on this set.
    Usually, "http" and "https" should be present in this set. If you remove one or both protocols, some features which rely on links or redirects may not work.' => 'When users write comments which have URIs, they will be automatically turned into clickable links if the URI protocol appears in this set.
    This set of allowed protocols is primarily intended to prevent security issues with "javascript:" and other potentially dangerous URI handlers.
    This set is also used to enforce valid redirect URIs. This service will refuse to issue a HTTP "Location" redirect to a URI with a protocol not on this set.
    Usually, "http" and "https" should be present in this set. If you remove one or both protocols, some features which rely on links or redirects may not work.',
      'The configuration value "%s" is locked (so it can not be edited from the web UI), but has a database value. Usually, this means that it was previously not locked, you set it using the web UI, and it later became locked.
    You should copy this configuration value to a local configuration source (usually by using %s) and then remove it from the database with the command below.
    For more information on locked and hidden configuration, including details about this setup issue, see %s.
    This database value is currently respected, but a future version of the software will stop respecting database values for locked configuration options.' => 'The configuration value "%s" is locked (so it can not be edited from the web UI), but has a database value. Usually, this means that it was previously not locked, you set it using the web UI, and it later became locked.
    You should copy this configuration value to a local configuration source (usually by using %s) and then remove it from the database with the command below.
    For more information on locked and hidden configuration, including details about this setup issue, see %s.
    This database value is currently respected, but a future version of the software will stop respecting database values for locked configuration options.',
      'Review and modify configuration settings.' => 'Review and modify configuration settings.',
      'Improve security by configuring an alternate file domain.' => 'Improve security by configuring an alternate file domain.',
      'Array containing list of uninstalled applications.' => 'Array containing list of uninstalled applications.',
      'Client Server' => 'Client Server',
      'Listeners receive callbacks when interesting things occur.' => 'Listeners receive callbacks when interesting things occur.',
      'Update configuration in the database instead of in local configuration.' => 'Update configuration in the database instead of in local configuration.',
      'Column/Key' => 'Column/Key',
      'Customize the logo and wordmark text in the header.' => 'Customize the logo and wordmark text in the header.',
      'Configuring File Storage' => 'Configuring File Storage',
      '%s / %s' => '%s / %s',
      'Address ranges of cluster hosts.' => 'Address ranges of cluster hosts.',
      'This request did not include a "Host" header. This may mean that your webserver (like nginx or apache) is misconfigured so the "Host" header is not making it to this software, or that you are making a raw request without a "Host" header using a tool or library.
    If you are using a web browser, check your webserver configuration. If you are using a tool or library, check how the request is being constructed.
    It is also possible (but very unlikely) that some other network device (like a load balancer) is stripping the header.
    Requests must include a valid "Host" header.' => 'This request did not include a "Host" header. This may mean that your webserver (like nginx or apache) is misconfigured so the "Host" header is not making it to this software, or that you are making a raw request without a "Host" header using a tool or library.
    If you are using a web browser, check your webserver configuration. If you are using a tool or library, check how the request is being constructed.
    It is also possible (but very unlikely) that some other network device (like a load balancer) is stripping the header.
    Requests must include a valid "Host" header.',
      'Memory Usage' => 'Memory Usage',
      'The request body that was sent began:' => 'The request body that was sent began:',
      'IMPORTANT: The upstream does not provide support for prototype applications.
    This platform includes prototype applications which are in an **early stage of development**. By default, prototype applications are not installed, because they are often not yet developed enough to be generally usable. You can enable this option to install them if you\'re developing applications or are interested in previewing upcoming features.
    To learn more about prototypes, see [[ %s | %s ]].
    After enabling prototypes, you can selectively uninstall them (like normal applications).' => 'IMPORTANT: The upstream does not provide support for prototype applications.
    This platform includes prototype applications which are in an **early stage of development**. By default, prototype applications are not installed, because they are often not yet developed enough to be generally usable. You can enable this option to install them if you\'re developing applications or are interested in previewing upcoming features.
    To learn more about prototypes, see [[ %s | %s ]].
    After enabling prototypes, you can selectively uninstall them (like normal applications).',
      'Impersonating users over the API is no longer supported.' => 'Impersonating users over the API is no longer supported.',
      'Table' => 'Table',
      'The best available MYSQL implementation is now selected automatically.' => 'The best available MYSQL implementation is now selected automatically.',
      'Ignore Setup Issue' => 'Ignore Setup Issue',
      'This option allows you to enable DarkConsole on every page, even for logged-out users. This is only really useful if you need to debug something on a logged-out page. You should not enable this option in production.
    You must enable DarkConsole by setting \'%s\' before this option will have any effect.' => 'This option allows you to enable DarkConsole on every page, even for logged-out users. This is only really useful if you need to debug something on a logged-out page. You should not enable this option in production.
    You must enable DarkConsole by setting \'%s\' before this option will have any effect.',
      'Alternative URIs that can access this service.' => 'Alternative URIs that can access this service.',
      'Repository %s has unreplicated changes (for %s).' => 'Repository %s has unreplicated changes (for %s).',
      'The controller or workflow which handled the request.' => 'The controller or workflow which handled the request.',
      'Option "%s" is of type "%s", but the value at index "%s" of the list is not "true".' => 'Option "%s" is of type "%s", but the value at index "%s" of the list is not "true".',
      'Applications application' => 'Applications application',
      'This server is not configured in cluster mode.' => 'This server is not configured in cluster mode.',
      '%s created this configuration entry.' => '%s created this configuration entry.',
      'You have enabled pygments and the %s script is available, but does not seem to work.' => 'You have enabled pygments and the %s script is available, but does not seem to work.',
      'This column is missing a type specification.' => 'This column is missing a type specification.',
      'PHP is currently using the very old "mysql" extension to interact with the database. You should install the newer "mysqli" extension to improve behaviors (like error handling and query timeouts).
    This software will work with the older extension, but upgrading to the newer extension is recommended.
    You may be able to install the extension with a command like: %s' => 'PHP is currently using the very old "mysql" extension to interact with the database. You should install the newer "mysqli" extension to improve behaviors (like error handling and query timeouts).
    This software will work with the older extension, but upgrading to the newer extension is recommended.
    You may be able to install the extension with a command like: %s',
      'The current configuration has these %d value(s):' => 'The current configuration has these %s value(s):',
      'Column Has No Specification' => 'Column Has No Specification',
      'On database host "%s", the global "sql_mode" setting does not include the "STRICT_ALL_TABLES" mode. Enabling this mode is recommended to generally improve how MySQL handles certain errors.
    Without this mode enabled, MySQL will silently ignore some error conditions, including inserts which attempt to store more data in a column than actually fits. This behavior is usually undesirable and can lead to data corruption (by truncating multibyte characters in the middle), data loss (by discarding the data which does not fit into the column), or security concerns (for example, by truncating keys or credentials).
    This software is developed and tested in "STRICT_ALL_TABLES" mode so you should normally never encounter these situations, but may run into them if you interact with the database directly, run third-party code, develop extensions, or just encounter a bug in the software.
    Enabling "STRICT_ALL_TABLES" makes MySQL raise an explicit error if one of these unusual situations does occur. This is a safer behavior and prevents these situations from causing secret, subtle, and potentially serious issues later on.
    You can find more information about this mode (and how to configure it) in the MySQL manual. Usually, it is sufficient to add this to your "my.cnf" file (in the "[mysqld]" section) and then restart "mysqld":
    %s
    Note that if you run other applications against the same database, they may not work in strict mode.
    If you can not or do not want to enable "STRICT_ALL_TABLES", you can safely ignore this warning. This software will work correctly with this mode enabled or disabled.' => 'On database host "%s", the global "sql_mode" setting does not include the "STRICT_ALL_TABLES" mode. Enabling this mode is recommended to generally improve how MySQL handles certain errors.
    Without this mode enabled, MySQL will silently ignore some error conditions, including inserts which attempt to store more data in a column than actually fits. This behavior is usually undesirable and can lead to data corruption (by truncating multibyte characters in the middle), data loss (by discarding the data which does not fit into the column), or security concerns (for example, by truncating keys or credentials).
    This software is developed and tested in "STRICT_ALL_TABLES" mode so you should normally never encounter these situations, but may run into them if you interact with the database directly, run third-party code, develop extensions, or just encounter a bug in the software.
    Enabling "STRICT_ALL_TABLES" makes MySQL raise an explicit error if one of these unusual situations does occur. This is a safer behavior and prevents these situations from causing secret, subtle, and potentially serious issues later on.
    You can find more information about this mode (and how to configure it) in the MySQL manual. Usually, it is sufficient to add this to your "my.cnf" file (in the "[mysqld]" section) and then restart "mysqld":
    %s
    Note that if you run other applications against the same database, they may not work in strict mode.
    If you can not or do not want to enable "STRICT_ALL_TABLES", you can safely ignore this warning. This software will work correctly with this mode enabled or disabled.',
      'Delete configuration in the database instead of in local configuration.' => 'Delete configuration in the database instead of in local configuration.',
      'No Email Preferences Link' => 'No Email Preferences Link',
      'Marked activity "%s" as completed.' => 'Marked activity "%s" as completed.',
      'The way VCS activity is attributed %s user accounts has changed.' => 'The way VCS activity is attributed %s user accounts has changed.',
      'Mail.app on OS X Lion won\'t respect threading headers unless the subject is
    prefixed with "Re:". If you enable this option, this software will add "Re:" to
    the subject line of all mail which is expected to thread. If you\'ve set
    \'metamta.one-mail-per-recipient\', users can override this setting in their
    preferences.' => 'Mail.app on OS X Lion won\'t respect threading headers unless the subject is
    prefixed with "Re:". If you enable this option, this software will add "Re:" to
    the subject line of all mail which is expected to thread. If you\'ve set
    \'metamta.one-mail-per-recipient\', users can override this setting in their
    preferences.',
      'Repository %s has unreplicated changes.' => 'Repository %s has unreplicated changes.',
      'You have \'%s\' enabled in your PHP configuration.
    This option is not compatible with this software. Remove \'%s\' from your configuration to continue.' => 'You have \'%s\' enabled in your PHP configuration.
    This option is not compatible with this software. Remove \'%s\' from your configuration to continue.',
      'The \'%s\' binary on this system has unexpected behavior: it was expected to exit without an error code when passed identical files, but exited with code %d.' => 'The \'%s\' binary on this system has unexpected behavior: it was expected to exit without an error code when passed identical files, but exited with code %s.',
      'No active repositories have outstanding errors.' => 'No active repositories have outstanding errors.',
      'Usage' => 'Usage',
      'Rebuild Repository Identities' => 'Rebuild Repository Identities',
      'Move port information from `%s` to `%s` in your config.' => 'Move port information from `%s` to `%s` in your config.',
      'This option can not be edited from the web UI. Use %s to adjust garbage collector policies.' => 'This option can not be edited from the web UI. Use %s to adjust garbage collector policies.',
      'Better Table Engine Available' => 'Better Table Engine Available',
      'Set a local configuration value.' => 'Set a local configuration value.',
      'Large file storage has not been configured, which will limit the maximum size of file uploads. See %s for instructions on configuring uploads and storage.' => 'Large file storage has not been configured, which will limit the maximum size of file uploads. See %s for instructions on configuring uploads and storage.',
      'This option controls whether users can edit account email addresses and profile real names.
    If you set things up to automatically synchronize account information from some other authoritative system, you can prevent users from making these edits to ensure information remains consistent across both systems.' => 'This option controls whether users can edit account email addresses and profile real names.
    If you set things up to automatically synchronize account information from some other authoritative system, you can prevent users from making these edits to ensure information remains consistent across both systems.',
      '%s deleted %s (again?).' => '%s deleted %s (again?).',
      'Access log format.' => 'Access log format.',
      'Use Pygments to highlight code?' => 'Use Pygments to highlight code?',
      'Access log location.' => 'Access log location.',
      'You have \'%s\' enabled in your PHP configuration.
    This option is not compatible with this software. Disable \'%s\' in your PHP configuration to continue.' => 'You have \'%s\' enabled in your PHP configuration.
    This option is not compatible with this software. Disable \'%s\' in your PHP configuration to continue.',
      'Your webserver is not handling GET parameters properly.' => 'Your webserver is not handling GET parameters properly.',
      'Repository Errors' => 'Repository Errors',
      'Option "%s" is of type "%s", but the configured value is not the name of a known class. Valid selections are: %s.' => 'Option "%s" is of type "%s", but the configured value is not the name of a known class. Valid selections are: %s.',
      'The keyring stores master encryption keys. For help with configuring a keyring
    and encryption, see **[[ %s | Configuring Encryption ]]**.' => 'The keyring stores master encryption keys. For help with configuring a keyring
    and encryption, see **[[ %s | Configuring Encryption ]]**.',
      'Short' => 'Short',
      'Large File Storage Not Configured' => 'Large File Storage Not Configured',
      'When email is sent, what format should the software use for users\' email
    addresses? Valid values are:
     - `short`: \'gwashington <gwashington@example.com>\'
     - `real`:  \'George Washington <gwashington@example.com>\'
     - `full`: \'gwashington (George Washington) <gwashington@example.com>\'
    The default is `full`.' => 'When email is sent, what format should the software use for users\' email
    addresses? Valid values are:
     - `short`: \'gwashington <gwashington@example.com>\'
     - `real`:  \'George Washington <gwashington@example.com>\'
     - `full`: \'gwashington (George Washington) <gwashington@example.com>\'
    The default is `full`.',
      'The minimum supported version of Mercurial is 2.4, which was released in 2012.' => 'The minimum supported version of Mercurial is 2.4, which was released in 2012.',
      'Use "bin/phd debug ..." to get a detailed daemon execution log.' => 'Use "bin/phd debug ..." to get a detailed daemon execution log.',
      'Migrating file-based config to more modern config...' => 'Migrating file-based config to more modern config...',
      'Full' => 'Full',
      'Run the storage upgrade script to setup databases (host "%s" has not been initialized).' => 'Run the storage upgrade script to setup databases (host "%s" has not been initialized).',
      'You haven\'t configured mailers yet, so this server won\'t be able to send outbound mail or receive inbound mail. See the configuration setting "cluster.mailers" for details.' => 'You haven\'t configured mailers yet, so this server won\'t be able to send outbound mail or receive inbound mail. See the configuration setting "cluster.mailers" for details.',
      'Unrecognized verb: %s' => 'Unrecognized verb: %s',
      'WARNING: This is a prototype option and the description below is currently pure
    fantasy.
    This option allows you to make this service aware of database read replicas so
    it can monitor database health, spread load, and degrade gracefully to
    read-only mode in the event of a failure on the primary host. For help with
    configuring cluster databases, see **[[ %s | %s ]]** in the documentation.' => 'WARNING: This is a prototype option and the description below is currently pure
    fantasy.
    This option allows you to make this service aware of database read replicas so
    it can monitor database health, spread load, and degrade gracefully to
    read-only mode in the event of a failure on the primary host. For help with
    configuring cluster databases, see **[[ %s | %s ]]** in the documentation.',
      'Schemata Issues' => 'Schemata Issues',
      'Expected Collation' => 'Expected Collation',
      'Option "%s" is of type "%s", but the value is not a list: it is a map with unnatural or sparse keys.' => 'Option "%s" is of type "%s", but the value is not a list: it is a map with unnatural or sparse keys.',
      'Use Normal HTTP Redirects' => 'Use Normal HTTP Redirects',
      'Configuration key \'%s\' is not set in %s configuration!' => 'Configuration key \'%s\' is not set in %s configuration!',
      'Multi-Factor Optional' => 'Multi-Factor Optional',
      'Access Denied' => 'Access Denied',
      'The configuration option \'%s\' has been removed. You may delete it at your convenience.
    %s' => 'The configuration option \'%s\' has been removed. You may delete it at your convenience.
    %s',
      'Disable Pagespeed' => 'Disable Pagespeed',
      'Elasticsearch index exists but needs correction.' => 'Elasticsearch index exists but needs correction.',
      'Nullable' => 'Nullable',
      'The "%s" key is set to some value other than "-1" in your PHP configuration. This can cause PHP to raise deprecation warnings during process startup. Set this option to "-1" to prevent these warnings from appearing.' => 'The "%s" key is set to some value other than "-1" in your PHP configuration. This can cause PHP to raise deprecation warnings during process startup. Set this option to "-1" to prevent these warnings from appearing.',
      'No "Host" Header' => 'No "Host" Header',
      'Activity "%s" did not need to be marked as complete.' => 'Activity "%s" did not need to be marked as complete.',
      'SSH error log location.' => 'SSH error log location.',
      'The translation implementation has changed and providers are no longer used or supported.' => 'The translation implementation has changed and providers are no longer used or supported.',
      'Option "%s" is of type "%s", but the value you provided is not a valid JSON list. When setting a list option from the command line, specify the value in JSON. You may need to quote the value for your shell (for example: \'["a", "b", ...]\').' => 'Option "%s" is of type "%s", but the value you provided is not a valid JSON list. When setting a list option from the command line, specify the value in JSON. You may need to quote the value for your shell (for example: \'["a", "b", ...]\').',
      'Format for the SSH access log. Use %s to set the path. Available variables are:' => 'Format for the SSH access log. Use %s to set the path. Available variables are:',
      'This table can use a better table engine.' => 'This table can use a better table engine.',
      'PHP post_max_size Not Configured' => 'PHP post_max_size Not Configured',
      'Can Not Connect to MySQL' => 'Can Not Connect to MySQL',
      'Option "%s" is of type "%s", but the configured value is not a boolean.' => 'Option "%s" is of type "%s", but the configured value is not a boolean.',
      'Disable developer mode' => 'Disable developer mode',
      'Identify the component in your webserver configuration which is decompressing or mangling requests and disable it. This software will not work properly until you do.' => 'Identify the component in your webserver configuration which is decompressing or mangling requests and disable it. This software will not work properly until you do.',
      'Profile 0.1%% of all requests' => 'Profile 0.1%% of all requests',
      'This option has been replaced with the more granular option `%s`.' => 'This option has been replaced with the more granular option `%s`.',
      'Require all users to configure multi-factor authentication.' => 'Require all users to configure multi-factor authentication.',
      'The \'%s\' extension is not installed. Without \'%s\', support, this software may not be able to determine the MIME types of uploaded files.' => 'The \'%s\' extension is not installed. Without \'%s\', support, this software may not be able to determine the MIME types of uploaded files.',
      'Stop this software from sending any email, etc.' => 'Stop this software from sending any email, etc.',
      'The \'%s\' binary could not be found. Symlink it into \'%s\', or set the webserver\'s %s environmental variable to include the directory where it resides, or add that directory to \'%s\' in configuration.' => 'The \'%s\' binary could not be found. Symlink it into \'%s\', or set the webserver\'s %s environmental variable to include the directory where it resides, or add that directory to \'%s\' in configuration.',
      'Configuration Guide: Locked and Hidden Configuration' => 'Configuration Guide: Locked and Hidden Configuration',
      'This option enables verbose error reporting (stack traces, error callouts) and forces disk reads of static assets on every reload.' => 'This option enables verbose error reporting (stack traces, error callouts) and forces disk reads of static assets on every reload.',
      'Wrote configuration key "%s" to local storage (in file "%s").' => 'Wrote configuration key "%s" to local storage (in file "%s").',
      '(%s%s) %s' => '(%s%s) %s',
      'Nonreplicating Replica' => 'Nonreplicating Replica',
      'Run these %d command(s):' => 'Run these %s command(s):',
      'Pattern' => 'Pattern',
      'Unknown \'%s\' Version' => 'Unknown \'%s\' Version',
      'Require administrators to unlock the authentication provider configuration from the CLI before it can be edited.' => 'Require administrators to unlock the authentication provider configuration from the CLI before it can be edited.',
      'Define one or more mail transmission services. For help with configuring
    mailers, see **[[ %s | %s ]]** in the documentation.' => 'Define one or more mail transmission services. For help with configuring
    mailers, see **[[ %s | %s ]]** in the documentation.',
      'You are using an old version of MySQL (on host "%s"), and should upgrade.' => 'You are using an old version of MySQL (on host "%s"), and should upgrade.',
      'Feed Hooks Deprecated' => 'Feed Hooks Deprecated',
      'Purge Caches' => 'Purge Caches',
      'Configure services to run on a cluster of hosts.' => 'Configure services to run on a cluster of hosts.',
      'Adjust %s in your PHP configuration to at least 32MB. When set to smaller value, large file uploads may not work properly.' => 'Adjust %s in your PHP configuration to at least 32MB. When set to smaller value, large file uploads may not work properly.',
      'Show Recipient Hints' => 'Show Recipient Hints',
      'Recaptcha private key, obtained by signing up for Recaptcha.' => 'Recaptcha private key, obtained by signing up for Recaptcha.',
      'MySQL InnoDB Engine Not Available' => 'MySQL InnoDB Engine Not Available',
      'Database host "%s" does not support the %s option. You will not be able to find search results for common words. You can gain access to this option by upgrading MySQL to a more recent version.
    You can ignore this warning if you plan to configure Elasticsearch later, or aren\'t concerned about searching for common words.' => 'Database host "%s" does not support the %s option. You will not be able to find search results for common words. You can gain access to this option by upgrading MySQL to a more recent version.
    You can ignore this warning if you plan to configure Elasticsearch later, or aren\'t concerned about searching for common words.',
      'Proto' => 'Proto',
      'HTTP Strict Transport Security (HSTS) sends a header which instructs browsers that the site should only be accessed over HTTPS, never HTTP. This defuses an attack where an adversary gains access to your network, then proxies requests through an unsecured link.
    Do not enable this option if you serve (or plan to ever serve) unsecured content over plain HTTP. It is very difficult to undo this change once users\' browsers have accepted the setting.' => 'HTTP Strict Transport Security (HSTS) sends a header which instructs browsers that the site should only be accessed over HTTPS, never HTTP. This defuses an attack where an adversary gains access to your network, then proxies requests through an unsecured link.
    Do not enable this option if you serve (or plan to ever serve) unsecured content over plain HTTP. It is very difficult to undo this change once users\' browsers have accepted the setting.',
      '(No Value Configured)' => '(No Value Configured)',
      'Allow editing' => 'Allow editing',
      'Configure full-text search services.' => 'Configure full-text search services.',
      'The HTTP method.' => 'The HTTP method.',
      'The webserver\'s host name.' => 'The webserver\'s host name.',
      'PHP Timezone Invalid' => 'PHP Timezone Invalid',
      'The environmental variable %s is empty. This server needs to execute some system commands, like `%s`, `%s`, `%s`, and `%s`. To execute these commands, the binaries must be available in the webserver\'s %s. You can set additional paths in configuration.' => 'The environmental variable %s is empty. This server needs to execute some system commands, like `%s`, `%s`, `%s`, and `%s`. To execute these commands, the binaries must be available in the webserver\'s %s. You can set additional paths in configuration.',
      'Branchpoint' => 'Branchpoint',
      'Integration with Recaptcha' => 'Integration with Recaptcha',
      'Global cap for size of generated emails (bytes).' => 'Global cap for size of generated emails (bytes).',
      'Access Logs' => 'Access Logs',
      'This server has a known bad version of "%s" installed ("%s"). This version is not supported, or contains important bugs or security vulnerabilities which are fixed in a newer version.' => 'This server has a known bad version of "%s" installed ("%s"). This version is not supported, or contains important bugs or security vulnerabilities which are fixed in a newer version.',
      'URI where this software is installed.' => 'URI where this software is installed.',
      'Character Set' => 'Character Set',
      'Formats' => 'Formats',
      'Ambiguous Leader' => 'Ambiguous Leader',
      'Config key "%s" is locked and can only be set in local configuration. To learn more, see "%s" in the documentation.' => 'Config key "%s" is locked and can only be set in local configuration. To learn more, see "%s" in the documentation.',
      'This option can help debug pages which are taking a very long time (more than 30 seconds) to render.
    If a page is slow to render (but taking less than 30 seconds), the best tools to use to figure out why it is slow are usually the DarkConsole service call profiler and XHProf.
    However, if a request takes a very long time to return, some components (like Apache, nginx, or PHP itself) may abort the request before it finishes. This can prevent you from using profiling tools to understand page performance in detail.
    In these cases, you can use this option to force the page to abort after a smaller number of seconds (for example, 10), and dump a useful stack trace. This can provide useful information about why a page is hanging.
    To use this option, set it to a small number (like 10), and reload a hanging page. The page should exit after 10 seconds and give you a stack trace.
    You should turn this option off (set it to 0) when you are done with it. Leaving it on creates a small amount of overhead for all requests, even if they do not hit the time limit.' => 'This option can help debug pages which are taking a very long time (more than 30 seconds) to render.
    If a page is slow to render (but taking less than 30 seconds), the best tools to use to figure out why it is slow are usually the DarkConsole service call profiler and XHProf.
    However, if a request takes a very long time to return, some components (like Apache, nginx, or PHP itself) may abort the request before it finishes. This can prevent you from using profiling tools to understand page performance in detail.
    In these cases, you can use this option to force the page to abort after a smaller number of seconds (for example, 10), and dump a useful stack trace. This can provide useful information about why a page is hanging.
    To use this option, set it to a small number (like 10), and reload a hanging page. The page should exit after 10 seconds and give you a stack trace.
    You should turn this option off (set it to 0) when you are done with it. Leaving it on creates a small amount of overhead for all requests, even if they do not hit the time limit.',
      'This option has been renamed to `%s` to emphasize the unfinished nature of many prototype applications. Your existing setting has been migrated.' => 'This option has been renamed to `%s` to emphasize the unfinished nature of many prototype applications. Your existing setting has been migrated.',
      'Clients' => 'Clients',
      'Expected Columns' => 'Expected Columns',
      'Taskmasters now use an autoscaling pool. You can configure the pool size with `%s`.' => 'Taskmasters now use an autoscaling pool. You can configure the pool size with `%s`.',
      'This configuration is locked and can not be edited from the web interface. Use %s in %s to edit it.' => 'This configuration is locked and can not be edited from the web interface. Use %s in %s to edit it.',
      'Multiple %s subclasses contain an option named \'%s\'!' => 'Multiple %s subclasses contain an option named \'%s\'!',
      'Pygments should be installed and enabled to provide advanced syntax highlighting.' => 'Pygments should be installed and enabled to provide advanced syntax highlighting.',
      'If true, allow MetaMTA to change mail subjects to put text like \'[Accepted]\' and
    \'[Commented]\' in them. This makes subjects more useful, but might break
    threading on some clients. If you\'ve set \'%s\', users can override this setting
    in their preferences.' => 'If true, allow MetaMTA to change mail subjects to put text like \'[Accepted]\' and
    \'[Commented]\' in them. This makes subjects more useful, but might break
    threading on some clients. If you\'ve set \'%s\', users can override this setting
    in their preferences.',
      'Recaptcha public key, obtained by signing up for Recaptcha.' => 'Recaptcha public key, obtained by signing up for Recaptcha.',
      'Database Servers' => 'Database Servers',
      'Specify a configuration key to delete.' => 'Specify a configuration key to delete.',
      'Search Servers' => 'Search Servers',
      'This web host ("%s") is set to a very different time than a database host "%s".' => 'This web host ("%s") is set to a very different time than a database host "%s".',
      'Send Mail To Each Recipient' => 'Send Mail To Each Recipient',
      'The MySQL "local_infile" option is enabled. This option is unsafe.' => 'The MySQL "local_infile" option is enabled. This option is unsafe.',
      'Either the schema for Elasticsearch has changed or Elasticsearch created the index automatically. Use the following command to rebuild the index.' => 'Either the schema for Elasticsearch has changed or Elasticsearch created the index automatically. Use the following command to rebuild the index.',
      'Remove Custom Logo' => 'Remove Custom Logo',
      'No notification servers are configured.' => 'No notification servers are configured.',
      '(Not Supported)' => '(Not Supported)',
      'PHP is currently using the older MySQL external driver instead of the newer MySQL native driver. The older driver lacks options and features (like support for query timeouts) which allow this server to interact better with the database.
    This software will work with the older driver, but upgrading to the native driver is recommended.
    You may be able to install the native driver with a command like: %s' => 'PHP is currently using the older MySQL external driver instead of the newer MySQL native driver. The older driver lacks options and features (like support for query timeouts) which allow this server to interact better with the database.
    This software will work with the older driver, but upgrading to the native driver is recommended.
    You may be able to install the native driver with a command like: %s',
      'Nonstandard port' => 'Nonstandard port',
      'Don\'t embed Commons videos' => 'Don\'t embed Commons videos',
      'This configuration has been removed. You can safely delete it.
    %s' => 'This configuration has been removed. You can safely delete it.
    %s',
      'Options relating to translations.' => 'Options relating to translations.',
      'Configure the UI, including colors.' => 'Configure the UI, including colors.',
      'The \'%s\' extension has support for only some image types. This server will be unable to process images of the missing types until you build \'%s\' with support for them. Supported types: %s. Missing types: %s.' => 'The \'%s\' extension has support for only some image types. This server will be unable to process images of the missing types until you build \'%s\' with support for them. Supported types: %s. Missing types: %s.',
      'Use Private Replies (More Secure)' => 'Use Private Replies (More Secure)',
      'Treat all \'*.x.bak\' file as \'.x\'. NOTE: We map to capturing group 1 by specifying the mapping as \'1\'' => 'Treat all \'*.x.bak\' file as \'.x\'. NOTE: We map to capturing group 1 by specifying the mapping as \'1\'',
      'Other Services' => 'Other Services',
      'Database Schemata' => 'Database Schemata',
      'Specify a system user to run the daemons as. Primarily, this user will own the working copies of any repositories that this software imports or manages. This option is new and experimental.' => 'Specify a system user to run the daemons as. Primarily, this user will own the working copies of any repositories that this software imports or manages. This option is new and experimental.',
      'Send as User Taking Action' => 'Send as User Taking Action',
      'Security options.' => 'Security options.',
      'Option "%s" is of type "%s", and should be specified on the command line as a JSON list of values. You may need to quote the value for your shell (for example: \'["a", "b", ...]\').' => 'Option "%s" is of type "%s", and should be specified on the command line as a JSON list of values. You may need to quote the value for your shell (for example: \'["a", "b", ...]\').',
      'Expected Unique' => 'Expected Unique',
      'Old MySQL Version' => 'Old MySQL Version',
      'Configuring a Preamble Script' => 'Configuring a Preamble Script',
      'Default Partition' => 'Default Partition',
      'Domain used for reply email addresses.' => 'Domain used for reply email addresses.',
      'You can find more information about rebuilding the search index here: %s' => 'You can find more information about rebuilding the search index here: %s',
      'Prevent editing' => 'Prevent editing',
      'Whitelist 1.2.3.*' => 'Whitelist 1.2.3.*',
      'Control how user names are rendered in mail.' => 'Control how user names are rendered in mail.',
      'This configuration is no longer relevant because daemons restart automatically on configuration changes.' => 'This configuration is no longer relevant because daemons restart automatically on configuration changes.',
      'The Differential revision list view age UI elements have been removed to simplify the interface.' => 'The Differential revision list view age UI elements have been removed to simplify the interface.',
      'Config option \'%s\' is invalid. The URI must NOT have a path, e.g. \'%s\' is OK, but \'%s\' is not. This software must be installed on an entire domain; it can not be installed on a path.' => 'Config option \'%s\' is invalid. The URI must NOT have a path, e.g. \'%s\' is OK, but \'%s\' is not. This software must be installed on an entire domain; it can not be installed on a path.',
      'Separate values with newlines.' => 'Separate values with newlines.',
      'The request body that the server received had already been decompressed. This strongly suggests your webserver is configured to decompress requests inline, before they reach PHP.' => 'The request body that the server received had already been decompressed. This strongly suggests your webserver is configured to decompress requests inline, before they reach PHP.',
      'Define one or more fulltext storage services. Here you can configure which
    hosts will handle fulltext search queries and indexing. For help with
    configuring fulltext search clusters, see **[[ %s | %s ]]** in the
    documentation.' => 'Define one or more fulltext storage services. Here you can configure which
    hosts will handle fulltext search queries and indexing. For help with
    configuring fulltext search clusters, see **[[ %s | %s ]]** in the
    documentation.',
      'Exception Handlers' => 'Exception Handlers',
      'This schema has the wrong nullable setting.' => 'This schema has the wrong nullable setting.',
      'Config option \'%s\' is invalid. The URI must start with \'%s\' or \'%s\'.' => 'Config option \'%s\' is invalid. The URI must start with \'%s\' or \'%s\'.',
      'Unsupported/Insecure "%s" Version' => 'Unsupported/Insecure "%s" Version',
      'This option does not have a custom type!' => 'This option does not have a custom type!',
      'Require administrators to approve new accounts.' => 'Require administrators to approve new accounts.',
      'Health' => 'Health',
      'System user to run daemons as.' => 'System user to run daemons as.',
      'When set to `true`, the authentication provider configuration for this instance can not be modified without first running `bin/auth unlock` from the command line. This is to reduce the security impact of a compromised administrator account. 
    After running `bin/auth unlock` and making your changes to the authentication provider config, you should run `bin/auth lock`.' => 'When set to `true`, the authentication provider configuration for this instance can not be modified without first running `bin/auth unlock` from the command line. This is to reduce the security impact of a compromised administrator account. 
    After running `bin/auth unlock` and making your changes to the authentication provider config, you should run `bin/auth lock`.',
      'Unknown schema status "%s"!' => 'Unknown schema status "%s"!',
      'MySQL May Run Slowly' => 'MySQL May Run Slowly',
      'Manage extensions.' => 'Manage extensions.',
      'Too many arguments: expected one key.' => 'Too many arguments: expected one key.',
      'List of Users Without MFA' => 'List of Users Without MFA',
      'No "Host" header present in request.' => 'No "Host" header present in request.',
      'Value for option "%s" of type "%s" must be either "true" or "false".' => 'Value for option "%s" of type "%s" must be either "true" or "false".',
      'Storage engines are now discovered automatically at runtime.' => 'Storage engines are now discovered automatically at runtime.',
      'This software appears to be installed on a very small EC2 instance (of class "%s") with burstable CPU. This is strongly discouraged. This software regularly needs CPU, and these instances are often choked to death by CPU throttling. Use an instance with a normal CPU instead.' => 'This software appears to be installed on a very small EC2 instance (of class "%s") with burstable CPU. This is strongly discouraged. This software regularly needs CPU, and these instances are often choked to death by CPU throttling. Use an instance with a normal CPU instead.',
      'Footer configuration is not valid: value must be a list of items.' => 'Footer configuration is not valid: value must be a list of items.',
      'Edit "%s"' => 'Edit "%s"',
      'Don\'t embed YouTube videos' => 'Don\'t embed YouTube videos',
      'Disable PHP %s' => 'Disable PHP %s',
      'Configure master encryption keys.' => 'Configure master encryption keys.',
      'Mailers Not Configured' => 'Mailers Not Configured',
      'Daemons no longer use PID files.' => 'Daemons no longer use PID files.',
      'Database replica "%s" is listed as a replica, but is not currently replicating. You are vulnerable to data loss if the master fails.' => 'Database replica "%s" is listed as a replica, but is not currently replicating. You are vulnerable to data loss if the master fails.',
      'Garbage Collectors' => 'Garbage Collectors',
      '%s edited this configuration entry.' => '%s edited this configuration entry.',
      'The PHP "zip" extension is not installed. This extension is required by certain data export operations, including exporting data to Excel.
    To clear this setup issue, install the extension and restart your webserver.
    You may safely ignore this issue if you do not plan to export data in Zip archives or Excel spreadsheets, or intend to install the extension later.' => 'The PHP "zip" extension is not installed. This extension is required by certain data export operations, including exporting data to Excel.
    To clear this setup issue, install the extension and restart your webserver.
    You may safely ignore this issue if you do not plan to export data in Zip archives or Excel spreadsheets, or intend to install the extension later.',
      'To enable the SSH log, specify a path. This log can provide more detailed information about SSH access than a normal SSH log (for instance, it can show logged-in users, commands, and other application data).
    If not set, no log will be written.' => 'To enable the SSH log, specify a path. This log can provide more detailed information about SSH access than a normal SSH log (for instance, it can show logged-in users, commands, and other application data).
    If not set, no log will be written.',
      'Send Mail To All Recipients' => 'Send Mail To All Recipients',
      'This software sent itself a test request with an unusual path, to test if your webserver is rewriting paths correctly. The path was not transmitted correctly.
    This software sent a request to path "%s", and expected the webserver to decode and rewrite that path so that it received a request for "%s". However, it received a request for "%s" instead.
    Verify that your rewrite rules are configured correctly, following the instructions in the documentation. If path encoding is not working properly you will be unable to access files with unusual names in repositories, among other issues.
    (This problem can be caused by a missing "B" in your RewriteRule.)' => 'This software sent itself a test request with an unusual path, to test if your webserver is rewriting paths correctly. The path was not transmitted correctly.
    This software sent a request to path "%s", and expected the webserver to decode and rewrite that path so that it received a request for "%s". However, it received a request for "%s" instead.
    Verify that your rewrite rules are configured correctly, following the instructions in the documentation. If path encoding is not working properly you will be unable to access files with unusual names in repositories, among other issues.
    (This problem can be caused by a missing "B" in your RewriteRule.)',
      'Recorded items (sample):' => 'Recorded items (sample):',
      'Your install has no current setup issues to resolve.' => 'Your install has no current setup issues to resolve.',
      'Subschemata Have Failures' => 'Subschemata Have Failures',
      'Save Config Entry' => 'Save Config Entry',
      '%s of %s' => '%s of %s',
      'Setup MySQL Schema' => 'Setup MySQL Schema',
      ' (%s)' => ' (%s)',
      'Not Available' => 'Not Available',
      'If those commands don\'t work, try Google. The process of installing PHP extensions is not specific to this software, and any instructions you can find for installing them on your system should work. On Mac OS X, you might want to try Homebrew.' => 'If those commands don\'t work, try Google. The process of installing PHP extensions is not specific to this software, and any instructions you can find for installing them on your system should work. On Mac OS X, you might want to try Homebrew.',
      'You can disable the hints under "REPLY HANDLER ACTIONS" if users prefer
    smaller messages. The actions themselves will still work properly.' => 'You can disable the hints under "REPLY HANDLER ACTIONS" if users prefer
    smaller messages. The actions themselves will still work properly.',
      'This option has been removed, you can use Dashboards to provide homepage customization. See T11533 for more details.' => 'This option has been removed, you can use Dashboards to provide homepage customization. See T11533 for more details.',
      'Data Cache' => 'Data Cache',
      'Configure the access logs, which log HTTP/SSH requests.' => 'Configure the access logs, which log HTTP/SSH requests.',
      '%ss Behind' => '%ss Behind',
      'The PID of the server process.' => 'The PID of the server process.',
      'Config option \'%s\' is invalid. The URI must NOT have a path, e.g. \'%s\' is OK, but \'%s\' is not. This software must be \'.
                \'installed on an entire domain; it can not be installed on a path.' => 'Config option \'%s\' is invalid. The URI must NOT have a path, e.g. \'%s\' is OK, but \'%s\' is not. This software must be \'.
                \'installed on an entire domain; it can not be installed on a path.',
      'Blacklist subnets to prevent user-initiated outbound requests.' => 'Blacklist subnets to prevent user-initiated outbound requests.',
      'When a message is sent to multiple recipients (for example, several reviewers on
    a code review), it can either be delieverd as one email to everyone (e.g., "To:
    alincoln, usgrant, htaft") or separate emails to each user (e.g., "To:
    alincoln", "To: usgrant", "To: htaft"). The major advantages and disadvantages
    of each approach are:
      - One mail to everyone:
        - This violates policy controls. The body of the mail is generated without
          respect for object policies.
        - Recipients can see To/Cc at a glance.
        - If you use mailing lists, you won\'t get duplicate mail if you\'re
          a normal recipient and also Cc\'d on a mailing list.
        - Getting threading to work properly is harder, and probably requires
          making mail less useful by turning off options.
        - Sometimes people will "Reply All", which can send mail to too many
          recipients. This software will try not to send mail to users who already
          received a similar message, but can not prevent all stray email arising
          from "Reply All".
        - Not supported with a private reply-to address.
        - Mail messages are sent in the server default translation.
        - Mail that must be delivered over secure channels will leak the recipient
          list in the "To" and "Cc" headers.
      - One mail to each user:
        - Policy controls work correctly and are enforced per-user.
        - Recipients need to look in the mail body to see To/Cc.
        - If you use mailing lists, recipients may sometimes get duplicate
          mail.
        - Getting threading to work properly is easier, and threading settings
          can be customized by each user.
        - "Reply All" will never send extra mail to other users involved in the
          thread.
        - Required if private reply-to addresses are configured.
        - Mail messages are sent in the language of user preference.
    ' => 'When a message is sent to multiple recipients (for example, several reviewers on
    a code review), it can either be delieverd as one email to everyone (e.g., "To:
    alincoln, usgrant, htaft") or separate emails to each user (e.g., "To:
    alincoln", "To: usgrant", "To: htaft"). The major advantages and disadvantages
    of each approach are:
      - One mail to everyone:
        - This violates policy controls. The body of the mail is generated without
          respect for object policies.
        - Recipients can see To/Cc at a glance.
        - If you use mailing lists, you won\'t get duplicate mail if you\'re
          a normal recipient and also Cc\'d on a mailing list.
        - Getting threading to work properly is harder, and probably requires
          making mail less useful by turning off options.
        - Sometimes people will "Reply All", which can send mail to too many
          recipients. This software will try not to send mail to users who already
          received a similar message, but can not prevent all stray email arising
          from "Reply All".
        - Not supported with a private reply-to address.
        - Mail messages are sent in the server default translation.
        - Mail that must be delivered over secure channels will leak the recipient
          list in the "To" and "Cc" headers.
      - One mail to each user:
        - Policy controls work correctly and are enforced per-user.
        - Recipients need to look in the mail body to see To/Cc.
        - If you use mailing lists, recipients may sometimes get duplicate
          mail.
        - Getting threading to work properly is easier, and threading settings
          can be customized by each user.
        - "Reply All" will never send extra mail to other users involved in the
          thread.
        - Required if private reply-to addresses are configured.
        - Mail messages are sent in the language of user preference.
    ',
      'No Outbound Requests' => 'No Outbound Requests',
      'Primary install URI, for multi-environment installs.' => 'Primary install URI, for multi-environment installs.',
      'Global access controls now exist, see `%s`.' => 'Global access controls now exist, see `%s`.',
      'Your webserver is not handling compressed request bodies properly.' => 'Your webserver is not handling compressed request bodies properly.',
      'Whitelists editor protocols for "Open in Editor".' => 'Whitelists editor protocols for "Open in Editor".',
      'Unable to connect to MySQL!
    %s
    Make sure databases connection information and MySQL are correctly configured.' => 'Unable to connect to MySQL!
    %s
    Make sure databases connection information and MySQL are correctly configured.',
      'The "Re: Prefix" and "Vary Subjects" settings are now configured in global settings.' => 'The "Re: Prefix" and "Vary Subjects" settings are now configured in global settings.',
      'You have no unresolved setup issues.' => 'You have no unresolved setup issues.',
      'This configuration is hidden and can not be edited or viewed from the web interface.' => 'This configuration is hidden and can not be edited or viewed from the web interface.',
      'Local Disk Storage Not Readable/Writable' => 'Local Disk Storage Not Readable/Writable',
      'Override translations.' => 'Override translations.',
      'Cluster Configuration Out of Sync' => 'Cluster Configuration Out of Sync',
      'Cookies set for x.com are also sent for y.x.com. Assuming instances are running on both domains, this will create a collision preventing you from logging in.' => 'Cookies set for x.com are also sent for y.x.com. Assuming instances are running on both domains, this will create a collision preventing you from logging in.',
      'This option has been removed. You may delete it at your convenience.' => 'This option has been removed. You may delete it at your convenience.',
      'You can find more information about this new identity mapping here: %s' => 'You can find more information about this new identity mapping here: %s',
      'After rebuilding the index, run this command to clear this setup warning:' => 'After rebuilding the index, run this command to clear this setup warning:',
      'Footer item with index "%s" is invalid: %s' => 'Footer item with index "%s" is invalid: %s',
      'Unknown Configuration Option "%s"' => 'Unknown Configuration Option "%s"',
      'Truncate at 1MB' => 'Truncate at 1MB',
      'Access key for Amazon S3.' => 'Access key for Amazon S3.',
      'The PATH component \'%s\' (which resolves as the absolute path \'%s\') is not usable because \'%s\' is not readable.' => 'The PATH component \'%s\' (which resolves as the absolute path \'%s\') is not usable because \'%s\' is not readable.',
      'Maniphest fields are now loaded automatically. You can configure them with `%s`.' => 'Maniphest fields are now loaded automatically. You can configure them with `%s`.',
      'This key is expected to exist, but does not.' => 'This key is expected to exist, but does not.',
      'Persistence' => 'Persistence',
      'This schema is expected to exist, but does not.' => 'This schema is expected to exist, but does not.',
      'You can provide a custom highlighter engine by extending class %s.' => 'You can provide a custom highlighter engine by extending class %s.',
      'Do Not Use Pygments' => 'Do Not Use Pygments',
      'Up to Date' => 'Up to Date',
      'Configure core options, including URIs.' => 'Configure core options, including URIs.',
      '(empty)' => '(empty)',
      'This key has the wrong uniqueness setting.' => 'This key has the wrong uniqueness setting.',
      'When users set or reset a password, it must have at least this many characters.' => 'When users set or reset a password, it must have at least this many characters.',
      'Additional configuration options to lock.' => 'Additional configuration options to lock.',
      'Override what language files (based on filename) highlight as.' => 'Override what language files (based on filename) highlight as.',
      'Bad "Host" Header' => 'Bad "Host" Header',
      'Controls whether email for multiple recipients is sent by creating one message with everyone in the "To:" line, or multiple messages that each have a single recipient in the "To:" line.' => 'Controls whether email for multiple recipients is sent by creating one message with everyone in the "To:" line, or multiple messages that each have a single recipient in the "To:" line.',
      'Option "%s" is of type "%s", but the item at index "%s" of the list is not a string.' => 'Option "%s" is of type "%s", but the item at index "%s" of the list is not a string.',
      'MySQL port to use when connecting to the database.' => 'MySQL port to use when connecting to the database.',
      'Trying to add duplicate key "%s"!' => 'Trying to add duplicate key "%s"!',
      'Option "%s" is of type "%s", but the configured value is not a string.' => 'Option "%s" is of type "%s", but the configured value is not a string.',
      'User Guide: Amazon RDS' => 'User Guide: Amazon RDS',
      'Repository %s has an ambiguous leader.' => 'Repository %s has an ambiguous leader.',
      'To enable the SSH error log, specify a path. Errors occurring in contexts where this software is serving SSH requests will be written to this log.
    If not set, no log will be written.' => 'To enable the SSH error log, specify a path. Errors occurring in contexts where this software is serving SSH requests will be written to this log.
    If not set, no log will be written.',
      'Your authentication provider configuration is unlocked. Once you finish setting up or modifying authentication, you should lock the configuration to prevent unauthorized changes.
    Leaving your authentication provider configuration unlocked increases the damage that a compromised administrator account can do to your install. For example, an attacker who compromises an administrator account can change authentication providers to point at a server they control and attempt to intercept usernames and passwords.
    To prevent this attack, you should configure authentication, and then lock the configuration by running "bin/auth lock" from the command line. This will prevent changing the authentication config without first running "bin/auth unlock".' => 'Your authentication provider configuration is unlocked. Once you finish setting up or modifying authentication, you should lock the configuration to prevent unauthorized changes.
    Leaving your authentication provider configuration unlocked increases the damage that a compromised administrator account can do to your install. For example, an attacker who compromises an administrator account can change authentication providers to point at a server they control and attempt to intercept usernames and passwords.
    To prevent this attack, you should configure authentication, and then lock the configuration by running "bin/auth lock" from the command line. This will prevent changing the authentication config without first running "bin/auth unlock".',
      'When you upload a file via drag-and-drop or the API, chunks must be buffered into memory before being written to permanent storage. This server needs memory available to store these chunks while they are uploaded, but PHP is currently configured to severely limit the available memory.
    PHP processes currently have very little free memory available (%s). To work well, processes should have at least %s.
    (Note that the application itself must also fit in available memory, so not all of the memory under the memory limit is available for running workloads.)
    The easiest way to resolve this issue is to set %s to %s in your PHP configuration, to disable the memory limit. There is usually little or no value to using this option to limit process memory.
    You can also increase the limit or ignore this issue and accept that you may encounter problems uploading large files and processing large requests.' => 'When you upload a file via drag-and-drop or the API, chunks must be buffered into memory before being written to permanent storage. This server needs memory available to store these chunks while they are uploaded, but PHP is currently configured to severely limit the available memory.
    PHP processes currently have very little free memory available (%s). To work well, processes should have at least %s.
    (Note that the application itself must also fit in available memory, so not all of the memory under the memory limit is available for running workloads.)
    The easiest way to resolve this issue is to set %s to %s in your PHP configuration, to disable the memory limit. There is usually little or no value to using this option to limit process memory.
    You can also increase the limit or ignore this issue and accept that you may encounter problems uploading large files and processing large requests.',
      'Configuration of the notification server has changed substantially. For discussion, see T10794.' => 'Configuration of the notification server has changed substantially. For discussion, see T10794.',
      'Read option value from stdin.' => 'Read option value from stdin.',
      'Database source is not configured properly' => 'Database source is not configured properly',
      'Don\'t Require Manual Approval' => 'Don\'t Require Manual Approval',
      'Column Type' => 'Column Type',
      'Truncate at 512KB' => 'Truncate at 512KB',
      'Cache' => 'Cache',
      'Automatically profile some percentage of pages.' => 'Automatically profile some percentage of pages.',
      'Explicit S3 endpoint to use. This should be the endpoint which corresponds to the region you have selected in `amazon-s3.region`. This software can not determine the correct endpoint automatically because some endpoint locations are irregular.' => 'Explicit S3 endpoint to use. This should be the endpoint which corresponds to the region you have selected in `amazon-s3.region`. This software can not determine the correct endpoint automatically because some endpoint locations are irregular.',
      'Admin Server' => 'Admin Server',
      'Wrong Column Type' => 'Wrong Column Type',
      'Embed YouTube videos' => 'Embed YouTube videos',
      'Add One Path' => 'Add One Path',
      'Clear Cache' => 'Clear Cache',
      'MySQL Native Driver Not Available' => 'MySQL Native Driver Not Available',
      'Unignore this setup issue?' => 'Unignore this setup issue?',
      'Configure Mail.' => 'Configure Mail.',
      'You can update these %d value(s) here:' => 'You can update these %s value(s) here:',
      'Notification Servers' => 'Notification Servers',
      'To enable the HTTP access log, specify a path. This log is more detailed than normal HTTP access logs (for instance, it can show logged-in users, controllers, and other application data).
    If not set, no log will be written.' => 'To enable the HTTP access log, specify a path. This log is more detailed than normal HTTP access logs (for instance, it can show logged-in users, controllers, and other application data).
    If not set, no log will be written.',
      'extname' => 'extname',
      'Enable captchas with Recaptcha.' => 'Enable captchas with Recaptcha.',
      'This suggests your webserver is configured to decompress or mangle compressed requests.' => 'This suggests your webserver is configured to decompress or mangle compressed requests.',
      'Add Multiple Paths' => 'Add Multiple Paths',
      'Specify an activity to mark as completed.' => 'Specify an activity to mark as completed.',
      'By default, this software links object names in Remarkup fields to the corresponding object. This regex can be used to modify this behavior; object names that match this regex will not be linked.' => 'By default, this software links object names in Remarkup fields to the corresponding object. This regex can be used to modify this behavior; object names that match this regex will not be linked.',
      'This server has a known bad version of "%s".' => 'This server has a known bad version of "%s".',
      'Require DarkConsole Activation' => 'Require DarkConsole Activation',
      'Notifications Status' => 'Notifications Status',
      'Current Configuration' => 'Current Configuration',
      'Replicating Master' => 'Replicating Master',
      'The version of %s on this system is out of date and contains a major, widely disclosed vulnerability (the "Shellshock" vulnerability).
    Upgrade %s to a patched version.
    To learn more about how this issue affects this software, see %s.' => 'The version of %s on this system is out of date and contains a major, widely disclosed vulnerability (the "Shellshock" vulnerability).
    Upgrade %s to a patched version.
    To learn more about how this issue affects this software, see %s.',
      'Without a configured timezone, PHP will emit warnings when working with dates, and dates and times may not display correctly.' => 'Without a configured timezone, PHP will emit warnings when working with dates, and dates and times may not display correctly.',
      'Option "%s" is of type "%s" and must be set to a list of valid regular expressions, but "%s" is not a valid regular expression.' => 'Option "%s" is of type "%s" and must be set to a list of valid regular expressions, but "%s" is not a valid regular expression.',
      'This schema can use a better character set.' => 'This schema can use a better character set.',
      'Configuration value "%s" is locked, but has a value in the database.' => 'Configuration value "%s" is locked, but has a value in the database.',
      'Newly registered accounts can either be placed into a manual approval queue for administrative review, or automatically activated immediately. The approval queue is enabled by default because it gives you greater control over who can register an account and access the server.
    If your install is completely public, or on a VPN, or users can only register with a trusted provider like LDAP, or you\'ve otherwise configured the server to prevent unauthorized registration, you can disable the queue to reduce administrative overhead.
    NOTE: Before you disable the queue, make sure @{config:auth.email-domains} is configured correctly for your install!' => 'Newly registered accounts can either be placed into a manual approval queue for administrative review, or automatically activated immediately. The approval queue is enabled by default because it gives you greater control over who can register an account and access the server.
    If your install is completely public, or on a VPN, or users can only register with a trusted provider like LDAP, or you\'ve otherwise configured the server to prevent unauthorized registration, you can disable the queue to reduce administrative overhead.
    NOTE: Before you disable the queue, make sure @{config:auth.email-domains} is configured correctly for your install!',
      'Determines whether or not YouTube videos get embedded.' => 'Determines whether or not YouTube videos get embedded.',
      'Allows you to add a footer with links in it to most pages. You might want to use these links to point at legal information or an about page.
    Specify a list of dictionaries. Each dictionary describes a footer item. These keys are supported:
      - `name` The name of the item.
      - `href` Optionally, the link target of the item. You can     omit this if you just want a piece of text, like a copyright     notice.' => 'Allows you to add a footer with links in it to most pages. You might want to use these links to point at legal information or an about page.
    Specify a list of dictionaries. Each dictionary describes a footer item. These keys are supported:
      - `name` The name of the item.
      - `href` Optionally, the link target of the item. You can     omit this if you just want a piece of text, like a copyright     notice.',
      'The known issues with this old version are:' => 'The known issues with this old version are:',
      'Not Enabled' => 'Not Enabled',
      'This software sent itself a test request with an "Authorization" HTTP header, and expected those credentials to be transmitted. However, they were absent or incorrect when received. This software sent username "%s" with password "%s"; received username "%s" and password "%s".
    Your webserver may not be configured to forward HTTP basic authentication. If you plan to use basic authentication (for example, to access repositories) you should reconfigure it.' => 'This software sent itself a test request with an "Authorization" HTTP header, and expected those credentials to be transmitted. However, they were absent or incorrect when received. This software sent username "%s" with password "%s"; received username "%s" and password "%s".
    Your webserver may not be configured to forward HTTP basic authentication. If you plan to use basic authentication (for example, to access repositories) you should reconfigure it.',
      'If you are using Amazon RDS, some of the instructions above may not apply to you. See %s for discussion of Amazon RDS.' => 'If you are using Amazon RDS, some of the instructions above may not apply to you. See %s for discussion of Amazon RDS.',
      'Controls whether email is sent "From" users.' => 'Controls whether email is sent "From" users.',
      'The notification server no longer requires root permissions. Start the server as the user you want it to run under.' => 'The notification server no longer requires root permissions. Start the server as the user you want it to run under.',
      'This issue will no longer be suppressed, and will return to its rightful place as a global setup warning.' => 'This issue will no longer be suppressed, and will return to its rightful place as a global setup warning.',
      'Allows you to remove levity and jokes from the UI.' => 'Allows you to remove levity and jokes from the UI.',
      'Sites' => 'Sites',
      'T6185 "Shellshock" Bash Vulnerability' => 'T6185 "Shellshock" Bash Vulnerability',
      'Missing \'%s\' Extension' => 'Missing \'%s\' Extension',
      'Retention policies for garbage collection.' => 'Retention policies for garbage collection.',
      'MySQL (on host "%s") is configured with a very small innodb_buffer_pool_size, which may impact performance.' => 'MySQL (on host "%s") is configured with a very small innodb_buffer_pool_size, which may impact performance.',
      'You should upgrade this software.' => 'You should upgrade this software.',
      'The following caches will be cleared:' => 'The following caches will be cleared:',
      'Detected %s warning(s) with the schemata.' => 'Detected %s warning(s) with the schemata.',
      'Deprecated mysql.host Format' => 'Deprecated mysql.host Format',
      'This key is on the wrong columns.' => 'This key is on the wrong columns.',
      'Wrong Nullable Setting' => 'Wrong Nullable Setting',
      'Secret key for Amazon S3.' => 'Secret key for Amazon S3.',
      'You are using an old version of MySQL (on host "%s") which has poor unicode support (it does not support the "utf8mb4" collation set). You will encounter limitations when working with some unicode data.
    We strongly recommend you upgrade to MySQL 5.5 or newer.' => 'You are using an old version of MySQL (on host "%s") which has poor unicode support (it does not support the "utf8mb4" collation set). You will encounter limitations when working with some unicode data.
    We strongly recommend you upgrade to MySQL 5.5 or newer.',
      'Trying to add duplicate column "%s"!' => 'Trying to add duplicate column "%s"!',
      'Minimum password length.' => 'Minimum password length.',
      'Required PHP extensions are not installed.' => 'Required PHP extensions are not installed.',
      'Database' => 'Database',
      'UNHEALTHY: This database has failed recent health checks. Traffic will not be sent to it until it recovers.' => 'UNHEALTHY: This database has failed recent health checks. Traffic will not be sent to it until it recovers.',
      'Request input, in bytes.' => 'Request input, in bytes.',
      'PHP 7 Compatibility Information' => 'PHP 7 Compatibility Information',
      'You enabled pygments but the %s script is not actually available, your %s is probably broken.' => 'You enabled pygments but the %s script is not actually available, your %s is probably broken.',
      'Application Settings' => 'Application Settings',
      'Show email preferences link in email.' => 'Show email preferences link in email.',
      'Your webserver may have compression disabled.' => 'Your webserver may have compression disabled.',
      'The configured PATH includes a component which is not usable. This server will be unable to find or execute binaries located here:
    %s
    The user that the webserver runs as must be able to read all the directories in PATH in order to make use of them.' => 'The configured PATH includes a component which is not usable. This server will be unable to find or execute binaries located here:
    %s
    The user that the webserver runs as must be able to read all the directories in PATH in order to make use of them.',
      'You can set a limit for the maximum byte size of outbound mail. Mail which is larger than this limit will be truncated before being sent. This can be useful if your MTA rejects mail which exceeds some limit (this is reasonably common). Specify a value in bytes.' => 'You can set a limit for the maximum byte size of outbound mail. Mail which is larger than this limit will be truncated before being sent. This can be useful if your MTA rejects mail which exceeds some limit (this is reasonably common). Specify a value in bytes.',
      'Multiple %s subclasses have the same key (\'%s\'): %s, %s.' => 'Multiple %s subclasses have the same key (\'%s\'): %s, %s.',
      'Your webserver is rewriting paths improperly.' => 'Your webserver is rewriting paths improperly.',
      'You can rebuild repository identities while the server is running.' => 'You can rebuild repository identities while the server is running.',
      'Customize the logo image and text which appears in the main site header:
      - **Logo Image**: Upload a new 80 x 80px image to replace the logo in the site header.
      - **Wordmark**: Choose new text to display next to the logo. By default, the header displays //%s//.
    ' => 'Customize the logo image and text which appears in the main site header:
      - **Logo Image**: Upload a new 80 x 80px image to replace the logo in the site header.
      - **Wordmark**: Choose new text to display next to the logo. By default, the header displays //%s//.
    ',
      'Trying to add duplicate table "%s"!' => 'Trying to add duplicate table "%s"!',
      'No Authentication Providers Configured' => 'No Authentication Providers Configured',
      'Run Silently' => 'Run Silently',
      'You can find more information about PHP configuration values in the %s.' => 'You can find more information about PHP configuration values in the %s.',
      'Skipping option "%s"; already in local config.' => 'Skipping option "%s"; already in local config.',
      'Public email is now accepted if the associated address has a default author, and rejected otherwise.' => 'Public email is now accepted if the associated address has a default author, and rejected otherwise.',
      'Setup Issues' => 'Setup Issues',
      'Require email verification' => 'Require email verification',
      'Resource minification is now managed automatically.' => 'Resource minification is now managed automatically.',
      'This software sometimes executes other binaries on the server. An example of this is the `%s` command, used to syntax-highlight code written in languages other than PHP. By default, it is assumed that these binaries are in the %s of the user running this software (normally \'apache\', \'httpd\', or \'nobody\'). Here you can add extra directories to the %s environment variable, for when these binaries are in non-standard locations.
    Note that you can also put binaries in `%s` (for example, by symlinking them).
    The current value of PATH after configuration is applied is:
      lang=text
      %s' => 'This software sometimes executes other binaries on the server. An example of this is the `%s` command, used to syntax-highlight code written in languages other than PHP. By default, it is assumed that these binaries are in the %s of the user running this software (normally \'apache\', \'httpd\', or \'nobody\'). Here you can add extra directories to the %s environment variable, for when these binaries are in non-standard locations.
    Note that you can also put binaries in `%s` (for example, by symlinking them).
    The current value of PATH after configuration is applied is:
      lang=text
      %s',
      'Whitespace rendering is now handled automatically.' => 'Whitespace rendering is now handled automatically.',
      '%s Not Working' => '%s Not Working',
      'This configuration option is unknown. It may be misspelled, or have existed in a previous version of the software.' => 'This configuration option is unknown. It may be misspelled, or have existed in a previous version of the software.',
      'You can use \'%s\' if you don\'t want to create a full translation to give users an option for switching to it and you just want to override some strings in the default translation.' => 'You can use \'%s\' if you don\'t want to create a full translation to give users an option for switching to it and you just want to override some strings in the default translation.',
      'Connection' => 'Connection',
      'Placeholder recipients are now generated automatically.' => 'Placeholder recipients are now generated automatically.',
      'Elasticsearch is configured (with the %s setting) but an exception was encountered when trying to test the index.
    %s' => 'Elasticsearch is configured (with the %s setting) but an exception was encountered when trying to test the index.
    %s',
      'SSH keys are now actually useful, so they are always enabled.' => 'SSH keys are now actually useful, so they are always enabled.',
      'Request output, in bytes.' => 'Request output, in bytes.',
      'Configure integration with AWS (EC2, SES, S3, etc).' => 'Configure integration with AWS (EC2, SES, S3, etc).',
      'Config option \'%s\' is invalid. The URI must contain a dot (\'.\'), like \'%s\', not just a bare name like \'%s\'. Some web browsers will not set cookies on domains with no TLD.' => 'Config option \'%s\' is invalid. The URI must contain a dot (\'.\'), like \'%s\', not just a bare name like \'%s\'. Some web browsers will not set cookies on domains with no TLD.',
      'The Multimeter application collects performance samples. You can use this data to help you understand what the software is spending time and resources doing, and to identify problematic access patterns.
    This option controls how frequently sampling activates. Set it to some positive integer N to sample every 1 / N pages.
    For most installs, the default value (1 sample per 1000 pages) should collect enough data to be useful without requiring much storage or meaningfully impacting performance. If you\'re investigating performance issues, you can adjust the rate in order to collect more data.' => 'The Multimeter application collects performance samples. You can use this data to help you understand what the software is spending time and resources doing, and to identify problematic access patterns.
    This option controls how frequently sampling activates. Set it to some positive integer N to sample every 1 / N pages.
    For most installs, the default value (1 sample per 1000 pages) should collect enough data to be useful without requiring much storage or meaningfully impacting performance. If you\'re investigating performance issues, you can adjust the rate in order to collect more data.',
      'Cache namespace.' => 'Cache namespace.',
      '%s = 0' => '%s = 0',
      'Unsafe PHP "Local Infile" Configuration' => 'Unsafe PHP "Local Infile" Configuration',
      'Custom remarkup rules are now added by subclassing %s or %s.' => 'Custom remarkup rules are now added by subclassing %s or %s.',
      'Issue Resolved' => 'Issue Resolved',
      'If you enable this, linked Commons videos will be embedded inline.' => 'If you enable this, linked Commons videos will be embedded inline.',
      'Garbage collectors are now configured with "%s".' => 'Garbage collectors are now configured with "%s".',
      'Unknown configuration option type "%s".' => 'Unknown configuration option type "%s".',
      'Trying to add duplicate database "%s"!' => 'Trying to add duplicate database "%s"!',
      'This column has the wrong autoincrement setting.' => 'This column has the wrong autoincrement setting.',
      'Allows you to add footer links on most pages.' => 'Allows you to add footer links on most pages.',
      'USWest Region' => 'USWest Region',
      'Database host "%s" is using the builtin stopword file for building search indexes. This can make the search feature less useful.
    Stopwords are common words which are not indexed and thus can not be searched for. The default stopword file has about 500 words, including various words which you are likely to wish to search for, such as \'various\', \'likely\', \'wish\', and \'zero\'.
    To make search more useful, you can use an alternate stopword file with fewer words. Alternatively, if you aren\'t concerned about searching for common words, you can ignore this warning. If you later plan to configure Elasticsearch, you can also ignore this warning: this stopword file only affects MySQL fulltext indexes.
    To choose a different stopword file, add this to your %s file (in the %s section) and then restart %s:
    %s
    (You can also use a different file if you prefer. The file suggested above has about 50 of the most common English words.)
    Finally, run this command to rebuild indexes using the new rules:
    %s' => 'Database host "%s" is using the builtin stopword file for building search indexes. This can make the search feature less useful.
    Stopwords are common words which are not indexed and thus can not be searched for. The default stopword file has about 500 words, including various words which you are likely to wish to search for, such as \'various\', \'likely\', \'wish\', and \'zero\'.
    To make search more useful, you can use an alternate stopword file with fewer words. Alternatively, if you aren\'t concerned about searching for common words, you can ignore this warning. If you later plan to configure Elasticsearch, you can also ignore this warning: this stopword file only affects MySQL fulltext indexes.
    To choose a different stopword file, add this to your %s file (in the %s section) and then restart %s:
    %s
    (You can also use a different file if you prefer. The file suggested above has about 50 of the most common English words.)
    Finally, run this command to rebuild indexes using the new rules:
    %s',
      'Maniphest fields are now defined in `%s`. Existing definitions have been migrated.' => 'Maniphest fields are now defined in `%s`. Existing definitions have been migrated.',
      'Enable Prototypes' => 'Enable Prototypes',
      'Elasticsearch is now configured with "%s".' => 'Elasticsearch is now configured with "%s".',
      'Configuring Outbound Email' => 'Configuring Outbound Email',
      'Inbound mail addresses are now configured for each application in the Applications tool.' => 'Inbound mail addresses are now configured for each application in the Applications tool.',
      'Partial \'%s\' Support' => 'Partial \'%s\' Support',
      'Subschemata have setup warnings.' => 'Subschemata have setup warnings.',
      'Uptime' => 'Uptime',
      'MySQL (on host "%s") is using a default stopword file, which will prevent searching for many common words.' => 'MySQL (on host "%s") is using a default stopword file, which will prevent searching for many common words.',
      'Two setup checks raised an issue with key \'%s\'!' => 'Two setup checks raised an issue with key \'%s\'!',
      'Mark activities complete even if there is no outstanding need to complete them.' => 'Mark activities complete even if there is no outstanding need to complete them.',
      'You likely enabled cluster.search without creating the index. Use the following command to create a new index.' => 'You likely enabled cluster.search without creating the index. Use the following command to create a new index.',
      'Skipping option "%s"; already in database config.' => 'Skipping option "%s"; already in database config.',
      'The "InnoDB" engine is not available in MySQL (on host "%s"). Enable InnoDB in your MySQL configuration.
    (If you already created tables, MySQL incorrectly used some other engine to create them. You need to convert them or drop and reinitialize them.)' => 'The "InnoDB" engine is not available in MySQL (on host "%s"). Enable InnoDB in your MySQL configuration.
    (If you already created tables, MySQL incorrectly used some other engine to create them. You need to convert them or drop and reinitialize them.)',
      'This software is currently configured to serve user uploads directly from the same domain as other content. This is a security risk.
    Configure a CDN (or alternate file domain) to eliminate this risk. Using a CDN will also improve performance. See the guide below for instructions.' => 'This software is currently configured to serve user uploads directly from the same domain as other content. This is a security risk.
    Configure a CDN (or alternate file domain) to eliminate this risk. Using a CDN will also improve performance. See the guide below for instructions.',
      'Syntax highlighting a supported for a few languages by default, but you can install Pygments (a third-party syntax highlighting tool) to provide support for many more languages.
    To install Pygments, visit [[ http://pygments.org | pygments.org ]] and follow the download and install instructions.
    Once Pygments is installed, enable this option (`pygments.enabled`) to make use of Pygments when highlighting source code.
    After you install and enable Pygments, newly created source code (like diffs and pastes) should highlight correctly. You may need to clear caches to get previously existing source code to highlight. For instructions on managing caches, see [[ %s | Managing Caches ]].' => 'Syntax highlighting a supported for a few languages by default, but you can install Pygments (a third-party syntax highlighting tool) to provide support for many more languages.
    To install Pygments, visit [[ http://pygments.org | pygments.org ]] and follow the download and install instructions.
    Once Pygments is installed, enable this option (`pygments.enabled`) to make use of Pygments when highlighting source code.
    After you install and enable Pygments, newly created source code (like diffs and pastes) should highlight correctly. You may need to clear caches to get previously existing source code to highlight. For instructions on managing caches, see [[ %s | Managing Caches ]].',
      '%s Stats' => '%s Stats',
      'The minimum supported version of Subversion is 1.5, which was released in 2008.' => 'The minimum supported version of Subversion is 1.5, which was released in 2008.',
      'Your PHP memory limit is configured in a way that may prevent you from uploading large files or handling large requests.' => 'Your PHP memory limit is configured in a way that may prevent you from uploading large files or handling large requests.',
      'The system user.' => 'The system user.',
      'Reload Page' => 'Reload Page',
      'Force users to connect via HTTPS instead of HTTP.' => 'Force users to connect via HTTPS instead of HTTP.',
      'Install the MySQLi extension to improve database behavior.' => 'Install the MySQLi extension to improve database behavior.',
      'Large Files' => 'Large Files',
      'Compressed Requests Not Received Properly' => 'Compressed Requests Not Received Properly',
      'The namespace that databases should use.' => 'The namespace that databases should use.',
      'Mark a manual upgrade activity as complete.' => 'Mark a manual upgrade activity as complete.',
      '%s Not Set' => '%s Not Set',
      'This configuration option has been replaced with a modular handler. See T9346.' => 'This configuration option has been replaced with a modular handler. See T9346.',
      'Value for option "%s" (of type "%s") must be specified in JSON, but input could not be decoded. (Did you forget to quote a string?)' => 'Value for option "%s" (of type "%s") must be specified in JSON, but input could not be decoded. (Did you forget to quote a string?)',
      'Configuration option \'%s\' has invalid value and was restored to the default: %s' => 'Configuration option \'%s\' has invalid value and was restored to the default: %s',
      'To update these %d value(s), edit your PHP configuration file, located here:' => 'To update these %s value(s), edit your PHP configuration file, located here:',
      'Collation' => 'Collation',
      'Replication' => 'Replication',
      'The HTTP response code or process exit code.' => 'The HTTP response code or process exit code.',
      'Obsolete; use standard rendering events instead.' => 'Obsolete; use standard rendering events instead.',
      'Local Disk Storage' => 'Local Disk Storage',
      'Constant' => 'Constant',
      'Issue' => 'Issue',
      'Determines which URI protocols are valid for links and redirects.' => 'Determines which URI protocols are valid for links and redirects.',
      'Configuration Guide: Configuring a File Domain' => 'Configuration Guide: Configuring a File Domain',
      'Activate DarkConsole on every page.' => 'Activate DarkConsole on every page.',
      'Enable verbose error reporting and disk reads.' => 'Enable verbose error reporting and disk reads.',
      'This software sent itself a test request that was compressed with "Content-Encoding: gzip", but received different bytes than it sent.' => 'This software sent itself a test request that was compressed with "Content-Encoding: gzip", but received different bytes than it sent.',
      'Mail object address hash keys are now generated automatically.' => 'Mail object address hash keys are now generated automatically.',
      'Too many arguments: expected one key and one value.' => 'Too many arguments: expected one key and one value.',
      'Settings History' => 'Settings History',
      'Opcode' => 'Opcode',
      'To update these %d value(s), edit your PHP configuration file.' => 'To update these %s value(s), edit your PHP configuration file.',
      'Auth provider config must be unlocked before editing' => 'Auth provider config must be unlocked before editing',
      'Enable Recaptcha' => 'Enable Recaptcha',
      'Prefix cookie with "%s"' => 'Prefix cookie with "%s"',
      'The configuration option "%s" is not recognized. It may be misspelled, or it might have existed in an older version of the software. It has no effect, and should be corrected or deleted.' => 'The configuration option "%s" is not recognized. It may be misspelled, or it might have existed in an older version of the software. It has no effect, and should be corrected or deleted.',
      'You can rebuild the search index while the server is running.' => 'You can rebuild the search index while the server is running.',
      'Migrated option "%s" from file to database config.' => 'Migrated option "%s" from file to database config.',
      'PHP Documentation' => 'PHP Documentation',
      'Your webserver produced an unexpected response.' => 'Your webserver produced an unexpected response.',
      'Unable to determine the version number of "%s".' => 'Unable to determine the version number of "%s".',
      'If true, email addresses must be verified (by clicking a link in an email) before a user can login. By default, verification is optional unless @{config:auth.email-domains} is nonempty.' => 'If true, email addresses must be verified (by clicking a link in an email) before a user can login. By default, verification is optional unless @{config:auth.email-domains} is nonempty.',
      'PHP OPcache Documentation' => 'PHP OPcache Documentation',
      'Daemons Are Not Running' => 'Daemons Are Not Running',
      'Cluster: Databases' => 'Cluster: Databases',
      'No Messages' => 'No Messages',
      'Footer item with index "%s" is invalid: each item must be a dictionary describing a footer item.' => 'Footer item with index "%s" is invalid: each item must be a dictionary describing a footer item.',
      'None of the caches on this page can be cleared.' => 'None of the caches on this page can be cleared.',
      'Require email verification before a user can log in.' => 'Require email verification before a user can log in.',
      'Master' => 'Master',
      'A Troublesome Encounter!' => 'A Troublesome Encounter!',
      'The indexing algorithm for the fulltext search index has been updated and the index needs to be rebuilt. Until you rebuild the index, global search (and other fulltext search) will not function correctly.' => 'The indexing algorithm for the fulltext search index has been updated and the index needs to be rebuilt. Until you rebuild the index, global search (and other fulltext search) will not function correctly.',
      'Maximum taskmaster daemon pool size.' => 'Maximum taskmaster daemon pool size.',
      'Replica' => 'Replica',
      'Use Public Replies (Less Secure)' => 'Use Public Replies (Less Secure)',
      'MySQL password to use when connecting to the database.' => 'MySQL password to use when connecting to the database.',
      'If a variable isn\'t available (for example, %%m appears in the file format but the request is not a Conduit request), it will be rendered as \'-\'' => 'If a variable isn\'t available (for example, %%m appears in the file format but the request is not a Conduit request), it will be rendered as \'-\'',
      'CSRF HMAC keys are now managed automatically.' => 'CSRF HMAC keys are now managed automatically.',
      'Database Status' => 'Database Status',
      'The request body that was received began:' => 'The request body that was received began:',
      'Value for option "%s" (of type "%s") must be specified in JSON, but input could not be decoded: %s' => 'Value for option "%s" (of type "%s") must be specified in JSON, but input could not be decoded: %s',
      'Database host "%s" has a configured cluster state which disagrees with the state on this host ("%s"). Run `bin/storage partition` to commit local state to the cluster. This host may have started with an out-of-date configuration.' => 'Database host "%s" has a configured cluster state which disagrees with the state on this host ("%s"). Run `bin/storage partition` to commit local state to the cluster. This host may have started with an out-of-date configuration.',
      'Normally, this software issues HTTP redirects after a successful POST. This can make it difficult to debug things which happen while processing the POST, because service and profiling information are lost. By setting this configuration option, an interstitial page will be shown instead of automatically redirecting, allowing you to examine service and profiling information. It also makes the UX awful, so you should only enable it when debugging.' => 'Normally, this software issues HTTP redirects after a successful POST. This can make it difficult to debug things which happen while processing the POST, because service and profiling information are lost. By setting this configuration option, an interstitial page will be shown instead of automatically redirecting, allowing you to examine service and profiling information. It also makes the UX awful, so you should only enable it when debugging.',
      'Largest' => 'Largest',
      'Maximum number of taskmaster daemons to run at once. Raising this can increase the maximum throughput of the task queue. The pool will automatically scale down when unutilized.
    If you are running a cluster, this limit applies separately to each instance of `phd`. For example, if this limit is set to `4` and you have three hosts running daemons, the effective global limit will be 12.
    After changing this value, you must restart the daemons. Most configuration changes are picked up by the daemons automatically, but pool sizes can not be changed without a restart.' => 'Maximum number of taskmaster daemons to run at once. Raising this can increase the maximum throughput of the task queue. The pool will automatically scale down when unutilized.
    If you are running a cluster, this limit applies separately to each instance of `phd`. For example, if this limit is set to `4` and you have three hosts running daemons, the effective global limit will be 12.
    After changing this value, you must restart the daemons. Most configuration changes are picked up by the daemons automatically, but pool sizes can not be changed without a restart.',
      'Set the URI that Phurl will use to share shortened URLs.' => 'Set the URI that Phurl will use to share shortened URLs.',
      'Your version of MySQL (on database host "%s") does not support configuration of a stopword file. You will not be able to find search results for common words.' => 'Your version of MySQL (on database host "%s") does not support configuration of a stopword file. You will not be able to find search results for common words.',
      'Your PHP configuration selects an invalid timezone. Select a valid timezone.' => 'Your PHP configuration selects an invalid timezone. Select a valid timezone.',
      '%s deleted this configuration entry (again?).' => '%s deleted this configuration entry (again?).',
      'There is some deprecated code found in the code-base.' => 'There is some deprecated code found in the code-base.',
      'Unresolved Setup Issues' => 'Unresolved Setup Issues',
      'Server Timezone Not Configured' => 'Server Timezone Not Configured',
      'The following regex is malformed and cannot be used: %s' => 'The following regex is malformed and cannot be used: %s',
      'Use the %s to manage installed applications.' => 'Use the %s to manage installed applications.',
      'Individual application reply handler domains have been removed. Configure a reply domain with "%s".' => 'Individual application reply handler domains have been removed. Configure a reply domain with "%s".',
      'Preflight' => 'Preflight',
      'Install these %d PHP extension(s):' => 'Install these %s PHP extension(s):',
      'Missing \'%s\' Binary' => 'Missing \'%s\' Binary',
      'Charset' => 'Charset',
      'By default, this software generates unique reply-to addresses and sends a
    separate email to each recipient when you enable reply handling. This is more
    secure than using "From" to establish user identity, but can mean users may
    receive multiple emails when they are on mailing lists. Instead, you can use a
    single, non-unique reply to address and authenticate users based on the "From"
    address by setting this to \'true\'. This trades away a little bit of security
    for convenience, but it\'s reasonable in many installs. Object interactions are
    still protected using hashes in the single public email address, so objects
    can not be replied to blindly.' => 'By default, this software generates unique reply-to addresses and sends a
    separate email to each recipient when you enable reply handling. This is more
    secure than using "From" to establish user identity, but can mean users may
    receive multiple emails when they are on mailing lists. Instead, you can use a
    single, non-unique reply to address and authenticate users based on the "From"
    address by setting this to \'true\'. This trades away a little bit of security
    for convenience, but it\'s reasonable in many installs. Object interactions are
    still protected using hashes in the single public email address, so objects
    can not be replied to blindly.',
      'The framable public feed is no longer supported.' => 'The framable public feed is no longer supported.',
      'A random, unique string which identifies the request.' => 'A random, unique string which identifies the request.',
      'Auth provider config can be edited without unlocking' => 'Auth provider config can be edited without unlocking',
      'Disable unsafe option "%s" in PHP configuration.' => 'Disable unsafe option "%s" in PHP configuration.',
      '%s Day(s)' => '%s Day(s)',
      'PHP version: %s' => 'PHP version: %s',
      'No search servers are configured.' => 'No search servers are configured.',
      'DarkConsole is a development and profiling tool built into the web interface. You should leave it disabled unless you are developing or debugging %s.
    Once you activate DarkConsole for the install, **you need to enable it for your account before it will actually appear on pages.** You can do this in Settings > Developer Settings.
    DarkConsole exposes potentially sensitive data (like queries, stack traces, and configuration) so you generally should not turn it on in production.' => 'DarkConsole is a development and profiling tool built into the web interface. You should leave it disabled unless you are developing or debugging %s.
    Once you activate DarkConsole for the install, **you need to enable it for your account before it will actually appear on pages.** You can do this in Settings > Developer Settings.
    DarkConsole exposes potentially sensitive data (like queries, stack traces, and configuration) so you generally should not turn it on in production.',
      'This key is too long for utf8mb4.' => 'This key is too long for utf8mb4.',
      'Expected Character Set' => 'Expected Character Set',
      'Repository Servers' => 'Repository Servers',
      'Format for the HTTP access log. Use `%s` to set the path. Available variables are:' => 'Format for the HTTP access log. Use `%s` to set the path. Available variables are:',
      'Skipping obsolete option: %s' => 'Skipping obsolete option: %s',
      'This schema can use a better collation.' => 'This schema can use a better collation.',
      'Install Pygments to Improve Syntax Highlighting' => 'Install Pygments to Improve Syntax Highlighting',
      'Sessions now expire and are garbage collected rather than having an arbitrary concurrency limit.' => 'Sessions now expire and are garbage collected rather than having an arbitrary concurrency limit.',
      'Logo Image' => 'Logo Image',
      'Really Clear Cache' => 'Really Clear Cache',
      'Unexpected \'%s\' Behavior' => 'Unexpected \'%s\' Behavior',
      'Mail thread IDs are now generated automatically.' => 'Mail thread IDs are now generated automatically.',
      'Database host "%s" is configured to use the default minimum word length when building search indexes, which is 4. This means words which are only 3 characters long will not be indexed and can not be searched for.
    For example, you will not be able to find search results for words like \'SMS\', \'web\', or \'DOS\'.
    You can change this setting to 3 to allow these words to be indexed. Alternatively, you can ignore this warning if you are not concerned about searching for 3-letter words. If you later plan to configure Elasticsearch, you can also ignore this warning: only MySQL fulltext search is affected.
    To reduce the minimum word length to 3, add this to your %s file (in the %s section) and then restart %s:
    %s
    Finally, run this command to rebuild indexes using the new rules:
    %s' => 'Database host "%s" is configured to use the default minimum word length when building search indexes, which is 4. This means words which are only 3 characters long will not be indexed and can not be searched for.
    For example, you will not be able to find search results for words like \'SMS\', \'web\', or \'DOS\'.
    You can change this setting to 3 to allow these words to be indexed. Alternatively, you can ignore this warning if you are not concerned about searching for 3-letter words. If you later plan to configure Elasticsearch, you can also ignore this warning: only MySQL fulltext search is affected.
    To reduce the minimum word length to 3, add this to your %s file (in the %s section) and then restart %s:
    %s
    Finally, run this command to rebuild indexes using the new rules:
    %s',
      'Your configuration fails to specify a server timezone. You can either set the PHP configuration value \'%s\' or the %s configuration value \'%s\' to specify one.' => 'Your configuration fails to specify a server timezone. You can either set the PHP configuration value \'%s\' or the %s configuration value \'%s\' to specify one.',
      'Enable HTTP Strict Transport Security (HSTS).' => 'Enable HTTP Strict Transport Security (HSTS).',
      'This server has %s available in %s, but the binary exited with an error code when run as %s. Check that it is installed correctly.' => 'This server has %s available in %s, but the binary exited with an error code when run as %s. Check that it is installed correctly.',
      'Users can configure a URI pattern to open files in a text editor. The URI must use a protocol on this whitelist.' => 'Users can configure a URI pattern to open files in a text editor. The URI must use a protocol on this whitelist.',
      'Config' => 'Config',
      'Transaction mail is now always sent with "Precedence: bulk" to improve deliverability.' => 'Transaction mail is now always sent with "Precedence: bulk" to improve deliverability.',
      'Retention Policy' => 'Retention Policy',
      'Without \'%s\', this software can not test for the availability of other binaries.' => 'Without \'%s\', this software can not test for the availability of other binaries.',
      'HTTP Basic Auth Not Configured' => 'HTTP Basic Auth Not Configured',
      'Whitelist 1.2.*.*' => 'Whitelist 1.2.*.*',
      'Highlight httpd.conf as "apacheconf".' => 'Highlight httpd.conf as "apacheconf".',
      'Database Value' => 'Database Value',
      'US Mountain (MDT)' => 'US Mountain (MDT)',
      'This option has been replaced with `ui.logo`, which provides more flexible configuration options.' => 'This option has been replaced with `ui.logo`, which provides more flexible configuration options.',
      'Rebuild Search Index' => 'Rebuild Search Index',
      'Do not install this software on an instance class with burstable CPU.' => 'Do not install this software on an instance class with burstable CPU.',
      'Real' => 'Real',
      'Partition: %s' => 'Partition: %s',
      'This is an override list of regular expressions which allows you to choose what language files are highlighted as. If your projects have certain rules about filenames or use unusual or ambiguous language extensions, you can create a mapping here. This is an ordered dictionary of regular expressions which will be tested against the filename. They should map to either an explicit language as a string value, or a numeric index into the captured groups as an integer.' => 'This is an override list of regular expressions which allows you to choose what language files are highlighted as. If your projects have certain rules about filenames or use unusual or ambiguous language extensions, you can create a mapping here. This is an ordered dictionary of regular expressions which will be tested against the filename. They should map to either an explicit language as a string value, or a numeric index into the captured groups as an integer.',
      'You can restrict allowed email addresses to certain domains (like `yourcompany.com`) by setting a list of allowed domains here.
    Users will only be allowed to register using email addresses at one of the domains, and will only be able to add new email addresses for these domains. If you configure this, it implies @{config:auth.require-email-verification}.
    You should omit the `@` from domains. Note that the domain must match exactly. If you allow `yourcompany.com`, that permits `joe@yourcompany.com` but rejects `joe@mail.yourcompany.com`.' => 'You can restrict allowed email addresses to certain domains (like `yourcompany.com`) by setting a list of allowed domains here.
    Users will only be allowed to register using email addresses at one of the domains, and will only be able to add new email addresses for these domains. If you configure this, it implies @{config:auth.require-email-verification}.
    You should omit the `@` from domains. Note that the domain must match exactly. If you allow `yourcompany.com`, that permits `joe@yourcompany.com` but rejects `joe@mail.yourcompany.com`.',
      'Show unresolved issues with setup and configuration.' => 'Show unresolved issues with setup and configuration.',
      'Options for Phurl.' => 'Options for Phurl.',
      'Unable to determine the version number of "%s". Usually, this means the program changed its version format string recently and this software does not know how to parse the new one yet, but might indicate that you have a very old (or broken) binary.
    Because we can not determine the version number, checks against minimum and known-bad versions will be skipped, so we might fail to detect an incompatible binary.
    You may be able to resolve this issue by updating this server, since a newer version of the software is likely to be able to parse the newer version string.
    If updating the software does not fix this, you can report the issue to the upstream so we can adjust the parser.
    If you are confident you have a recent version of "%s" installed and working correctly, it is usually safe to ignore this warning.' => 'Unable to determine the version number of "%s". Usually, this means the program changed its version format string recently and this software does not know how to parse the new one yet, but might indicate that you have a very old (or broken) binary.
    Because we can not determine the version number, checks against minimum and known-bad versions will be skipped, so we might fail to detect an incompatible binary.
    You may be able to resolve this issue by updating this server, since a newer version of the software is likely to be able to parse the newer version string.
    If updating the software does not fix this, you can report the issue to the upstream so we can adjust the parser.
    If you are confident you have a recent version of "%s" installed and working correctly, it is usually safe to ignore this warning.',
      'For conduit, the Conduit method which was invoked.' => 'For conduit, the Conduit method which was invoked.',
      'The configuration option \'%s\' is not set.' => 'The configuration option \'%s\' is not set.',
      'Enable recaptcha to require users solve captchas after a few failed login attempts. This hinders brute-force attacks against user passwords. For more information, see http://recaptcha.net/' => 'Enable recaptcha to require users solve captchas after a few failed login attempts. This hinders brute-force attacks against user passwords. For more information, see http://recaptcha.net/',
      'Stop Before HTTP Redirect' => 'Stop Before HTTP Redirect',
      'Developer / Debugging' => 'Developer / Debugging',
      'Remove PHP %s' => 'Remove PHP %s',
      'Missing' => 'Missing',
      'Classes must match to compare schemata!' => 'Classes must match to compare schemata!',
      'Set the URI where this software is installed. Setting this improves security by preventing cookies from being set on other domains, and allows daemons to send emails with links that have the correct domain.' => 'Set the URI where this software is installed. Setting this improves security by preventing cookies from being set on other domains, and allows daemons to send emails with links that have the correct domain.',
      'Elasticsearch Index Not Found' => 'Elasticsearch Index Not Found',
      'Unit test value.' => 'Unit test value.',
      'A daemon is running as user %s, but daemons should be running as %s.
    Either adjust the configuration setting %s or restart the daemons. Daemons should attempt to run as the proper user when restarted.' => 'A daemon is running as user %s, but daemons should be running as %s.
    Either adjust the configuration setting %s or restart the daemons. Daemons should attempt to run as the proper user when restarted.',
      'Missing Key' => 'Missing Key',
      'Database host "%s" is configured with a very small %s (%s). This may cause poor database performance and lock exhaustion.
    There are no hard-and-fast rules to setting an appropriate value, but a reasonable starting point for a standard install is something like 40%% of the total memory on the machine. For example, if you have 4GB of RAM on the machine you have installed this software on, you might set this value to %s.
    You can read more about this option in the MySQL documentation to help you make a decision about how to configure it for your use case. There are no concerns specific to this software which make it different from normal workloads with respect to this setting.
    To adjust the setting, add something like this to your %s file (in the %s section), replacing %s with an appropriate value for your host and use case. Then restart %s:
    %s
    If you\'re satisfied with the current setting, you can safely ignore this setup warning.' => 'Database host "%s" is configured with a very small %s (%s). This may cause poor database performance and lock exhaustion.
    There are no hard-and-fast rules to setting an appropriate value, but a reasonable starting point for a standard install is something like 40%% of the total memory on the machine. For example, if you have 4GB of RAM on the machine you have installed this software on, you might set this value to %s.
    You can read more about this option in the MySQL documentation to help you make a decision about how to configure it for your use case. There are no concerns specific to this software which make it different from normal workloads with respect to this setting.
    To adjust the setting, add something like this to your %s file (in the %s section), replacing %s with an appropriate value for your host and use case. Then restart %s:
    %s
    If you\'re satisfied with the current setting, you can safely ignore this setup warning.',
      'Expected Nullable' => 'Expected Nullable',
      'Disable SSH log.' => 'Disable SSH log.',
      'Set a string this software should use to prefix cookie names.' => 'Set a string this software should use to prefix cookie names.',
      'No databases have any issues.' => 'No databases have any issues.',
      'If the web server responds to both HTTP and HTTPS requests but you want users to connect with only HTTPS, you can set this to `true` to make this service redirect HTTP requests to HTTPS.
    Normally, you should just configure your server not to accept HTTP traffic, but this setting may be useful if you originally used HTTP and have now switched to HTTPS but don\'t want to break old links, or if your webserver sits behind a load balancer which terminates HTTPS connections and you can not reasonably configure more granular behavior there.
    IMPORTANT: A request is identified as HTTP or HTTPS by examining the PHP `%s` variable. If you run Apache/mod_php this will probably be set correctly for you automatically, but if you run as CGI/FCGI (e.g., through nginx or lighttpd), you need to configure your web server so that it passes the value correctly based on the connection type.
    If you configure clustering, note that this setting is ignored by intracluster requests.' => 'If the web server responds to both HTTP and HTTPS requests but you want users to connect with only HTTPS, you can set this to `true` to make this service redirect HTTP requests to HTTPS.
    Normally, you should just configure your server not to accept HTTP traffic, but this setting may be useful if you originally used HTTP and have now switched to HTTPS but don\'t want to break old links, or if your webserver sits behind a load balancer which terminates HTTPS connections and you can not reasonably configure more granular behavior there.
    IMPORTANT: A request is identified as HTTP or HTTPS by examining the PHP `%s` variable. If you run Apache/mod_php this will probably be set correctly for you automatically, but if you run as CGI/FCGI (e.g., through nginx or lighttpd), you need to configure your web server so that it passes the value correctly based on the connection type.
    If you configure clustering, note that this setting is ignored by intracluster requests.',
      'Option "%s" is of type "%s", but the configured value is not an integer.' => 'Option "%s" is of type "%s", but the configured value is not an integer.',
      'Notifications no longer have a dedicated debugging mode.' => 'Notifications no longer have a dedicated debugging mode.',
      'Daemon Running as Wrong User' => 'Daemon Running as Wrong User',
      'This software sent itself a test request with an HTTP GET parameter, but the parameter was not transmitted. Sent "%s" with value "%s", got "%s" with value "%s".
    Your webserver is configured incorrectly and large parts of this software will not work until this issue is corrected.
    (This problem can be caused by a missing "QSA" in your RewriteRule.)' => 'This software sent itself a test request with an HTTP GET parameter, but the parameter was not transmitted. Sent "%s" with value "%s", got "%s" with value "%s".
    Your webserver is configured incorrectly and large parts of this software will not work until this issue is corrected.
    (This problem can be caused by a missing "QSA" in your RewriteRule.)',
      'MySQL is not in strict mode (on host "%s"), but using strict mode is recommended.' => 'MySQL is not in strict mode (on host "%s"), but using strict mode is recommended.',
      'This ancient extension point has been replaced with other mechanisms, including "AphrontSite".' => 'This ancient extension point has been replaced with other mechanisms, including "AphrontSite".',
      'You enabled Elasticsearch but the index does not exist.' => 'You enabled Elasticsearch but the index does not exist.',
      '%s Not Found' => '%s Not Found',
      'Write SSH error log here.' => 'Write SSH error log here.',
      'Your `%s` configuration contains a port number, but this usage is deprecated. Instead, put the port number in `%s`.' => 'Your `%s` configuration contains a port number, but this usage is deprecated. Instead, put the port number in `%s`.',
      'Elasticsearch Index Schema Mismatch' => 'Elasticsearch Index Schema Mismatch',
      'Column has Wrong Autoincrement' => 'Column has Wrong Autoincrement',
      'Enable the debugging console.' => 'Enable the debugging console.',
      'Specify the configuration key you want to set.' => 'Specify the configuration key you want to set.',
      'Memory Limit Restricts File Uploads' => 'Memory Limit Restricts File Uploads',
      'Cache Entries' => 'Cache Entries',
      'Unknown column type "%s"!' => 'Unknown column type "%s"!',
      'The minimum supported version of Git on the server is %s, which was released in %s. In older versions, the Git server may not be able to escape arguments with the "--" operator. Note: your users do not require a particular version of Git.' => 'The minimum supported version of Git on the server is %s, which was released in %s. In older versions, the Git server may not be able to escape arguments with the "--" operator. Note: your users do not require a particular version of Git.',
      'Configured location for storing uploaded files on disk ("%s") does not exist, or is not readable or writable. Verify the directory exists and is readable and writable by the webserver.' => 'Configured location for storing uploaded files on disk ("%s") does not exist, or is not readable or writable. Verify the directory exists and is readable and writable by the webserver.',
      'Notifications User Guide: Setup and Configuration' => 'Notifications User Guide: Setup and Configuration',
      'This software sent itself a test request with the "X-Setup-SelfCheck" header and expected to get a valid JSON response back. Instead, the response begins:
    %s
    Something is misconfigured or otherwise mangling responses.' => 'This software sent itself a test request with the "X-Setup-SelfCheck" header and expected to get a valid JSON response back. Instead, the response begins:
    %s
    Something is misconfigured or otherwise mangling responses.',
      'Key is Too Long' => 'Key is Too Long',
      '\'%s\' Missing' => '\'%s\' Missing',
      'Configure database read replicas.' => 'Configure database read replicas.',
      'Elasticsearch Misconfigured' => 'Elasticsearch Misconfigured',
      'Amazon S3 is Only Partially Configured' => 'Amazon S3 is Only Partially Configured',
      '<none>' => '<none>',
      'Customize favicons.' => 'Customize favicons.',
      'The PATH component \'%s\' (which resolves as the absolute path \'%s\') is not usable because it is not traversable (its \'%s\' permission bit is not set).' => 'The PATH component \'%s\' (which resolves as the absolute path \'%s\') is not usable because it is not traversable (its \'%s\' permission bit is not set).',
      'No Repositories' => 'No Repositories',
      '%s deleted this configuration entry.' => '%s deleted this configuration entry.',
      'After rebuilding repository identities, run this command to clear this setup warning:' => 'After rebuilding repository identities, run this command to clear this setup warning:',
      'The timezone this software should use by default.' => 'The timezone this software should use by default.',
      'Mail is now always delivered by the daemons.' => 'Mail is now always delivered by the daemons.',
      'Request has bad "Host" header.' => 'Request has bad "Host" header.',
      'This version of Subversion has a bug where `%s` does not work for files added in rN (Subversion issue #2873), fixed in 1.7.2.' => 'This version of Subversion has a bug where `%s` does not work for files added in rN (Subversion issue #2873), fixed in 1.7.2.',
      'Elasticsearch is not reachable as configured.' => 'Elasticsearch is not reachable as configured.',
      'Key has Wrong Uniqueness' => 'Key has Wrong Uniqueness',
      'Determines whether or not basic account information is editable.' => 'Determines whether or not basic account information is editable.',
      'Get a local configuration value.' => 'Get a local configuration value.',
      'Authenticaton Configuration Unlocked' => 'Authenticaton Configuration Unlocked',
      'By default, this software allows users to add multi-factor authentication to
    their accounts, but does not require it. By enabling this option, you can
    force all users to add at least one authentication factor before they can use
    their accounts.
    Administrators can query a list of users who do not have MFA configured in
    {nav People}:
      - **[[ %s | %s ]]**' => 'By default, this software allows users to add multi-factor authentication to
    their accounts, but does not require it. By enabling this option, you can
    force all users to add at least one authentication factor before they can use
    their accounts.
    Administrators can query a list of users who do not have MFA configured in
    {nav People}:
      - **[[ %s | %s ]]**',
      'The base URI for this install is not configured. Many major features will not work properly until you configure it.' => 'The base URI for this install is not configured. Many major features will not work properly until you configure it.',
      'Unexpected \'diff\' Behavior' => 'Unexpected \'diff\' Behavior',
      'The \'%s\' binary on this system has unexpected behavior: it was expected to exit with a nonzero error code when passed differing files, but did not.' => 'The \'%s\' binary on this system has unexpected behavior: it was expected to exit with a nonzero error code when passed differing files, but did not.',
      'You can ignore an issue if you don\'t want to fix it, or plan to fix it later. Ignored issues won\'t appear on every page but will still be shown in the list of open issues.' => 'You can ignore an issue if you don\'t want to fix it, or plan to fix it later. Ignored issues won\'t appear on every page but will still be shown in the list of open issues.',
      'Enter value in JSON.' => 'Enter value in JSON.',
      'Migrated option "%s" from file to local config.' => 'Migrated option "%s" from file to local config.',
      'Shenanigans' => 'Shenanigans',
      'The path for local repositories does not exist, or is not readable by the webserver.' => 'The path for local repositories does not exist, or is not readable by the webserver.',
      'Inbound and outbound mail is now configured with "cluster.mailers".' => 'Inbound and outbound mail is now configured with "cluster.mailers".',
      'Config \'%s\' Invalid' => 'Config \'%s\' Invalid',
      'A database host ("%s") and this web host ("%s") disagree on the current time by more than 60 seconds (absolute skew is %s seconds). Check that the current time is set correctly everywhere.' => 'A database host ("%s") and this web host ("%s") disagree on the current time by more than 60 seconds (absolute skew is %s seconds). Check that the current time is set correctly everywhere.',
      'The \'%s\' extension is not installed. Without \'%s\', support, this server will not be able to process or resize images (for example, to generate thumbnails). Install or enable \'%s\'.' => 'The \'%s\' extension is not installed. Without \'%s\', support, this server will not be able to process or resize images (for example, to generate thumbnails). Install or enable \'%s\'.',
      'No Recipient Hints' => 'No Recipient Hints',
      'Sample 0.1%% of requests.' => 'Sample 0.1%% of requests.',
      'No Issues' => 'No Issues',
      'No Caches to Reset' => 'No Caches to Reset',
      'No Base URI' => 'No Base URI',
      'Really Clear Cache?' => 'Really Clear Cache?',
      'Allow Any Host (Insecure!)' => 'Allow Any Host (Insecure!)',
      'Collectors with custom policies are highlighted. Use %s to change retention policies.' => 'Collectors with custom policies are highlighted. Use %s to change retention policies.',
      'Multi-Factor Required' => 'Multi-Factor Required',
      'Host: %s' => 'Host: %s',
      'URI that Phurl will use to shorten URLs.' => 'URI that Phurl will use to shorten URLs.',
      'Reply hints are no longer shown in mail.' => 'Reply hints are no longer shown in mail.',
      'Profile every request (slow)' => 'Profile every request (slow)',
      'Resolved Issue' => 'Resolved Issue',
      'Local path "%s" is not writable. This file must be writable so that "bin/config" can store configuration.' => 'Local path "%s" is not writable. This file must be writable so that "bin/config" can store configuration.',
      'This option generally did not prove useful. Resource hash keys are now managed automatically.' => 'This option generally did not prove useful. Resource hash keys are now managed automatically.',
      'Schema Status' => 'Schema Status',
      'To update these %d value(s), run these command(s) from the command line:' => 'To update these %s value(s), run these command(s) from the command line:',
      'If you want to use a single mailbox for reply mail, you can use this
    and set a common prefix for generated reply addresses. It will
    make use of the fact that a mail-address such as
    `devtools+D123+1hjk213h@example.com` will be delivered to the `devtools`
    user\'s mailbox. Set this to the left part of the email address and it will be
    prepended to all generated reply addresses.
    For example, if you want to use `devtools@example.com`, this should be set
    to `devtools`.' => 'If you want to use a single mailbox for reply mail, you can use this
    and set a common prefix for generated reply addresses. It will
    make use of the fact that a mail-address such as
    `devtools+D123+1hjk213h@example.com` will be delivered to the `devtools`
    user\'s mailbox. Set this to the left part of the email address and it will be
    prepended to all generated reply addresses.
    For example, if you want to use `devtools@example.com`, this should be set
    to `devtools`.',
      'Cache Storage' => 'Cache Storage',
      'At least one daemon is currently running as the wrong user.' => 'At least one daemon is currently running as the wrong user.',
      'Data Type' => 'Data Type',
      'Better Character Set Available' => 'Better Character Set Available',
      'Small MySQL "%s"' => 'Small MySQL "%s"',
      'Value for option "%s" must be an integer.' => 'Value for option "%s" must be an integer.',
      'The request path, or request target.' => 'The request path, or request target.',
      '%s Active / %s Total' => '%s Active / %s Total',
      'Automatic' => 'Automatic',
      'Connection Error' => 'Connection Error',
      'Options relating to authentication.' => 'Options relating to authentication.',
      'Migrating file source...' => 'Migrating file source...',
      'Autoincrement' => 'Autoincrement',
      'Install applications which are still under development.' => 'Install applications which are still under development.',
      'Dark' => 'Dark',
      'GZip Compression May Not Be Enabled' => 'GZip Compression May Not Be Enabled',
      'Typeahead strategies are now managed automatically.' => 'Typeahead strategies are now managed automatically.',
      'Return to Open Issue List' => 'Return to Open Issue List',
      'Activate read-only mode for maintenance or disaster recovery.' => 'Activate read-only mode for maintenance or disaster recovery.',
      'PHP also loaded these %s configuration file(s):' => 'PHP also loaded these %s configuration file(s):',
      'Reading value from stdin...' => 'Reading value from stdin...',
      'Option "%s" is of type "%s", but the value you provided is not a valid JSON list: when providing a set from the command line, specify it as a list of values in JSON. You may need to quote the value for your shell (for example: \'["a", "b", ...]\').' => 'Option "%s" is of type "%s", but the value you provided is not a valid JSON list: when providing a set from the command line, specify it as a list of values in JSON. You may need to quote the value for your shell (for example: \'["a", "b", ...]\').',
      'To rebuild the index, run this command:' => 'To rebuild the index, run this command:',
      'This software can highlight a few languages by default, but installing and enabling Pygments (a third-party highlighting tool) will add syntax highlighting for many more languages. 
    For instructions on installing and enabling Pygments, see the %s configuration option.
    If you do not want to install Pygments, you can ignore this issue.' => 'This software can highlight a few languages by default, but installing and enabling Pygments (a third-party highlighting tool) will add syntax highlighting for many more languages. 
    For instructions on installing and enabling Pygments, see the %s configuration option.
    If you do not want to install Pygments, you can ignore this issue.',
      'Disable Recaptcha' => 'Disable Recaptcha',
      'Sample every request (slow).' => 'Sample every request (slow).',
      'The daemons are not running, background processing (including sending email, rebuilding search indexes, importing commits, cleaning up old data, and running builds) can not be performed.
    Use %s to start daemons. See %s for more information.' => 'The daemons are not running, background processing (including sending email, rebuilding search indexes, importing commits, cleaning up old data, and running builds) can not be performed.
    Use %s to start daemons. See %s for more information.',
      '\'%s\' binary not found or Imagemagick is not installed.' => '\'%s\' binary not found or Imagemagick is not installed.',
      'Unsafe MySQL "local_infile" Setting Enabled' => 'Unsafe MySQL "local_infile" Setting Enabled',
      'The "feed.http-hooks" option is deprecated in favor of Webhooks. This option will be removed in a future version of the software.
    You can configure Webhooks in Herald.
    To resolve this issue, remove all URIs from "feed.http-hooks".' => 'The "feed.http-hooks" option is deprecated in favor of Webhooks. This option will be removed in a future version of the software.
    You can configure Webhooks in Herald.
    To resolve this issue, remove all URIs from "feed.http-hooks".',
      'The PATH component \'%s\' (which resolves as the absolute path \'%s\') is not usable because \'%s\' does not exist.' => 'The PATH component \'%s\' (which resolves as the absolute path \'%s\') is not usable because \'%s\' does not exist.',
      'The search index algorithm has been updated and the index needs be rebuilt.' => 'The search index algorithm has been updated and the index needs be rebuilt.',
      'The current PHP configuration has these %d value(s):' => 'The current PHP configuration has these %s value(s):',
      'Database host "%s" is configured as a master, but is replicating another host. This is dangerous and can mangle or destroy data. Only replicas should be replicating. Stop replication on the host or adjust configuration.' => 'Database host "%s" is configured as a master, but is replicating another host. This is dangerous and can mangle or destroy data. Only replicas should be replicating. Stop replication on the host or adjust configuration.',
      'This issue is currently ignored, and does not show a global warning.' => 'This issue is currently ignored, and does not show a global warning.',
      'Cache Status' => 'Cache Status',
      'You have at least one repository configured which uses this version control system. It will not work without the VCS binary.' => 'You have at least one repository configured which uses this version control system. It will not work without the VCS binary.',
      'Done. Migrated %d keys.' => 'Done. Migrated %s keys.',
      'The remote IP.' => 'The remote IP.',
      'Disable Prototypes' => 'Disable Prototypes',
      'US West (PDT)' => 'US West (PDT)',
      'Deleted \'%s\' from %s configuration.' => 'Deleted \'%s\' from %s configuration.',
      'Run Normally' => 'Run Normally',
      'Default key for HMAC digests where the key is not important (i.e., the hash itself is secret). You can change this if you want (to any other string), but doing so will break existing sessions and CSRF tokens. This option is deprecated. Newer code automatically manages HMAC keys.' => 'Default key for HMAC digests where the key is not important (i.e., the hash itself is secret). You can change this if you want (to any other string), but doing so will break existing sessions and CSRF tokens. This option is deprecated. Newer code automatically manages HMAC keys.',
      'Highlight %s as PHP.' => 'Highlight %s as PHP.',
      'MySQL is Using Default Stopword File' => 'MySQL is Using Default Stopword File',
      'Pagespeed is enabled, but should be disabled.' => 'Pagespeed is enabled, but should be disabled.',
      'Paths to additional phutil libraries to load.' => 'Paths to additional phutil libraries to load.',
      'User Guide: Prototype Applications' => 'User Guide: Prototype Applications',
      'If you enable this, linked YouTube videos will be embedded inline. This has mild security implications (you\'ll leak referrers to YouTube) and is pretty silly (but sort of awesome).' => 'If you enable this, linked YouTube videos will be embedded inline. This has mild security implications (you\'ll leak referrers to YouTube) and is pretty silly (but sort of awesome).',
      'Library' => 'Library',
      'The \'%s\' binary could not be located or executed.' => 'The \'%s\' binary could not be located or executed.',
      'Show Email Preferences Link' => 'Show Email Preferences Link',
      'Confirm before redirecting so DarkConsole can be examined.' => 'Confirm before redirecting so DarkConsole can be examined.',
      'If you enable `%s`, this software uses "From" to authenticate users. You can
    additionally enable this setting to try to authenticate with \'Reply-To\'. Note
    that this is completely spoofable and insecure (any user can set any \'Reply-To\'
    address) but depending on the nature of your install or other deliverability
    conditions this might be okay. Generally, you can\'t do much more by spoofing
    Reply-To than be annoying (you can write but not read content). But this is
    still **COMPLETELY INSECURE**.' => 'If you enable `%s`, this software uses "From" to authenticate users. You can
    additionally enable this setting to try to authenticate with \'Reply-To\'. Note
    that this is completely spoofable and insecure (any user can set any \'Reply-To\'
    address) but depending on the nature of your install or other deliverability
    conditions this might be okay. Generally, you can\'t do much more by spoofing
    Reply-To than be annoying (you can write but not read content). But this is
    still **COMPLETELY INSECURE**.',
      'Define a cluster by providing a whitelist of host addresses that are part of the cluster.
    Hosts on this whitelist have special powers. These hosts are permitted to bend security rules, and misconfiguring this list can make your install less secure. For more information, see **[[ %s | %s ]]**.
    Define a list of CIDR blocks which whitelist all hosts in the cluster and no additional hosts. See the examples below for details.
    When cluster addresses are defined, hosts will also reject requests to interfaces which are not whitelisted.' => 'Define a cluster by providing a whitelist of host addresses that are part of the cluster.
    Hosts on this whitelist have special powers. These hosts are permitted to bend security rules, and misconfiguring this list can make your install less secure. For more information, see **[[ %s | %s ]]**.
    Define a list of CIDR blocks which whitelist all hosts in the cluster and no additional hosts. See the examples below for details.
    When cluster addresses are defined, hosts will also reject requests to interfaces which are not whitelisted.',
      'On host "%s", MySQL is configured with a small "%s" (%d), which may cause some large writes to fail. The recommended minimum value for this setting is "%d".' => 'On host "%s", MySQL is configured with a small "%s" (%s), which may cause some large writes to fail. The recommended minimum value for this setting is "%s".',
      'Config option "%s" is invalid. The timezone identifier must be a valid timezone identifier recognized by PHP, like "%s".' => 'Config option "%s" is invalid. The timezone identifier must be a valid timezone identifier recognized by PHP, like "%s".',
      'The PATH component \'%s\' (which resolves as the absolute path \'%s\') is not usable because \'%s\' is not a directory.' => 'The PATH component \'%s\' (which resolves as the absolute path \'%s\') is not usable because \'%s\' is not a directory.',
      'Configure %s' => 'Configure %s',
      'Normally, pages are profiled only when explicitly requested via DarkConsole. However, it may be useful to profile some pages automatically.
    Set this option to a positive integer N to profile 1 / N pages automatically. For example, setting it to 1 will profile every page, while setting it to 1000 will profile 1 page per 1000 requests (i.e., 0.1%% of requests).
    Since profiling is slow and generates a lot of data, you should set this to 0 in production (to disable it) or to a large number (to collect a few samples, if you\'re interested in having some data to look at eventually). In development, it may be useful to set it to 1 in order to debug performance problems.
    NOTE: You must install XHProf for profiling to work.' => 'Normally, pages are profiled only when explicitly requested via DarkConsole. However, it may be useful to profile some pages automatically.
    Set this option to a positive integer N to profile 1 / N pages automatically. For example, setting it to 1 will profile every page, while setting it to 1000 will profile 1 page per 1000 requests (i.e., 0.1%% of requests).
    Since profiling is slow and generates a lot of data, you should set this to 0 in production (to disable it) or to a large number (to collect a few samples, if you\'re interested in having some data to look at eventually). In development, it may be useful to set it to 1 in order to debug performance problems.
    NOTE: You must install XHProf for profiling to work.',
      'Missing "zip" Extension' => 'Missing "zip" Extension',
      'Set the language list which appears in dropdowns.' => 'Set the language list which appears in dropdowns.',
      'Inverse' => 'Inverse',
      'Deprecated Config Source' => 'Deprecated Config Source',
      'Indefinite' => 'Indefinite',
      'Edge Types' => 'Edge Types',
      'Disable access log.' => 'Disable access log.',
      'Logo configuration is not valid: value must be a dictionary.' => 'Logo configuration is not valid: value must be a dictionary.',
      'Really ignore this setup issue?' => 'Really ignore this setup issue?',
      'Config option "%s" is invalid. The URI must start with "%s" or "%s".' => 'Config option "%s" is invalid. The URI must start with "%s" or "%s".',
      'Options relating to syntax highlighting source code.' => 'Options relating to syntax highlighting source code.',
      'Allow HTTP' => 'Allow HTTP',
      'Simple Example' => 'Simple Example',
      'Auth Config Unlocked' => 'Auth Config Unlocked',
      'Synchronized' => 'Synchronized',
      'No REMOTE_ADDR is available, so this server cannot determine the origin address for requests. This will prevent the software from performing important security checks. This most often means you have a mistake in your preamble script. Consult the documentation (%s) and double-check that the script is written correctly.' => 'No REMOTE_ADDR is available, so this server cannot determine the origin address for requests. This will prevent the software from performing important security checks. This most often means you have a mistake in your preamble script. Consult the documentation (%s) and double-check that the script is written correctly.',
      'Access key for Amazon EC2.' => 'Access key for Amazon EC2.',
      '%s Component Unusable' => '%s Component Unusable',
      'Unsynchronized' => 'Unsynchronized',
      'Available search engines are now automatically discovered at runtime.' => 'Available search engines are now automatically discovered at runtime.',
      'Key for HMAC digests.' => 'Key for HMAC digests.',
      'When a user takes an action which generates an email notification (like
    commenting on a Differential revision), the "From" address can either be set
    to the user\'s email address (like "alincoln@logcabin.com") or the
    "metamta.defualt-address" address.
    The user experience is generally better if the user\'s real address is used as
    the "From" header value, since the messages are easier to organize when they
    appear in mail clients, but this will only work if the server is authorized to
    send email on behalf of the "From" domain. Practically, this means:
      - If you are doing an install for Example Corp and all the users will have
        corporate @corp.example.com addresses and any hosts this software is running
        on are authorized to send email from corp.example.com, you can enable this
        to make the user experience a little better.
      - If you are doing an install for an open source project and your users will
        be registering via third-party services and/or using personal email
        addresses, you probably should not enable this or all of your outgoing
        email might vanish into SFP blackholes.
      - If your install is anything else, you\'re safer leaving this off, at least
        initially, since the risk in turning it on is that your outgoing mail will
        never arrive.' => 'When a user takes an action which generates an email notification (like
    commenting on a Differential revision), the "From" address can either be set
    to the user\'s email address (like "alincoln@logcabin.com") or the
    "metamta.defualt-address" address.
    The user experience is generally better if the user\'s real address is used as
    the "From" header value, since the messages are easier to organize when they
    appear in mail clients, but this will only work if the server is authorized to
    send email on behalf of the "From" domain. Practically, this means:
      - If you are doing an install for Example Corp and all the users will have
        corporate @corp.example.com addresses and any hosts this software is running
        on are authorized to send email from corp.example.com, you can enable this
        to make the user experience a little better.
      - If you are doing an install for an open source project and your users will
        be registering via third-party services and/or using personal email
        addresses, you probably should not enable this or all of your outgoing
        email might vanish into SFP blackholes.
      - If your install is anything else, you\'re safer leaving this off, at least
        initially, since the risk in turning it on is that your outgoing mail will
        never arrive.',
      'The request duration, in microseconds.' => 'The request duration, in microseconds.',
      'Amazon S3 region where your S3 bucket is located. When you specify a region, you should also specify a corresponding endpoint with `amazon-s3.endpoint`. You can find a list of available regions and endpoints in the AWS documentation.' => 'Amazon S3 region where your S3 bucket is located. When you specify a region, you should also specify a corresponding endpoint with `amazon-s3.endpoint`. You can find a list of available regions and endpoints in the AWS documentation.',
      'MySQL %s Not Supported' => 'MySQL %s Not Supported',
      'Option "%s" is of type "%s", but the current value ("%s") is not among the set of valid values: %s.' => 'Option "%s" is of type "%s", but the current value ("%s") is not among the set of valid values: %s.',
      'Auth Application' => 'Auth Application',
      'The environmental variable %s is empty. This server will not be able to execute some commands.' => 'The environmental variable %s is empty. This server will not be able to execute some commands.',
      '%s.%s (%s)' => '%s.%s (%s)',
      'There is a new indirection layer between the strings that appear as VCS authors and committers (such as "John Developer <johnd@bigcorp.com>") and the user account that gets associated with VCS commits.' => 'There is a new indirection layer between the strings that appear as VCS authors and committers (such as "John Developer <johnd@bigcorp.com>") and the user account that gets associated with VCS commits.',
      'All Differential fields are now managed through the configuration option "%s". Use that option to configure which fields are shown.' => 'All Differential fields are now managed through the configuration option "%s". Use that option to configure which fields are shown.',
      'Use HSTS' => 'Use HSTS',
      'The current MySQL configuration has these %d value(s):' => 'The current MySQL configuration has these %s value(s):',
      'Show "To:" and "Cc:" footer hints in email.' => 'Show "To:" and "Cc:" footer hints in email.',
      'Write SSH log here.' => 'Write SSH log here.',
      'Migrate From "feed.http-hooks" to Webhooks' => 'Migrate From "feed.http-hooks" to Webhooks',
      'Partitioning and replication are now managed in primary configuration.' => 'Partitioning and replication are now managed in primary configuration.',
      'You can find more information about configuring OPcache in the %s.' => 'You can find more information about configuring OPcache in the %s.',
      'PHP Timezone' => 'PHP Timezone',
      'This option is not recognized. It may be misspelled.' => 'This option is not recognized. It may be misspelled.',
      'You have \'%s\' enabled in your PHP configuration, but this software will not run in safe mode. Safe mode has been deprecated in PHP 5.3 and removed in PHP 5.4.
    Disable safe mode to continue.' => 'You have \'%s\' enabled in your PHP configuration, but this software will not run in safe mode. Safe mode has been deprecated in PHP 5.3 and removed in PHP 5.4.
    Disable safe mode to continue.',
      'Internal.' => 'Internal.',
      'Advanced Settings' => 'Advanced Settings',
      'SSH log format.' => 'SSH log format.',
      'After installing new PHP extensions, <strong>restart everything for the changes to take effect</strong>. For help with restarting everything, see %s in the documentation.' => 'After installing new PHP extensions, <strong>restart everything for the changes to take effect</strong>. For help with restarting everything, see %s in the documentation.',
      'Default address used when generating mail.' => 'Default address used when generating mail.',
      'By default, this software serves files from the same domain the application is served from. This is convenient, but presents a security risk.
    You should configure a CDN or alternate file domain to mitigate this risk. Configuring a CDN will also improve performance. See [[ %s | %s ]] for instructions.' => 'By default, this software serves files from the same domain the application is served from. This is convenient, but presents a security risk.
    You should configure a CDN or alternate file domain to mitigate this risk. Configuring a CDN will also improve performance. See [[ %s | %s ]] for instructions.',
      'Learn more about locked and hidden options.' => 'Learn more about locked and hidden options.',
      'Default address used as a "From" or "To" email address when an address is
    required but no meaningful address is available.
    If you configure inbound mail, you generally do not need to set this:
    the software will automatically generate and use a suitable mailbox on the
    inbound mail domain.
    Otherwise, this option should be configured to point at a valid mailbox which
    discards all mail sent to it. If you point it at an invalid mailbox, mail sent
    by the software and some mail sent by users will bounce. If you point it at a
    real user mailbox, that user will get a lot of mail they don\'t want.
    For further guidance, see **[[ %s | %s ]]** in the documentation.' => 'Default address used as a "From" or "To" email address when an address is
    required but no meaningful address is available.
    If you configure inbound mail, you generally do not need to set this:
    the software will automatically generate and use a suitable mailbox on the
    inbound mail domain.
    Otherwise, this option should be configured to point at a valid mailbox which
    discards all mail sent to it. If you point it at an invalid mailbox, mail sent
    by the software and some mail sent by users will bounce. If you point it at a
    real user mailbox, that user will get a lot of mail they don\'t want.
    For further guidance, see **[[ %s | %s ]]** in the documentation.',
      'You must start the daemons to send email, rebuild search indexes, and do other background processing.' => 'You must start the daemons to send email, rebuild search indexes, and do other background processing.',
      'After editing the PHP configuration, <strong>restart everything for the changes to take effect</strong>. For help with restarting everything, see %s in the documentation.' => 'After editing the PHP configuration, <strong>restart everything for the changes to take effect</strong>. For help with restarting everything, see %s in the documentation.',
      'Repository Status' => 'Repository Status',
      'Do Not Use HSTS' => 'Do Not Use HSTS',
      'PHP 7.0-7.1 Not Supported' => 'PHP 7.0-7.1 Not Supported',
      'List all configuration keys.' => 'List all configuration keys.',
      'Per-application mail subject prefix customization is no longer directly supported. Prefixes and other strings may be customized with "translation.override".' => 'Per-application mail subject prefix customization is no longer directly supported. Prefixes and other strings may be customized with "translation.override".',
      'Configuration key "%s" is of type "%s". Specify it in JSON.' => 'Configuration key "%s" is of type "%s". Specify it in JSON.',
      'This will only affect the current web frontend. Daemons and any other web frontends may continue to use older, cached code from their opcache.' => 'This will only affect the current web frontend. Daemons and any other web frontends may continue to use older, cached code from their opcache.',
      'Configure real-time notifications.' => 'Configure real-time notifications.',
      'Surplus Key' => 'Surplus Key',
      'Cluster Setup' => 'Cluster Setup',
      'Obsolete Configuration Option "%s"' => 'Obsolete Configuration Option "%s"',
      'The \'%s\' binary could not be found. Set the webserver\'s %s environmental variable to include the directory where it resides, or add that directory to \'%s\' in configuration.' => 'The \'%s\' binary could not be found. Set the webserver\'s %s environmental variable to include the directory where it resides, or add that directory to \'%s\' in configuration.',
      'You can disable the email preference link in emails if users prefer smaller
    emails.' => 'You can disable the email preference link in emails if users prefer smaller
    emails.',
      'Expected Autoincrement' => 'Expected Autoincrement',
      'MySQL is configured (on host "%s") to only index words with at least %d characters.' => 'MySQL is configured (on host "%s") to only index words with at least %s characters.',
      'Too many arguments: expected only a configuration key when using "--stdin".' => 'Too many arguments: expected only a configuration key when using "--stdin".',
      'Global customization of monospaced fonts is no longer supported.' => 'Global customization of monospaced fonts is no longer supported.',
      'Major Web/Database Clock Skew' => 'Major Web/Database Clock Skew',
      'No repository cluster services are configured.' => 'No repository cluster services are configured.',
      'Syntax Highlighting' => 'Syntax Highlighting',
      'This schema is not expected to exist.' => 'This schema is not expected to exist.',
      'View status information for databases, caches, repositories, and other services.' => 'View status information for databases, caches, repositories, and other services.',
      'This configuration value is defined in these %d configuration source(s): %s.' => 'This configuration value is defined in these %s configuration source(s): %s.',
      'Specify a configuration key to get.' => 'Specify a configuration key to get.',
      'Can not compare two missing schemata!' => 'Can not compare two missing schemata!',
      'Key on Wrong Columns' => 'Key on Wrong Columns',
      'S3 Partially Configured' => 'S3 Partially Configured',
      'Migrate file-based configuration to more modern storage.' => 'Migrate file-based configuration to more modern storage.',
      'Skipping config of source type %s...' => 'Skipping config of source type %s...',
      'Reply addresses can either be private (more secure) or public (which works better with mailing lists).' => 'Reply addresses can either be private (more secure) or public (which works better with mailing lists).',
      'This server received an "X-Mod-Pagespeed" or "X-Page-Speed" HTTP header on this request, which indicates that you have enabled "mod_pagespeed" on this server. This module is not compatible with this software. You should disable the module.' => 'This server received an "X-Mod-Pagespeed" or "X-Page-Speed" HTTP header on this request, which indicates that you have enabled "mod_pagespeed" on this server. This module is not compatible with this software. You should disable the module.',
      'No profiling' => 'No profiling',
      'PHID Types' => 'PHID Types',
      'Wrote configuration key "%s" to database storage.' => 'Wrote configuration key "%s" to database storage.',
      'The environmental variable %s does not contain %s. You have enabled pygments, which requires %s to be available in your %s variable.' => 'The environmental variable %s does not contain %s. You have enabled pygments, which requires %s to be available in your %s variable.',
      'Use Pygments' => 'Use Pygments',
      'Amazon Web Services' => 'Amazon Web Services',
      'Customized settings for applications.' => 'Customized settings for applications.',
      'US Central (CDT)' => 'US Central (CDT)',
      'Config option "%s" is invalid. The URI must contain a dot ("%s"), like "%s", not just a bare name like "%s". Some web browsers will not set cookies on domains with no TLD.' => 'Config option "%s" is invalid. The URI must contain a dot ("%s"), like "%s", not just a bare name like "%s". Some web browsers will not set cookies on domains with no TLD.',
      '%s Active' => '%s Active',
      'Subschemata Have Warnings' => 'Subschemata Have Warnings',
      'Require Administrators to Approve Accounts' => 'Require Administrators to Approve Accounts',
      'Set %s in your PHP configuration to at least 32MB to support large file uploads.' => 'Set %s in your PHP configuration to at least 32MB to support large file uploads.',
      'The system sudo user.' => 'The system sudo user.',
      'You can disable the "To:" and "Cc:" footers in mail if users prefer smaller
    messages.' => 'You can disable the "To:" and "Cc:" footers in mail if users prefer smaller
    messages.',
      'MySQL %s Mode Not Set' => 'MySQL %s Mode Not Set',
      'If you are using Apache, your server may be configured with "SetInputFilter DEFLATE". This directive destructively mangles requests and emits them with "Content-Length" and "Content-Encoding" headers that no longer match the data in the request body.' => 'If you are using Apache, your server may be configured with "SetInputFilter DEFLATE". This directive destructively mangles requests and emits them with "Content-Length" and "Content-Encoding" headers that no longer match the data in the request body.',
      'Options for platform developers, including debugging.' => 'Options for platform developers, including debugging.',
      'A component of the configured PATH can not be used by the webserver: %s' => 'A component of the configured PATH can not be used by the webserver: %s',
      'Allow a single mailbox to be used for all replies.' => 'Allow a single mailbox to be used for all replies.',
      'Use specific endpoint' => 'Use specific endpoint',
      'Configure Recaptcha captchas.' => 'Configure Recaptcha captchas.',
      'Report this Issue to the Upstream' => 'Report this Issue to the Upstream',
      'Disable SSH error log.' => 'Disable SSH error log.',
      'Options relating to PHD (daemons).' => 'Options relating to PHD (daemons).',
      'Repos' => 'Repos',
      'Database configuration.' => 'Database configuration.',
      'Option "%s" is of type "%s", but the current value ("%s") is not a known, concrete subclass of base class "%s". Valid selections are: %s.' => 'Option "%s" is of type "%s", but the current value ("%s") is not a known, concrete subclass of base class "%s". Valid selections are: %s.',
      'Databases' => 'Databases',
      'Basic Example' => 'Basic Example',
      '%s In / %s Out' => '%s In / %s Out',
      'This option allows you to stop this service from sending data to most external
    services: it will disable email, SMS, repository mirroring, remote builds,
    Doorkeeper writes, and webhooks.
    This option is intended to allow an instance to be exported, copied, imported,
    and run in a test environment without impacting users. For example, if you are
    migrating to new hardware, you could perform a test migration first with this
    flag set, make sure things work, and then do a production cutover later with
    higher confidence and less disruption.
    Without making use of this flag to silence the temporary test environment,
    users would receive duplicate email during the time the test instance and old
    production instance were both in operation.' => 'This option allows you to stop this service from sending data to most external
    services: it will disable email, SMS, repository mirroring, remote builds,
    Doorkeeper writes, and webhooks.
    This option is intended to allow an instance to be exported, copied, imported,
    and run in a test environment without impacting users. For example, if you are
    migrating to new hardware, you could perform a test migration first with this
    flag set, make sure things work, and then do a production cutover later with
    higher confidence and less disruption.
    Without making use of this flag to silence the temporary test environment,
    users would receive duplicate email during the time the test instance and old
    production instance were both in operation.',
      'Whitelist Specific Addresses' => 'Whitelist Specific Addresses',
      'Other Version Information' => 'Other Version Information',
      'The base URI for this install is not configured, and major features will not work properly until you configure it.
    You should set the base URI to the URI you will use to access this server, like "http://devtools.example.com/".
    Include the protocol (http or https), domain name, and port number if you are using a port other than 80 (http) or 443 (https).
    Based on this request, it appears that the correct setting is:
    %s
    To configure the base URI, run the command shown below.' => 'The base URI for this install is not configured, and major features will not work properly until you configure it.
    You should set the base URI to the URI you will use to access this server, like "http://devtools.example.com/".
    Include the protocol (http or https), domain name, and port number if you are using a port other than 80 (http) or 443 (https).
    Based on this request, it appears that the correct setting is:
    %s
    To configure the base URI, run the command shown below.',
      'The mapping from VCS users to %s users has changed and must be rebuilt.' => 'The mapping from VCS users to %s users has changed and must be rebuilt.',
      'Authentication configuration is currently unlocked. Once you finish configuring authentication, you should lock it.' => 'Authentication configuration is currently unlocked. Once you finish configuring authentication, you should lock it.',
      'Use `%s` instead of this option.' => 'Use `%s` instead of this option.',
      'You have not configured any authentication providers yet. You should add a provider (like username/password, LDAP, or GitHub OAuth) so users can register and log in. You can add and configure providers using the Auth Application.' => 'You have not configured any authentication providers yet. You should add a provider (like username/password, LDAP, or GitHub OAuth) so users can register and log in. You can add and configure providers using the Auth Application.',
      'Run the storage upgrade script to upgrade databases (host "%s" is out of date). Missing patches: %s.' => 'Run the storage upgrade script to upgrade databases (host "%s" is out of date). Missing patches: %s.',
      'Resource deflation is now managed automatically.' => 'Resource deflation is now managed automatically.',
      'MySQL' => 'MySQL',
      'Databases are created in a namespace, which defaults to \'phabricator\' -- for instance, the Differential database is named \'phabricator_differential\' by default. You can change this namespace if you want. Normally, you should not do this unless you are developing extensions and using namespaces to separate multiple sandbox datasets.' => 'Databases are created in a namespace, which defaults to \'phabricator\' -- for instance, the Differential database is named \'phabricator_differential\' by default. You can change this namespace if you want. Normally, you should not do this unless you are developing extensions and using namespaces to separate multiple sandbox datasets.',
      'Serious business' => 'Serious business',
      'External loaders have been replaced. Extend `%s` to implement new PHID and handle types.' => 'External loaders have been replaced. Extend `%s` to implement new PHID and handle types.',
      'Authenticating users based on "Reply-To" is no longer supported.' => 'Authenticating users based on "Reply-To" is no longer supported.',
      'Option "%s" is of type "%s", but the configured value is not a list.' => 'Option "%s" is of type "%s", but the configured value is not a list.',
      'Cluster instance name, if configured.' => 'Cluster instance name, if configured.',
      'You likely need to fix your preamble script so REMOTE_ADDR is no longer empty.' => 'You likely need to fix your preamble script so REMOTE_ADDR is no longer empty.',
      'Unknown Config' => 'Unknown Config',
      'Detected %s serious issue(s) with the schemata.' => 'Detected %s serious issue(s) with the schemata.',
      'Daemons Not Running' => 'Daemons Not Running',
      'MySQL username to use when connecting to the database.' => 'MySQL username to use when connecting to the database.',
      'Secret key for Amazon EC2.' => 'Secret key for Amazon EC2.',
      'Configure the MySQL Native Driver to improve database behavior.' => 'Configure the MySQL Native Driver to improve database behavior.',
      'These %d configuration value(s) are related:' => 'These %s configuration value(s) are related:',
      'This software sent itself a request with "Accept-Encoding: gzip", but received an uncompressed response.
    This may indicate that your webserver is not configured to compress responses. If so, you should enable compression. Compression can dramatically improve performance, especially for clients with less bandwidth.' => 'This software sent itself a request with "Accept-Encoding: gzip", but received an uncompressed response.
    This may indicate that your webserver is not configured to compress responses. If so, you should enable compression. Compression can dramatically improve performance, especially for clients with less bandwidth.',
      'If you have multiple %s environments (like a development/staging environment and a production environment), set the production environment URI here so that emails and other durable URIs will always generate with links pointing at the production environment. If unset, defaults to `%s`. Most installs do not need to set this option.' => 'If you have multiple %s environments (like a development/staging environment and a production environment), set the production environment URI here so that emails and other durable URIs will always generate with links pointing at the production environment. If unset, defaults to `%s`. Most installs do not need to set this option.',
      'Names must match to compare schemata!' => 'Names must match to compare schemata!',
      'Users can make requests to other services from service hosts in some circumstances (for example, by creating a repository with a remote URL).
    This may represent a security vulnerability if services on the same subnet will accept commands or reveal private information over unauthenticated HTTP GET, based on the source IP address. In particular, all hosts in EC2 have access to such a service.
    This option defines a list of netblocks which requests will never be issued to. Generally, you should list all private IP space here.' => 'Users can make requests to other services from service hosts in some circumstances (for example, by creating a repository with a remote URL).
    This may represent a security vulnerability if services on the same subnet will accept commands or reveal private information over unauthenticated HTTP GET, based on the source IP address. In particular, all hosts in EC2 have access to such a service.
    This option defines a list of netblocks which requests will never be issued to. Generally, you should list all private IP space here.',
      'Core Settings' => 'Core Settings',
      'Your MySQL server is configured with the "local_infile" option enabled. This option allows an attacker who finds an SQL injection hole to escalate their attack by copying files from the webserver into the database with "LOAD DATA LOCAL INFILE" queries, then reading the file content with "SELECT" queries.
    You should disable this option in your %s file, in the %s section:
    %s' => 'Your MySQL server is configured with the "local_infile" option enabled. This option allows an attacker who finds an SQL injection hole to escalate their attack by copying files from the webserver into the database with "LOAD DATA LOCAL INFILE" queries, then reading the file content with "SELECT" queries.
    You should disable this option in your %s file, in the %s section:
    %s',
      'Setup Checks' => 'Setup Checks',
      'Adapter class to use to transmit mail to the MTA. The default uses
    PHPMailerLite, which will invoke "sendmail". This is appropriate if sendmail
    actually works on your host, but if you haven\'t configured mail it may not be so
    great. A number of other mailers are available (e.g., SES, SendGrid, SMTP,
    custom mailers). This option is deprecated in favor of \'cluster.mailers\'.' => 'Adapter class to use to transmit mail to the MTA. The default uses
    PHPMailerLite, which will invoke "sendmail". This is appropriate if sendmail
    actually works on your host, but if you haven\'t configured mail it may not be so
    great. A number of other mailers are available (e.g., SES, SendGrid, SMTP,
    custom mailers). This option is deprecated in favor of \'cluster.mailers\'.',
      'This system has an unpatched version of Bash with a severe, widely disclosed vulnerability.' => 'This system has an unpatched version of Bash with a severe, widely disclosed vulnerability.',
      'Keys' => 'Keys',
      'No Auth Providers' => 'No Auth Providers',
      'Missing Required Extensions' => 'Missing Required Extensions',
      'This option has been migrated to the "Auth" application. Your old configuration is still in effect, but now stored in "Auth" instead of configuration. Going forward, you can manage authentication from the web UI.' => 'This option has been migrated to the "Auth" application. Your old configuration is still in effect, but now stored in "Auth" instead of configuration. Going forward, you can manage authentication from the web UI.',
      'Provide a list of notification servers to enable real-time notifications.
    For help setting up notification servers, see **[[ %s | %s ]]** in the
    documentation.' => 'Provide a list of notification servers to enable real-time notifications.
    For help setting up notification servers, see **[[ %s | %s ]]** in the
    documentation.',
      'PHP is currently configured to honor requests from any MySQL server it connects to for the content of any local file.
    This capability supports MySQL "LOAD DATA LOCAL INFILE" queries, but allows a malicious MySQL server read access to the local disk: the server can ask the client to send the content of any local file, and the client will comply.
    Although it is normally difficult for an attacker to convince this software to connect to a malicious MySQL server, you should disable this option: this capability is unnecessary and inherently dangerous.
    To disable this option, set: %s' => 'PHP is currently configured to honor requests from any MySQL server it connects to for the content of any local file.
    This capability supports MySQL "LOAD DATA LOCAL INFILE" queries, but allows a malicious MySQL server read access to the local disk: the server can ask the client to send the content of any local file, and the client will comply.
    Although it is normally difficult for an attacker to convince this software to connect to a malicious MySQL server, you should disable this option: this capability is unnecessary and inherently dangerous.
    To disable this option, set: %s',
      'Activity "%s" is not currently marked as required, so there is no need to complete it.' => 'Activity "%s" is not currently marked as required, so there is no need to complete it.',
      'To continue, resolve this problem and reload the page.' => 'To continue, resolve this problem and reload the page.',
      'Wordmark' => 'Wordmark',
      'WARNING: This is a prototype option and the description below is currently pure fantasy.
    Switch the service to read-only mode. In this mode, users will be unable to write new data. Normally, the cluster degrades into this mode automatically when it detects that the database master is unreachable, but you can activate it manually in order to perform maintenance or test configuration.' => 'WARNING: This is a prototype option and the description below is currently pure fantasy.
    Switch the service to read-only mode. In this mode, users will be unable to write new data. Normally, the cluster degrades into this mode automatically when it detects that the database master is unreachable, but you can activate it manually in order to perform maintenance or test configuration.',
      'Severe Security Vulnerability: Unpatched Bash' => 'Severe Security Vulnerability: Unpatched Bash',
      'Force HTTPS' => 'Force HTTPS',
      'You are running PHP version %s. PHP versions between 7.0 and 7.1 are not supported
    PHP removed required signal handling features in PHP 7.0, and did not restore an equivalent mechanism until PHP 7.1.
    Upgrade to PHP 7.1 or newer (recommended) or downgrade to an older version of PHP 5 (discouraged).' => 'You are running PHP version %s. PHP versions between 7.0 and 7.1 are not supported
    PHP removed required signal handling features in PHP 7.0, and did not restore an equivalent mechanism until PHP 7.1.
    Upgrade to PHP 7.1 or newer (recommended) or downgrade to an older version of PHP 5 (discouraged).',
      'This key is not expected to exist.' => 'This key is not expected to exist.',
      '%s.%s' => '%s.%s',
      '%s.%s.%s' => '%s.%s.%s',
      '%d related link(s):' => '%s related link(s):',
      'To rebuild identities, run this command:' => 'To rebuild identities, run this command:',
      'Missing Repository Local Path' => 'Missing Repository Local Path',
      'An alternate resource map is no longer supported. Instead, use multiple maps. See T4222.' => 'An alternate resource map is no longer supported. Instead, use multiple maps. See T4222.',
      'Repository Services' => 'Repository Services',
      'Inline comments are now always rendered with a limited amount of context.' => 'Inline comments are now always rendered with a limited amount of context.',
      'Locked Configuration Option "%s" Has Database Value' => 'Locked Configuration Option "%s" Has Database Value',
      'Separate values with newlines or commas.' => 'Separate values with newlines or commas.',
      'Don\'t require email verification' => 'Don\'t require email verification',
      'Configuration key "%s" is unknown. Use "bin/config list" to list all known keys.' => 'Configuration key "%s" is unknown. Use "bin/config list" to list all known keys.',
      'Alternate File Domain Not Configured' => 'Alternate File Domain Not Configured',
      'MySQLi Extension Not Available' => 'MySQLi Extension Not Available',
      'Unknown schema issue "%s"!' => 'Unknown schema issue "%s"!',
      'Embed Commons videos' => 'Embed Commons videos',
      'Your server is configured with \'%s\', which prevents this software from opening files it requires access to.
    Disable this setting to continue.' => 'Your server is configured with \'%s\', which prevents this software from opening files it requires access to.
    Disable this setting to continue.',
      'Limit page execution time to debug hangs.' => 'Limit page execution time to debug hangs.',
      'Base URI Not Configured' => 'Base URI Not Configured',
      'Cannot identify the version of the %s repository because the webserver does not trust it (more info on Task %s).
    Try this system resolution:
    sudo git config --system --add safe.directory %s' => 'Cannot identify the version of the %s repository because the webserver does not trust it (more info on Task %s).
    Try this system resolution:
    sudo git config --system --add safe.directory %s',
      'Always Activate DarkConsole' => 'Always Activate DarkConsole',
      'This request included an invalid "Host" header, with value "%s". Host headers must contain a dot ("."), like "example.com". This is required for some browsers to be able to set cookies.
    This may mean the base URI is configured incorrectly. You must serve this software from a base URI with a dot (like "https://devtools.example.com"), not a bare domain (like "https://devtools/"). If you are trying to use a bare domain, change your configuration to use a full domain with a dot in it instead.
    This might also mean that your webserver (or some other network device, like a load balancer) is mangling the "Host" header, or you are using a tool or library to issue a request manually and setting the wrong "Host" header.
    Requests must include a valid "Host" header.' => 'This request included an invalid "Host" header, with value "%s". Host headers must contain a dot ("."), like "example.com". This is required for some browsers to be able to set cookies.
    This may mean the base URI is configured incorrectly. You must serve this software from a base URI with a dot (like "https://devtools.example.com"), not a bare domain (like "https://devtools/"). If you are trying to use a bare domain, change your configuration to use a full domain with a dot in it instead.
    This might also mean that your webserver (or some other network device, like a load balancer) is mangling the "Host" header, or you are using a tool or library to issue a request manually and setting the wrong "Host" header.
    Requests must include a valid "Host" header.',
      'User Interface' => 'User Interface',
      'No Schema Issues' => 'No Schema Issues',
      'MySQL database hostname.' => 'MySQL database hostname.',
      'Obsolete Config' => 'Obsolete Config',
      'Sets the default color scheme.' => 'Sets the default color scheme.',
      'Clustering Introduction' => 'Clustering Introduction',
      'By default, this software includes some flavor text in the UI, like a prompt to "Weigh In" rather than "Add Comment" in Maniphest. If you\'d prefer more traditional UI strings like "Add Comment", you can set this flag to disable most of the extra flavor.' => 'By default, this software includes some flavor text in the UI, like a prompt to "Weigh In" rather than "Add Comment" in Maniphest. If you\'d prefer more traditional UI strings like "Add Comment", you can set this flag to disable most of the extra flavor.',
      'This software sent itself a test request and expected to get a bare JSON response back. It received a JSON response, but the response had extra whitespace at the beginning or end.
    This usually means you have edited a file and left whitespace characters before the opening %s tag, or after a closing %s tag. Remove any leading whitespace, and prefer to omit closing tags.' => 'This software sent itself a test request and expected to get a bare JSON response back. It received a JSON response, but the response had extra whitespace at the beginning or end.
    This usually means you have edited a file and left whitespace characters before the opening %s tag, or after a closing %s tag. Remove any leading whitespace, and prefer to omit closing tags.',
      'MySQL on this machine' => 'MySQL on this machine',
      'No such configuration key \'%s\'! Use `%s` to list all keys.' => 'No such configuration key \'%s\'! Use `%s` to list all keys.',
      'You can respond to various application events by installing listeners, which will receive callbacks when interesting things occur. Specify a list of classes which extend PhabricatorEventListener here.' => 'You can respond to various application events by installing listeners, which will receive callbacks when interesting things occur. Specify a list of classes which extend PhabricatorEventListener here.',
      'This install has a fatal setup error, access the web interface to view details and resolve it.' => 'This install has a fatal setup error, access the web interface to view details and resolve it.',
      'Alternate domain to serve files from.' => 'Alternate domain to serve files from.',
      'Your webserver is not forwarding credentials.' => 'Your webserver is not forwarding credentials.',
      'Default non-pygments syntax highlighter engine.' => 'Default non-pygments syntax highlighter engine.',
      'HTTP Parameter Types' => 'HTTP Parameter Types',
      'Mangled Webserver Response' => 'Mangled Webserver Response',
      'Setup issues to ignore.' => 'Setup issues to ignore.',
      'Directory that the daemons should use to store log files.' => 'Directory that the daemons should use to store log files.',
      'Only allow registration from particular domains.' => 'Only allow registration from particular domains.',
      'Subschemata have setup failures.' => 'Subschemata have setup failures.',
      'No performance sampling.' => 'No performance sampling.',
      '%s\'s home page' => '%s\'s home page',
      'Show installed extensions and modules.' => 'Show installed extensions and modules.',
      'Opcode Cache' => 'Opcode Cache',
      'Specify a value to set the configuration key "%s" to, or use "--stdin" to read a value from stdin.' => 'Specify a value to set the configuration key "%s" to, or use "--stdin" to read a value from stdin.',
      'ID of the SSH key used to authenticate the request.' => 'ID of the SSH key used to authenticate the request.',
      'You can usually install a PHP extension using %s, %s, or %s. A common package name is %s. Try commands like these:' => 'You can usually install a PHP extension using %s, %s, or %s. A common package name is %s. Try commands like these:',
      'US East (EDT)' => 'US East (EDT)',
      'The HTTP referrer.' => 'The HTTP referrer.',
      'HTTP Parameters Not Transmitting' => 'HTTP Parameters Not Transmitting',
      'Determines whether Wikimedia Commons videos get embedded.' => 'Determines whether Wikimedia Commons videos get embedded.',
      'Better Collation Available' => 'Better Collation Available',
      'View "%s"' => 'View "%s"',
      'This setup issue has been resolved. ' => 'This setup issue has been resolved. ',
      'Additional configuration options to hide.' => 'Additional configuration options to hide.',
      'The logged-in username, if one is logged in.' => 'The logged-in username, if one is logged in.',
      'Deprecated Code' => 'Deprecated Code',
      'PHP date functions will emit a warning if they are called when no default
    server timezone is configured.
    Usually, you configure a default timezone in `php.ini` by setting the
    configuration value `date.timezone`.
    If you prefer, you can configure a default timezone here instead. To configure
    a default timezone, select a timezone from the
    [[ %s | PHP List of Supported Timezones ]].' => 'PHP date functions will emit a warning if they are called when no default
    server timezone is configured.
    Usually, you configure a default timezone in `php.ini` by setting the
    configuration value `date.timezone`.
    If you prefer, you can configure a default timezone here instead. To configure
    a default timezone, select a timezone from the
    [[ %s | PHP List of Supported Timezones ]].',
      'No REMOTE_ADDR available' => 'No REMOTE_ADDR available',
      'File storage in Amazon S3 has been partially configured, but you are missing some required settings. S3 will not be available to store files until you complete the configuration. Either configure S3 fully or remove the partial configuration.' => 'File storage in Amazon S3 has been partially configured, but you are missing some required settings. S3 will not be available to store files until you complete the configuration. Either configure S3 fully or remove the partial configuration.',
      'The logged-in user PHID, if one is logged in.' => 'The logged-in user PHID, if one is logged in.',
      'WARNING: This is a very advanced option, and only useful for hosting providers running multi-tenant clusters.
    If you provide an instance identifier here (normally by injecting it with a `%s`), the server will pass it to subprocesses and commit hooks in the `%s` environmental variable.' => 'WARNING: This is a very advanced option, and only useful for hosting providers running multi-tenant clusters.
    If you provide an instance identifier here (normally by injecting it with a `%s`), the server will pass it to subprocesses and commit hooks in the `%s` environmental variable.',
      'Version Information' => 'Version Information',
      'HTTP Path Rewriting Incorrect' => 'HTTP Path Rewriting Incorrect',
      'Surplus' => 'Surplus',
      'You have enabled Imagemagick in your config, but the \'%s\' binary is not in the webserver\'s %s. Disable imagemagick or make it available to the webserver.' => 'You have enabled Imagemagick in your config, but the \'%s\' binary is not in the webserver\'s %s. Disable imagemagick or make it available to the webserver.',
      'Instance identifier for multi-tenant clusters.' => 'Instance identifier for multi-tenant clusters.',
      'Upgrade MySQL Schema' => 'Upgrade MySQL Schema',
      'Unignore Setup Issue' => 'Unignore Setup Issue',
      'Automatically sample some fraction of requests.' => 'Automatically sample some fraction of requests.',
      'SSH log location.' => 'SSH log location.',
      'Arbitrarily large files are now supported. Consult the documentation for configuration details.' => 'Arbitrarily large files are now supported. Consult the documentation for configuration details.',
      'Delete a local configuration value.' => 'Delete a local configuration value.',
      'These paths get appended to your %s environment variable.' => 'These paths get appended to your %s environment variable.',
      'Epoch timestamp.' => 'Epoch timestamp.',
      'Blindigo' => 'Blindigo',
      'Expected Column Type' => 'Expected Column Type',
      'Enable developer mode' => 'Enable developer mode',
      '%s, occurrences: %s' => '%s, occurrences: %s',
      'Woe! This request had its journey cut short by unexpected circumstances (%s).' => 'Woe! This request had its journey cut short by unexpected circumstances (%s).',
      'Customizes retention policies for garbage collectors.' => 'Customizes retention policies for garbage collectors.',
      'This schema can use a better column type.' => 'This schema can use a better column type.',
      'Without \'%s\', this software will not be able to generate or render diffs in multiple applications.' => 'Without \'%s\', this software will not be able to generate or render diffs in multiple applications.',
      'The request date.' => 'The request date.',
      'Reply handlers can no longer be overridden with configuration.' => 'Reply handlers can no longer be overridden with configuration.',
      'There is some deprecated code found in the %s code-base.
    This isn\'t a problem yet, but it means that %s might stop working if you upgrade PHP version.
    This page records a sample of the cases since last server restart. 
    To solve this issue, either:
    - Visit %s, file bug report with the information below, or
    - Ignore this issue using the `Ignore` button below.
    ' => 'There is some deprecated code found in the %s code-base.
    This isn\'t a problem yet, but it means that %s might stop working if you upgrade PHP version.
    This page records a sample of the cases since last server restart. 
    To solve this issue, either:
    - Visit %s, file bug report with the information below, or
    - Ignore this issue using the `Ignore` button below.
    ',
      'Note that the default format is subject to change in the future, so if you rely on the log\'s format, specify it explicitly.' => 'Note that the default format is subject to change in the future, so if you rely on the log\'s format, specify it explicitly.',
      'Send as %s' => 'Send as %s',
      'Setup Error' => 'Setup Error',
      'Installed on Burstable CPU Instance' => 'Installed on Burstable CPU Instance',
      'MySQL is Using Default Minimum Word Length' => 'MySQL is Using Default Minimum Word Length',
      'Extensions/Modules' => 'Extensions/Modules',
      'The directory for local repositories (%s) does not exist, or is not readable by the webserver. This software uses this directory to store information about repositories. If this directory does not exist, create it:
    %s
    If this directory exists, make it readable to the webserver. You can also edit the configuration below to use some other directory.' => 'The directory for local repositories (%s) does not exist, or is not readable by the webserver. This software uses this directory to store information about repositories. If this directory does not exist, create it:
    %s
    If this directory exists, make it readable to the webserver. You can also edit the configuration below to use some other directory.',
      'These alternative URIs will be able to access \'normal\' pages on your this install. Other features such as OAuth won\'t work. The major use case for this is moving installs across domains.' => 'These alternative URIs will be able to access \'normal\' pages on your this install. Other features such as OAuth won\'t work. The major use case for this is moving installs across domains.',
      'In places that we display a dropdown to syntax-highlight code, this is where that list is defined.' => 'In places that we display a dropdown to syntax-highlight code, this is where that list is defined.',
      'This change supports situations where users are incorrectly associated with commits because the software makes a bad guess about how the VCS string maps to a user account. This also helps with situations where existing repositories are imported without having created accounts for all the committers to that repository. Until you rebuild these repository identities, you are likely to encounter problems with features which rely on the existence of these identities.' => 'This change supports situations where users are incorrectly associated with commits because the software makes a bad guess about how the VCS string maps to a user account. This also helps with situations where existing repositories are imported without having created accounts for all the committers to that repository. Until you rebuild these repository identities, you are likely to encounter problems with features which rely on the existence of these identities.',
      'Unignore' => 'Unignore',
      'PHP setting "%s" should be set to "-1" to avoid deprecation warnings.' => 'PHP setting "%s" should be set to "-1" to avoid deprecation warnings.',
      'Text values that match this regex and are also object names will not be linked.' => 'Text values that match this regex and are also object names will not be linked.',
      '%s Held / %sms' => '%s Held / %sms',
      'Write access log here.' => 'Write access log here.',
    );
  }

}
