<?php
    /*include("header.php");
    $url = $_POST['url'];
    $resultado = busca_videos_almacenados($url);
    $filas = mysql_num_rows($resultado);*/
    $fichero = 'mono.png'; //reemplazar esto por $filas['url'] para que sea del archivo almacenado en la bd
    header('Content-Description: File Transfer');
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename='.basename($fichero));
    header('Cache-Control: must-revalidate');
    header('Content-Length: ' . filesize($fichero));
    readfile($fichero);
?>
