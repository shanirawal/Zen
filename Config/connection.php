<?php

const HOST = 'localhost';
const USER = 'root';
const PASS = '';
const DBNAME = 'zen';

if (!function_exists('connectToDB')) {
    function connectToDB()
    {
        $conn = mysqli_connect(HOST, USER, PASS, DBNAME);
        if (!$conn) {
            die("Could not connect : " . mysqli_connect_error());
        }
        // echo "Connected successfully <br>";
        return $conn;
    }
}

if (!function_exists('closeConnection')) {

    function closeConnection($conn): void
    {
        mysqli_close($conn);
    }
}
