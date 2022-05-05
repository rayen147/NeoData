<?php
include "../model/client.php";
include "../controller/client.php";
if(isset($_POST['email'])){
    $email = $_POST['email'];
    $clientC = new clientC();
    $clientC->send_reset_pass_link($email);
    echo "<script>
    alert('an email has been sent for reset');
    window.location.href='../views/index.php';
    </script>";
       
    }else{
        echo "<script>
        alert('Please enter a valid email');
        window.location.href='../views/index.php';
        </script>";
    }


?>