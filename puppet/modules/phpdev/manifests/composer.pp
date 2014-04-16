class phpdev::composer {
  
  file {"/var/www":
    ensure => 'directory',
    owner => 'root',
    group => 'www-data',
  }

  exec { "composer:fetch":
    cwd => '/var/www',
    command => "/usr/bin/curl -sS https://getcomposer.org/installer | /usr/bin/php",
    creates => "/var/www/composer.phar",
    require => [
      Package['curl', 'git-core', 'php5-cli', 'apache2'],
      File['/var/www'],
    ],
  }

  ->

  exec { "composer:install":
    cwd => '/var/www',
    command => "/var/www/composer.phar install --prefer-source --no-interaction --working-dir /var/www",
  }
}
