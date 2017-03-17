      <h3><span class="label label-success"> Bienvenido </span>
       <a class="label label-danger" href="<?php echo base_url() ?>usuarios/cerrar_sesion">Cerrar sesión</a></h3><br/><br/>
<h1> <span class="label label-info"> Lista de usuarios </span></h1>
    <a class="btn btn-success" href="<?php echo base_url() ?>users/guardar"> Crear nuevo usuario </a>
<?php if (count($users)): ?>
 <table class="table tableborder">
    <thead>
       <tr>
          <th> Nombre </th>
          <th> Apellido </th>
          <th> Correo</th>
          <th> Fecha de nacimiento</th>
          <th> Estado de nacimiento</th>
          <th>Editar</th>
          <th>Eliminar</th>
       </tr>
    </thead>
    <tbody>
       <?php foreach($users as $item): ?>
          <tr>
             <td style="width: 35%"> <?php echo $item->nombre ?> </td>
             <td style="width: 35%"> <?php echo $item->apellido ?> </td>
             <td style="width: 35%"> <?php echo $item->correo ?> </td>
             <td style="width: 35%"> <?php echo $item->fecha_n ?> </td>
             <td style="width: 35%"> <?php echo $item->estado_n ?> </td>
             <td><a class="btn btn-warning" href="<?php echo base_url() ?>users/guardar/<?php echo $item->id ?>"><i class="fa fa-pencil-square-o fa-2x" aria-hidden="true"></i> </a></td>
             <td><a class="btn btn-danger eliminar_user" href="<?php echo base_url() ?>users/eliminar/<?php echo $item->id ?>"><i class="fa fa-trash fa-2x" aria-hidden="true"></i></a> </td>
          </tr>
       <?php endforeach; ?>
    </tbody>
 </table>
<?php else: ?>
 <p> No hay usuarios</p>
<?php endif; ?>
<script type="text/javascript">
   $(".eliminar_user").each(function() {
      var href = $(this).attr('href');
      $(this).attr('href', 'javascript:void(0)');
      $(this).click(function() {
         if (confirm("¿Seguro desea eliminar este usuario?")) {
            location.href = href;
         }
      });
   });
</script>