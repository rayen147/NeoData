<?php
include "../../../model/admin.php";
include "../../../controller/admin.php";

if(isset($_POST['nom']) and isset($_POST['prenom']) and isset($_POST['email']) and isset($_POST['password']) and isset($_POST['h_travail']) and isset($_POST['salaire']) and isset($_POST['tache'])) 
{
    $admin=new admin($_POST['nom'],$_POST['prenom'],$_POST['email'],$_POST['password'],$_POST['h_travail'],$_POST['salaire'],$_POST['tache']);
    $adminC= new adminC();
    $adminC->addAdmin($admin);
header('Location: admin.php');
}


	

?>
