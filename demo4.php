<?php
// Evita que se vean los errores
error_reporting(0);
include("include/jpgraph.php");
include("include/jpgraph_bar.php");
$datos1 = array(9, 5, 12, 11, 6, 10, 9, 11, 10, 4, 7, 3);
$grafico = new Graph(400, 300, "auto");   
$grafico->SetScale("textlin");
$grafico->title->Set("Ejemplo JpGraph");
$grafico->xaxis->title->Set("Eje X");
$grafico->yaxis->title->Set("Eje Y");
$barplot1 = new BarPlot($datos1);
$barplot1->SetColor("red");
$barplot1->SetFillColor("red");
$grafico->Add($barplot1);
$grafico->Stroke();
?>