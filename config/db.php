<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "outreach";

$conn = mysqli_connect($host, $user, $pass, $db);

//check conn
if  (!$conn){
    echo "connection unsuccessful". mysqli_connect_error();
}
