<?php

declare (strict_types = 1);

$pdo = require 'conect.php';
$sql = 'insert into produtos(declaracao) values(?)';

$prepare = $pdo->prepare($sql);//cira um statemant (estado antes da atribuição de valores ao atributo)

$prepare->bindParam(1,$_GET['descricao']);//proteger de sql injection.
$prepare->execute();

$prepare->rowCount();

?>