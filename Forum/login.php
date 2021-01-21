<?php 

include 'php/connect.php';
session_start();

?>

<br><br><br><br><br>

<center>
    <h1>Login</h1>
        <form method="POST">
            <input type="text" name="username" placeholder="Username"><br>
            <input type="text" name="password" placeholder="Password"><br><br>
            <input type="submit" name="submit" value="Login"><br><br>
            <a href="register.php">Create new account</a>
        </form>
</center>

<?php 
if(isset($_POST['submit'])){
        // STORE INPUT INTO PHP VARIABLE
        $username = $_POST['username'];
        $password = $_POST['password'];
        // DATA QUERY
		$select = $conn->query("SELECT * FROM users WHERE username = '$username' AND password = '$password'");
		$count = $select->num_rows;
		$row = $select->fetch_assoc();
		if($count == 1){
        // REDIRECT INTO MAIN PAGE
        header('Location: index.php');
    }else { ?>
       <script>alert('Invalid username or password!')</script>
<?php }} ?>
