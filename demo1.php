<?php
// Evita que se vean los errores
error_reporting(0);
include("include/jpgraph.php");
include("include/jpgraph_line.php");
$datos = array(9, 5, 12, 11, 6, 10, 9, 11, 10, 4, 7, 3);
$grafico = new Graph(400, 300, "auto");   
$grafico->SetScale("textlin");
$lineplot = new LinePlot($datos);
$lineplot->SetColor("red");
$grafico->Add($lineplot);
$grafico->Stroke();
?>