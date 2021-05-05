<!--Delete a product-->

<?php
  require_once "model/inventario.php";
  
  $inventario = new inventario();
  $inventario->delete($_GET['codigo_p']);
  $rows = $inventario->read();
  include 'view/v_prod.php';