<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $name = $_GET['name'];
    $email = $_GET['email'];
    $message = $_GET['message'];

    // Process the data or do something with it
    // For example, you can store it in a database or send an email

    // Redirect to a success page
    header("Location: success.php");
    exit();
}
?>
