<?php
    //email and password are not empty
    if(isset($_POST['email']) && isset($_POST['password']) && $_POST['g-recaptcha-response'] !== ""){
        session_start();
    $mail=$_POST['email'];
    $pass=$_POST['password'];


    $conn=new PDO('mysql:host=localhost;dbname=railway_db' , 'root' , '');

    $adminReq = $conn -> prepare("SELECT * FROM `admin` WHERE `email`=? AND `pwd`=?");
    $adminReq -> execute([$mail, $pass]);

    $userReq = $conn -> prepare("SELECT * FROM `client` WHERE `email`=? AND `pwd`=?");
    $userReq -> execute([$mail, $pass]);

    $userCount = $userReq -> rowCount();
    $adminCount = $adminReq -> rowCount();
    
    //check if user exist in admin
    if($adminCount>0)
    {
        $adminRes = $adminReq->fetch();
        //store user informations in session
        $_SESSION["id"]=$adminRes['id'];
        $_SESSION["prenom"]=$adminRes['prenom'];
        $_SESSION["autorisation"]="admin";
        header('Location: /infinity/infinity/admin/views/pages/users/admin.php');
    }

    //check if user exist in client
    else if($userCount>0)
    {
        $userRes = $userReq->fetch();
        //store user informations in session
        if($userRes['isVerified'] == 1) {
            $_SESSION["cin"]=$userRes['cin'];
        $_SESSION["prenom"]=$userRes['prenom'];
        $_SESSION["autorisation"]="client";
        header('Location: ../views/index.php');
        } else {
            echo "<script>
        alert('Please verify your account');
        window.location.href='../views/index.php';
        </script>";
        }
    }
    //user doesn't exist
    else {
        echo "<script>
        alert('Erreur!!');
        window.location.href='../views/index.php';
        </script>";

    }
    


} else {
    echo "recapthca error";
}
?>