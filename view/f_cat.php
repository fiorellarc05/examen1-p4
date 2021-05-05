<!--Create a category-->

<div class="container">

    <div class="row">
        
        <div class="col-md-12 col-sm-12 col-xs-12" align="right">
            <form class="form-horizontal" method="POST" action="?c=form_c" autocomplete="off">
              <h3 align="center"> Crea tu categoría</h3>   
              <img src="img/banner.jpeg" width="350" height="350" align="left" class="rounded">

                       
            <!-- name -->   
            <div class="form-group">
                <label for="nombre_c" class="col-sm-2 control-label">Nombre</label>
                <div class="col-sm-6">
                <input type="text" class="form-control" id="nombre_c" name="nombre_c" placeholder="Nombre" required>
                </div>
              </div>

            <!--description-->                     
            <br><div class="form-group">
                <label for="descripcion_c" class="col-sm-2 control-label">Descripción</label>
                <div class="col-sm-6">
                    <textarea class="form-control" id="descripcion_c" name="descripcion_c" placeholder="Descripcion" required></textarea>
                </div>
              </div>
            
            <!--Submit button--> 
            <br><div class="form-group">
                    <div class="col-sm-offset-2 col-sm-6">
                    <input type="submit" class="btn btn-danger" value="Crear">
                    </div>
                </div>
            </form>
        </div>

    </div>
</div>    
      