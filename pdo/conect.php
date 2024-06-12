<?php

declare(strict_types=1);

$pdo=null;

try {
                //'nome do sistema de gerenciamento: host=mysql;nome do banco de dados=exemplo', 'nome usuario', 'senha'
    $pdo = new PDO('mysql:host=127.0.0.1;dbname=exemplo', 'root', '120559');
} catch (Exception $e){    
    echo $e->getMessage();
    die();
}

return $pdo;

?>