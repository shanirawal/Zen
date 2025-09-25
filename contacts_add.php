<?php
ini_set('display_errors', 'TRUE');
require('Config/connection.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Contacts</title>
</head>

<body>
    <form action="contacts_save.php" method="POST">
        <table style="justify-content:center">
            <tr>
                <td>First Name : <input type="text" name="fname" /></td>
            </tr>
            <tr>
                <td>Last Name : <input type="text" name="lname" /></td>
            </tr>
            <tr>
                <td>Birth Date : <input type="date" name="dob" /></td>
            </tr>
            <tr>
                <td>Phone no. : <input type="text" name="phone" /></td>
            </tr>
            <tr>
                <td>Email : <input type="email" name="email" /></td>
            </tr>
            <tr>
                <td><button type="submit" name="submit">Submit</button></td>
                <td><button type="submit" name="view">View Details</button></td>
            </tr>
        </table>
    </form>

    <?php
    // session_start();
    // if (!empty($_SESSION['id']) && !empty($_SESSION['email'])){
    //     // ---------- Insert Data ----------
    //     if (isset($_POST['submit'])) {
    //         $firstName = $_POST['fname'];
    //         $lastName  = $_POST['lname'];
    //         $birthDate = $_POST['dob'];
    //         $phone     = $_POST['phone'];
    //         $email     = $_POST['email'];
    //         $id    = $_POST['id'];

    //         if (!empty($firstName) && !empty($lastName) && !empty($birthDate) && !empty($phone) && !empty($email)) {
    //             // $_SESSION[]
    //             $insertQuery = "INSERT INTO contacts (firstName, lastName, birthDate, phone, email, id) 
    //                             VALUES ('$firstName', '$lastName', '$birthDate', '$phone', '$email', '$id')";
    //             $conn = connectToDB();
    //             $result = mysqli_query($conn, $insertQuery);
    //             closeConnection($conn);

    //             echo "Data saved successfully!<br>";
    //         } else {
    //             echo "Please enter all the values.";
    //         }
    //     }
    // }
    ?>
</body>

</html>