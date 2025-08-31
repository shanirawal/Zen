<?php 
    ini_set('display_errors', 'TRUE');
    require('Config/connection.php');
    //echo "<pre>";
    //print_r($_POST);
    //die;

    if (!empty($_POST)) {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $pass = $_POST['password'];
        $encrPass = password_hash($pass, PASSWORD_DEFAULT);

        
        if(!empty($username && $email && $pass))
        {
            $insertQuery =  "insert into users (username, email, password) values ('$username', '$email', '$encrPass')";
            $conn = connectToDB();
            $result = mysqli_query($conn, $insertQuery, MYSQLI_STORE_RESULT);
            closeConnection($conn);
            echo "Data saved successfully! $result" . "<br>";
            header('Location: index.php');
        }
        else
        {
            echo "Please enter all the values.";
        }
    }
    ?>
