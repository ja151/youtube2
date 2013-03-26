<?php
include("header.php");
$url=$_POST['url'];
echo $url;
$ip=$_SERVER['REMOTE_ADDR'];
inserta_videos_almacenados($url);
sleep(5);
elimina_cola($ip);

?>
