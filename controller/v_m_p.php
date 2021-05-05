<!--View all about an especific product-->

<?php

    require_once 'model/inventario.php';

    $inventario = new inventario();
    
    if(isset($_GET['codigo_p'])){
        $row = $inventario->read($_GET['codigo_p'])[0];
        include "view/ver_mas_p.php";
    }else{
        $rows = $inventario->read();
        include "view/v_prod.php";
    }