<!--View all about of the product-->
<div class="container-fluid">

    <div class="row">

        <!--Product info-->
        <div class="col-md-9 col-sm-9 col-xs-9" align="center">
            <div class="card-custom">
                <div class="card-header">
                    <p class="font-weight-bold">Código producto: <?php echo $row->get_attribute('codigo_p'); ?></p>   
                </div>
                <div class="card-body">
                  <h5 class="font-weight-bold">Nombre:</h5>
                  <p class="card-text"><?php echo $row->nombre_p; ?></p>  
                  <h5 class="font-weight-bold">Descripción:</h5>
                  <p class="card-text"><?php echo $row->descripcion_p; ?></p>
                  <h5 class="font-weight-bold">Categoría:</h5>
                  <p class="card-text"><?php echo $row->get_attribute('id_c'); ?></p>
                </div>
                <div class="card-footer text-muted">
                    <!--Link to products-->
                    <a href="?c=v_t_p" class="badge badge-light">Volver</a>
                    <a class="badge badge-light" href='?c=delete_p&codigo_p=<?php echo $row->get_attribute('codigo_c'); ?>'>Borrar</a>
                    <a class="badge badge-light" href='?c=update_p&codigo_p=<?php echo $row->get_attribute('codigo_c'); ?>'>Editar</a>
                </div>
            </div>
        </div>          

        <!--More product info-->
        <div class="col-md-3 col-sm-3 col-xs-3" align="center">
            <div class="card-custom">     
                <div class="card-custom">
                    <!--Price of the product-->
                    <div class="card-header">
                       <p class="font-weight-bold">Precio:</p>
                    </div>
                    <div class="card-body">
                        <p class="card-text"><?php echo $row->precio_p; ?></p>
                    </div>
                </div>
            </div>
            
            <div class="card-custom">     
                <div class="card-custom">
                    <!--Quantity of the product-->
                    <div class="card-header">
                        <p class="font-weight-bold">Existencia:</p>
                    </div>
                    <!--quantity of the product-->
                    <div class="card-body">
                        <p class="card-text"><?php echo $row->cantidad_p; ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>    
