<!DOCTYPE html>
<html lang="en">

 <head>
    <meta charset="utf-8" />
    <title> login </title>
    <link type="text/css" href="<?php echo base_url() ?>css/bootstrap.css" rel="stylesheet" />
    <script type="text/javascript" src="<?php echo base_url() ?>js/jquery-3.1.0.min.js"></script>
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
 </head>
 <body>
    <form  method="post" action="<?php echo base_url() ?>usuarios/iniciar_sesion_post">
      <div align="center">
       <h1 align="center"> Iniciar sesión </h1><br/>
       <label> Nombre </label>
       <br />
       <input class="form-control-sm" type="text" name="nombre" />
       <br /><br/>
       <label> Contraseña </label>
       <br />
       <input class="form-control-sm" type="password" name="contrasena" />
       <br /><br/>
       <?php if ($error): ?>
   <h4><span class="label label-danger"> <?php echo $error ?><br/> </span></h4>
<?php endif; ?><br/>
       <input class="btn btn-success" type="submit" value="Iniciar sesión" />
       </div>
    </form>
 </body>
</html>