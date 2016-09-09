<?php

//CLASS

require_once("conexion.php");
require_once("visitas.php");
require_once("visitasCollector.php");

//Inicializacion

$alm = new visitas();
$model = new visitasCollector();

$id= 0;

?>


<!DOCTYPE html>
<html>
<head>
	<title>Admin - Visitas - Consulta</title>
</head>
<body>

	<div class="pure-g">
		<div class="pure-u-1-12">
			<br>
			<a href="Administrator.php">Volver</a>
			<br>
			<br>
            <a href="../formularios/Frm_Create_usuario.php">Create</a>
            <br>
            <br>
            <table class="pure-table pure-table-horizontal" border="1">
            	<thead>
            		<tr>
            			<!- Tabla de la base de datos->
            			<th style="text-align:left;">ID</th>
            			<th style="text-align:left;">Descripcion</th>
            			
            			<!- Opciones para la administracion ->
            			<th style="text-align:left;">Option</th>
            			<th style="text-align:left;">Option</th>
            			
            		</tr>
            	</thead>
            		<?php foreach ($model->ListarVisitas() as $r): ?>
            			<tr>
            				<td><?php echo $r-> get_Id();  ?></td>
            				<td><?php echo $r-> get_Descripcion(); ?></td>
            				

            				<!- OPTIONS ->

            				<td><a href="../formularios/frm_Update_usuario.php?id=<?php echo $r->get_Id();?>&nombre=<?php echo $r->get_Nombre_usuario();?>">Update</a></td>
            				<td><a href="../procesos/proceso_Delete_usuario.php?id=<?php echo $r->get_Id(); ?>">Delete</a></td>

            			</tr>
            		<?php endforeach; ?>
            </table>
			
		</div>
	</div>

</body>
</html>
