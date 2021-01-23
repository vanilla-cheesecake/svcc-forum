<?php
session_start();
session_unset();
session_destroy();
// unset($_SESSION['firstname']);
// unset($_SESSION['lastname']);
// unset($_SESSION['username']);
// unset($_SESSION['password']);
// unset($_SESSION['success']);

header('Location: ../index.php');
exit();
?>
