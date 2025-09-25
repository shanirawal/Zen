<?php
require('Config/sessions.php');
require_once('Models/Contact.php');


// ---------- Save Data ----------
if (isset($_POST['submit'])) {
    $firstName = $_POST['fname'];
    $lastName  = $_POST['lname'];
    $birthDate = $_POST['dob'];
    $phone     = $_POST['phone'];
    $email     = $_POST['email'];

    if (!empty($firstName) && !empty($lastName) && !empty($birthDate) && !empty($phone) && !empty($email)) {
        $insertQuery = "UPDATE SET contacts (firstName, lastName, birthDate, phone, email) 
                                VALUES ('$firstName', '$lastName', '$birthDate', '$phone', '$email')";
        $conn = connectToDB();
        $result = mysqli_query($conn, $insertQuery);
        closeConnection($conn);

        echo "Data saved successfully!<br>";
        header('Location: contacts.php');
    } else {
        echo "Please enter all the values.";
    }
}
