<?php
    ini_set('display_errors', 'TRUE');
    require('Config/connection.php');
    session_start();
    //echo "<pre>";
    //print_r($_SESSION);
    //die;

    if (!empty($_POST)) {

            $name = $_POST['fullName']; 
            echo "Your Full Name is : " . $name. "<br>";  
         
    }
?>