<?php
	$servidor="localhost";
	$banco="bdlocaliza_assalto";
	$usuario="root";
	$senha="";

	$pdo = new PDO("mysql:host=$servidor;dbname=$banco",$usuario,$senha);		
?>