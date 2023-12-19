<?php
require_once('../Vanilla-TP-MiniChat/utilis/connect.php');
include_once('../Vanilla-TP-MiniChat/partials/header.php');
include_once('../Vanilla-TP-MiniChat/partials/footer.php');
include_once('./process/process-array.php');

foreach ($jointures as $jointure) {
   echo '<p>' . $jointure['pseudo'] .
    $jointure['content'].
    $jointure['created_at'].
    $jointure['user_id'] 
  . '</p>';
}
?>
<main>
    <div class="justify-content-center">
        <form action="./process/process-form.php" method="post">
    
        <label for="pseudo"> Pseudo</label>
        <input type="text" name="pseudo">
    
        <label for="message"> message</label>
        <input type="text" name="content">
    
        <input type="hidden" name="created_at">
        <input type="hidden" name="ip_adress">
        <input type="hidden" name="user_id">
    
        <button type="submit"> Envoyer</button>
    </form>
</div>
</main>



