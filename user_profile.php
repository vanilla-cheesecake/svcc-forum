<?php include 'page_header.php'; ?>
<center>
<h1>My Profile</h1>
<br>
<form>
    <label for="name">NAME:</label>
    <input type="text" id="name" value='<?php echo strtoupper($_SESSION['name']);?>'><br><br>
    <label for="name">LASTNAME:</label>
    <input type="text" id="name" value='<?php echo strtoupper($_SESSION['lastname']);?>'><br><br>
    <label for="name">EMAIL:</label>
    <input type="text" id="name" value='<?php echo strtoupper($_SESSION['email']);?>'>

</form>
</center>