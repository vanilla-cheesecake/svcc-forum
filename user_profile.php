<?php include 'page_header.php'; ?>
<center>

<br>


 <div class="bg-modal">
        <div class="modal-content">
            <div class="close">+</div>
<form action="">
    <label for="name">NAME:</label>
    <input type="text" id="name" value='<?php echo strtoupper($_SESSION['name']);?>'><br><br>
    <label for="name">LASTNAME:</label>
    <input type="text" id="name" value='<?php echo strtoupper($_SESSION['lastname']);?>'><br><br>
    <label for="name">EMAIL:</label>
    <input type="text" id="name" value='<?php echo strtoupper($_SESSION['email']);?>'>

</form>
</div>
</div>


</center>
