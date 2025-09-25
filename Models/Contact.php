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

    public static function update(
        int $id,
        int $userId,
        string $firstName,
        string $lastName,
        string $birthDate,
        string $phone,
        string $email
    ): ?array {
        if ($id <= 0 || $userId <= 0) {
            throw new InvalidArgumentException("ID and user ID must be positive integers.");
        }

        $query = "UPDATE contacts 
              SET firstName = ?, lastName = ?, birthDate = ?, phone = ?, email = ? 
              WHERE id = ? AND user_id = ?";

        $conn = connectToDB();
        $stmt = mysqli_prepare($conn, $query);

        if (!$stmt) {
            throw new RuntimeException("Failed to prepare statement: " . mysqli_error($conn));
        }

        mysqli_stmt_bind_param($stmt, "sssssii", $firstName, $lastName, $birthDate, $phone, $email, $id, $userId);
        $result = mysqli_stmt_execute($stmt);
        if (!$result) {
            throw new RuntimeException("Failed to execute statement: " . mysqli_error($conn));
        }

        mysqli_stmt_close($stmt);
        closeConnection($conn);

        return $result ? self::findById($id) : null;
    }
}
