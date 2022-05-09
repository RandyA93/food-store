<?php
define("APPROOT", dirname(__FILE__, 2));
$host = substr($_SERVER["HTTP_HOST"], 0, 5);
if($host == "local"){
    $local = true;
}
define("LOCAL", $local);
if($local){
    $debug = true;
    define("URLROOT", "http://localhost/food-store/");
} else {
    $debug = false;
    define("URLROOT", "march43.sg-host.com");
}
define("SITENAME", "Kirkwood Farms");
define("CURRENTYEAR", date("Y"));

if ($local) {
    define("DB_HOST", "localhost");
    define("DB_USER", "root");
    define("DB_PORT", "3307");
    define("DB_PASS", "");
    define("DB_NAME", "food-store");
} else {
    define("DB_HOST", "localhost");
    define("DB_USER", "ubl7ges9quim7");
    define("DB_PORT", "3306");
    define("DB_PASS", "ppuh90nkusoo");
    define("DB_NAME", "dbykzdo5ng3q2o");
}