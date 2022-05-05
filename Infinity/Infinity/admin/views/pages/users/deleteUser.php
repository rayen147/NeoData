<?PHP
include "../../../controller/client.php";
$client=new clientC();
if (isset($_POST["id"])){
	$client->supprimerClient($_POST["id"]);
	
	header('Location: ./user.php');

}

?>

