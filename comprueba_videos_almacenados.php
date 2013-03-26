<?php
    include("header.php");

    $url = $_POST['url'];
    $resultado = busca_videos_almacenados($url);
    $filas = mysql_num_rows($resultado);
    if($filas){
        echo "1";
    }else{
        echo "2";
    }
?>
