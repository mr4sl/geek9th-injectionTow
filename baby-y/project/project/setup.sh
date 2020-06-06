#!/bin/bash
set -e
echo `service mysql status`
echo '1.mysql start....'
service mysql start
sleep 3
echo `service mysql status`
echo '2.import data....'
mysql < /mysql/schema.sql
echo '3.over ....'
sleep 3
echo `service mysql status`
echo '4.begin change password....'
mysql < /mysql/privileges.sql
echo '5.change password over....'
echo `service mysql status`
echo '6.successful!'
service apache2 start
tail -f /dev/null