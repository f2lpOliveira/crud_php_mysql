<?php

$db_name = '';
$db_host = '';
$db_user = '';
$db_password = '';

$pdo = new PDO("mysql:dbname=".$db_name.";host=".$db_host, $db_user, $db_password);