<?php
 include ("includes/conexion.php"); 
$codigo_vehi = $_POST['vcod_vehi'];
$tipo_vehi = $_POST['vtipo_vehi'];
$anno_vehi = $_POST['vanno_vehi'];
$marca_vehi = $_POST['vmarca_vehi'];
$traccion_vehi = $_POST['vtraccion_vehi'];


$sql="INSERT INTO vehiculos_inca (cod_vehi, tipo_vehi, anno_vehi, marca_vehi, traccion_vehi) VALUES ('$codigo_vehi','$tipo_vehi','$anno_vehi','$marca_vehi','$traccion_vehi')";
    if (mysqli_query($link, $sql)) {
          echo "Registro ingresado correctamente con éxito";
    } else {
          echo "Error de ingreso: " . $sql . "<br>" . mysqli_error($link);
    }
    mysqli_close($link);
?>
<br>
<a href="lectura.php">Desea visualizar un listado de registros
