<?php

class Venda 
{
    private $data;
    private $produto;
    private $qtdProduto;
    private $valorTotal;

    public function __contruct($data,$produto,$qtdProduto,$valorTotal)
    {
        $this->data = $data;
        $this->produto = $produto;
        $this->qtdProduto = $qtdProduto;
        $this->valorTotal = $valorTotal;
    }

    public function informacaoVenda()
    {
        $this->data;
        $this->produto;
        $this->qtdProduto;
        $this->valorTotal;
    }
}

$produtoVendido = new Venda();



var_dump($produtoVendido);

?>