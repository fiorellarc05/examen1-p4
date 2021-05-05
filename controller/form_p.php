<!--Create a product-->

<?php
    if($_POST){
      include 'model/inventario.php';
      $inventario = new inventario($_POST['nombre_p'], $_POST['descripcion_p'], $_POST['precio_p'], $_POST['cantidad_p'], $_POST['id_c']);
      $inventario->create();
      $inventario->read();
      include "view/exito.php";
    }else{
      include "view/f_prod.php";
    }



