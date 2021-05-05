<!--View all products page-->
<?php include 'controller/ver_todos_p.php';?>

    <a class="badge badge-danger" href='index.php'>Alertas de existencia</a>
    <h3 align="center">Todos los productos</h3>

    <table class="table">
        <thead class="thead" align="center">
          <tr>
            <th scope="col">Código</th>  
            <th scope="col">Nombre</th>
            <th scope="col">Descripción</th>
            <th scope="col">Cantidad</th>
            
          </tr>
        </thead>
        
        <tbody align="center">
        <?php foreach($rows as $row) {?>
          <tr>
            <td><?php echo $row->get_attribute('codigo_p');?></td>  
            <td><?php echo $row->nombre_p;?></td>
            <td><?php echo $row->descripcion_p;?></td>
            <td><?php echo $row->cantidad_p;?></td>
            <td><a class="badge badge-danger" href='?c=v_m_p&codigo_p=<?php echo $row->get_attribute('codigo_p'); ?>'>Ver más</a></td>
            <td><a class="badge badge-danger" href='?c=delete_p&codigo_p=<?php echo $row->get_attribute('codigo_p'); ?>'>Borrar</a></td>
            <td><a class="badge badge-danger" href='?c=update_p&codigo_p=<?php echo $row->get_attribute('codigo_p'); ?>'>Editar</a></td>
          </tr>
            <?php } ?> 
        </tbody>
    </table>

    