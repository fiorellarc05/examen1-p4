<!--Create a category-->

<?php

    if($_POST){
            require_once 'model/categoria.php';
          $categoria = new categoria($_POST['nombre_c'],$_POST['descripcion_c']);
          $categoria->create();
          $categoria->read();
          include "view/exito.php";
        }else{
          include "view/f_cat.php";
        }

