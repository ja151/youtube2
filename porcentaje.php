<?php
        include("header.php");       
        $porcentaje = $_POST['porcentaje'];        
        $resultado1 = selecciona_porcentaje($porcentaje);
        if($res1 = mysql_fetch_array($resultado1)){
            echo $res1['porcentaje'];
        }       
?>