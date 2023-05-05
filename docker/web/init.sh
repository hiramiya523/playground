#!/bin/bash
service mysql start
service php7.4-fpm start

# service apache2 start
apache2ctl -D FOREGROUND

# service apache2 status
# service php7.4-fpm status
