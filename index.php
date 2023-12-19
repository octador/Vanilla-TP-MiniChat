<?php

require_once('../Vanilla-TP-MiniChat/utilis/connect.php');
include_once('../Vanilla-TP-MiniChat/partials/header.php');
include_once('../Vanilla-TP-MiniChat/partials/footer.php');
include_once('./process/process-array.php');

?>
<div class="container-md d-flex justify-content-center mt-5 border border-1 p-0 w-50 ">
  <div class="row ">
    

      <p class="text-center ">
        <?php
        foreach ($jointures as $jointure) {
          echo $jointure['content'] . ' ' .
            $jointure['pseudo'] . ' ' .
            $jointure['created_at'] . ' ' .
            $jointure['user_id'] . '<br>';
        }
        ?>
      </p>
    
  </div>
</div>

<section class="fixed-bottom p-5">
  <div class="container-md ">
    <div class="d-flex justify-content-center ">

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
  </div>

</section>