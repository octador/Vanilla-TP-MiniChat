<?php
require_once('../utilis/connect.php');
include_once('../partials/header.php');
include_once('../partials/footer.php');
?>

     <form action="../process/process-form.php" method="post">
        <label for="pseudo"> Pseudo</label>
        <input type="text" name="pseudo">
        <button type="submit">Envoyer</button>
     </form>
