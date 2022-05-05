<?php
include("OffreC.php");
include "../Controller/Connection.php";
include "../Controller/subscribesC.php";
$session_var->setCIN("01145455");
$Offre = new Offre($session_var);
echo $Offre->calc_points($connection);
?>