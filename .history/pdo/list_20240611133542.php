<?php

declare(strict_types = 1);

$pdo = require 'conect.php';
$sql = 'select * from produtos';

echo '<h3>Produtos: </h3>';

foreach ($pdo->query)

?>