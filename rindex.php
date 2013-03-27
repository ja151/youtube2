<?php
    include("header.php");
    function isValidYoutubeURL($url) { // Comprueba si es una url de youtube
        if ((strstr($url,"youtube.com/watch?v=")) && (strlen(strstr($url,"watch?v=")) == "19")) {
            return true;
        } else {
            return false;
        }
    }
    $url=$_POST['idUrl'];
    $urlbuena=$_POST['url'];
    $ip=$_SERVER['REMOTE_ADDR'];
    $porcentaje = '0%';
    if (isValidYoutubeURL($urlbuena)) {
        inserta_cola($url, $porcentaje, $ip);
        $resultado1 = selecciona_id($url, $ip);
        if($fila = mysql_fetch_array($resultado1)) {
            echo $fila['id'];
        }
    } else {
        echo "No existe";
    }
?>
