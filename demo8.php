<?php
// Evita que se vean los errores
error_reporting(0);
include("include/jpgraph.php");
include("include/jpgraph_pie.php");
$datos = array(9, 5, 12, 11, 6);
$grafico = new PieGraph(400, 300, "auto");   
$grafico->SetScale("textlin");
$pieplot = new PiePlot($datos);
$pieplot->SetSliceColors(array("red", "green", "blue", "yellow", "white"));
$pieplot->ExplodeSlice(1, 25);
$grafico->Add($pieplot);
$grafico->Stroke();
?>