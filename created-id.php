<?php
require 'vendor/autoload.php';

use Dompdf\Dompdf;


$get_lrn = isset($_GET['lrn']) ? $_GET['lrn'] : '';

$string = file_get_contents("settings.json");
$settings = json_decode($string, true);

$string = file_get_contents("students_data/$get_lrn.json");
$students_data = json_decode($string, true);

$students_grade = $students_data['students_grade']['value'] ? $students_data['students_grade']['value'] : "";
$students_name = $students_data['students_name']['value'] ? $students_data['students_name']['value'] : "";
$filename = implode('-',explode(' ',$students_grade))."-".implode('-',explode(' ',$students_name));
// exit;
//this will be something like: http://www.yourapp.com/templates/log.php
$fileUrl = $settings['base_url']."id-print.php?lrn=$get_lrn";

//get file content after the script is server-side interpreted
$fileContent = file_get_contents( $fileUrl ) ;


$dompdf = new Dompdf();
$dompdf->loadHtml($fileContent);
// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4', 'landscape');
$dompdf->set_option( 'dpi' , '600' );

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser
$dompdf->stream(urlencode($filename).".pdf");
