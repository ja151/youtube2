<?php
    include("header.php");
    set_time_limit(200);
    $id=$_POST['id'];
    for ($p = 5; $p <= 100; $p += 5) {
        mysql_query('UPDATE COLA SET PORCENTAJE=' . $p . ' WHERE ID='.$id);
        sleep(5);
    }        
?>
