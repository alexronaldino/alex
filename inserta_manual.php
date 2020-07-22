<?php    
 include ("includes/conexion.php");      
 $sql = "INSERT INTO vehiculos_inca (cod_vehi, tipo_vehi, anno_vehi, marca_vehi, traccion_vehi) VALUES ('1111','bethy', '2019-06-14' ,'toyota','triple')";     
 if (mysqli_query($link, $sql)) {           
 	echo "Nuevo registro creado con éxito";     
 } else {           
 	echo "Error: " . $sql . "<br>" . mysqli_error($link);     
 }     
 mysqli_close($link); ?>