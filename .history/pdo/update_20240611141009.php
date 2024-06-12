<?php

declare (strict_types = 1);

$pdo = require 'conect.php';
$sql = 'update produtos ser descriao = ? wheze id = ?';

$prepare = $pdo->prepare($sql);

$prepare->bindParam(1, $_GET['descricao']);
$prepare->bindParam(1, $_GET['id']);

$prepare->execute;

echo $prepare->ro

?>