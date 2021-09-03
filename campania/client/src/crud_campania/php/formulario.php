<?php
include "conexion.php";

$user_id=null;
$sql1= "select * from person where id = ".$_GET["id"];
$query = $con->query($sql1);
$person = null;
if($query->num_rows>0){
while ($r=$query->fetch_object()){
  $person=$r;
  break;
}

  }
?>

<?php if($person!=null):?>

<form role="form" method="post" action="php/actualizar.php">
  <div class="form-group">
    <label for="nombre">Nombre</label>
    <input type="text" class="form-control" value="<?php echo $person->nombre; ?>" name="nombre" required>
  </div>
  <div class="form-group">
    <label for="medio">Medio</label>
    <input type="text" class="form-control" value="<?php echo $person->medio; ?>" name="medio" required>
  </div>
  <div class="form-group">
    <label for="descripcion">Descripcion</label>
    <input type="text" class="form-control" value="<?php echo $person->descripcion; ?>" name="descripcion" required>
  </div>
  <div class="form-group">
    <label for="fechaInicio">Fecha Inicio</label>
    <input type="date" class="form-control" value="<?php echo $person->fechaInicio; ?>" name="fechaInicio" required>
  </div>
  <div class="form-group">
    <label for="fechaFinal">Fecha Final</label>
    <input type="date" class="form-control" value="<?php echo $person->fechaFinal; ?>" name="fechaFinal" required>
  </div>
<input type="hidden" name="id" value="<?php echo $person->id; ?>">
  <button id="azul-three" type="submit" class="btn btn-default">Actualizar</button>
</form>
<?php else:?>
  <p class="alert alert-danger">404 No se encuentra</p>
<?php endif;?>