class phpdev::php5 {
  package { 'php5':
    ensure  => present,
    require => Exec['apt-get update'],
    notify  => Service['apache2']
  }

  package { 'php5-curl':
    ensure  => present,
    require => [
      Exec['apt-get update'],
      Package['curl'],
    ],
    notify  => Service['apache2']
  }
}
