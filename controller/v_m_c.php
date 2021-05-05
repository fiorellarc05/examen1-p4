<!--View an especific category-->    
<?php

    require_once 'model/categoria.php';    
    $categoria = new categoria();

    if (isset($_GET['id_c'])) {
        $row = $categoria->read($_GET['id_c'])[0];
        include 'view/ver_mas_c.php';
    } else {
        $rows = $categoria->read();
        include 'view/v_cat.php';
    }
