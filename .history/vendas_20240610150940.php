<?php

class Venda 

{
    private $data;
    private $produto;
    private $qtdProduto;
    private $valorTotal;

    public function __construct($data, $produto, $qtdProduto, $valorTotal)
    {
        $this->data = $data;
        $this->produto = $produto;
        $this->qtdProduto = $qtdProduto;
        $this->valorTotal = $valorTotal;
        
    }

    public function informacaoVenda()
    {
       return 'Informação de vendas: ' . $this->produto;
    }
}

$produtoVendido = new Venda(
    '10/06/2024',
    'Livro',
    '1',
    100.00
);

var_dump($)
?>