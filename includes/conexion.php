<?php 
$servidor = "localhost";  
$usuario = "alex_soncco1964"; 
$contrasenha = "19641964"; 
$BD = "incamotor"; // El nombre de la base de datos 
$link = mysqli_connect($servidor, $usuario, $contrasenha, $BD); 
if (!$link) {
	die('<strong>No pudo conectarse:</strong> ' . mysql_error());  
	}else{ 
		  echo 'Conectado  satisfactoriamente al servidor <br />';  
		} 
		 ?> 