<?php

// var_dump($_POST['pseudo'])
require_once('../utilis/connect.php');
// session_start();

// if (isset($_POST['pseudo']) && !empty($_POST['pseudo'])) {
//     require_once('../utilis/connect.php');
//     $pseudoName = $_POST['pseudo'];
//     // var_dump($pseudoName);
//     // die();
//     $sql = "SELECT pseudo FROM user WHERE pseudo = '$pseudoName'";
//     $request = $db->query($sql);
//     $pseudo = $request->fetch();
    
// } 


// si pseudo existe pas j'en crée un et je retourne sur index
if (!$pseudo && isset($_POST['pseudo']) && !empty($_POST['pseudo'])) {
    require_once('../utilis/connect.php');
    $sql = 'INSERT INTO user (pseudo) VALUES (:pseudo)';
    $request = $db->prepare($sql);
    $request->execute([
        'pseudo' => $_POST['pseudo']
    ]);
    // si il existe je retourne sur index
}

header('Location: ../index.php');


?>




// if (isset($_POST) && !empty($_POST)) {

// echo ($_POST['pseudo']);

// $_SERVER['HTTP_HOST'];

// $dt = time();

// echo $date = date('d/m/Y H:i:s',$dt);
// // var_dump($dt);

// $sql = 'INSERT INTO user (pseudo) VALUES (:pseudo)';
// $request = $db->prepare($sql);

// $newUser = $request->execute([
// 'pseudo' => $_POST['pseudo']
// ]);

// // var_dump($newUser);
// }