<?php

$hostname = "localhost";
$username = "root";
$password = "";
$database = "db_kriptografi";

$connect = new mysqli($hostname, $username, $password, $database);

if ($connect->connect_error) {
    die('Maaf koneksi gagal: ' . $connect->connect_error);
}