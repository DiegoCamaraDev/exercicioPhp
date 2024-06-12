<?php

declare (strict_types=1);//declara para o interpretador que ele 

class Venda 

{
    /**
     * 
     */
    private  $data;
    private  $produto;
    private  $qtdProduto;
    private  $valorTotal;

    public function __construct($data, $produto, $qtdProduto, $valorTotal)
    {
        $this->data = $data;
        $this->produto = $produto;
        $this->qtdProduto = $qtdProduto;
        $this->valorTotal = $valorTotal;
        
    }

    public function informacaoVenda()
    {
        echo '>>>INFORMAÇÕES DA COMPRA:' . "\n"; 
            return 
                ' Data: ' . $this->data . "\n" .
                ' Produto adquirido: ' . $this->produto . "\n" .
                ' QTD: ' . $this->qtdProduto . "\n" .
                ' Total R$: ' . $this->valorTotal;
       
    }
}

$produtoVendido = new Venda(
    '10/06/2024',
    'Livro',
    '1',
    100.00
);

$produtoVendido2 = new Venda('05/05/2024', 'Caderno', '2', 50.00);
//echo 'INFORMAÇÕES DA COMPRA:' . "\n";

echo ($produtoVendido->informacaoVenda()) . "\n";

echo ($produtoVendido2->informacaoVenda());

?>