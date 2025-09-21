<?php
if (isset($_GET['action']) && $_GET['action'] === 'run') {
    echo "PHP action executed!";
    session_start();
    session_unset();
    session_destroy();
    header("Location: index.php");
} 
else 
{
    echo "No action specified.";
}
?>