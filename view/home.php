<!---Home page-->
<div class="container-fluid">

    <div class="row">

        <!--About us info-->
        <div class="col-md-9 col-sm-9 col-xs-9" align="center">
            <h1>Te ayudo al control<br>
                de inventarios de tu tienda de joyería</h1> <br>
                          
            <br><h2> Crea, edita y elimina <br>
            tus productos y categorías</h2> 
                 
            <br><img src="img/joyeria.jpg" width="500" height="300" class="rounded">
        </div>
         

        <!--Alertas-->
        <div class="col-md-3 col-sm-3 col-xs-3" align="center">
            <h4> Alertas </h4>
            <!--Link to products-->
            <a href="?c=v_t_p" class="badge badge-danger">Productos</a>
            <!--Link to categories-->
            <a href="?c=v_t_c" class="badge badge-danger">Categorías</a>
            <!--List of the alerts-->
            <div class="card">     
                <?php include 'controller/alertas.php';?>
                <?php foreach($rows as $row) {?>
                <div class="card">
                    <!--Name or the product-->
                    <div class="card-header">
                       <p class="font-weight-bold"><?php echo $row->nombre_p;?></p>
                    </div>
                    <!--quantity of the product-->
                    <div class="card-body">
                        !Quedan menos de 5 productos!
                    </div>
                    <?php } ?> 
                </div>
            </div>
        </div>
    </div>
</div>    
  
