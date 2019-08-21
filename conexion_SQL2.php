<?php
$server = 'leqro.fortiddns.com, 50638';
$database = 'SAENEO5BAK';//$database = 'NEOCOM';
$username = 'sa';
$password = 'neocom2013*';
$db = new PDO('odbc:Driver={SQL Server}; Server=' . $server . '; Database=' . $database . '; Uid=' . $username . '; Pwd=' . $password . ';');
//sleep(5);
?>
