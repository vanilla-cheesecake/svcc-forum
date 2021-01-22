<?php 
// CONNECTION TO THE DATABASE
include 'php/connect.php';
// Setting up empty variables
$firstname = "";
$lastname = "";
$username = "";
$errors = array();
// REGISTER
if(isset($_POST['register'])){
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    // Errors: forms need to be filled properly
    if(empty($firstname)){array_push($errors, "First name is required");}
    if(empty($lastname)){array_push($errors, "Lastname is required");}
    if(empty($username)){array_push($errors, "Username is required");}
    if(empty($password)){array_push($errors, "Password is required");}
    // If there are no errors: All field are filled
    if(count($errors) == 0){
        // INSERT DATA INTO USER TABLE
        $insert = $conn->query("INSERT INTO users(`name`, `lastname`, `username`, `password`) VALUES 
                                ('$firstname', '$lastname', '$username', '$password')");    
    // DATA QUERY
    // $select = $conn->query("SELECT * FROM users WHERE name = '$firstname' AND lastname = '$lastname' AND username = '$username' AND password = '$password'");
    // $count = $select->num_rows;
    // $row = $select->fetch_assoc();
    $_SESSION['firstname'] = $firstname;
    $_SESSION['lastname'] = $lastname;
    $_SESSION['username'] = $username;
    $_SESSION['password'] = $password;
    $_SESSION['success'] = "You are now logged in"; 
    // After successfull registration direct into the homepage
    header('Location: index.php');
    }
}
// LOGIN 
if(isset($_POST['submit'])){
    // STORE INPUT INTO PHP VARIABLE
    $username = $_POST['username'];
    $password = $_POST['password'];
     // Errors: forms need to be filled properly
    if(empty($username)){array_push($errors, "Username is required");}
    if(empty($password)){array_push($errors, "Password is required");}
    // If no errors
    if(count($errors) == 0){
        // DATA QUERY
        $select = $conn->query("SELECT * FROM users WHERE username = '$username' AND password = '$password'");
        // $count = 1 means that one user with the 
        // entered username exists 
        $count = $select->num_rows;
        $row = $select->fetch_assoc();
        if($count == 1){
            // Storing username in session variable 
            $_SESSION['name'] = $row['name'];
            $_SESSION['lastname'] = $row['lastname'];
            $_SESSION['username'] = $row['username'];
            $_SESSION['password'] = $row['password'];
            $_SESSION['success'] = "You are now logged in";     
            // REDIRECT INTO MAIN PAGE
            header('Location: index.php');
    } else {array_push($errors, "The username or password is incorrect");}
}}?>
