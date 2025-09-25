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

ini_set('display_errors', TRUE);
require('Config/connection.php');

session_start();
echo "<pre>";
print_r($_SESSION);

if (!empty($_SESSION['userId']) && !empty($_SESSION['email'])) {

    if (isset($_POST['submit'])) {
        $firstName = $_POST['fname'] ?? '';
        $lastName  = $_POST['lname'] ?? '';
        $birthDate = $_POST['dob'] ?? '';
        $phone     = $_POST['phone'] ?? '';
        $email     = $_POST['email'] ?? '';

        if (!empty($firstName) && !empty($lastName) && !empty($birthDate) && !empty($phone) && !empty($email)) {

            $user_id = $_SESSION['userId'];
            $conn = connectToDB();

            // Prepared statement to prevent SQL injection
            $stmt = $conn->prepare("INSERT INTO contacts (userId, firstName, lastName, birthDate, phone, email) 
                                    VALUES (?, ?, ?, ?, ?, ?)");
            if ($stmt === false) {
                die("Prepare failed: " . $conn->error);
            }

            $stmt->bind_param("isssss", $user_id, $firstName, $lastName, $birthDate, $phone, $email);

            if ($stmt->execute()) {
                echo "Data saved successfully!";
            } else {
                echo "Error inserting data: " . $stmt->error;
            }

            $stmt->close();
            closeConnection($conn);

        } else {
            echo "Please enter all the values.";
        }
    }
} else {
    echo "Session expired or not set.";
}
?>