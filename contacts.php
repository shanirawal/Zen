<?php
ini_set('display_errors', 'TRUE');
require('Config/connection.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacts</title>
</head>

<body>

    <?php
    $conn = connectToDB();
    $sql = "SELECT * FROM contacts where user_id=" . ($_SESSION['userId'] ?? -1);
    $result = mysqli_query($conn, $sql);
    $contacts = mysqli_fetch_all($result, MYSQLI_ASSOC);
    closeConnection($conn);
    ?>

    <table border="1" cellpadding="5" cellspacing="0">
        <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Birth Date</th>
            <th>Phone</th>
            <th>Email</th>
            <th>Action</th>
        </tr>
        <?php foreach ($contacts as $contact) { ?>
            <tr>
                <td><?= $contact['firstName'] ?></td>
                <td><?= $contact['lastName'] ?></td>
                <td><?= $contact['birthDate'] ?></td>
                <td><?= $contact['phone'] ?></td>
                <td><?= $contact['email'] ?></td>
                <td><a href="contacts.php?conName=<?= urlencode($contact['firstName']) ?>">Edit</a></td>
            </tr>
        <?php } ?>
    </table>

</body>

</html>