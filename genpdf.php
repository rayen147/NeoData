<?php
use Dompdf\Dompdf ;
use Dompdf\Options ;
require_once 'dompdf/autoload.inc.php';

include "../controller/ticketc.php";
$ticket1c = new ticketc();
$cmd1 = new ticketc;

if (!isset($_POST['search']))
    $listeEmployes = $ticket1c->afficherticket();
ob_start()  ;
require_once 'pdf_table.php' ;

$html = ob_get_clean() ;

ob_end_clean() ;


$dompdf = new Dompdf()  ;

$options = new Options() ;

$options->set('defaultdont','courrier') ;

$dompdf->loadHtml($html);

$dompdf->render();


$dompdf->stream('PDF TICKET');





