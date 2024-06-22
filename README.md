# Setting up the email server

1) run:
docker-compose -f docker-compose.mailserver.yml up --build


2) Setup SMTP with Gmail
echo "[smtp.gmail.com]:587 actappon@gmail.com:<APP PASSWORD>" > sasl_passwd
chmod 600 sasl_passwd

postmap /tmp/docker-mailserver/sasl_passwd
supervisorctl restart postfix

- Restart the dockers


3) Setup the webmail docker:

- Access it:
docker exec -it webmail /bin/bash

- Update and install VIM (if not done yet)
apt update
apt install vim -y

- Update the config file with the contents of roundcube-config/custom_config.inc.php
cd /var/www/html/config
vi iconfig.inc.php

...

Exit the docker.

**Do NOT restart the docker. If restarted, you need to repeat steps 3 and 4**

