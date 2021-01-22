<?php include 'php/connect.php';
session_start();
?>

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
    </center>
    <ul>
        <li><a href="#"><?php echo strtoupper($_SESSION['name']); ?></a></li>
        <li><a href="#">Home</li>
        <li><a href="#">Disscusion</a></li>
        <li><a href="#">Logout</a></li>
    </ul>
  


</body>
</html>