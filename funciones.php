<?php
    function inserta_cola($url,$porcentaje,$ip)	{
        $sql = sprintf("INSERT INTO cola (url,porcentaje,ip) values('%s','%s','%s')", mysql_real_escape_string($url), mysql_real_escape_string($porcentaje), mysql_real_escape_string($ip));
        $sql = htmlentities($sql);
        mysql_query($sql, $GLOBALS['cnx']);
    }
    function selecciona_videos($url)	{
        $sql = sprintf("SELECT url FROM videos_almacenados WHERE url='%s'", mysql_real_escape_string($url));
        $sql = htmlentities($sql);
        $result = mysql_query($sql, $GLOBALS['cnx']);
        return $result;        
    }
    function busca_ip($ip)	{
        $sql = sprintf("SELECT ip FROM cola WHERE ip='%s'", mysql_real_escape_string($ip));
        $sql = htmlentities($sql);
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
        $sql = sprintf("SELECT id FROM cola WHERE url='%s' and ip='%s'", mysql_real_escape_string($url), mysql_real_escape_string($ip));
        $sql = htmlentities($sql);
        $result = mysql_query($sql, $GLOBALS['cnx']);
        return $result;
    }
    function selecciona_porcentaje($id)	{
        $sql = sprintf("SELECT porcentaje FROM cola WHERE id='%s'", mysql_real_escape_string($id));
        $sql = htmlentities($sql);
        $result = mysql_query($sql, $GLOBALS['cnx']);
        return $result;        
    }
    function comprueba_ip($ip)	{
        $sql = sprintf("SELECT * FROM cola WHERE ip='%s'", mysql_real_escape_string($ip));
        $sql = htmlentities($sql);
        $result = mysql_query($sql, $GLOBALS['cnx']);
        return $result;
    }
    function inserta_videos_almacenados($url)	{
        $sql = sprintf("INSERT INTO videos_almacenados (url,fecha) values('%s',sysdate())", mysql_real_escape_string($url));
        $sql = htmlentities($sql);
        mysql_query($sql, $GLOBALS['cnx']);
    }
    function elimina_cola($ip)	{
        $sql = sprintf("DELETE FROM cola where ip='%s'", mysql_real_escape_string($ip));
        $sql = htmlentities($sql);
        mysql_query($sql, $GLOBALS['cnx']);
    }
    function busca_videos_almacenados($url)	{
        $sql = sprintf("SELECT * FROM videos_almacenados WHERE url='%s'", mysql_real_escape_string($url));
        $sql = htmlentities($sql);
        $result = mysql_query($sql, $GLOBALS['cnx']);
        return $result;
    }

?>