
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
		<h2>ADMINISTRA AQUÍ TUS CAMPAÑAS PUBLICITARIAS</h2>
    <br>
<!-- Button trigger modal -->
  <a id="azul-three"data-toggle="modal" href="#myModal" class="btn btn-default"><b >Agregar Campaña</b></a>
<br><br>
  <!-- Modal -->
  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 id="blanco"class="modal-title">Agregar Campaña</h4>
        </div>
        <div class="modal-body">
<form role="form" method="post" action="php/agregar.php">
  <div class="form-group">
    <label id="blanco"for="nombre"> Nombre</label>
    <input type="text" class="form-control" name="nombre" required>
  </div>
  <div class="form-group">
    <label id="blanco"for="medio">Medio</label>
    <input type="text" class="form-control" name="medio" pattern="[A-Za-z]+"required>
  </div>
  <div class="form-group">
    <label id="blanco"for="descripcion">Descripcion</label>
    <input type="text" class="form-control" name="descripcion" required>
  </div>
  <div class="form-group">
    <label id="blanco"for="fechaInicio">Fecha inicio</label>
    <input type="date" class="form-control" name="fechaInicio" required>
  </div>
  <div class="form-group">
    <label id="blanco"for="fechaFinal">Fecha final</label>
    <input type="date" class="form-control" name="fechaFinal" required>
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