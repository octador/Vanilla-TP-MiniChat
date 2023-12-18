<?php
require_once('../Vanilla-TP-MiniChat/utilis/connect.php');
include_once('../Vanilla-TP-MiniChat/partials/header.php');
include_once('../Vanilla-TP-MiniChat/partials/footer.php');
// session_start();


$sql = "SELECT pseudo,id FROM user ";
    $request = $db->query($sql);
    $pseudo = $request->fetchall();

    var_dump($pseudo);



$request = $db->query('SELECT * FROM message JOIN user ON message.user_id = user.id');
$jointure = $request-> fetchAll();

var_dump($jointure);

?>

<h1>Welcome <?php ?></h1>


<a href="./page/form-creat-user.php">creat pseudo</a>

<form action="./process/process-form.php" method="get">
    <label for="pseudo"> Pseudo</label>
    <input type="text" name="pseudo">
    <label for="message"> message</label>
    <input type="text" name="content">
    <button type="submit"> Envoyer</button>
</form>