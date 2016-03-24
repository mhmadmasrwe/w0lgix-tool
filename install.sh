#!/bin/bash

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
echo "#            Using ./w0lgix.sh                    #"
echo "###################################################"

mkdir password

git clone https://github.com/urbanadventurer/WhatWeb.git
	wait
wget https://github.com/wpscanteam/wpscan/archive/2.9.zip
	wait
git clone https://github.com/rsrdesarrollo/joomscan-owasp.git
	wait
git clone https://github.com/laramies/theHarvester.git
	wait
sudo apt-get install hydra
	wait
git clone https://github.com/davidpepper/fierce-domain-scanner.git
	wait
git clone https://github.com/Eisler/URLCrazy.git
	wait
wget https://raw.githubusercontent.com/mhmadmasrwe/w0lgix-tool/master/weblack.php 
	wait
wget https://raw.githubusercontent.com/Hood3dRob1n/addicted2hash/master/dict/rockyou.txt -O password/rockyou.txt
	wait
git clone https://github.com/shieldfy/waf-detector.git
	wait	
sudo bundle install
	wait
unzip 2.9.zip
	wait
mv wpscan-2.9 wpscan
	wait
rm 2.9.zip
	cd wpscan
./wpscan.rb --update
cd ..
wget https://raw.githubusercontent.com/mhmadmasrwe/w0lgix-tool/master/admin.php
wget https://raw.githubusercontent.com/mhmadmasrwe/w0lgix-tool/master/blackscanner -O BlackScanner.rb
wget https://raw.githubusercontent.com/danielmiessler/SecLists/master/Passwords/wordpress_attacks_july2014.txt -O password/pwd.txt
wget https://raw.githubusercontent.com/jeanphorn/wordlist/master/rdp_passlist.txt -O password/rdp_passlist.txt
wget https://raw.githubusercontent.com/jeanphorn/wordlist/master/ssh_passwd.txt -O password/ssh_passwd.txt
wget https://raw.githubusercontent.com/jeanphorn/wordlist/master/passlist.txt -O password/passlist.txt
