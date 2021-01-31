<?php include 'php/reg_process.php'; 
include 'login_header.php'; ?>
<br><br><br>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<center>

<div class="w3-card-4 " style="width:30%"style="padding:10%" >
<div class="w3-container w3-center">
        <div class="card-body">
        <h1>Login</h1>
        <form method="POST" action="index.php">
            
            <?php include('php/reg_errors.php'); // Display errors here ?>
            <input type="text" name="login" placeholder="Username or Email"><br>
            <input type="password" name="password" placeholder="Password"><br><br>
            <input type="submit" name="submit" value="Login"><br><br>
            <p>Not a member yet?<br><a href="register.php">Register here</a></p>
        </form>

            </ul>
        </div>
    
</center>
<footer class="small bg-info">
    <div class="container">
    <ul class="list-inline mb-0">
        <li class="list-inline-item text-light">&copy; 2021 Gay Lloyrd Company</li>
        <li class="list-inline-item"><a href="#" class="text-light">Privacy Policy</a></li>
        </ul>
    </div>
</footer>



