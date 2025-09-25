<?php

const HOST = 'localhost';
const USER = 'root';
const PASS = '';
const DBNAME = 'zen';
const PORT = 3307;

if (!function_exists('connectToDB')) {
    function connectToDB()
    {
        $conn = mysqli_connect(HOST, USER, PASS, DBNAME, PORT);
        if (!$conn) {
            die("Could not connect : " . mysqli_connect_error());
        }
        echo "Connected successfully <br>";
        return $conn;
    }
}

if (!function_exists('closeConnection')) {

    function closeConnection($conn): void
    {
        mysqli_close($conn);
    }
}

?>
