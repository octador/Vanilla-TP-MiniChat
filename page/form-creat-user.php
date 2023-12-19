<?php
include_once('../partials/header.php');
include_once('../partials/footer.php');
?>
<div class="container">
   <div class="row">
      <div class="d-flex justify-content-center ">
         <form action="../process/process-form.php" method="post" >
   
           <label for="pseudo" class="creatuser"> Pseudo</label>
           <input type="text" name="pseudo">
           
           <input type="hidden" name="content">
           <input type="hidden" name="created_at">
           <input type="hidden" name="ip_adress">
           <input type="hidden" name="user_id">
           <button type="submit">Envoyer</button>
        </form>
      </div>
   </div>
</div>
     
