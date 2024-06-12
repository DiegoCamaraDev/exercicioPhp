<?php

declare (strict_types = 1);

require 'Produto.php';

$produto = new Produto();

switch ($_GET['operacao']) {

    case 'list':
      var_dump($produto->list());
      echo '<h3>Produtos: </h3>';

      foreach ($pdo->query($sql) as $key => $value){
        echo 'Id: ' . $value['id'] , '<br> Descrição: ' . $value['descricao'] . '<hr>';
    }
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