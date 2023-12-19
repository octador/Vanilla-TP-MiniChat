<?php
include_once('../partials/header.php');
include_once('../partials/footer.php');
?>

     <form action="../process/process-form.php" method="post">

        <label for="pseudo"> Pseudo</label>
        <input type="text" name="pseudo">
        
        <input type="hidden" name="content">
        <input type="hidden" name="created_at">
        <input type="hidden" name="ip_adress">
        <input type="hidden" name="user_id">
        <button type="submit">Envoyer</button>
     </form>
