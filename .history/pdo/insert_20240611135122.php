<?php

declare (strict_types = 1);

$pdo = require 'conect.php';
$sql = 'insert into produtos(declaracao) values(?)';

$prepare = $pdo->$prepare($sql);

$prepare->binparam(1,$_GET['descricao']);
$prepare->execute();

$prepare->rowcount()

?>