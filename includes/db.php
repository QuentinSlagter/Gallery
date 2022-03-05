<?php 

$db['db_host'] = "127.0.0.1";
$db['db_user'] = "root";
$db['db_pass'] = "";
$db['db_name'] = "cms";

foreach($db as $key => $value) {
  define(strtoupper($key), $value);
}

$connection = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);

// Cleaning up data so hackers cannot delete or modify any data
function escape($string) {
  global $connection;
  return mysqli_real_escape_string($connection, trim($string));
}
?>