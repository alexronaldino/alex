<?php
 include ("includes/conexion.php");
?>
<html>
<head>
 <title>Mostrar Datos</title>
</head>
<body>
<br>
<table>
 <tr>
 <td>CODIGO</td>
 <td>TIPO</td>
 <td>ANNO</td>
 <td>MARCA</td>
 <td>TRACCION</td>
 </td>
<?php
$cod='1111';
$borrar="DELETE FROM vehiculos_inca WHERE cod_vehi='$cod'";
 if (mysqli_query($link, $borrar)) {
 echo "El registro fue eliminado correctamente con éxito";
 } else {
 echo "Error de eliminacion de registro: " . $borrar . "<br>" . mysqli_error($link);
 }

$sql = "SELECT *from vehiculos_inca";
$result=mysqli_query($link,$sql);
while ($mostrar=mysqli_fetch_array($result)){
?>
<tr>
 <td><?php echo $mostrar['cod_vehi'] ?></td>
 <td><?php echo $mostrar['tipo_vehi'] ?></td>
 <td><?php echo $mostrar['anno_vehi'] ?></td>
 <td><?php echo $mostrar['marca_vehi'] ?></td>
 <td><?php echo $mostrar['traccion_vehi'] ?></td>
</tr>
<?php
}
mysqli_close($link);
?>
</table>
</body>
</html>
