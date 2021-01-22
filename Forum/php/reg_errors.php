<?php 
if(count($errors) > 0): 
    foreach($errors as $error): ?>
        <p><?php echo $error; ?></p>
    <?php endforeach; 
    endif;  
?>
    
