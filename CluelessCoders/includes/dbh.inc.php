<?php

$servername = "localhost:3306";
$dBUsername = "mahs_CluelessCoders";
$dBPassword = "mustangs";
$dBName = "mahs_CluelessCoders";

$conn = mysqli_connect($servername, $dBUsername, $dBPassword, $dBName);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
