<?php include 'includes/handler.php'; 
include "includes/header.php"; // WEBPAGE HEADER
?>

<br><br><br>
<div class="flex justify-center bg-gray-300">
    <!-- <div class="shadow-lg">
        <h1>Sign in</h1>
            <form method="POST" action="login.php">
                <?php// include('php/reg_errors.php'); ?>
                <input type="text" name="login" placeholder="Username or Email"><br>
                <input type="password" name="password" placeholder="Password"><br><br>
                <input type="submit" name="submit" value="Login">
            </form>
    </div> -->

    <!-- <div class="shadow-lg"> 
        <h1>Register</h1>
            <form method="POST">
            <?php // include 'php/reg_errors.php'; ?>
                <input type="text" name="firstname" value="<?php // echo $firstname; ?>" placeholder="Firstname"><br>
                <input type="text" name="lastname" placeholder="Lastname"><br>
                <input type="text" name="username" placeholder="Username"><br>
                <input type="text" name="email" placeholder="Email"><br>   
                <input type="password" name="password" placeholder="Password"><br><br>
                <input type="submit" name="register" value="Create my account"><br><br>
            </form>
    </div>
</div> -->



<?php 
echo file_get_contents("includes/footer.php"); // WEBPAGE FOOTER
?>
