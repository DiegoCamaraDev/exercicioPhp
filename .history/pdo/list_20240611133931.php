<?php

declare(strict_types = 1);

$pdo = require 'conect.php'; //importando a conexão com bd de outro arquivo.
$sql = 'select * from produtos';//query sql

echo '<h3>Produtos: </h3>';

foreach ($pdo->query($sql) as $key => $value){
    echo 'Id: ' . $value['id'] , '<br> Descrição: ' . $value['Descricao'] . 'hr';
}

?>