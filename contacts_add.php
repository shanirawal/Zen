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
    <form action="<?= htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
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
    // ---------- Insert Data ----------
    if (isset($_POST['submit'])) {
        $firstName = $_POST['fname'];
        $lastName  = $_POST['lname'];
        $birthDate = $_POST['dob'];
        $phone     = $_POST['phone'];
        $email     = $_POST['email'];

        if (!empty($firstName) && !empty($lastName) && !empty($birthDate) && !empty($phone) && !empty($email)) {
            // $_SESSION[]
            $insertQuery = "INSERT INTO contacts (firstName, lastName, birthDate, phone, email, user_id) 
                            VALUES ('$firstName', '$lastName', '$birthDate', '$phone', '$email', )";
            $conn = connectToDB();
            $result = mysqli_query($conn, $insertQuery);
            closeConnection($conn);

            echo "Data saved successfully!<br>";
        } else {
            echo "Please enter all the values.";
        }
    }
    ?>
</body>

</html>