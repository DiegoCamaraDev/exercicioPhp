<?php

declare (strict_types = 1);

require 'Produto.php';

$produto = new Produto();

switch ($_GET['operacao']) {

    case 'list':
      
      echo '<h3>Produtos: </h3>';

      foreach ($produto->list() as $value) {
        echo 'Id: ' . $value['id'] , '<br> Descrição: ' . $value['descricao'] . '<hr>';
    }

        break;
    
    case 'insert':

           $status = $produto->insert('Produto teste Diego02');

           if (!$status) {
            echo "não foi possivelexecutar a operação";
            return false;
           }
           echo "Registro inserido com sucesso!";

        break;

    case 'update':

        $status = $produto->update('Produto Alterado de Diego Araujo', 7);

        if (!$status) {
         echo "não foi possivelexecutar a operação";
         return false;
        }
        echo "Registro alterado com sucesso!";

        break;

    case 'delete':
        $status 
        break;
}

?>