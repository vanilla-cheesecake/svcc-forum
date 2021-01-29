<?php include 'php/connect.php';
// If user not logged in, they cannot access the page
if(empty($_SESSION['username'])){header('Location: login.php');}?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <title>FORUM</title>
</head>
<body>
    <center>
        <h1>WELCOME</h1>
        <h1>SVCC FORUM HOMEPAGE</h1>
    <?php if(isset($_SESSION['success'])): ?>
        <strong><?php echo $_SESSION['success']; 
                unset($_SESSION['success']); ?></strong>
    <?php endif; ?>
    </center>
    <ul>
        <li><a href="main.php">Home</li>
        <li><a href="#">Disscusion</a></li>
        <li><a href="user_profile.php">My Profile</a></li>
        <li><a href="php/logout.php">Logout</a></li>
    </ul>