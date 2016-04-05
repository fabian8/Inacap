<?php<h1>Listado de Usuario </h1> <br>

<a href="usuario/nuevo">Volver</a><br> 

<table border="1">
    <thead>
    <th>Nombre</th>
    <th>Apellido</th>
    <th>Acciones</th>
     </thead>
    <tbody>
        <?php
foreach ($usuario as $data){ ?>
    
        <tr>
            
            <td><?php echo $data->nombre; ?></td>
            <td><?php echo $data->apepat; ?></td>
            <td><a href="<?php echo 'usuario/borrar/'.$data->usuario_id ?>">Eliminar</a></td>
             <td><a href="<?php echo 'usuario/detail/'.$data->usuario_id ?>">Ver_Detalle</a></td>

            
        </tr>
<?php } ?>
    </tbody>
</table>
