<?php
$host="localhost";
$username="root";
$password="";
$database="buns";

$con = mysqli_connect("$host", "$username", "$password", "$database") or die("Server Error!");
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}?>