<?php include 'includes/handler.php'; 
include "includes/header.php"; // WEBPAGE HEADER

// If user not logged in, they cannot access the page
if(empty($_SESSION['username'])){
    echo "Please log in first";
    header('Location: login.php');
}
?>

<script src="js/util.js"></script>

<center>

<br>
<br>
<br>
    <?php if(isset($_SESSION['success'])): ?>
    <strong class="text-5xl"><?php echo "Welcome " . $_SESSION['name'] . "!"; 
    unset($_SESSION['success']); ?></strong>
    <?php endif; ?>
</center>



<?php 
// echo file_get_contents("html/footer.php"); // WEBPAGE FOOTER
?>
