<!--Form to update a product-->

<h3 align="center"> Actualiza tu producto</h3>  
<form method="POST" action="?c=update_p" autocomplete="off">
    
    <div class="form-row">
        
        <!--name of the product-->   
        <div class="form-group col-md-6">
          <label for="nombre_p">Nombre</label>
          <input type="text" class="form-control" name="nombre_p" placeholder="Nombre" value="<?php echo $row->nombre_p?>">
        </div>
        
         <!--quantity of the product-->   
        <div class="form-group col-md-4">
          <label for="cantidad_p">Cantidad</label>
          <input type="number" class="form-control" name="cantidad_p" placeholder="Cantidad" value="<?php echo $row->cantidad_p ?>">
        </div>   
        
    </div>
    
    <!--description of the product-->   
    <div class="form-group">
        <label for="descripcion_p">Descripción</label>
        <input type="text" class="form-control" name="descripcion_p" placeholder="Descripción" value="<?php echo $row->descripcion_p?>">
    </div>
       
    <div class="form-row">
        
        <!--price of the product-->   
        <div class="form-group col-md-6">
          <label for="precio_p">Precio</label>
          <input type="text" class="form-control" name="precio_p" placeholder="Precio" value="<?php echo $row->precio_p?>">
        </div>
    </div>
    
    <!--Get category id-->
    <input type="hidden" name="id_c"  value="<?php echo $row->get_attribute('id_c') ?>">
    
    <!--Get product id-->
    <input type="hidden" name="codigo_p"  value="<?php echo $row->get_attribute('codigo_p') ?>">
       
    <!--Update button--> 
    <br><div class="form-group">
        <div class="col-sm-offset-2 col-sm-6" align="right">
        <input type="submit"  class="btn btn-danger" value="Crear">
        </div>
    </div>
</form>    
    
    