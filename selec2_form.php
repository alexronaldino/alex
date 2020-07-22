<HTML>
<BODY>
<?php
include ("includes/conexion.php"); 
$marca = $_POST['vmarca'];
$botonvselec="";  
$botonvtodo="";   
if(isset($_POST['vselec']))$botonvselec=$_POST['vselec'];
if(isset($_POST['vtodo']))$botonvtodo=$_POST['vtodo'];
?>
<head>
  <title>Mostrar Datos</title>
</head>
<br>
<table BORDER 1>
      <tr>
      <td>CODIGO</td>
      <td>TIPO</td>
      <td>ANNO</td>
      <td>MARCA</td>
      <td>TRACCION</td>
    </td>
<?php 
if($botonvselec)
{
	Echo "SELECCIONASTE LA MARCA: <B>$marca</B>";
$sql="SELECT *from vehiculos_inca where marca_vehi='$marca'";
$result=mysqli_query($link,$sql); 
}
if($botonvtodo)
{
  Echo "SELECCIONASTE TODOS LOS REGISTROS";
$sql="SELECT *from vehiculos_inca";
$result=mysqli_query($link,$sql); 
}
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
</BODY>
</HTML>
