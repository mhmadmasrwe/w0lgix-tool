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
echo "#            Using ./danger.sh Option             #"
echo "###################################################"

echo -e "enter chooise \n1)for get sudo domain\n2)for get ips server\n3)scan port"
read num

case $num in

	1)

echo -e "enter website"
read website

echo -e "Time Strating: "$(date +"%r ")


	fierce -dns $website 
	

echo -e "Time Finish: "$(date +"%r ")
;;

	2)
echo -e "\n1)list\n2)single"
read sl
if [ $sl -eq 1 ]

then
	echo "enter namefile iplist"
read file
url=`cat $file`

echo "Prossing..."	
for url in $url
do
	
	sleep 1
	host $url | grep "has address" | cut -d" " -f1,4
	
done

echo "Finish !!"



elif [ $sl -eq 2 ]
then
	
	echo "enter site"
read site
echo "Prossing..."	

	
	sleep 1
	host $site | grep "has address" | cut -d" " -f1,4
	

echo "Finish !!"
fi
;;

	3)
echo -e "\n1)for scan full\n2)way to bypass firewall\n3)scan list ip\n4)scan small packet\n5)to change mac address\n6)scan for tcp/udp (random)"

read ch

if [ $ch -eq 1 ]
then
echo "enter ip"
read we
sudo nmap $we -sS -sV -Pn -O


elif [ $ch -eq 2 ]
then

echo "enter ip"
read we
sudo nmap $we -f

elif [ $ch -eq 3 ]
then
echo "enter list ip"
read list1
sudo nmap -sV -iL $list1 > scan.txt

elif [ $ch -eq 4 ]
then
echo "enter ip"
read we 
sudo nmap --mtu 8 $we

elif [ $ch -eq 5 ]
then
echo "enter ip"
read we
sudo nmap -sT -PN --spoof-mac 0 $we

elif [ $ch -eq 6 ]
then
echo "enter ip"
read we
sudo nmap --badsum $we
fi

 ;;
    *)
        echo "Chose 1 - 3!!"
        
esac


