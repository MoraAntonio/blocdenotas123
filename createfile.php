<?php


mkdir("Archivos");

$file = "archivo.txt";
$ar=fopen($file,"w") or die ("Error al crear archivo");

$asu=$_REQUEST['asunto'];
$des=$_REQUEST['descripcion'];

fwrite($ar, $asu);
fwrite($ar, "\n\n");
fwrite($ar, $des);
fwrite($ar, "\n");
fclose($ar);


header('Content-Description: File Transfer');
header('Content-Disposition: attachment; filename='.basename($file));
header('Expires: 0');
header('Cache-Control: must-revalidate');
header('Pragma: public');
header('Content-Length: ' . filesize($file));
header("Content-Type: text/plain");
readfile($file);


?>