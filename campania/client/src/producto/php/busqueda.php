<?php

include "conexion.php";

$user_id=null;
$sql1= "select * from producto where nombre_campaña like '%$_GET[s]%' or precio_producto like '%$_GET[s]%' or Llamadas_ilimitadas like '%$_GET[s]%' or gigas like '%$_GET[s]%' or minutos like '%$_GET[s]%' or descripcion like '%$_GET[s]%' ";
$query = $con->query($sql1);
?>

<?php if($query->num_rows>0):?>
<table class="table table-bordered table-hover">
<thead>
	<th>Nombre de la Campaña</th>
	<th>Precio del Producto</th>
	<th>Llamadas ilimitadas a</th>
	<th>Gigas para redes sociales</th>
	<th>Minutos a todas las operadoras</th>
	<th>Descripcion</th>
	<th></th>
</thead>
<?php while ($r=$query->fetch_array()):?>
<tr>
	<td><?php echo $r["nombre_campaña"]; ?></td>
	<td><?php echo $r["precio_producto"]; ?></td>
	<td><?php echo $r["llamadas_ilimitadas"]; ?></td>
	<td><?php echo $r["gigas"]; ?></td>
	<td><?php echo $r["minutos"]; ?></td>
	<td><?php echo $r["descripcion"]; ?></td>
	<td style="width:150px;">
		<a href="./editar.php?id=<?php echo $r["id"];?>" class="btn btn-sm btn-warning">Editar</a>
		<a href="#" id="del-<?php echo $r["id"];?>" class="btn btn-sm btn-danger">Eliminar</a>
		<script>
		$("#del-"+<?php echo $r["id"];?>).click(function(e){
			e.preventDefault();
			p = confirm("Estas seguro?");
			if(p){
				window.location="./php/eliminar.php?id="+<?php echo $r["id"];?>;
			}
		});
		</script>
	</td>
</tr>
<?php endwhile;?>
</table>
<?php else:?>
	<p class="alert alert-warning">No hay resultados</p>
<?php endif;?>
