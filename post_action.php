<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Process the data or do something with it
    // For example, you can store it in a database or send an email

    // Redirect to a success page
    header("Location: success.php");
    exit();
}
?>
