<?php 
// CONNECTION TO THE DATABASE
session_start();
$servername = "";
$username = "";
$password = "";
$name = "";

// Create connection
$conn = new mysqli($servername, $username, $password, $name);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
// echo "Connected successfully";



// Setting up empty variables
$login = "";
$firstname = "";
$lastname = "";
$email = "";
$username = "";
$errors = array();
// REGISTER
if(isset($_POST['register'])){
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    // Errors: forms need to be filled properly
    if(empty($firstname)){array_push($errors, "First name is required");}
    if(empty($lastname)){array_push($errors, "Lastname is required");}
    if(empty($email)){array_push($errors, "Invalid email");}
    if(empty($username)){array_push($errors, "Invalid username");}
    if(empty($password)){array_push($errors, "Invalid password");}
    // If there are no errors: All field are filled
    if(count($errors) == 0){
        
        $user_email = mysqli_query($conn, "SELECT email FROM users where email = '$email' ");
        $user_username = mysqli_query($conn, "SELECT username FROM users where username = '$username' ");
        $result1 = mysqli_num_rows($user_email);
        $result2 = mysqli_num_rows($user_username);
        
        if($result1 > 0){
            array_push($errors, "Email is already been registered");
        }elseif($result2 > 0){
            array_push($errors, "Username has already been taken please choose another");
        } else {
        // INSERT DATA INTO USER TABLE
        $insert = $conn->query("INSERT INTO users(`name`, `lastname`, `email`, `username`, `password`) VALUES 
                                    ('$firstname', '$lastname', '$email', '$username', '$password')");    
        // DATA QUERY
        // $select = $conn->query("SELECT * FROM users WHERE name = '$firstname' AND lastname = '$lastname' AND username = '$username' AND password = '$password'");
        // $count = $select->num_rows;
        // $row = $select->fetch_assoc();

        $_SESSION['name'] = $firstname;
        $_SESSION['lastname'] = $lastname;
        $_SESSION['email'] = $email;
        $_SESSION['username'] = $username;
        $_SESSION['password'] = $password;
        $_SESSION['success'] = "You are now logged in"; 
        $_SESSION['loggedin'] = true;   

        // After successfull registration direct into the homepage
        header('Location: index.php');
        }}
}
// LOGIN 
if(isset($_POST['submit'])){
    // STORE INPUT INTO PHP VARIABLE
    // $username = $_POST['username'];
    $password = $_POST['password'];
    $login = $_REQUEST['login']; 
     // Errors: forms need to be filled properly
    if(empty($login)){array_push($errors, "Username or Email is required");}
    if(empty($password)){array_push($errors, "Password is required");}
    // If no errors
    if(count($errors) == 0){
        // DATA QUERY
        $select = $conn->query("SELECT * FROM users WHERE (username LIKE '$login' OR email LIKE '$login') AND password = '$password'");
        // $count = 1 means that one user with the 
        // entered username exists 
        $count = $select->num_rows;
        $row = $select->fetch_assoc();
        if($count == 1){
                // Storing username in session   variable 
                $_SESSION['name'] = $row['name'];
                $_SESSION['lastname'] = $row['lastname'];
                $_SESSION['email'] = $row['email'];
                $_SESSION['username'] = $row['username'];
                $_SESSION['password'] = $row['password'];
                $_SESSION['success'] = "You are now logged in";   
                $_SESSION['loggedin'] = true;  
                // REDIRECT INTO MAIN PAGE
                header('Location: index.php');
     
        }else {array_push($errors, "The username or password is incorrect");}
 

}}?>
