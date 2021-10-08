<?php
date_default_timezone_set('America/Mexico_City');

if(!function_exists('mysql_connect'))
{
    echo 'No se encontro la BD';
    exit();
}


$conexion = @mysql_connect('localhost', 'root','')
or die('No se puede conectar con el servidor'.mysql_error());

mysql_select_db('karati', $conexion)
or die('No se puede seleccionar la base de datos'.mysql_error());





?>