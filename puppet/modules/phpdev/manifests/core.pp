class phpdev::core {
  exec {'apt-get update':}

  class {'phpdev::packages':
    require => Exec['apt-get update'],
  }
  class {'phpdev::php':
    require => Exec['apt-get update'],
  }
  class {'phpdev::apache':
    require => Exec['apt-get update'],
  }
  class {'phpdev::composer':
    require => Exec['apt-get update'],
  }
}
