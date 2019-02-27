<?php

final class PhabricatorAphlictEn
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'en';
  }

  protected function getTranslations() {
    return array(
      'Send a notification to a user.' => 'Send a notification to a user.',
      'The notification server should not be run as root.' => 'The notification server should not be run as root.',
      'Two servers (at indexes "%s" and "%s") both bind to the same port ("%s"). Each server must bind to a unique port.' => 'Two servers (at indexes "%s" and "%s") both bind to the same port ("%s"). Each server must bind to a unique port.',
      'Failed to %s!' => 'Failed to %s!',
      'ERROR: The PHP function %s is disabled. You must enable it to run Aphlict on this machine.' => 'ERROR: The PHP function %s is disabled. You must enable it to run Aphlict on this machine.',
      'Stop the notification server.' => 'Stop the notification server.',
      'Configuration file is not properly formatted JSON. %s' => 'Configuration file is not properly formatted JSON. %s',
      'No `%s` or `%s` binary was found in %s. You must install Node.js to start the Aphlict server.' => 'No `%s` or `%s` binary was found in %s. You must install Node.js to start the Aphlict server.',
      'ERROR: The PHP extension \'%s\' is not installed. You must install it to run Aphlict on this machine.' => 'ERROR: The PHP extension \'%s\' is not installed. You must install it to run Aphlict on this machine.',
      'Failed to create directory "%s" for specified log file (with index "%s"). You should manually create this directory or choose a different logfile location. %s' => 'Failed to create directory "%s" for specified log file (with index "%s"). You should manually create this directory or choose a different logfile location. %s',
      'Configuration file has improper configuration keys at top level. %s' => 'Configuration file has improper configuration keys at top level. %s',
      'Aphlict is not running.' => 'Aphlict is not running.',
      'You must %s first!' => 'You must %s first!',
      'A specified server (at index "%s", on port "%s") specifies a value for "%s", but no value for "%s" or "%s". Servers should only provide an SSL chain if they also provide an SSL key and SSL certificate.' => 'A specified server (at index "%s", on port "%s") specifies a value for "%s", but no value for "%s" or "%s". Servers should only provide an SSL chain if they also provide an SSL key and SSL certificate.',
      'Sending %s a SIGKILL.' => 'Sending %s a SIGKILL.',
      'Launching server:' => 'Launching server:',
      'Starting Aphlict server in foreground...' => 'Starting Aphlict server in foreground...',
      'Server exited!' => 'Server exited!',
      'Start the notifications server in the foreground and print large volumes of diagnostic information to the console.' => 'Start the notifications server in the foreground and print large volumes of diagnostic information to the console.',
      'A specified server (at index "%s", on port "%s") has an invalid type ("%s"). Valid types are: admin, client.' => 'A specified server (at index "%s", on port "%s") has an invalid type ("%s"). Valid types are: admin, client.',
      'No user with username "%s" exists.' => 'No user with username "%s" exists.',
      'Configuration file specifies cluster peer "%s" more than once (at indexes "%s" and "%s"). Each peer must have a unique host and port combination.' => 'Configuration file specifies cluster peer "%s" more than once (at indexes "%s" and "%s"). Each peer must have a unique host and port combination.',
      'Show the status of the notification server.' => 'Show the status of the notification server.',
      'Configuration file does not specify any servers. This service will not be able to interact with the outside world if it does not listen on any ports. You must specify at least one "%s" server and at least one "%s" server.' => 'Configuration file does not specify any servers. This service will not be able to interact with the outside world if it does not listen on any ports. You must specify at least one "%s" server and at least one "%s" server.',
      'Start the notifications server.' => 'Start the notifications server.',
      'User to notify.' => 'User to notify.',
      'Stop, then start the notification server.' => 'Stop, then start the notification server.',
      'Failed to read configuration file. %s' => 'Failed to read configuration file. %s',
      'Writing logs to: %s' => 'Writing logs to: %s',
      'Specify a user to notify with "--user".' => 'Specify a user to notify with "--user".',
      'A specified server (at index "%s", on port "%s") specifies only one of "%s" and "%s". Each server must specify neither (to disable SSL) or specify both (to enable it).' => 'A specified server (at index "%s", on port "%s") specifies only one of "%s" and "%s". Each server must specify neither (to disable SSL) or specify both (to enable it).',
      'Configuration file does not specify any client servers. This service will be unable to transmit any notifications without a client server. You must specify at least one server with type "%s".' => 'Configuration file does not specify any client servers. This service will be unable to transmit any notifications without a client server. You must specify at least one server with type "%s".',
      'Message to send.' => 'Message to send.',
      'Configuration file does not specify any administrative servers. This service will be unable to receive messages. You must specify at least one server with type "%s".' => 'Configuration file does not specify any administrative servers. This service will be unable to receive messages. You must specify at least one server with type "%s".',
      'Aphlict Server (%s) exited normally.' => 'Aphlict Server (%s) exited normally.',
      'Reading configuration from: %s' => 'Reading configuration from: %s',
      'Unable to start notifications server because it is already running. Use `%s` to restart it.' => 'Unable to start notifications server because it is already running. Use `%s` to restart it.',
      'Specify a message to send with "--message".' => 'Specify a message to send with "--message".',
      'Sent notification.' => 'Sent notification.',
      'Use a specific configuration file instead of the default configuration.' => 'Use a specific configuration file instead of the default configuration.',
      'Configuration file specifies cluster peer ("%s", at index "%s") with an invalid protocol, "%s". Valid protocols are "%s" or "%s".' => 'Configuration file specifies cluster peer ("%s", at index "%s") with an invalid protocol, "%s". Valid protocols are "%s" or "%s".',
      'Aphlict Server started.' => 'Aphlict Server started.',
      'Stopping Aphlict Server (%s)...' => 'Stopping Aphlict Server (%s)...',
      'Failed to create directory "%s" for specified PID file. You should manually create this directory or choose a different PID file location. %s' => 'Failed to create directory "%s" for specified PID file. You should manually create this directory or choose a different PID file location. %s',
      'Aphlict (%s) is running.' => 'Aphlict (%s) is running.',
    );
  }

}
