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
            die();
        }
    }

    public function list()
    {
        $sql = 'select * from produtos';//query sql 

        echo '<h3>Produtos: </h3>';
        
        foreach ($this->->query($sql) as $key => $value){
            echo 'Id: ' . $value['id'] , '<br> Descrição: ' . $value['descricao'] . '<hr>';
        }
    }

    public function insert()
    {
        //...
    }

    public function update()
    {
        //...
    }

    public function delete()
    {
        //...
    }

}

?>