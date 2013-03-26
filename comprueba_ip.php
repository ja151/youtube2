<?php
    include("header.php");
    $ip=$_SERVER['REMOTE_ADDR'];
    $resultado = comprueba_ip($ip);
    $filas = mysql_num_rows($resultado);
    if($filas){
        echo "1";
    }else{
        echo "2";
    }
    
?>
