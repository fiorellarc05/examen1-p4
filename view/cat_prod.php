<div class="container-fluid">

    <div class="row">

        <!--Product info-->
        <div class="col-md-12 col-sm-12 col-xs-12" align="center">
            <div class="card-custom">
                <?php foreach($rows as $row) {?>
                <div class="card-body">
                    <!--Product info-->
                     
                    <h5 class="font-weight-bold">Nombre producto:</h5>
                    <p class="card-text"><?php echo $row->nombre_p; ?></p>
                    <?php } ?>
                </div>
                <div class="card-footer text-muted">
                    <!--Link to all categtories-->
                    <a href="?c=v_t_c" class="badge badge-light">Volver</a>
                    <!--Link to all products-->
                    <a href="?c=v_t_p" class="badge badge-light">Productos</a>
                </div>
            </div>
        </div>        
    </div>
</div>    
