<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categories - Edit Page</title>
</head>

<body>
    <?php
    if (!empty($_POST['conName'])) {
        echo "<pre>";
        
        ini_set('display_errors', 'TRUE');
        require('../Config/connection.php');
        $conn = connectToDB();
        $sql = "select * from categories where Id = " . $_POST['conName'];
        $result = mysqli_query($conn, $sql);
        closeConnection($conn);
        $category = mysqli_fetch_assoc($result);
        print_r($contact);
    }
    ?>
    <h2>Edit Category</h2>
    <form method="POST">
        Title : <input type="text" name="title" value="<?= $category['Title'] ?>"><br><br>
        Slug : <input type="text" name="slug" value="<?=$category['Slug'] ?>"><br><br>
        Status : <input type="text" name="status" value="<?=$category['Status'] ?>"><br><br><br>
        <button type="submit">Update</button>
    </form>

    <?php

    ?>

</body>

</html>