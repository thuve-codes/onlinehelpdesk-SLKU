<?php

$host = "localhost";
$username = "root";
$password = "";
$dbname = "slku";

$con = new mysqli($host, $username, $password, $dbname);

if ($con->connect_error) {
    die("Connection error: " . $con->connect_error);
} else {
}
return $con;
