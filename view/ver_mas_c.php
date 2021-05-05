<!--View all about of a category-->
<div class="container-fluid">

    <div class="row">

        
        <!--Product info-->
        <div class="col-md-12 col-sm-12 col-xs-12" align="center">
            <div class="card-custom">
                <div class="card-header">
                    <!--Category id info-->
                    <p class="font-weight-bold">Código categoría: <?php echo $row->get_attribute('id_c'); ?></p>   
                </div>
                <div class="card-body">
                    <!--Category name info-->
                    <h5 class="font-weight-bold">Nombre:</h5>
                    <p class="card-text"><?php echo $row->nombre_c; ?></p> 
                    <!--Category description info-->
                    <h5 class="font-weight-bold">Descripción:</h5>
                    <p class="card-text"><?php echo $row->descripcion_c; ?></p> 
                </div>
                <div class="card-footer text-muted">
                    <!--Link to products-->
                    <a href="?c=v_t_c" class="badge badge-light">Volver</a>
                    <a class="badge badge-light" href='?c=delete_c&id_c=<?php echo $row->get_attribute('id_c'); ?>'>Borrar</a>
                    <a class="badge badge-light" href='?c=update_c&id_c=<?php echo $row->get_attribute('id_c'); ?>'>Editar</a>
                    <a class="badge badge-light" href='?c=cat_prod&id_c=<?php echo $row->get_attribute('id_c'); ?>'>Ver productos</a>
                </div>
            </div>
        </div>        
    </div>
</div>    
