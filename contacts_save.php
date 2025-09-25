<?php
    // ini_set('display_errors', 'TRUE');
    // require('Config/connection.php');

    // session_start();
    // echo "<pre>";
    // print_r($_SESSION);
    // //die;
    // if (!empty($_SESSION['userId']) && !empty($_SESSION['email'])){
    //     // ---------- Insert Data ----------
    //     if (isset($_POST['submit'])) {
    //         $firstName = $_POST['fname'];
    //         $lastName  = $_POST['lname'];
    //         $birthDate = $_POST['dob'];
    //         $phone     = $_POST['phone'];
    //         $email     = $_POST['email'];

    //         if (!empty($firstName) && !empty($lastName) && !empty($birthDate) && !empty($phone) && !empty($email)) {
    //             // $_SESSION[]
    //             $user_id = $_SESSION['userId'];
    //             $insertQuery = "INSERT INTO contacts (userId, firstName, lastName, birthDate, phone, email) 
    //                             VALUES ('$user_id', '$firstName', '$lastName', '$birthDate', '$phone', '$email')";
    //             $conn = connectToDB();
    //             $result = mysqli_query($conn, $insertQuery);
    //             closeConnection($conn);
    //             print_r($result);

    //             echo "Data saved successfully!<br>";
    //             //header('Location: contacts.php');
    //         } else {
    //             echo "Please enter all the values.";
    //         }
    //     }
    // }


    ini_set('display_errors', 'TRUE');
    require('Config/connection.php');

    session_start();
    echo "<pre>";
    print_r($_SESSION);
    //die;
    if (!empty($_SESSION['user_id']) && !empty($_SESSION['email'])){
        // ---------- Insert Data ----------
        if (isset($_POST['submit'])) {
            $firstName = $_POST['fname'];
            $lastName  = $_POST['lname'];
            $birthDate = $_POST['dob'];
            $phone     = $_POST['phone'];
            $email     = $_POST['email'];

            if (!empty($firstName) && !empty($lastName) && !empty($birthDate) && !empty($phone) && !empty($email)) {
                // $_SESSION[]
                $user_id = $_SESSION['user_id'];
                $insertQuery = "INSERT INTO contacts (user_id, firstName, lastName, birthDate, phone, email) 
                                VALUES ($user_id,'$firstName', '$lastName', '$birthDate', '$phone', '$email')";
                $conn = connectToDB();
                $result = mysqli_query($conn, $insertQuery);
                closeConnection($conn);
                print_r($result);

                echo "Data saved successfully!<br>";
                //header('Location: contacts.php');
            } else {
                echo "Please enter all the values.";
            }
        }
    }

?>