<!DOCTYPE html>
<html lang="en">
 <head>
    <meta charset="utf-8" />
    <title> Usuarios </title>
    <link type="text/css" href="<?php echo base_url() ?>css/bootstrap.css" rel="stylesheet" />
    <script type="text/javascript" src="<?php echo base_url() ?>js/jquery-3.1.0.min.js"></script>
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
 </head>
 <body>
    <h3><span class="label label-success"> Bienvenido<?php echo $nombre ?></span> </h3>
       <a class="btn btn-danger" href="<?php echo base_url() ?>usuarios/cerrar_sesion"> Cerrar sesión </a>
 </body>
</html>