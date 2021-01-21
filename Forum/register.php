<?php

include 'php/connect.php';
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<br><br><br><br><br>

    <center>
    
    <h1>Register</h1>
        <form method="POST">
            <input type="text" name="firstname" placeholder="Firstname"><br>
            <input type="text" name="lastname"placeholder="Lastname"><br>
            <input type="text" name="reg_username" placeholder="Username"><br>
            <input type="text" name="reg_password"placeholder="Password"><br><br>
            <input type="submit" name="register" value="Create my account"><br><br>
            <a href="login.php">Already have an account?</a>
        </form>
    </center>
</body>
</html>

<?php 

if(isset($_POST['register'])){
    $name = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $reg_username = $_POST['reg_username'];
    $reg_password = $_POST['reg_password'];

    // INSERT DATA INTO USER TABLE
    $insert = $conn->query("INSERT INTO users(`name`, `lastname`, `username`, `password`) VALUES 
                            ('$name', '$lastname', '$reg_username', '$reg_password')");

    // DATA QUERY
    $select = $conn->query("SELECT * FROM users WHERE name = '$name' AND lastname = '$lastname' AND username = '$reg_username' AND password = '$reg_password'");
    $count = $select->num_rows;
    $row = $select->fetch_assoc();
    $_SESSION['name'] = $row['name'];
    $_SESSION['lastname'] = $row['lastname'];
    $_SESSION['reg_username'] = $row['reg_username'];
    $_SESSION['reg_password'] = $row['reg_password'];

    header('Location: index.php');

}


?>
