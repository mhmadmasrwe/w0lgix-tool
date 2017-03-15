<?php
error_reporting(0);

$art =  "
\033[1;31m###################################################
\033[1;32m#https://www.facebook.com/Officiel.mhmad          #
\033[1;33m#                                                 #
\033[1;34m# ░░░░░░███████ ]▄▄▄▄▄▄▄▄                         #
\033[1;35m#▂▄▅█████████▅▄▃▂                                 #
\033[1;36m#I███████████████████].                           #
\033[1;33m#◥⊙▲⊙▲⊙▲⊙▲⊙▲⊙▲⊙◤...                               #
\033[1;34m#                 coded by w0lgix                 #
\033[1;36m#                 v1.2                            #
\033[1;32m#                                                 #
\033[1;31m#                                                 #
\033[1;34m###################################################
";

echo $art;


$site = "http://www.passwordtool.hu/wordpress-password-hash-generator-v3-v4?password=".$word;
$site1 = "http://www.passwordtool.hu/joomla-password-hash-generator-salt-key?password=".$word;
$site2 = "http://www.passwordtool.hu/drupal-password-hash-generator?password=".$word;
$encoder = $argv[1];
$word = $argv[2];

$a = hash($encoder,$word);

$cmd = system( 'clear' ); 



echo $art."\033[1;31mhash\033[1;m "."\033[1;34m".$encoder."\033[1;m".": "."\033[1;32m".$a."\033[1;m"."\n";

if ($encoder == "base64" or $encoder == "Base64"){
	
	$base64 = base64_encode($word);
	 
     $cmd = system( 'clear' ); 

	echo $art."\033[1;31mhash\033[1;m "."\033[1;34m".$encoder."\033[1;m".": "."\033[1;32m".$base64."\033[1;m"."\n";
}

else if ($encoder == "unbase64" or $encoder == "debase64"){
		
		$Base64 = base64_decode($word);
	     
$cmd = system( 'clear' ); 
		
        echo $art."\033[1;31mDecrypt\033[1;m"." \033[1;33mhash\033[1;m"." \033[1;34mBase64\033[1;m".": "."\033[1;32m".$Base64."\033[1;m"."\n";
}
	
else if ($encoder == null and $word == null) {
	 
        $cmd = system( 'clear' ); 

	echo $art."\033[1;33mUsing\033[1;m "."\033[1;31mphp"." \033[1;36mweblack.php"." \033[1;32m(type-hash)\033[1;m"." \033[1;34m(word)\033[1;m\n";
echo "OR\n";
echo "\033[1;33mUsing\033[1;m "."\033[1;31mphp"." \033[1;36mweblack.php"." \033[1;32m-w\033[1;m"." \033[1;37m(wordlist path)\033[1;m ".
    "\033[1;32m(hash)\033[1;m "."\033[1;36m(type-hash)\033[1;m\n";
echo "OR\n\033[1;33musing " ."\033[1;31mphp "."\033[1;36mweblack.php "."\033[1;32m--online "."\033[1;34m"."\033[1;37m(hash) "."\033[1;34m(md5-sha1)\n";
echo "OR\n\033[1;33mUsing\033[1;m "."\033[1;31mphp"." \033[1;36mweblack.php"." \033[1;32m--list-hash\033[1;m"." \033[1;37m(wordlist path)\033[1;m ".
    "\033[1;32mhash-list\033[1;m "."\033[1;36m(type-hash)\033[1;m\nOR\n";
echo "\033[1;33mUsing\033[1;m "."\033[1;31mphp"." \033[1;36mweblack.php"." \033[1;32m(base64)\033[1;m"." \033[1;34m(word)\033[1;m\nOR\n";
echo "\033[1;33mUsing\033[1;m "."\033[1;31mphp"." \033[1;36mweblack.php"." \033[1;32m(debase64)\033[1;m"." \033[1;34m(word)\033[1;m\nOR\n";
echo "\033[1;33mUsing\033[1;m "."\033[1;31mphp"." \033[1;36mweblack.php"." \033[1;32m--hash-id\033[1;m"." \033[1;37m'hash'\033[1;m \n";

}

else if ($encoder == null){
	 if( stristr( php_uname( 's' ), 'Windows NT' ) ) { 
        // Windows 
        $cmd = system( 'cls' ); 
    } 
    else { 
        // *nix 
        $cmd = system( 'reset' ); 
    } 
	echo $art."\033[1;33mUsing\033[1;m "."\033[1;31mphp"." \033[1;36mweblack.php"." \033[1;32m(type-hash)\033[1;m"." \033[1;34m(word)\033[1;m\n";}

else if ($word == null){
     if( stristr( php_uname( 's' ), 'Windows NT' ) ) { 
        // Windows 
        $cmd = system( 'cls' ); 
    } 
    else { 
        // *nix 
        $cmd = system( 'clear' ); 
    } 
	echo $art."\033[1;33mUsing\033[1;m "."\033[1;31mphp"." \033[1;36mweblack.php"." \033[1;32m(type-hash)\033[1;m"." \033[1;34m(word)\033[1;m\n";}



if($encoder == 'wordpress'){
if ($word == null)
    die();


$ee = "


\033[1;31m           ___  _       _      
\033[1;32m__      __/ _ \| | __ _(_)_  __
\033[1;33m\ \ /\ / / | | | |/ _` | \ \/ /
 \033[1;34m\ V  V /| |_| | | (_| | |>  < 
 \033[1;35m \_/\_/  \___/|_|\__, |_/_/\_\
\033[1;36m             v1.0  |___/        
\033[1;37m

";
echo $ee;



system("clear");
echo $art;




	$aa = exec("curl $site "."| grep value= ");


echo trim($aa,"=");

$b = array('value','<div','password','Wordpress');

$resite = str_replace($ba, '', $aa);

system("clear");

$finel1 = substr("\n".$resite."\n",61,42);

echo $art;


echo $finel1."\n";
}	

if ($encoder == 'joomla'){
if ($word == null)
    die();

$aa = exec("curl $site1 "."| grep value= ");


$b = array('value','<div','password');

$resite = str_replace($ba, '', $aa);

system("clear");

$finel = substr("\n".$resite."\n",52,72);

echo $art;
echo $finel."\n";


}
//apache_sha1

if ($encoder == 'apache_sha1') {
if ($word == null)    
    die();
system('clear');
echo $art;
echo "\033[1;33mHash\033[1;m "."\033[1;35m$encoder\033[1;m".': '."\033[1;36m{SHA}" . base64_encode(sha1($word, TRUE))."\033[1;m";
}

//php5_hash

if ($encoder == 'php5_hash') {
if ($word == null)
    die();

system('clear');
echo $art;
echo "\033[1;33mHash\033[1;m "."\033[1;35m$encoder\033[1;m".': '."\033[1;36m".password_hash("123456789", PASSWORD_DEFAULT)."\n\033[1;m";
}

//DRUPAL

if ($encoder == 'drupal' or $encoder == "Drupal" or $encoder == "DruPal"){
if ($word == null)
    die();
$aa = exec("curl $site2 "."| grep value= ");


$b = array('value','<div','password');

$resite = str_replace($ba, '', $aa);

system("clear");

$finel = substr("\n".$resite."\n",52,40);

echo $art;
echo $finel."\n";


}

elseif ($encoder == "--wordlist" or $encoder == "-w"){


$file5 = $argv[2]; //password-file
$hash5 = $argv[3]; // hash
$mode5 = $argv[4]; //mode md5-sha512
if ($file5 == null or $hash5 == null or $mode5 == null){
system("reset");
    echo $art."\033[1;33mUsing\033[1;m "."\033[1;31mphp"." \033[1;36mweblack.php"." \033[1;32m-w\033[1;m"." \033[1;37m(wordlist path)\033[1;m ".
    "\033[1;32m(hash)\033[1;m "."\033[1;36m(type-hash)\033[1;m\n";
die();

}

//php5_hash
if ($mode5 == "php5_hash")
{

$open5 = fopen($file5,"r");
$read5 = fread($open5,filesize($file5));
fclose($open5);


$read5 = explode("\n", $read5);
foreach($read5 as $key5)
{
    
        
    
    $hash51 = password_hash($key5, PASSWORD_DEFAULT);

    if (password_verify($key5, $hash5))
    {
        echo $hash5 . "\t==\t" . $key5."\n";
        die();
    }
    else
    {
        echo $hash5 . "\t!=\t" . $key5 ."\n";
    }

}





}
//apache_hash
if($mode5 == "apache_hash")
{


$open5 = fopen($file5,"r");
$read5 = fread($open5,filesize($file5));
fclose($open5);


$read5 = explode("\n", $read5);
foreach($read5 as $list)
{
    
        
    
    $h = base64_encode(sha1($list, true));
    
    $hash1 = preg_replace('/{SHA}/', '', $hash5);
    
    if ($h == $hash1)
    {
        echo $hash5 . "\t==\t" . $list."\n";
        die();
    }
    else
    {
        echo $hash5 . "\t!=\t" . $list ."\n";
    }

}  


}


if($mode5 == "crypt")
{

$open5 = fopen($file5,"r");
$read5 = fread($open5,filesize($file5));
fclose($open5);


$read5 = explode("\n", $read5);
foreach($read5 as $list)
{
    
        
    
    $h = crypt($list);
    if (password_verify($h, $hash5))
    {
        echo $hash5 . "\t==\t" . $list."\n";
        die();
    }
    else
    {
        echo $hash5 . "\t!=\t" . $list ."\n";
    }

}

}


$open5 = fopen($file5, 'r');
$read5 = fread($open5, filesize($file5));
fclose($open5);

$aa5 = explode("\n", $read5);
foreach ($aa5 as $key5) {
  
$b5 = hash($mode5,$key5);

if ($b5 != $hash5){
	
echo "Crack: ". $b5." != ".$hash5."\n";
}

else
{
    echo "\n/**the password is **/: ".$key5."\n";
    die();
}


}



}

if ($encoder == "--online"){

$hash = $argv[2];
$mode = $argv[3];

if ($mode == null or $hash == null){

system("clear");
echo $art;
echo "\033[1;33musing " ."\033[1;31mphp "."\033[1;36mweblack.php "."\033[1;32m--online "."\033[1;34m"."\033[1;37m(hash) "."\033[1;34m(md5-sha1)\n";
}

if ($mode == "md5"){
$aa = system('curl http://md5.gromweb.com/?md5='.$hash.' | grep value= | cut -d" " -f 6 | grep value= | tail -n 2 | head -n 1 ');
system("clear");
echo $art;
echo $aa;
}

else if ($mode == "sha1"){

$aa = system('curl http://sha1.gromweb.com/?hash='.$hash.' | grep value= | cut -d" " -f6 | grep value= | tail -n 2 | head -n 1 ');
system("clear");
echo $art;
echo $aa;
}


}


if ($encoder == "--list-hash"){


$flist = $argv[2]; //list passwd
$flist1 = $argv[3]; //list hash
$dtype = $argv[4]; //type-hash

if($flist == null and $flist1 == null and $dtype == null){

system("clear");
echo $art."\033[1;33mUsing\033[1;m "."\033[1;31mphp"." \033[1;36mweblack.php"." \033[1;32m--list-hash\033[1;m"." \033[1;37m(wordlist path)\033[1;m ".
    "\033[1;32mhash-list\033[1;m "."\033[1;36m(type-hash)\033[1;m\n";


}
else{
$open3 = fopen($flist, "r");
$read3 = fread($open3, filesize($flist));
fclose($open3);

$a3 = explode("\n", $read3);

foreach ($a3 as $key3) {


$open1 = fopen($flist1, "r");
$read1 = fread($open1, filesize($flist1));
fclose($open1);

$aa3 = explode("\n", $read1);

foreach ($aa3 as $key2) {

$h = hash($dtype, $key3);

if ($h == $key2){

    echo $h."\t".$key3."\n";


	}


	   }


		 }


			 }
}



if ($encoder == "-h" or $encoder == "--help" or $encoder == "help"){

echo "\nyou can Decrypt hashes and Encypt Hashes\n\n";

echo "--online : you can Decrypt md5 && sha1 online\n\n";

echo "--list-hash : you can Decrypt 38 hash in list file \n\n";

echo "base64 | debase64 : you can Decrypt hashes base64\n\n";

echo "--wordlist | -w : to add path wordlist password\n\n";

echo "hash : is code hash like this (202cb962ac59075b964b07152d234b70)\n\n";
echo "hash-disclude\n\n";

echo "Type Hashes : \nmd5\nmd4\nmd2\nbase64\nsha1\nsha256\nsha384\nsha512\njoomla\nwordpress\nDrupal\nRIPEMD128\nRIPEMD160\nwhirlpool\nsnefru\ngost\nadler32\ncrc32\ncrc32b\nRipeMD160\njoaat\nfnv164\nhaval128,3\ngost-crypto\nhaval256,5
haval192,5\nhaval224,5\nhaval160,5\nhaval224,4\nhaval128,4\nhaval192,4
haval160,4\nripemd320\ntiger128,3\ntiger160,3\ntiger192,4\ntiger160,4\nhaval192,3\ntiger192,3\nhaval256,4\ntiger128,4\nphp5_hash";


}

//hash-disclude

if ($encoder == "--hash-id")
{

$hash = $argv[2];

$md5 = 32; //md4 md2 RIPEMD128 haval128,3 haval128,4 tiger128,3 tiger128,4 drupal
$sha1 = 40; //RIPEMD160 haval160,5 haval160,4 tiger160,3 tiger160,4
$sha256 = 64; //snefru gost gost-crypto aval256,5 haval256,4 joomla
$sha384 = 96;
$sha512 = 128; //whirlpool
$adler32 = 8; //crc32 crc32b joaat
$fnv164 = 16;
$haval1925 = 48; //haval192,5 haval192,4 tiger192,4 haval192,3
$haval2245 = 56; //haval224,5 haval224,4
$ripemd320 = 80;
$php5_hash = 60;
$wordpress = 34; //crypt
$drupal_gallery = 63;


$word = $argv[2];
if (!$word)
{

system("clear");
echo $art."\033[1;33mUsing\033[1;m "."\033[1;31mphp"." \033[1;36mweblack.php"." \033[1;32m--hash-id\033[1;m"." \033[1;37m'hash'\033[1;m \n\n";
die();
}



if (strlen($hash) == 64 and preg_match('/:/',$hash))
{
    echo "Possible:\n\n[+] JOOMLA:";
    echo strlen($hash)."\n";
}
elseif (strlen($hash) == 60 and preg_match("/\$/", $hash)) {
    echo "Possible:\n\n[+] PHP5_HASH\n[+] BLOWFISH_HASH\n";
    echo strlen($hash)."\n";
}

elseif (strlen($hash) == 128) {
    
    echo "Possible:\n\n[+]SHA512\n[+]WHIRLPOOL\n";
    echo strlen($hash)."\n";
}

elseif (strlen($hash) == 80) {
    
    echo "Possible:\n\n[+] RIPEMD320\n";
    echo strlen($hash)."\n";
}

elseif (strlen($hash) == 32) {

    echo "Possible:\n\n[+] MD5\n[+] DRUPAL \n[+] MD4\n[+] MD2\n[+] RIPEMD128\n[+] HAVAL128,3\n[+] HAVAL128,4\n[+] TIGER128,3\n[+] TIGER128,4\n";
    echo strlen($hash)."\n";
}

elseif (strlen($hash) == 40) {
        
    echo "Possible:\n\n[+] SHA1\n[+] RIPEMD160\n[+] HAVAL160,5\n[+] HAVAL160,4\n[+] TIGER160,3\n[+] TIGER160,4\n";
    echo strlen($hash)."\n";
}

elseif (strlen($hash) == 96) {
    
    echo "Possible:\n\n[+] SHA384:";
    echo strlen($hash)."\n";
}
//snefru gost gost-crypto aval256,5 haval256,4 joomla
elseif (strlen($hash) == 64) {
    
    echo "Possible:\n\n[+] SNEFRU\n[+] GOST\n[+] GOST-CRYPTO\n[+] AVAL256,5\n[+] HAVAL256,4\n";
    echo strlen($hash)."\n";
}

elseif (strlen($hash) == 34 and preg_match("/\$/", $hash)) {
    
    echo "Possible: \n\n[+] WORDPRESS\n[+] APACHE_MD5_HASH\n[+] CRYPT\n";
    echo strlen($hash)."\n";
}

elseif (strlen($hash) == 8) {
    
    echo "Possible:\n\n[+] CRC32\n[+] CRC32B\n[+] JOAAT\n[+] ADLER32\n";
    echo strlen($hash)."\n";
}

elseif (preg_match('/{SHA}/', $hash)) {
    
    echo "Possible:\n\n[+] APACHE_SHA1-HASH:";
    echo strlen($hash)."\n";
}
elseif (preg_match('/=?=/', $hash)) {
    
    echo "Possible:\n\n[+] BASE64:";
    echo strlen($hash)."\n";
}
elseif (strlen($hash) == 16) {
    
    echo "Possible:\n\n[+] FNV164:";
    echo strlen($hash)."\n";
}

elseif (strlen($hash) == 48) {
    
    echo "Possible:\n\n[+] HAVAL192,5\n[+] HAVAL192,4\n[+] TIGER192,4\n[+] TIGER192,3\n";
    echo strlen($hash)."\n";
}

elseif (strlen($hash) == 56) {
    
    echo "Possible:\n\n[+] HAVAL224,5\n[+] HAVAL224,4\n";
    echo strlen($hash)."\n";
}

elseif(strlen($hash) == 63){

    echo "Possible:\n\n[+] DRUPAL_GALLERY-HASH:";
    echo strlen($hash)."\n";
}

elseif (strlen($hash) == 34 and preg_match('/\$*[A-Z]*/', $hash)) {
    
    echo "Possible:\n\n[+] CRYPT:";
    echo strlen($hash)."\n";
}

else
{
    echo "Not Found:";
    echo strlen($hash)."\n";
}



}


?>

