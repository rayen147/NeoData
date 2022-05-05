<?php
include "../../config.php";

$db = config::getConnexion();

// save the keywords from the url
$k = trim($_GET['search']);
// create a base query and words string
$query_string = "SELECT * FROM client WHERE ";
$keywords = explode(' ', $k);
foreach ($keywords as $word) {
    // $query_string .= " prenom_u LIKE '%" . $word . "%' OR nom_u LIKE '%" . $word . "%' OR ";

    $query_string .= " id LIKE % :word % OR ";
    // $query_string .= " id LIKE  '% :word %' OR prenom like  '%:word%' OR nom like  '%:word%' OR email like  '%:word%' OR h_travail like  '%:word%' OR salaire like '%:word%' OR tache like  '%:word%' OR ";
}
$query_string = substr($query_string, 0, strlen($query_string) - 3);
echo $query_string;
$req = $db -> prepare($query_string);
$req->bindValue(':word', $word);


// $req->bindValue(':id',$id);

$req->setFetchMode(PDO::FETCH_ASSOC);
$req -> execute() ;

$res = $req->fetch();

echo $res;


