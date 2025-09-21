<?php

const HOST = 'srv1100.hstgr.io';
const USER = 'u815663851_vd_fybca2025';
const PASS = 'eq=otOW~7';
const DBNAME = 'u815663851_vd_fybca2025';

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
