class phpdev::composer
  Package['curl', 'git', 'php']
  ->
  exec { "composer:fetch":
    cwd => '/var/www',
    command => "/usr/bin/curl -sS https://getcomposer.org/installer | /usr/bin/php",
    creates => "/var/www/composer.phar",
  }
  ->
  exec { "composer:install":
    cwd => '/var/www',
    command => "/var/www/composer.phar install --prefer-source --no-interaction --working-dir /var/www",
  }
}
