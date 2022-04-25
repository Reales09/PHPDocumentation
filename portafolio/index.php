<?php //include ("cabecera.php") ?>
<?php include ("conexion.php") ?>


<?php

$objConexion = new conexion();
$proyectos=$objConexion->consultar("SELECT * FROM `proyectos`");

?>

<?php include ("cabecera.php") ?>

<div class="p-5 bg-light">
    <div class="container">
        <h1 class="display-3">Bienvenidos</h1>
        <p class="lead">Este es un portafolio privado</p>
        <hr class="my-2">
        <p>Más información</p>

    </div>
</div>



    <div class="card-group">

    <?php foreach ($proyectos as $proyecto) {  ?>
    
  <div class="card border-success me-3">
  <img src="imagenes/<?php echo $proyecto['imagen'];?>" alt="" srcset=""> 
    <div class="card-body">
      <h5 class="card-title"><?php echo $proyecto['nombre']; ?></h5>
      <p class="card-text"><?php echo $proyecto['descripcion']; ?></p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>

  <?php } ?>
</div>

<?php include("pie.php"); ?>