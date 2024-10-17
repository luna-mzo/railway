<?php

 $link = mysql_connect('mysql://root:FGNrbmDVJyxFfgNVMOElaKQUiwTTKHeJ@autorack.proxy.rlwy.net:16443/railway');
if (!$link) 

{

	die('Não pode ser conectado: ' . mysql_error());

}

echo 'Conexão com sucesso!';
mysql_close($link);

?>