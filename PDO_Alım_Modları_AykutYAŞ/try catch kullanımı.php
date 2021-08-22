<?php

$dsn = 'mysql:host=localhost;dbname=test';

$user = 'root';

$password = '';
 
try {

    $db = new PDO($dsn, $user, $password);

} catch (PDOException $e) {

    echo 'Connection failed: ' . $e->getMessage();
}

?>