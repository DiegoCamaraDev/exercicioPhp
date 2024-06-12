<?php

class calculo{

public int $num1;
public int $num2;

public function divisao($num1, $num2)
    {

        if (($num1 == 0) || ($num2 == 0)) {
            throw new Exception('Numero inválido, 
                                numero não pode ser igual a 0, 
                                por favor digitar um numero valido');
        } else{
            return $resultado = $num1/$num2;
            echo 'O resultado da divisão é: ' . $resultado . 
        }
    }
}

$divisao = new calculo();
echo ($divisao->divisao(10,5));

?>