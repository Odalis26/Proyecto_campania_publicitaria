<?php

include "conexion.php";

$user_id=null;
$sql1= "select * from person";
$query = $con->query($sql1);
?>

<?php if($query->num_rows>0):?>
<table class="table table-bordered table-hover">
<thead>
	<th>Nombre</th>
	<th>Medio</th>
	<th>Descripcion</th>
	<th>Fecha inicio</th>
	<th>Fecha final</th>
	<th></th>
</thead>
<?php while ($r=$query->fetch_array()):?>
<tr>
	<td><?php echo $r["nombre"]; ?></td>
	<td><?php echo $r["medio"]; ?></td>
	<td><?php echo $r["descripcion"]; ?></td>
	<td><?php echo $r["fechaInicio"]; ?></td>
	<td><?php echo $r["fechaFinal"]; ?></td>
</tr>
<?php endwhile;?>
</table>
<?php else:?>
	<p class="alert alert-warning">No hay resultados</p>
<?php endif;?>
