#!/bin/bash
# In The Name Of God
# ========================================
# [] File Name : deploy.sh
#
# [] Creation Date : 15-08-2016
#
# [] Created By : Parham Alvani (parham.alvani@gmail.com)
# =======================================

# install requirements
echo "Installing requirements"
sudo apt-get update
sudo apt-get install apache2 mongodb curl
sudo apt-get install php php-curl php-mysql php-mcrypt php-json php-cli php-curl php-mongo php-mbstring phpunit

# setup composer
echo "Installing composer"
if [ ! -e /usr/local/bin/composer ]; then
	curl -sS https://getcomposer.org/installer | sudo php -- --install-dir=/usr/local/bin --filename=composer
	sudo chown -R $USER:$USER $HOME/.composer
else
	echo "composer was installed previously."
fi

# FMS initiation
echo "FMS initiation"
if [ ! -e .env ]; then
	cp .env.example .env
else
	echo "environment was defined previously"
fi
#composer install
#chmod 0777 -R storage

# Apache initiation
echo "Apache2 initiation"
sudo a2enmod rewrite
sudo cp deploy/000-default.conf /etc/apache2/sites-available/
sudo service apache2 restart

# Database initiation
mongo < deploy/db.js

echo "Let's try 127.0.0.1/FMS !"
echo "Panamo contains friends that will friend forever :)"
