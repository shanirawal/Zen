<?php
require_once('Config/sessions.php');
require_once('Models/Contact.php');
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
    $contacts = Contact::getAll($sessionUserId);
    ?>

    <table border="1" cellpadding="5" cellspacing="0">
        <tr>
            <th>Contact Id</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Birth Date</th>
            <th>Phone</th>
            <th>Email</th>
            <th>Action</th>
        </tr>
        <?php foreach ($contacts as $contact) { ?>
            <tr>
                <td><?= $contact['id'] ?></td>
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