<!--Connection to view all categories-->

<?php

require_once 'model/categoria.php';
$categoria = new categoria();
$rows = $categoria->read();
