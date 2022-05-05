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
            $req = "UPDATE client SET isVerified=1 where id = '$user->id'";
            $db->exec($req);
            header('location:../views/index.php');
         }else{
            echo "<script>
            alert('Invalid link');
            window.location.href='../views/index.php';
            </script>";         }
    } catch (Exception $e){
        echo 'Erreur: '.$e->getMessage();
    }
}
 ?>