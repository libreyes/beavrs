# -*- mode: ruby -*-
# vi: set ft=ruby :

# Vagrantfile API/syntax version. Don't touch unless you know what you're doing!
VAGRANTFILE_API_VERSION = "2"

def parse_environment()
  parsed = { # We may want to change these defaults
    name: "php_dev",
    cpus: 1,
    memory: 512,
    host_ip: "10.0.10.42",
    http_port: 9001,
    mysql_port: 9002,
    pgsql_port: 9003,
    mysql: false,
    pgsql: false,
  }
  parsed.name = ENV["PHPDEVVM_NAME"] if ENV["PHPDEVVM_NAME"]
  parsed.host_ip = ENV["PHPDEVVM_HOSTIP"] if ENV["PHPDEVVM_HOSTIP"]
  if ENV["PHPDEVVM_MYSQL"] then
    parsed.mysql = true
  end
  if ENV["PHPDEVVM_PGSQL"] then
    parsed.pgsql = true
  end
  # This is the simplest way to do it safely
  begin
    parsed.cpus = Integer(ENV["PHPDEVVM_CPUS"])
  rescue; end
  begin
    parsed.memory = Integer(ENV["PHPDEVVM_CPUS"])
  rescue; end
  begin
    parsed.http_port = Integer(ENV["PHPDEVVM_HTTP_PORT"])
  rescue; end
  if parsed.mysql then
    begin
      parsed.mysql_port = Integer(ENV["PHPDEVVM_MYSQL_PORT"])
    rescue; end
  end
  if parsed.pgsql then
    begin
      parsed.pgsql_port = Integer(ENV["PHPDEVVM_PGSQL_PORT"])
    rescue; end
  end
  return parsed
end

Vagrant.configure(VAGRANTFILE_API_VERSION) do |config|
  parsed_env = parse_environment()
  config.vm.box = "precise64"
  config.vm.box_url = "http://files.vagrantup.com/precise64.box"

  config.vm.network "forwarded_port", guest: 80, host: parsed_env.http_port

  # One for the local machine to have a consistent IP to use
  config.vm.network "private_network", ip: parsed_env.host_ip
  # One for the network as a whole
  config.vm.network "public_network"

  config.vm.synced_folder "../", "/srv/shared"

  config.vm.provider :virtualbox do |vb|
    vb.customize [
      "modifyvm", :id,
      "--name", args[:name],
      "--cpus", args[:cpus],
      "--memory", args[:memory],
    ]
  end
  config.vm.provision :puppet do |puppet|
    puppet.manifests_path = "puppet/manifests"
    puppet.modules_path = "puppet/modules"
    # Pick a different top level manifest dependent on which engine is required
    if parsed_env.mysql then
      if parsed_env.pgsql then
        puppet.manifest_file = "mysql_pgsql.pp"
      else
        puppet.manifest_file = "mysql.pp"
      end
    elsif parsed_env.pgsql then
      puppet.manifest_file = "pgsql.pp"
    end
  end
end
