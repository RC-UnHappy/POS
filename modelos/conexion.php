<?php 
/**
 * Conexión a la base de datos
 */
class Conexion
{
	
	function conectar()
	{
		$link = new PDO('mysql:host=localhost;dbname=pos','root','');

		$link->exec('set names utf8');

		return $link;
	}
}