<?php
$link = mysqli_connect("localhost", "root", "", "projetweb1"); 
$id=$_GET['id'];
$nom=$_GET['nom'];
$prenom=$_GET['prenom'];
$email=$_GET['email'];
$num=$_GET['num'];
$img=$_GET['img'];
$salaire=$_GET['salaire'];


echo($id);
if($link === false){ 
    die("ERROR: Could not connect. "  
                . mysqli_connect_error());
} 
  
$sql = "UPDATE chauffeur SET nom='$nom',prenom='$prenom',email='$email',num='$num',img='$img',salaire='$salaire'  WHERE id='$id' "; 
if(mysqli_query($link, $sql)){ 
    header('location:affichageChauffeur.php');
} else { 
    echo "ERROR: Could not able to execute $sql. "  
                            . mysqli_error($link); 
}  
mysqli_close($link);  