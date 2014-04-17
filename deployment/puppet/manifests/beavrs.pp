include phpdev::mysql
include phpdev::core

file { '/var/www/protected/runtime':
  ensure => directory,
  mode   => '0777',
}

file { '/var/www/assets':
  ensure => directory,
  mode   => '0777',
}

exec { 'create database':
  unless  => '/usr/bin/mysql -uroot rrd_dataset',
  command => '/usr/bin/mysql -uroot -e "create database rrd_dataset;"',
  require => Service['mysql'],
}

exec { 'create database user':
  unless  => '/usr/bin/mysql -urrd_dataset -p rrd_dataset',
  command => '/usr/bin/mysql -uroot -e "\
  grant all privileges on rrd_dataset.* to \'rrd_dataset\'@\'%\' identified by \'rrd_dataset\';\
  grant all privileges on rrd_dataset.* to \'rrd_dataset\'@\'localhost\' identified by \'rrd_dataset\';\
  flush privileges;"',
  require => Exec['create database']
}

exec { 'load dump':
  unless => '/usr/bin/mysql -uroot rrd_dataset -e "select * from user"',
  command => '/usr/bin/mysql -uroot rrd_dataset < /srv/code/rrd_dataset_2014-04-07.sql',
  require => Exec['create database'],
}
    
