<?php

declare (strict_types = 1);

class Produto
{
    private $conexao;

    public function __construct()
    {
        try {
            
            $this->conexao = new PDO('mysql:host=127.0.0.1;dbname=exemplo', 'root', '120559');

        } catch(Exception $e) {

            echo $e->getMessage();
        }
    }

    public function list()
    {
        return true;
    }

}

?>