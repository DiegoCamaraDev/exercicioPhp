<?php

declare (strict_types = 1);

$pdo = require 'conect.php';
$sql = 'insert into produtos(declaracao) values(?)';

$prepare = $pdo->prepare($sql);//cira um st

$prepare->bindParam(1,$_GET['descricao']);//proteger de sql injection.
$prepare->execute();

$prepare->rowCount();

?>