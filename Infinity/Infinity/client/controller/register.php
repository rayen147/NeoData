<?php
include "../model/client.php";
include "../controller/client.php";
if(isset($_POST['cin']) and isset($_POST['name']) and isset($_POST['surname']) and isset($_POST['email']) and isset($_POST['password']) and isset($_POST['phone']) ) 
{
    $client=new client($_POST['cin'], $_POST['name'],$_POST['surname'],$_POST['email'],$_POST['password'],$_POST['phone']);
    $clientC= new clientC();
    $clientC->register($client);
    echo "<script>
    alert('An email has been sent for verification');
    window.location.href='../views/index.php';
    </script>"; 

}

	

?>
