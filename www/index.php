<?php
//$link = mysql_connect("mysql", "root", "passw0rd")
//    or die("Impossible de se connecter : " . mysql_error());
//echo 'Connexion r�ussie';
//mysql_close($link);

$link = mysqli_connect("mysql", "root", "passw0rd", "mysql");

if (!$link) {
    echo "Erreur : Impossible de se connecter � MySQL." . PHP_EOL;
    echo "Errno de d�bogage : " . mysqli_connect_errno() . PHP_EOL;
    echo "Erreur de d�bogage : " . mysqli_connect_error() . PHP_EOL;
    exit;
}

echo "Succ�s : Une connexion correcte � MySQL a �t� faite! La base de donn�e my_db est g�nial." . PHP_EOL;



echo phpinfo();
