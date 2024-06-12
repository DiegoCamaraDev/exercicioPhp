<?php

declare(strict_types = 1);

$pdo = require 'conect.php';
$sql = 'delete from produtos where id= ?';

$prepare = $pdo->prepare($sql);

$prepare->bindParam(1, $_GET['id'])

?>