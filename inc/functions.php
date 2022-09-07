<?php
	date_default_timezone_set('America/Tegucigalpa');
	//Obtener página actual remplazando .php por vacio.
	function obtenerPaginaActual(){
		$archivo = basename($_SERVER['PHP_SELF']);
		$pagina = str_replace(".php", "", $archivo);
		return $pagina;
	};
?>