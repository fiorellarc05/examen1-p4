<!--Create a product-->

<h3 align="center"> Crea tu producto</h3>  
<form method="POST" action="?c=form_p" autocomplete="off">
    
    <div class="form-row">
        
        <!--name of the product-->   
        <div class="form-group col-md-6">
          <label for="nombre_p">Nombre</label>
          <input type="text" class="form-control" id="nombre_p" name="nombre_p" placeholder="Nombre" required>
        </div>
        
         <!--quantity of the product-->   
        <div class="form-group col-md-4">
          <label for="cantidad_p">Cantidad</label>
          <input type="number" class="form-control" id="cantidad_p" name="cantidad_p" placeholder="Cantidad" required>
        </div>   
        
    </div>
    
    <!--description of the product-->   
    <div class="form-group">
        <label for="descripcion_p">Descripción</label>
        <textarea class="form-control" id="descripcion_p" name="descripcion_p" placeholder="Descripcion" required></textarea>
    </div>
       
    <div class="form-row">
        
        <!--price of the product-->   
        <div class="form-group col-md-6">
          <label for="precio_p">Precio</label>
          <input type="text" class="form-control" id="precio_p" name="precio_p" placeholder="Precio en colones" required>
        </div>
        
        
        <!--category of the product-->
        <div class="form-group col-md-6">
            <label for="id_c">Código categoría</label>
            <select class="form-control" name="id_c" id="id_c">
                <?php include 'controller/ver_todas_c.php';?>
                <?php foreach($rows as $row) {?>
                <option value="<?php echo $row->get_attribute('id_c');?>"><?php echo $row->get_attribute('id_c');?></option>
            <?php } ?> 
          </select>
        </div>

    </div>
    
    <!--Submit button--> 
    <br><div class="form-group">
        <div class="col-sm-offset-2 col-sm-6" align="right">
        <input type="submit"  class="btn btn-danger" value="Crear">
        </div>
    </div>
    
</form>