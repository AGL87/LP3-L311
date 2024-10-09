<?php
echo "Copyright (c), tous les droits sont réservés à Aymeric Leger Achard.<br/>";
echo "Dépôt Git : https://github.com/AGL87/LP3-L311/s2";

//
// OS information
echo "<pre>";
var_dump(php_uname());
echo "</pre><br/>";

echo "OS : " . php_uname("s") . "<br/>";
echo "Hôte : " . php_uname("n") . "<br/>";
echo "Version l'OS : " . php_uname("r") . "<br/>";
echo "Version l'OS (2) : " . php_uname("v") . "<br/>";
echo "Architecture matérielle : " . php_uname("m") . "<br/>";

echo "<br/><br/>Informations obtenues via php_uname() : <a href=\"https://www.php.net/manual/fr/function.php-uname.php\">Documentation PHP.net</a>";

//
// Info from php info
phpinfo();