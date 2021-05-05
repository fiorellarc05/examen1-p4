<!--Update a category-->

<?php
    require_once "model/categoria.php";

    if($_POST){
        $categoria = new categoria($_POST['nombre_c'], $_POST['descripcion_c'],$_POST['id_c']);
        $categoria->update();
        $rows = $categoria->read();
        include 'view/v_cat.php';
    }else{
        $categoria = new categoria();
        $row = $categoria->read($_GET['id_c'])[0];
        include "view/update_c.php";
    }

