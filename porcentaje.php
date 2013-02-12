<?php
        $resultado1 = selecciona_porcentaje($id);
        if($res1 = mysql_fetch_array($resultado1)){
            echo $res1['porcentaje'];
        }
?>