
<html>
	<head>
		<title>PubliWeb</title>
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
		<script src="js/jquery.min.js"></script>
    <link rel="stylesheet" href="bootstrap/css/stylos.css">
	</head>
	<body>

	<?php include "php/navbar2.php"; ?>
<div class="container">
<div class="row">
<div class="col-md-12">
		<h2>Avisos de Nuestras Campañas Publicitarias</h2>

<br><br>
  <!-- Modal -->
  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        
        <div class="modal-body">
<form role="form" method="post" action="php/agregar.php">
  <div class="form-group">
    <label for="nombre"> Nombre</label>
    <input type="text" class="form-control" name="nombre" required>
  </div>
  <div class="form-group">
    <label for="medio">Medio</label>
    <input type="text" class="form-control" name="medio" required>
  </div>
  <div class="form-group">
    <label for="descripcion">Descripcion</label>
    <input type="text" class="form-control" name="descripcion" required>
  </div>
  <div class="form-group">
    <label for="fechaInicio">Fecha inicio</label>
    <input type="date" class="form-control" name="fechaInicio" required>
  </div>
  <div class="form-group">
    <label for="fechaFinal">Fecha final</label>
    <input type="date" class="form-control" name="fechaFinal" required>
  </div>


  
</form>
        </div>

      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->


<?php include "php/tabla2.php"; ?>
</div>
</div>
</div>

<script src="bootstrap/js/bootstrap.min.js"></script>
	</body>
</html>