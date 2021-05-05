<!--Connection to view all products-->

<?php

require_once 'model/inventario.php';
$inventario = new inventario();
$rows = $inventario->read();