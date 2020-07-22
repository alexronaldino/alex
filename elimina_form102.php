<?php
    include ("includes/conexion.php"); 
?>
<html>
<head>
  <title>Registro Eliminado</title>
</head>
<body>
<br>
<table BORDER 2>
      <tr>
      <td>CODIGO</td>
      <td>TIPO</td>
      <td>ANNO</td>
      <td>MARCA</td>
      <td>TRACCION</td>
    </td>
<?php 
$cod=$_POST['enviar_codigo'];
$sql="SELECT *from vehiculos_inca where cod_vehi='$cod'";
$result=mysqli_query($link,$sql); 
if($mostrar=mysqli_fetch_array($result))
{
  $query="DELETE FROM vehiculos_inca WHERE cod_vehi ='$cod'";
     echo "Registro eliminado con éxito";
     $result=mysqli_query($link,$query); 
}
else
{
  echo "Error al eliminar registro o no existe el registro....";
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
