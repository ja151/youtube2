<?php
    include("header.php");
    include("porcentaje.php");
    //include("porcentaje.php");
    $ip=$_SERVER['REMOTE_ADDR'];
    $porcentaje = '0%';
    $url=$_POST['url'];
    inserta_cola($url, $porcentaje, $ip);
    $resultado1 = selecciona_id($url, $ip);
    if($fila = mysql_fetch_array($resultado1)) {
        for ($p = 0; $p <= 10; $p += 5) {
            mysql_query('UPDATE COLA SET PORCENTAJE=' . $p . ' WHERE ID='.$fila['id']);
            sleep(5);
        }
    }    
?>
