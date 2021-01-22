<?php include 'php/reg_process.php'; 
include 'login_header.php'; ?>
<br><br><br>
    <center> 
    <h1>Register</h1>
        <form method="POST">
        <?php include 'php/reg_errors.php'; ?>
            <input type="text" name="firstname" value="<?php echo $firstname; ?>" placeholder="Firstname"><br>
            <input type="text" name="lastname" placeholder="Lastname"><br>
            <input type="text" name="username" placeholder="Username"><br>
            <input type="text" name="password" placeholder="Password"><br><br>
            <input type="submit" name="register" value="Create my account"><br><br>
            <p>Already have an account?<br><a href="login.php">Sign in</a></p>       
        </form>
    </center>
</body>
</html>
