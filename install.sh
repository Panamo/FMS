#!/bin/bash
# In The Name Of God
# ========================================
# [] File Name : install.sh
#
# [] Creation Date : 15-08-2016
#
# [] Created By : Parham Alvani (parham.alvani@gmail.com)
# =======================================

# install requirements
echo "installing requirements"
sudo apt update
sudo apt install apache2 mongodb
sudo apt install php-curl php-mysql php-mcrypt php-json php-cli php-curl php-mongodb php-mbstring

# setup composer
echo "installing composer"
curl -sS https://getcomposer.org/installer | sudo php -- --install-dir=/usr/local/bin --filename=composer
sudo chown -R $USER:$USER $HOME/.composer

# FMS initiation
echo "FMS initiation"
cp .env.example .env
composer install

# Apache initiation
echo "Apache2 initiation"
sudo a2enmod rewrite
sudo deploy/000-default.conf /etc/apache2/sites-available/
sudo service apache2 restart

echo "Let's try 127.0.0.1/FMS !"
echo "Panamo contains friends that will friend forever :)"
