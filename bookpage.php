<!-- THIS PAGE CONFIRMS THE BOOKING AND SENDS USER DETAILS TO CONFIRM.PHP -->
<?php
include "../../controller/Connection.php";
include "../../controller/OffreC.php";
include "../../controller/plans_objectsC.php";
// Start the session
$Offre = new Offre($session_var);
$plans = new plans($session_var);
$session_var->setCIN("123456789");

 if(isset($_POST['clickbtn'])){
	      if(isset($_POST['IDOF'])){
		 if(is_numeric($_POST['IDOF'])){
      $row=$plans->get_single_plan($connection);
	  
	  
		$session_var->setPrice($row["Price"]);
			 
		 }
	 }
	 


 }
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Confirmation de réservation</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- BOOTSTRAP HEADERS-->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!-- STLYE -->
  <style type="text/css">
  .form_edit{
    width: 900px;
    margin: auto;
  }  
 </style>
</head>
<body>
	<script type = "text/javascript" >
function Dateconstruct(){
	var prix = <?php echo $session_var->getPrice(); ?>;
	var date1 = new Date($("input[name=departure]").val());
	var date2 = new Date($("input[name=arrival]").val());
	// To calculate the time difference of two dates
var Difference_In_Time = Math.round(date2.getTime() - date1.getTime());
  
// To calculate the no. of days between two dates
var Difference_In_Days = Difference_In_Time / (1000 * 3600 * 24);
  
//To display the final no. of days (result)
if(Difference_In_Days >= 0){
	$("p[name=prixx]").text("Number of days "+ Difference_In_Days);
	$("p[name=NOP]").text("Per day "+ prix);
	$("input[name=prodId]").text(<?php if(!empty($session_var->getCIN()) and $session_var->getCIN()!==null){echo $Offre->calc_prop($connection);}else{echo 1;} ?>*prix*Difference_In_Days);
	$("input[name=prodId]").val(prix*Difference_In_Days*<?php if(!empty($session_var->getCIN()) and $session_var->getCIN()!==null){echo $Offre->calc_prop($connection);}else{echo 1;} ?>);
	$("input[name=n_days]").val(Difference_In_Days);
	$("p[name=PTT]").text("Prix d'abonnement "+ prix*<?php if(!empty($session_var->getCIN()) and $session_var->getCIN()!==null){echo $Offre->calc_prop($connection)/100;}else{echo 1;} ?>*Difference_In_Days +" TND");
  $("p[name=remise]").text(<?php if(!empty($session_var->getCIN()) and $session_var->getCIN()!==null){echo '"';echo $Offre->calc_prop($connection);echo"%";echo '"';}else{echo "'0%'";} ?>);
  $("input[name=remise]").val(<?php if(!empty($session_var->getCIN()) and $session_var->getCIN()!==null){echo $Offre->calc_prop($connection);}else{echo 1;} ?>);
  $("input[name=disscount]").val(<?php if(!empty($session_var->getCIN()) and $session_var->getCIN()!==null){echo $Offre->calc_prop($connection);}else{echo 1;} ?>);
  
}
	}
	

</script>
<!-- CONFIRMATION FORM -->
<div class="container form_edit" >
  <h2>Confirmez votre réservation</h2>
  <form action="confirm.php" method="post">
    <div class="form-group">
    
    <div class="form-group">
      <label>CIN</label>
      <input type="name" class="form-control"  onkeypress="Dateconstruct()" placeholder="CIN" maxlength="8" value="<?php if(isset($CIN)){echo $CIN;}?>" name="CIN" required = "true">
    </div>

    <div class="form-group">
      <label>from</label>
      <input type="name" onkeypress="Dateconstruct()" class="form-control" placeholder="Arré" value="<?php if(isset($_POST['source'])){echo $_POST['source'];} ?>" name="source">
    </div>
    <div class="form-group">
      <label>to</label>
      <input type="name" class="form-control" onkeypress="Dateconstruct()" placeholder="Destination" value ="<?php  if(isset($_POST['dest'])){echo $_POST['dest'];} ?>" name = "dest">
    </div>

    <div class="form-group">
      <label>starting date</label>
      <input type="name" class="form-control" onkeypress="Dateconstruct()" placeholder="Mois/Jour/Annee " value ="<?php  if(isset($departure)){echo  $departure;} ?>" name ="departure" >
    </div>
    <div class="form-group">
      <label>valid until</label>
      <input type="name" class="form-control" onkeypress="Dateconstruct()" placeholder="Mois/Jour/Annee" value ="<?php if(isset($arrival)){echo  $arrival;} ?>" name = "arrival">
    </div> 
	<input id="TID" name="TID" type="hidden" value="<?php if(isset($TID)){echo  $TID;} ?>">
    <input id="prodId" name="prodId" type="hidden" value="">
	<input id="n_days" name="n_days" type="hidden" value="">
	<p name="prixx">Details</p>
  <p name="remise">Dicount</p>
  <input name="disscount" type="hidden" value=""></p>
	<p name="NOP"></p>
	<p name="PTT"></p>
    <button type="submit" class="btn btn-success">Confirm</button> 
  </form>
</div>
</body>
</html>