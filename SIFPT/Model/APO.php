<?php
	class APO{
		public $CIN=null;
		public $Source=null;
		public $Destination=null;
		public $Train_name=null;
		public $Dat3=null;
		public $N_Jours=null;
		public $Arrival=null;
		public $Price=null;
		public $Points=null;
		public $Delais=null;
		public $Num_abonnement=null;
		public $Start=null;
		public $Train=null;
		public $ArrivalTime=null;
		public $Duration=null;
		public $Stops=null;
		public $Seats=null;
		public $password=null;
		public $TID=null;
		public $ID=null;
		
		function __construct($CIN=null,$TID=null,$ID=null,$Source=null,$Train_name=null,$Dat3=null,$N_Jours=null,$Arrival=null,$Points=null,$Delais=null,$Num_abonnement=null,$Start=null,$Destination=null,$Train=null,$ArrivalTime=null,$Duration=null,$Stops=null,$Price=null,$Seats=null){
			$this->CIN=$CIN;
			$this->ID=$ID;
			$this->Source=$Source;
			$this->Destination=$Destination;
			$this->Train_name=$Train_name;
			$this->Dat3=$Dat3;
			$this->N_Jours=$N_Jours;
			$this->Arrival=$Arrival;
			$this->Price=$Price;
			$this->Points=$Points;
			$this->Delais=$Delais;
			$this->Num_abonnement=$Num_abonnement;
			$this->Start=$Start;
			$this->Train=$Train;
			$this->ArrivalTime=$ArrivalTime;
			$this->Duration=$Duration;
			$this->Stops=$Stops;
			$this->Seats=$Seats;

		}
function getCIN(){return $this->CIN;}
function getSource(){return $this->Source;}
function getDestination(){return $this->Destination;}
function getTrain_name(){return $this->Train_name;}
function getDat3(){return $this->Dat3;}
function getN_Jours(){return $this->N_Jours;}
function getArrival(){return $this->Arrival;}
function getPrice(){return $this->Price;}
function getPoints(){return $this->Points;}
function getDelais(){return $this->Delais;}
function getNum_abonnement(){return $this->Num_abonnement;}
function getStart(){return $this->Start;}
function getTrain(){return $this->Train;}
function getArrivalTime(){return $this->ArrivalTime;}
function getDuration(){return $this->Duration;}
function getStops(){return $this->Stops;}
function getSeats(){return $this->Seats;}
function setCIN($CIN){ $this->CIN=$CIN;}
function setSource($Source){ $this->Source=$Source;}
function setDestination($Destination){ $this->Destination=$Destination;}
function setTrain_name($Train_name){ $this->Train_name=$Train_name;}
function setDat3($Dat3){ $this->Dat3=$Dat3;}
function setN_Jours($N_Jours){ $this->N_Jours=$N_Jours;}
function setArrival($Arrival){ $this->Arrival=$Arrival;}
function setPrice($Price){ $this->Price=$Price;}
function setPoints($Points){ $this->Points=$Points;}
function setDelais($Delais){ $this->Delais=$Delais;}
function setNum_abonnement($Num_abonnement){ $this->Num_abonnement=$Num_abonnement;}
function setStart($Start){ $this->Start=$Start;}
function setTrain($Train){ $this->Train=$Train;}
function setArrivalTime($ArrivalTime){ $this->ArrivalTime=$ArrivalTime;}
function setDuration($Duration){ $this->Duration=$Duration;}
function setStops($Stops){ $this->Stops=$Stops;}
function setSeats($Seats){ $this->Seats=$Seats;}
function setID($ID){ $this->ID=$ID;}
function getID(){return $this->ID;}
function setTID($TID){ $this->TID=$TID;}
function getTID(){return $this->TID;}
	}


?>