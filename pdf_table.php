<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>LES TICKET</title>
    <style>
        table{
            width: 100% ;
        }
    </style>


</head>
<body>
<table id="bootstrap-data-table-export" class="table table-striped table-bordered">
    <h1> Gestion ticket </h1>
    <thead>
    <tr>
        <th>Trajet</th>
        <th>Prix</th>
        <th>Class</th>
        <th>date</th>


    </tr>
    </thead>
    <tbody>


    <?PHP

    foreach($listeEmployes as $row){
        ?>
        <tr>

            <td><?PHP echo $row['id_trajet']; ?></td>
            <td><?PHP echo $row['prix']; ?></td>
            <td><?PHP echo $row['classT']; ?></td>
            <td><?PHP echo $row['date']; ?></td>


        </tr>

        <?PHP
    }

    ?>


    </tbody>
</body>
</html>