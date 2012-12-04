<?php
// Evita que se vean los errores
error_reporting(0);
include("include/jpgraph.php");
include("include/jpgraph_bar.php");
include("include/jpgraph_line.php");
$datos1 = array(9, 5, 12, 11, 6, 10, 9, 11, 10, 4, 7, 3);
$datos2 = array(5, 7, 1, 11, 13, 4, 9, 6, 12, 7, 1, 4);
$grafico = new Graph(400, 300, "auto");   
$grafico->SetScale("textlin");
$grafico->title->Set("Ejemplo JpGraph");
$grafico->xaxis->title->Set("Eje X");
$grafico->yaxis->title->Set("Eje Y");
$barplot1 = new BarPlot($datos1);
$barplot1->SetColor("red");
// Un gradiente Horizontal de rojo a azul
$barplot1->SetFillGradient("red", "blue", GRAD_HOR);
// 25 pixeles de ancho para cada barra
$barplot1->SetWidth(25);
$lineplot = new LinePlot($datos2);
$lineplot->SetColor("green");
$lineplot->SetWeight(2);
$grafico->Add($barplot1);
$grafico->Add($lineplot);
$grafico->Stroke();
?>