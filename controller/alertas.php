<!--View alerts of each product with less < 5-->

<?php

    require_once 'model/inventario.php';
    $inventario = new inventario();
    $rows = $inventario->cantidad();

