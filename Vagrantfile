Vagrant.configure("2") do |config|

  config.vm.box = "bento/ubuntu-18.04"
  
  config.vm.network "private_network", ip: "192.168.33.10"

  config.vm.synced_folder "./", "/var/www/kotobee", type: "nfs"
  config.vm.synced_folder "../symfony-5/", "/var/www/symfony-5", type: "nfs"
  
  config.vm.provider "virtualbox" do |vb|
    #vb.gui = true
    vb.memory = "8192"
  end

  config.vm.provision "shell",
    path: "scripts/provision/ubuntu/provision.sh"
  
end
