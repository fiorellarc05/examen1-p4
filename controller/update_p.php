<!--Update a product-->

<?php
    require_once "model/inventario.php";

    if($_POST){
        $inventario = new inventario($_POST['nombre_p'], $_POST['descripcion_p'],$_POST['precio_p'],$_POST['cantidad_p'],$_POST['id_c'],$_POST['codigo_p']);
        $inventario->update();
        $rows = $inventario->read();
        include 'view/v_prod.php';
    }else{
        $inventario = new inventario();
        $row = $inventario->read($_GET['codigo_p'])[0];
        include "view/update_p.php";
    }
  