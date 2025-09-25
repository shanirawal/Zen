<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categories - Edit Page</title>
</head>

<body>
    <?php
    if (!empty($_POST['firstName'])) {
        echo "<pre>";
        
        ini_set('display_errors', 'TRUE');
        require('../Config/connection.php');
        $conn = connectToDB();
        $sql = "select * from contacts where Id = " . $_POST['user_id'];
        $result = mysqli_query($conn, $sql);
        closeConnection($conn);
        $contact = mysqli_fetch_assoc($result);
    }
    ?>
    <h2>Edit Category</h2>
    <form action="contacts_save.php" method="POST">
        First Name : <input type="text" name="fname" value="<?= $contact['firstName'] ?>"><br><br>
        Last Name : <input type="text" name="lname" value="<?=$contact['lastName'] ?>"><br><br>
        Birth Date : <input type="text" name="dob" value="<?=$contact['birthDate'] ?>"><br><br><br>
        Phone no. : <input type="text" name="phone" value="<?=$contact['phone'] ?>"><br><br><br>
        Email : <input type="text" name="email" value="<?=$contact['email'] ?>"><br><br><br>
       
        <button type="submit">Update</button>
    </form>

    <?php

    ?>

</body>

</html>