<html>
<head>
<title>Ejemplo de PHP</title>
</head>
<body>
<H3>EJEMPLO DE SELECCION POR COMBO BOX</H3>
<?php
include ("includes/conexion.php"); 
$sql="SELECT *from vehiculos_inca";
$result=mysqli_query($link,$sql); 
echo "Seleccione Codigo :";
echo "<select name='nombre'>";
while ($row=mysqli_fetch_array($result)){
  echo "<option>$row[3]</option>";
}
echo "</select><br><br>";
?>
</body>
	</html>
