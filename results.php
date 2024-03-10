<?php
session_start();
include __DIR__ . '/functions.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strong password generator</title>

    <!-- Import Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@latest/dist/css/bootstrap.min.css">
</head>

<body class="bg-dark">
    <div class="container mt-3 text-white">
        <h1 >La tua password &egrave; : </h1>
        <span> <?php echo $_SESSION['newPassword'] ?></span>
    </div>

</html>