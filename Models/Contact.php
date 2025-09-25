<?php
ini_set('display_errors', 'TRUE');
require_once('Config/connection.php');


final class Contact
{
    public static function getAll(int $userId = -1): array
    {
        $conn = connectToDB();
        $sql = "SELECT *, CONCAT(firstName, ' ', lastName) as fullName FROM contacts where user_id=$userId";
        $result = mysqli_query($conn, $sql);
        $contacts = mysqli_fetch_all($result, MYSQLI_ASSOC);
        closeConnection($conn);

        return $contacts ?? [];
    }

    public static function findById(int $id): ?array
    {
        $conn = connectToDB();
        $sql = "SELECT *, CONCAT(firstName, ' ', lastName) as fullName FROM contacts where id=$id";
        $result = mysqli_query($conn, $sql);
        $contact = mysqli_fetch_assoc($result);
        closeConnection($conn);

        return $contact;
    }

    public static function update(int $id): ?array
    {
        $conn = connectToDB();
        $sql = "SELECT *, CONCAT(firstName, ' ', lastName) as fullName FROM contacts where id=$id";
        $result = mysqli_query($conn, $sql);
        $contact = mysqli_fetch_assoc($result);
        closeConnection($conn);

        return $contact;
    }
}
