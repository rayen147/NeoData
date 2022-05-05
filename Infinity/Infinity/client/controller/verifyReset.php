<?php
include "../../config.php";

if (isset($_GET['token']) && isset($_GET['email'])) {
    $db = config::getConnexion();
    $token = $_GET['token'];
    $email = $_GET['email'];


    $req = "SELECT * from client where email='$email'";

    try {
        $data = $db->query($req);
        
        $user = $data->fetchObject();
         if($user->token == $token){
             echo "<script>
             window.location.href='../views/reset.php?token=$token&email=$email';
             </script>";
             
         }else{
            echo "<script>
            alert('Invalid link');
            window.location.href='../views/index.php';
            </script>";
         }
    } catch (Exception $e){
        echo 'Erreur: '.$e->getMessage();
    }
}
 ?>