<?php

declare (strict_types = 1);

require 'Produto.php';

$produto = new Produto();

switch ($_GET['operacao']) {

    case 'list':
      var_dump()
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