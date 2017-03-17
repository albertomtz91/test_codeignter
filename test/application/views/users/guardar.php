<h1> Guardar Usuario </h1>
<form method="post" action="<?php echo base_url() ?>users/guardar_post/<?php echo $id ?>">
    <div class="row">
       <label> nombre </label>
       <input class="form-control-sm" type="text" name="nombre"  value="<?php echo $nombre ?>" />
    </div><br/>
    <div class="row">
       <label> Apellido </label>
       <input class="form-control-sm" type="text" name="apellido"  value="<?php echo $apellido ?>" />
    </div><br/>
    <div class="row">
       <label> Correo </label>
       <input class="form-control-sm" type="text" name="correo"  value="<?php echo $correo ?>" />
    </div><br/>
    <div class="row">
       <label> Fecha de nacimiento </label>
       <input class="form-control-sm" type="text" name="fecha_n"  value="<?php echo $fechan ?>" />
    </div><br/>
    <div class="row">
       <label> Estado de nacimiento </label>
       <input class="form-control-sm" type="text" name="estado_n"  value="<?php echo $estadon ?>" />
    </div><br/>
 
    <!-- esta parde de codigo realiza la validacion de los campos-->
    <?php if (validation_errors()): ?>
   <div class="alert alert-danger">
      <?php echo validation_errors(); ?>
   </div>
	<?php endif; ?>
	<!--finalizacion de la validacion de los campos  -->
       <input type="submit" class="btn btn-success" value="Guardar" />
       <a class="btn btn-danger" href="<?php echo base_url() ?>users"> Cancelar </a>
 
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</form>