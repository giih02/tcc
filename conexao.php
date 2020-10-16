<?php
## CONEXÃO ##
session_start();
	global $pdo;

try{
	$pdo = new PDO ("mysql:dbname=tcc;host=localhost","root","");
}
catch(PDOException $e){
	echo "Ero com banco de dados: ".$e->getMessage();
}
catch(Exception $e){
	echo "Ero com banco de dados: ".$e->getMessage();
}
## INSERÇÃO ##

?>