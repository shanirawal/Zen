<?php
require('Config/sessions.php');
ini_set('display_errors', 'TRUE');
require_once('Models/Contact.php');
// ---------- Save Data ----------
if (!empty($_POST['contactId'])) {
    $firstName = $_POST['fname'];
    $lastName  = $_POST['lname'];
    $birthDate = $_POST['dob'];
    $phone     = $_POST['phone'];
    $email     = $_POST['email'];
    $updatedContact = Contact::update($_POST['contactId'], $sessionUserId, $firstName, $lastName, $birthDate, $phone, $email);

    if (!empty($updatedContact)) {
        $status = 'success';
        $redirect_url = 'contacts.php';
    } else {
        $status = 'fail';
        $error_message = '<div class="bg-red-900/50 border border-red-700 text-red-200 px-4 py-3 rounded-lg text-center">Error: ' . mysqli_error($conn) . '</div>';
        $redirect_url = '';
    }
}

if (!empty($redirect_url)) {
    $_SESSION['contactSaveStatus'] = $status;
    header('Location: ' . $redirect_url);
}
