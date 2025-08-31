<?php
    ini_set('display_errors', 'TRUE');
    require('Config/connection.php');
    session_start();
    echo "<pre>";
    print_r($_POST);
    //die;

    if (!empty($_POST)) {
        $email = $_POST['email'];
        if(!empty($email))
        {
            $conn = connectToDB();
            $q1 = "select * from users where email = '$email'";
            $result = mysqli_query($conn, $q1);
            closeConnection($conn);
            $user = mysqli_fetch_assoc($result);

            if(password_verify($_POST['password'], $user['password']))
            {
                echo "Password verified.<br>Welcome " . $user['username'] . " to Zenstar <br>";
                //header('Location: index.php');
            }
            else
            {
                echo "Incorrect password. Please try again";
            }
            // echo "<pre>";
            // print_r($user);
            // die;

            $_SESSION["users"] = ["username", "email", "password"];
            echo "You have successfully logged into your account. <br>";
            print_r($_SESSION);
        }
    }
?>