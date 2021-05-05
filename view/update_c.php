<!--Form to update a category-->
<h3 align="center"> Actualiza tu categoría</h3>  
<form method="POST" action="?c=update_c" autocomplete="off">
    
    <div class="form-row">
        
        <!--name of the product-->   
        <div class="form-group col-md-6">
          <label for="nombre_p">Nombre</label>
          <input type="text" class="form-control" name="nombre_c" placeholder="Nombre" value="<?php echo $row->nombre_c?>">
        </div>
        
         <!--description of the product-->   
        <div class="form-group col-md-4">
          <label for="cantidad_p">Descripción</label>
         <input type="text" class="form-control" name="descripcion_c" placeholder="Descripción" value="<?php echo $row->descripcion_c?>">
        </div>   
        
    </div>
    
    <!--Get the category id-->
    <input type="hidden" name="id_c"  value="<?php echo $row->get_attribute('id_c') ?>">


    <!--Update button--> 
    <br><div class="form-group">
        <div class="col-sm-offset-2 col-sm-6" align="right">
        <input type="submit"  class="btn btn-danger" value="Actualizar">
        </div>
    </div>
</form>    
    
   