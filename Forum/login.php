<?php include 'php/reg_process.php'; 
include 'login_header.php'; ?>
<br><br><br>

<center>
    <h1>Login</h1>
        <form method="POST" action="login.php">
            
            <?php include('php/reg_errors.php'); // Display errors here ?>
            <input type="text" name="login" placeholder="Username or Email"><br>
            <input type="text" name="password" placeholder="Password"><br><br>
            <input type="submit" name="submit" value="Login"><br><br>
            <p>Not a member yet?<br><a href="register.php">Register here</a></p>
        </form>
</center>



