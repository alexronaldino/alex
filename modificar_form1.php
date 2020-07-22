<?php 
    include ("includes/conexion.php");  
?> 
<html> 
<head> 
  <title>Mostrar Datos</title> 
</head> 
<body> 
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
$cod = $_POST['vcod_vehi']; 
$tip = $_POST['vtipo_vehi']; 
$anno = $_POST['vanno_vehi']; 
$marca = $_POST['vmarca_vehi']; 
$trac = $_POST['vtraccion_vehi']; 
 
 
$query="UPDATE vehiculos_inca SET 
tipo_vehi='$tip',anno_vehi='$anno',marca_vehi='$marca',traccion_vehi='$trac' WHERE cod_vehi='$cod'"; 
     if (mysqli_query($link, $query)) { 
          echo "Registro modificado correctamente con éxito"; 
    } else { 
          echo "Error de modificacion: " . $query . "<br>" . mysqli_error($link); 
    } 
     
$sql = "SELECT *from vehiculos_inca";  $result=mysqli_query($link,$sql);  
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
