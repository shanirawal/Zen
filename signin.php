<?php
    ini_set('display_errors', 'TRUE');
    require('Config/connection.php');

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
                session_start();
                $_SESSION["userId"] = $user["id"];
                $_SESSION["username"] = $user["username"];
                $_SESSION["email"] = $user["email"];
                header('Location: home.php');
            }
            else
            {
                echo "Incorrect password. Please try again";
            }
            echo "You have successfully logged into your account. <br>";
            print_r($_SESSION);
        }
    }
?>