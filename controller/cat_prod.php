<!--View the products of an especific category-->

<?php

     if (isset($_GET['id_c'])) { 
        require_once 'model/inventario.php';    
        $inventario = new inventario();
        $rows = $inventario->cat_prod($_GET['id_c']); //gets the products of tha category based on the id
        include 'view/cat_prod.php';
        if(empty($row)){ //if there is no products
            include "view/no_p.php"; //message of non existing products           
        }
    } else { 
        require_once 'model/categoria.php';
        $categoria = new categoria();
        $rows = $categoria->read();
        include 'view/v_cat.php';
    }