<?php

declare (strict_types = 1);

require 'Produto.php';

$produto = new Produto();

switch ($_GET['operacao']) {

    case 'list':
      var_dump($produto->list());
      echo '<h3>Produtos: </h3>';
        break;
    
    case 'insert':
            //...
        break;

    case 'update':
        //...
        break;

    case 'delete':
        //...
        break;
}

?>