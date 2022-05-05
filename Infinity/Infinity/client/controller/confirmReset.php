<?php
include "../../config.php";


 $password = $_POST['password'];
 $confirm = $_POST['confirm'];
 
 if ($password === $confirm) {
     $db = config::getConnexion();
     $token = $_GET['token'];
     $email = $_GET['email'];
     
    $req = "SELECT * from client where email='$email'";

    try {
        $data = $db->query($req);
        
        $user = $data->fetchObject();
         if($user->token == $token){
            $req = "UPDATE `client` SET `pwd` = '$password' WHERE `id` = $user->id";
            print_r($req);
            $db->exec($req);
            echo "<script>
            alert('password reset successfully');
            window.location.href='../views/index.php';
            </script>";     
            // header('location:../views/index.php');
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