<?php
include "conexion.php";

$user_id=null;
$sql1= "select * from producto where id = ".$_GET["id"];
$query = $con->query($sql1);
$producto = null;
if($query->num_rows>0){
while ($r=$query->fetch_object()){
  $producto=$r;
  break;
}

  }
?>

<?php if($producto!=null):?>

<form role="form" method="post" action="php/actualizar.php">
  <div class="form-group">
    <label for="nombre_campaña">Nombre de la Campaña</label>
    <input type="text" class="form-control" value="<?php echo $producto->nombre_campaña; ?>" name="nombre_campaña" required>
  </div>
  <div class="form-group">
    <label for="precio_producto">Precio del Producto</label>
    <input type="number" class="form-control" value="<?php echo $producto->precio_producto; ?>" name="precio_producto" required>
  </div>
  <div class="form-group">
    <label for="llamadas_ilimitadas">Llamadas ilimitadas a</label>
    <input type="text" class="form-control" value="<?php echo $producto->llamadas_ilimitadas; ?>" name="llamadas_ilimitadas" required>
  </div>
  <div class="form-group">
    <label for="gigas">Gigas para redes sociales</label>
    <input type="number" class="form-control" value="<?php echo $producto->gigas; ?>" name="gigas" required>
  </div>
  <div class="form-group">
    <label for="minutos">Minutos a todas las operadoras</label>
    <input type="number" class="form-control" value="<?php echo $producto->minutos; ?>" name="minutos" required>
  </div>
  <label for="descripcion">Descripcion</label>
    <input type="text" class="form-control" value="<?php echo $producto->descripcion; ?>" name="descripcion" required>
  </div>
<input type="hidden" name="id" value="<?php echo $producto->id; ?>">
  <button  id="azul-three" type="submit" class="btn btn-default">Actualizar</button>
</form>
<?php else:?>
  <p class="alert alert-danger">404 No se encuentra</p>
<?php endif;?>