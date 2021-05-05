<!--Delete a category-->

<?php
    require_once "model/categoria.php";
  
    $categoria = new categoria();
    $categoria->delete($_GET['id_c']);
    $rows = $categoria->read();
    include 'view/v_cat.php';