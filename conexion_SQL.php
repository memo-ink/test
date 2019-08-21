<?php
$server = 'leqro.fortiddns.com,50638'; // often localhost
$username = "sa";         	           // Your SQL server username
$password = "neocom2013*";     	       // Your SQL server password
$database = "SAENEO5BAK";              // If you fill in nothing database 'members' will be used. If 'members' doesn't exist

define('DB_HOST',$server);
define('DB_USER',$username);
define('DB_PASSWORD',$password);
define('DB_DB',$database);
//COMPROBACION DE CONEXION AL SERVIDOR
$connectionInfo = array('UID'=>DB_USER,'PWD'=>DB_PASSWORD,'Database'=>DB_DB,'CharacterSet'=>'UTF-8');
$mssql = sqlsrv_connect(DB_HOST, $connectionInfo);
if(!$mssql) {
     echo '<font color="#ff0000">Conexion no se pudo establecer.</font><br />';
     die( print_r( sqlsrv_errors(), true));
}//else{echo '<font color="#00ff00">Se ha conectado a la Base de Datos.</font><br />';}
//include 'libSQL.php';
?>
