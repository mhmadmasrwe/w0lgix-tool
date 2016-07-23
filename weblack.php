<?php
/**
 * w0lgix - weblack
 *
 * Usage:
 *
 *     php weblack.php encoder word
 */

$art =  "
\033[1;31m###################################################
\033[1;32m#https://www.facebook.com/Officiel.mhmad          #
\033[1;33m#                                                 #
\033[1;34m# ░░░░░░███████ ]▄▄▄▄▄▄▄▄                         #
\033[1;35m#▂▄▅█████████▅▄▃▂                                 #
\033[1;36m#I███████████████████].                           #
\033[1;33m#◥⊙▲⊙▲⊙▲⊙▲⊙▲⊙▲⊙◤...                               #
\033[1;34m#                 coded by w0lgix                 #
\033[1;36m#                 v1.0                            #
\033[1;32m#                                                 #
\033[1;31m#                                                 #
\033[1;34m###################################################
";

echo $art;

$site  = "http://www.passwordtool.hu/wordpress-password-hash-generator-v3-v4?password=".$word;
$site1 = "http://www.passwordtool.hu/joomla-password-hash-generator-salt-key?password=".$word;
$site2 = "http://www.passwordtool.hu/drupal-password-hash-generator?password=".$word;

$encoder = $argv[1];
$word    = $argv[2];


if(count($argv) < 3) {
    $encoder = "-h";
}

$a = hash($encoder,$word);

$clear_command = "clear";
if(stristr(php_uname("s"), "Windows NT")) {
    $clear_command = "cls";
}

system($clear_command);

echo $art."\033[1;31mhash\033[1;m "."\033[1;34m".$encoder."\033[1;m".": "."\033[1;32m".$a."\033[1;m"."\n";

if ($encoder == "base64" or $encoder == "Base64") {
	$base64 = base64_encode($word);

    system($clear_command);

	echo $art."\033[1;31mhash\033[1;m "."\033[1;34m".$encoder."\033[1;m".": "."\033[1;32m".$base64."\033[1;m"."\n";
}
else if ($encoder == "unbase64" or $encoder == "debase64") {
	$Base64 = base64_decode($word);

    system($clear_command);

	echo $art."\033[1;31mDecrypt\033[1;m"." \033[1;33mhash\033[1;m"." \033[1;34mBase64\033[1;m".": "."\033[1;32m".$Base64."\033[1;m"."\n";
}
else if ($encoder == null and $word == null) {
    system($clear_command);

	echo $art."\033[1;33mUsing\033[1;m "."\033[1;31mphp"." \033[1;36mweblack.php"." \033[1;32m(type-hash)\033[1;m"." \033[1;34m(word)\033[1;m\n";
    echo "OR\n";
    echo "\033[1;33mUsing\033[1;m "."\033[1;31mphp"." \033[1;36mweblack.php"." \033[1;32m-w\033[1;m"." \033[1;37m(wordlist path)\033[1;m ".
    "\033[1;32m(hash)\033[1;m "."\033[1;36m(type-hash)\033[1;m\n";
    echo "OR\n\033[1;33musing " ."\033[1;31mphp "."\033[1;36mweblack.php "."\033[1;32m--online "."\033[1;34m"."\033[1;37m(hash) "."\033[1;34m(md5-sha1)\n";
    echo "OR\n\033[1;33mUsing\033[1;m "."\033[1;31mphp"." \033[1;36mweblack.php"." \033[1;32m--list-hash\033[1;m"." \033[1;37m(wordlist path)\033[1;m ".
    "\033[1;32mhash-list\033[1;m "."\033[1;36m(type-hash)\033[1;m\nOR\n";
    echo "\033[1;33mUsing\033[1;m "."\033[1;31mphp"." \033[1;36mweblack.php"." \033[1;32m(base64)\033[1;m"." \033[1;34m(word)\033[1;m\nOR\n";
    echo "\033[1;33mUsing\033[1;m "."\033[1;31mphp"." \033[1;36mweblack.php"." \033[1;32m(debase64)\033[1;m"." \033[1;34m(word)\033[1;m\n";
}
else if ($encoder == null) {
    system($clear_command);

	echo $art."\033[1;33mUsing\033[1;m "."\033[1;31mphp"." \033[1;36mweblack.php"." \033[1;32m(type-hash)\033[1;m"." \033[1;34m(word)\033[1;m\n";
}
else if ($word == null) {
    system($clear_command);

	echo $art."\033[1;33mUsing\033[1;m "."\033[1;31mphp"." \033[1;36mweblack.php"." \033[1;32m(type-hash)\033[1;m"." \033[1;34m(word)\033[1;m\n";
}

if ($encoder == 'wordpress') {
    if ($word == null) {
        die();
    }

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

    system($clear_command);

    echo $art;

    $aa = exec("curl $site "."| grep value= ");

    echo trim($aa,"=");

    $b = array('value','<div','password','Wordpress');

    $resite = str_replace($ba, '', $aa);

    system($clear_command);

    $finel1 = substr("\n".$resite."\n",61,42);

    echo $art;

    echo $finel1."\n";
}

if ($encoder == 'joomla') {
    if ($word == null) {
        die();
    }

    $aa = exec("curl $site1 "."| grep value= ");

    $b = array('value','<div','password');

    $resite = str_replace($ba, '', $aa);

    system($clear_command);

    $finel = substr("\n".$resite."\n",52,72);

    echo $art;
    echo $finel."\n";
}

if ($encoder == 'drupal' or $encoder == "Drupal" or $encoder == "DruPal") {
    if ($word == null) {
        die();
    }

    $aa = exec("curl $site2 "."| grep value= ");

    $b = array('value','<div','password');

    $resite = str_replace($ba, '', $aa);

    system($clear_command);

    $finel = substr("\n".$resite."\n",52,40);

    echo $art;
    echo $finel."\n";
}

if ($encoder == "--wordlist" or $encoder == "-w") {
    $file5 = $argv[2]; //password-file
    $hash5 = $argv[3]; // hash
    $mode5 = $argv[4]; //mode md5-sha512

    if ($file5 == null or $hash5 == null or $mode5 == null) {
        system("reset");

        echo $art."\033[1;33mUsing\033[1;m "."\033[1;31mphp"." \033[1;36mweblack.php"." \033[1;32m-w\033[1;m"." \033[1;37m(wordlist path)\033[1;m ".
        "\033[1;32m(hash)\033[1;m "."\033[1;36m(type-hash)\033[1;m\n";

        die();
    }

    $open5 = fopen($file5, 'r');
    $read5 = fread($open5, filesize($file5));
    fclose($open5);

    $aa5 = explode("\n", $read5);
    foreach ($aa5 as $key5) {
        $b5 = hash($mode5,$key5);

        if ($b5 == $hash5){

        /*	system("clear");
        	echo $art;
        	echo "hash ".$mode5."\n";
        */
            echo "the password is : ".$key5."\n";
            die();
        }
    }
}

if ($encoder == "--online") {
    $hash = $argv[2];
    $mode = $argv[3];

    if ($mode == null or $hash == null) {
        system($clear_command);
        echo $art;
        echo "\033[1;33musing " ."\033[1;31mphp "."\033[1;36mweblack.php "."\033[1;32m--online "."\033[1;34m"."\033[1;37m(hash) "."\033[1;34m(md5-sha1)\n";
    }

    if ($mode == "md5") {
        $aa = system('curl http://md5.gromweb.com/?md5='.$hash.' | grep value= | cut -d" " -f 6 | grep value= | tail -n 2 | head -n 1 ');
        system($clear_command);
        echo $art;
        echo $aa;
    }
    else if ($mode == "sha1") {
        $aa = system('curl http://sha1.gromweb.com/?hash='.$hash.' | grep value= | cut -d" " -f6 | grep value= | tail -n 2 | head -n 1 ');
        system($clear_command);

        echo $art;
        echo $aa;
    }
}

if ($encoder == "--list-hash"){
    $flist = $argv[2]; //list passwd
    $flist1 = $argv[3]; //list hash
    $dtype = $argv[4]; //type-hash

    if($flist == null and $flist1 == null and $dtype == null) {
        system($clear_command);

        echo $art."\033[1;33mUsing\033[1;m "."\033[1;31mphp"." \033[1;36mweblack.php"." \033[1;32m--list-hash\033[1;m"." \033[1;37m(wordlist path)\033[1;m ".
        "\033[1;32mhash-list\033[1;m "."\033[1;36m(type-hash)\033[1;m\n";
    }
    else {
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

if ($encoder == "-h" or $encoder == "--help" or $encoder == "help") {
    echo "\nyou can Decrypt hashes and Encypt Hashes\n\n";

    echo "--online : you can Decrypt md5 && sha1 online\n\n";

    echo "--list-hash : you can Decrypt 38 hash in list file \n\n";

    echo "base64 | debase64 : you can Decrypt hashes base64\n\n";

    echo "--wordlist | -w : to add path wordlist password\n\n";

    echo "hash : is code hash like this (202cb962ac59075b964b07152d234b70)\n\n";

    echo "Type Hashes : \nmd5\nmd4\nmd2\nbase64\nsha1\nsha256\nsha384\nsha512\njoomla\nwordpress\nDrupal\nRIPEMD128\nRIPEMD160\nwhirlpool\nsnefru\ngost\nadler32\ncrc32\ncrc32b\nRipeMD160\njoaat\nfnv164\nhaval128,3\ngost-crypto\nhaval256,5
    haval192,5\nhaval224,5\nhaval160,5\nhaval224,4\nhaval128,4\nhaval192,4
    haval160,4\nsnefru\nripemd320\ntiger128,3\ntiger160,3\ntiger192,4\ntiger,128,4\ntiger160,4\nhaval192,3\ntiger192,3\nhaval256,4\ntiger128,4";


}
