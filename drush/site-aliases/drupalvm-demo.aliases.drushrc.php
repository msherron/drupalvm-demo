<?php

/**
 * Drupal VM drush aliases.
 *
 * @see example.aliases.drushrc.php.
 */

// Local
$aliases['local'] = array(
  'uri' => 'drupalvm-demo.dev',
  'root' => '/var/www/drupal/web',
  'remote-host' => 'drupalvm-demo.dev',
  'remote-user' => 'vagrant',
  'ssh-options' => '-o PasswordAuthentication=no -i ' . drush_server_home() . '/.vagrant.d/insecure_private_key',
);

// Dev
$aliases['dev'] = array(
  'uri' => 'www.drupalvm-demo.dev',
  'root' => '/var/www/drupal/web',
  'remote-host' => 'www.drupalvm-demo.dev',
  'remote-user' => ''
);

