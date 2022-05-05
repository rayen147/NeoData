<!-- THIS PAGE DISPLAYS THE LIST OF ALL BOOKINGS DONE SO FAR -->
<?php
include "../Controller/Connection.php";
include "../Controller/subscribesC.php";
include "../Controller/OffreC.php";
$offre = new offre($session_var);


if(isset($_GET['DEL'])&&isset($_GET['ID'])){
	$offre->supprimer_offre($connection);
}
if((!isset($_GET['DEL']))&&isset($_GET['ID'])){
	unset($row);
	$row=Array($offre->affiche_offre($connection));
}else{
	$row=$offre->get_all_offres($connection); 
}
?>

<html lang="en">
<head>
  <title>Offres listing</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap Headers -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
  <div class="jumbotron">
      <center>
        <h2>Merci d'avoir réservé</h2>      
        <p><a href="bookpage.php">Cliquez ici </a>réserver un abonnent</p>  
        <p>Vous trouverez ci-dessous une liste de toutes les offres effectuées jusqu'à présent</p>
      </center>
  </div>
</div>
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

	function Removeitem(){
		$(".table").on('click','tr',function(e){
    e.preventDefault();
    var id = $(this).attr('id');
	var url = window.location.href+'?DEL=1&ID='+id; // une page locale
	console.log(url);

  var xhr = new XMLHttpRequest();

  xhr.open('GET', url, true);
  xhr.send('');
    document.getElementById(id).remove();
});

}

	</script>
	<script>
	$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#table1 tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
	</script>
  <input type="hidden" id="name_order" value="asc">
<div class="container">
    <div class="jumbotron">
        <table tid="mytable" class="table">
        <tr>
				<th>Num</th>
                <th>Points</th>
                <th>CIN</th>
                <th>Delais</th>
				<th><div class="input-group rounded">
  <input type="search" id="myInput" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
  <span class="input-group-text border-0" id="search-addon">
    <i class="fas fa-search"></i>
  </span>
</div>
</th>
                <th><svg xmlns="http://www.w3.org/2000/svg" onclick=sort_elements() width="16" height="16" fill="currentColor" class="bi bi-sort-up" viewBox="0 0 16 16">
  <path d="M3.5 12.5a.5.5 0 0 1-1 0V3.707L1.354 4.854a.5.5 0 1 1-.708-.708l2-1.999.007-.007a.498.498 0 0 1 .7.006l2 2a.5.5 0 1 1-.707.708L3.5 3.707V12.5zm3.5-9a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zM7.5 6a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1h-5zm0 3a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1h-3zm0 3a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1h-1z"/>
</svg></th>
            </tr>
        <tbody id="table1">
 <!-- Loop to print details of booked tickets and passengers -->           
 <?php foreach($row as $s_row) { ?>
      <tr id=<?php echo $s_row['Num_abonnement']; ?> >
		  <td><?php echo $s_row['Num_abonnement']; ?></td>
		  <td><?php echo $s_row['Points']; ?></td>
          <td><?php echo $s_row['CIN']; ?></td>
          <td><?php echo $s_row['Delais']; ?></td>
		  
		  <form action="bookpage.php" method="post">
		  <input id="ID" name="ID" type="hidden" value="<?php echo $s_row['Num_abonnement']; ?>">
		  <input id="Points" name="Points" type="hidden" value="<?php echo $s_row['Points']; ?>">
		  <input id="CIN" name="CIN" type="hidden" value="<?php echo $s_row['CIN']; ?>">
		  
		   <input id="Delais" name="Delais" type="hidden" value="<?php echo $s_row['Delais']; ?>">
		 
		  <div class="btn-group" role="group" aria-label="Basic example">
		  <td><button type="button" onclick="Removeitem()" class="btn btn-danger">Supprimer</button>
		  </div>
		  </form>
		  </td>
      </tr>
  <?php } ?>
      </tbody>
        </table>
    </div>
</div>

</body>
</html>