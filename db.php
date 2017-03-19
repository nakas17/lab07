<?php
$host = "localhost";
$user = "it58160641";
$password = "65cdc766";
$dbname = "it58160641";
$conn = new mysqli($host, $user, $password, $dbname);
$conn->query('SET NAMES UTF8');
if ($conn->connect_error) die($conn->connect_error);
?>