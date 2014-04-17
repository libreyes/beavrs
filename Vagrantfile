# -*- mode: ruby -*-
# vi: set ft=ruby :

# Vagrantfile API/syntax version. Don't touch unless you know what you're doing!
VAGRANTFILE_API_VERSION = "2"

def parse_environment()
  parsed = { # We may want to change these defaults
    :name => "php_dev",
    :cpus => 1,
    :memory => "512",
    :host_ip => "172.16.0.1",
    :http_port => 9001,
    :mysql_port => 9002,
    :pgsql_port => 9003,
    :www_dir => "../",
    :srv_dir => "../",
    :manifest => "mysql.pp",
  }
  parsed[:name] = ENV["PHPDEVVM_NAME"] if ENV["PHPDEVVM_NAME"]
  parsed[:host_ip] = ENV["PHPDEVVM_HOST_IP"] if ENV["PHPDEVVM_HOST_IP"]
  parsed[:srv_dir] = ENV["PHPDEVVM_SRV_DIR"] if ENV["PHPDEVVM_SRV_DIR"]
  parsed[:www_dir] = ENV["PHPDEVVM_WWW_DIR"] if ENV["PHPDEVVM_WWW_DIR"]
  parsed[:manifest] = ENV["PHPDEVVM_MANIFEST"] if ENV["PHPDEVVM_MANIFEST"]
  # This is the simplest way to do it safely
  begin
    parsed[:cpus] = Integer(ENV["PHPDEVVM_CPUS"])
  rescue; end
  begin
    parsed[:memory] = Integer(ENV["PHPDEVVM_MEMORY"])
  rescue; end
  begin
    parsed[:http_port] = Integer(ENV["PHPDEVVM_HTTP_PORT"])
  rescue; end
  begin
    parsed[:mysql_port] = Integer(ENV["PHPDEVVM_MYSQL_PORT"])
  rescue; end
  begin
    parsed[:pgsql_port] = Integer(ENV["PHPDEVVM_PGSQL_PORT"])
  rescue; end
  return parsed
end

Vagrant.configure(VAGRANTFILE_API_VERSION) do |config|
  parsed_env = parse_environment()
  config.vm.box = "precise64"
  config.vm.box_url = "http://files.vagrantup.com/precise64.box"

  config.vm.network "forwarded_port", guest: 80, host: parsed_env[:http_port]

  # One for the local machine to have a consistent IP to use
  config.vm.network "private_network", ip: parsed_env[:host_ip]
  # One for the network as a whole
  config.vm.network "public_network"

  config.vm.synced_folder parsed_env[:www_dir], "/var/www"
  config.vm.synced_folder parsed_env[:srv_dir], "/srv/code"

  config.vm.provider :virtualbox do |vb|
    vb.customize [
      "modifyvm", :id,
      "--name", parsed_env[:name],
      "--cpus", parsed_env[:cpus],
      "--memory", parsed_env[:memory],
    ]
  end
  config.vm.provision :puppet do |puppet|
    puppet.manifests_path = "puppet/manifests"
    puppet.module_path = "puppet/modules"
    puppet.manifest_file = parsed_env[:manifest]
  end
end
