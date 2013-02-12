<?php
function conectar_bd()
{
	
    /*$bd_host = 'db442489697.db.1and1.com';
	$bd_name = 'db442489697';
	$bd_user = 'dbo442489697';
	$bd_pass = 'candela1';*/
        
	$bd_host = 'localhost';
	$bd_name = 'youtube';
	$bd_user = 'root';
	$bd_pass = '';
	
	$cnx = mysql_connect($bd_host,$bd_user,$bd_pass) or die('ERROR: no se pudo establecer la conexión con la base de datos');
	mysql_select_db($bd_name, $cnx) or die('ERROR: error al seleccionar la base de datos');
	mysql_query("SET NAMES 'utf8'");
	return($cnx);
}

?>
