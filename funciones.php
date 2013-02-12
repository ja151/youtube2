<?php
    function inserta_cola($url,$porcentaje,$ip)	{
        $sql = "INSERT INTO cola (url,porcentaje,ip) values('".$url."','".$porcentaje."','".$ip."')";
        mysql_query($sql, $GLOBALS['cnx']);
    }
    function selecciona_videos($url)	{
        $sql = "SELECT url FROM videos_almacenados WHERE url=".$url;
        $result = mysql_query($sql, $GLOBALS['cnx']);
        return $result;
    }
    function busca_ip($ip)	{
        $sql = "SELECT ip FROM cola WHERE ip='".$ip."'";
        $result = mysql_query($sql, $GLOBALS['cnx']);
        return $result;
    }
    function actualiza_porcentaje($id){
        for ($p = 0; $p <= 10; $p += 5) {
            mysql_query('UPDATE COLA SET PORCENTAJE=' . $p . ' WHERE ID=' . $id);
            sleep(1);
        }
    }
    function selecciona_id($url, $ip)	{
        $sql = "SELECT id FROM cola WHERE url='".$url."' and ip='".$ip."'";
        $result = mysql_query($sql, $GLOBALS['cnx']);
        return $result;
    }
    function selecciona_porcentaje($id)	{
        $sql = "SELECT porcentaje FROM cola WHERE id='" . $id . "'";
        $result = mysql_query($sql, $GLOBALS['cnx']);
        return $result;
        
    }

?>