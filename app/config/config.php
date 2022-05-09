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
    define("URLROOT", "https://march33.sg-host.com");
}
define("SITENAME", "Kirkwood Farms");
define("CURRENTYEAR", date("Y"));

if ($local) {
    define("DB_HOST", "localhost");
    define("DB_USER", "root");
    define("DB_PORT", "3307");
    define("DB_PASS", "");
    define("DB_NAME", "shareposts");
} else {
    define("DB_HOST", "localhost");
    define("DB_USER", "uireufb7sypko");
    define("DB_PORT", "3306");
    define("DB_PASS", "epwa6abzhgau");
    define("DB_NAME", "dbjz1ajhxj1efo");
}