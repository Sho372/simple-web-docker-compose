<?php

# db information
$db_host = 'db';
$db_name = 'inventory';
$db_username = 'root';
$db_password = 'password';

# database name
$dsn = "mysql:host=$db_host;dbname=$db_name";

# db connection object by PDO

try {
    $db_connection = new PDO($dsn, $db_username, $db_password);
} catch (Exception $e) {
    echo "there was failure - " . $e->getMessage();
}

