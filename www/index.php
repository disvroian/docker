<?php
//$link = mysql_connect("mysql", "root", "passw0rd")
//    or die("Impossible de se connecter : " . mysql_error());
//echo 'Connexion réussie';
//mysql_close($link);

$link = mysqli_connect("mysql", "root", "passw0rd", "mysql");

if (!$link) {
    echo "Erreur : Impossible de se connecter à MySQL." . PHP_EOL;
    echo "Errno de débogage : " . mysqli_connect_errno() . PHP_EOL;
    echo "Erreur de débogage : " . mysqli_connect_error() . PHP_EOL;
    exit;
}

echo "Succès : Une connexion correcte à MySQL a été faite! La base de donnée my_db est génial." . PHP_EOL;



echo phpinfo();
