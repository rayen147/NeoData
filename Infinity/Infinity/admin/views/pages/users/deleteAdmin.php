<?PHP
include "../../../controller/admin.php";
$admin=new adminC();
if (isset($_POST["id"])){
	$admin->supprimerAdmin($_POST["id"]);
	
	header('Location: ./admin.php');

}

?>

