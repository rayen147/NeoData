<!-- THIS PAGE LISTS OUT AVAILABLE FLIGHTS -->
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Disponibilité</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <style>
  	.container{
  		margin-top: 5em;
  	}


  </style>
</head>



<?php

include "../../controller/Connection.php";
include "../../controller/plans_objectsC.php";
//error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
$plans=new plans($session_var);
$plans->Select_plans($connection);
if(isset($_GET['DEL'])&&isset($_GET['ID'])){
	$plans->Delte_plan($connection);
}
?> 
	
<body>
    <script>

function sort_elements()
{
 var table=$('#mytable');
 var tbody =$('#table1');

 tbody.find('tr').sort(function(a, b) 
 {
  if($('#name_order').val()=='asc') 
  {
   return $('td:first', a).text().localeCompare($('td:first', b).text());
  }
  else 
  {
   return $('td:first', b).text().localeCompare($('td:first', a).text());
  }
		
 }).appendTo(tbody);
	
 var sort_order=$('#name_order').val();
 if(sort_order=="asc")
 {
  document.getElementById("name_order").value="desc";
 }
 if(sort_order=="desc")
 {
  document.getElementById("name_order").value="asc";
 }
}
</script>
<script>
	function Removeplan(){
		$(".table").on('click','tr',function(e){
    e.preventDefault();
    var id = $(this).attr('id');
	var url = window.location.href+'?DEL=1&ID='+id;
	console.log(url);

  var xhr = new XMLHttpRequest();

  xhr.open('GET', url, true);
  xhr.send('');
    document.getElementById(id).remove();
});


}
	</script>
<div class="container-fluid">
  <div class="jumbotron jumbotron-fluid">
      <center>
        <h2>Disponibilité des trains</h2>       
      </center>
  </div>
</div>
<input type="hidden" id="name_order" value="asc">
<div class="container">
    <div class="jumbotron">
        <table id="mytable" class="table">
        <tr>
    <thead>
      <tr>
	    <th>ID</th>
        <th>départ du train</th>
		<th>Destination du train</th>
        <th>Seats</th>
        <th>Duration</th>
		<th>ArrivalTime</th>
        <th>Stop Overs</th>
		<th>Price</th>
		<th>Train</th>
        <th>action</th>
        

        <tbody id="table1">
      </tr>
    </thead>
    <tbody>
		<?php if(!isset($plans->get_plans($connection)[0]['ID'])){echo '<button type="button" href="/Bookpage.php" class="btn btn-danger" onclick="location.href = `bookpage.php`";>Il semble quaucune offre nest disponible réservez-en une !</button>';}; ?>

    	<?php try{foreach($plans->get_plans($connection) as $row) { ?>
		 <tr id=<?php echo $row['ID']; ?> >
		  <td><?php echo $row['ID']; ?></td>

		  <td><?php echo $row['Start']; ?></td>
		  <td><?php echo $row['Destination']; ?></td>
          <td><?php echo $row['Seats']; ?></td>
          <td><?php echo $row['Duration']; ?></td>
		  <td><?php echo $row['ArrivalTime']; ?></td>
          <td><?php echo $row['Stops']; ?></td>
		  		  <td><?php echo $row['Price']; ?></td>
				  <td><?php echo $row['Train']; ?></td>
          <td>
		  

          <form method = "post" action="bookpage.php">
				<input id="IDOF" name="IDOF" type="hidden" value="<?php echo $row['ID'];?>">
				<input id="source" name="source" type="hidden" value="<?php echo $row['Start'];?>">
        <input id="dest" name="dest" type="hidden" value="<?php echo $row['Destination'];?>">
        
          		<td><button type="submit" class="btn btn-success" name = "clickbtn" id = "btn">réserve</button>
              
          </form>
</td>
      </tr>
		<?php }}catch (Exception $e){} ?>
    </tbody>
  </table>
</div>

</body>


</html>
