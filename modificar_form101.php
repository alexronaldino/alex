<HTML> 
<BODY> <?php 
include ("includes/conexion.php");  
$buscar_codigo = $_POST['vbus_cod']; 
Echo "----------------------------------------------------<BR>"; 
Echo "SELECCIONASTE EL CODIGO: <B>$buscar_codigo</B>"; 
?> 
<BR>----------------------------------------------------<BR> 
<head> 
  <title>Modifica registros</title> 
</head> 
<br> 
<?php  
$sql="SELECT *from vehiculos_inca where cod_vehi='$buscar_codigo'"; 
$result=mysqli_query($link,$sql);  
$mostrar=mysqli_fetch_array($result); 
$codigo_cap=$mostrar['cod_vehi']; 
$tipo_cap=$mostrar['tipo_vehi']; 
$anno_cap=$mostrar['anno_vehi']; 
$marca_cap=$mostrar['marca_vehi']; 
$traccion_cap=$mostrar['traccion_vehi']; 
?> 
DATOS A MODIFICAR<br> 
<FORM METHOD="POST" ACTION="modificar_form102.php"> 
Codigo<br><input type "text" name="enviar_codigo" value='<?php echo $codigo_cap; ?>' /><br> 
Tipo<br><input type "text" name="enviar_tipo" value='<?php echo $tipo_cap; ?>' /><br> 
Anno<br><input type "text" name="enviar_anno" value='<?php echo $anno_cap; ?>' /><br> 
Marca<br><input type "text" name="enviar_marca" value='<?php echo $marca_cap; ?>' 
/><br> 
Traccion<br><input type "text" name="enviar_traccion" value='<?php echo $traccion_cap; ?>' /><br> 
<input type="submit" name="vbgrabamodifica" value="Guardar Modificacion"> 
</FORM> <?php mysqli_close($link); 
?> 
</table> 
</BODY> 
</HTML> 
