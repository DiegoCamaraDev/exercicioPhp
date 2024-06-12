<?php

declare(strict_types=1);

$pdo=null;

try {
                //'nome do sistema de gerenciamento: host'
    $pdo = new PDO('mysql:host=mysql;dbname=exemplo', 'root', '12345');
} catch (Exception $e){

}

?>