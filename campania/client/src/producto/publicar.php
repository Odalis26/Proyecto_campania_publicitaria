
<html>
	<head>
		<title>PubliWeb</title>
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
		<script src="js/jquery.min.js"></script>
    <link rel="stylesheet" href="bootstrap/css/stylos.css">
	</head>
	<body>
	<?php include "php/navbar.php"; ?>
<div class="container">
<div class="row">
<div class="col-md-12">
		<h2>Publicar Campañas Publicitarias de Productos</h2>
    <br>
<!-- Button trigger modal -->
  <a id="azul-three" data-toggle="modal" href="#myModal" class="btn btn-default"><b>Agregar Campaña de Productos</b></a>
<br><br>
  <!-- Modal -->
  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 id="blanco"class="modal-title">Agregar Campaña de Productos</h4>
        </div>
        <div class="modal-body">
<form role="form" method="post" action="php/agregar.php">
  <div class="form-group">
    <label id="blanco"for="nombre_campaña"> Nombre de la Campaña</label>
    <input type="text" class="form-control" name="nombre_campaña" required>
  </div>
  <div class="form-group">
    <label id="blanco"for="precio_producto">Precio del Producto</label>
    <input type="number" class="form-control" name="precio_producto"pattern="[0-9]+" required>
  </div>
  <div class="form-group">
    <label id="blanco"for="llamadas_ilimitadas">Llamadas ilimitadas a</label>
    <input type="text" class="form-control" name="llamadas_ilimitadas" required>
  </div>
  <div class="form-group">
    <label id="blanco"for="gigas">Gigas para redes sociales</label>
    <input type="number" class="form-control" name="gigas" pattern="[0-9]+" required>
  </div>
  <div class="form-group">
    <label id="blanco"for="minutos">Minutos a todas las operadoras</label>
    <input type="number" class="form-control" name="minutos" pattern="[0-9]+" required>
  </div>
  <div class="form-group">
    <label id="blanco"for="descripcion">Descripcion</label>
    <input type="text" class="form-control" name="descripcion" required>
  </div>


  <button id="azul-two" type="submit" class="btn btn-default">Agregar Campaña</button>
</form>
        </div>

      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->



</div>
</div>
</div>

<script src="bootstrap/js/bootstrap.min.js"></script>
	</body>
</html>