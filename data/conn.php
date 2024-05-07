<?php 



define('DB_SERVERNAME', 'localhost');
define('DB_USERRNAME', 'root');
define('DB_PASSWORD', 'root');
define('DB_NAME', 'db_uni_boolean');

try {
  $conn = new mysqli(DB_SERVERNAME,DB_USERRNAME,DB_PASSWORD,DB_NAME);
} catch (Exception $e) {
  $e->getmessage();
}