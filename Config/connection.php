<?php 

    const HOST = 'localhost:3306'; 
    const USER = 'root';
    const PASS = '';
    const DBNAME = 'Zen';

    function connectToDB()
    {
        $conn = mysqli_connect(HOST, USER, PASS, DBNAME);
        if(!$conn)
        {
            die("Could not connect : " .mysqli_connect_error());
        }
        echo "Connected successfully <br>";
        return $conn;
    }

    function closeConnection($conn) : void
    {
        mysqli_close($conn);
    }