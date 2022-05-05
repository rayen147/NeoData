<?php
require_once('PD0');
require_once('Model/APO.php');
$session_var=new APO();
if(isset($_POST['CIN'])){$session_var->setCIN($_POST['CIN']);$CIN = $_POST['CIN'];}
if(isset($_POST['dest'])){$session_var->setDestination($_POST['dest']);$destination = $_POST['dest'];}
if(isset($_POST['arrival'])){$session_var->setArrival($_POST['arrival']);$arrival=$_POST['arrival'];}
if(isset($_POST['prodId'])){$session_var->setPrice($_POST['prodId']);$price = $_POST['prodId'];}
if(isset($_POST['Source'])){$session_var->setSource($_POST['Source']);$source = $_POST['Source'];}else{$session_var->setSource("Tous");}
if(isset($_POST['Destination'])){$dest = $_POST['Destination'];}
if(isset($_POST['dest'])){$session_var->setDestination($_POST['dest']);$dest=$_POST['dest'];}
if(isset($_POST['Date'])){$session_var->setDat3($_POST['Date']);$date = $_POST['Date'];}
if(isset($_POST['n_days'])){$session_var->setN_Jours($_POST['n_days']);$departure=$_POST['n_days'];}
if(isset($_POST['n_days'])){$n_days=$_POST['n_days'];}
if(isset($_POST['arrival'])){$arrival=$_POST['arrival'];}
if(isset($_POST['Train_name'])){$session_var->setTrain_name($_POST['Train_name']);$source = $_POST['Train_name'];}
if(isset($_POST['Train'])){$session_var->setTrain($_POST['Train']);$Train = $_POST['Train'];}
if(isset($_POST['arrival'])){$session_var->setArrival($_POST['arrival']);$source = $_POST['arrival'];}
if(isset($_POST['n_days'])){$session_var->setDelais($_POST['n_days']);$n_days = $_POST['arrival'];}
if(isset($_POST['Price'])){$session_var->setPrice($_POST['Price']);$Price = $_POST['Price'];}

if(isset($_POST['TID'])){$TID = $_POST['TID'];}
if(isset($_POST['source'])){$source = $_POST['source'];}else{$source="Tous";}
if(isset($_POST['Destination'])){$session_var->setDestination($_POST['Destination']);$dest = $_POST['Destination'];}else{$dest="Tous";$session_var->setDestination($dest);}
if(isset($_POST['Date'])){$date = $_POST['Date'];}
if(isset($_POST['no_of_passengers'])){$No_of_Passengers = $_POST['no_of_passengers'];}
if(isset($_POST['Duration'])){$session_var->setDuration($_POST['Duration']);$Duration=$_POST['Duration'];}
if(isset($_POST['Stops'])){$session_var->setStops($_POST['Stops']);$Stops=$_POST['Stops'];}
if(isset($_POST['Destination'])){ $session_var->setDestination($_POST['Destination']);$Destination=$_POST['Destination'];}
if(isset($_POST['TID'])){$session_var->setTID($_POST['TID']);$ID=$_POST['TID'];}else{$session_var->setTID(null);}
if(isset($_POST['ID'])){$session_var->setID($_POST['ID']);$ID=$_POST['ID'];}else{$session_var->setID(null);}
if(isset($_GET['ID'])){$session_var->setID($_GET['ID']);$ID=$_GET['ID'];}else{$session_var->setID(null);}
if(isset($_POST['Start'])){$session_var->setStart($_POST['Start']);$Start=$_POST['Start'];}
if(isset($_POST['Seats'])){$session_var->setSeats($_POST['Seats']);$Seats=$_POST['Seats'];}
if(isset($_POST['IDOF'])){$session_var->setID($_POST['IDOF']);$IDOF=$_POST['IDOF'];}
$PATH=dirname(__FILE__);
$host="localhost";
$port=3306;
$password="";
$prefix="";
$user="root";
$db="snft";
?>