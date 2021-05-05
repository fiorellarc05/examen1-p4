<!--View all products page-->
<?php include 'controller/ver_todas_c.php';?>

    <h3 align="center">Todas las categorías</h3>

    <table class="table">
        <thead class="thead" align="center">
          <tr>
            <th scope="col">Código</th>  
            <th scope="col">Nombre</th>
            <th scope="col">Descripción</th>
          </tr>
        </thead>
        
        <tbody align="center">
        <?php foreach($rows as $row) {?>
            <tr>
                <td><?php echo $row->get_attribute('id_c');?></td>
                <td><?php echo $row->nombre_c;?></td>  
                <td><?php echo $row->descripcion_c;?></td> 
                <td><a class="badge badge-danger" href='?c=v_m_c&id_c=<?php echo $row->get_attribute('id_c'); ?>'>Ver más</a></td>
                <td><a class="badge badge-danger" href='?c=delete_c&id_c=<?php echo $row->get_attribute('id_c'); ?>'>Borrar</a></td>
                <td><a class="badge badge-danger" href='?c=update_c&id_c=<?php echo $row->get_attribute('id_c'); ?>'>Editar</a></td>
            </tr>
            <?php } ?> 
        </tbody>
    </table>
