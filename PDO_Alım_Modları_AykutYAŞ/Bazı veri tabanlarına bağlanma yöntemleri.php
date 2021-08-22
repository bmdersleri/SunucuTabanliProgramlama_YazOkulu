<?php

# PDO_DBLIB, MS SQL Server ve Sybase

$db = new PDO("mssql:host=localhost;dbname=testdb, user, pass");

$db = new PDO("sybase:host=localhost;dbname=testdb, user, pass");

# SQLite Database

$db = new PDO("sqlite:/opt/databases/mydb.sq3");
}

?>