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

    public function list(): void
    {
        $sql = 'select * from produtos';//query sql 

        echo '<h3>Produtos: </h3>';
        
        foreach ($this->conexao->query($sql) as $key => $value){
            echo 'Id: ' . $value['id'] , '<br> Descrição: ' . $value['descricao'] . '<hr>';
        }
    }

    public function insert(string $descricao): int
    {
        $sql = 'insert into produtos(descricao) values(?)';

            $prepare = $this->conexao->prepare($sql);//cira um statemant (estado antes da atribuição de valores ao atributo)

            $prepare->bindParam(1,$descricao);//faz a atribuiçãp com o metodo bindParam para proteger de sql injection.
            $prepare->execute();

            return $prepare->rowCount();
    }

    public function update(string $descricao, int $id):int
    {
        $sql = 'update produtos set descricao = ? where id = ?';

            $prepare = $this->conexao->prepare($sql);

            $prepare->bindParam(1, $descricao);
            $prepare->bindParam(2, $id);

            $prepare->execute();

            return $prepare->rowCount();

    }

    public function delete(): int
    {
        $sql = 'delete from produtos where id= ?';

            $prepare = $this->conexao->prepare($sql);

            $prepare->bindParam(1, $_GET['id']);
            $prepare->execute();

            return  $prepare->rowCount();
    }

}

?>