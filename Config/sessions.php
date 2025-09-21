<?php

ini_set('display_errors', 'TRUE');
require_once('connection.php');

session_start();

if (empty($_SESSION['userId']) || empty($_SESSION['email'])) {
    header('Location: logout.php?action=run');
}

$sessionUserId = $_SESSION['userId'];
