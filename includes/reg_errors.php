<?php 
if(count($errors) > 0): 
    foreach($errors as $error): ?>
    
  <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
  <span class="block sm:inline"><?php  echo $error; ?></span>
  </div>

    <?php endforeach; 
    endif;  
?>
    
