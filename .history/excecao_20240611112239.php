<?php
$num1;
$num2;
class numer
public function divisao($num1, $num2)
{
    if (($num1 == 0) || ($num2 == 0)) {
        throw new Exception('Numero inválido, 
                             numero não pode ser igual a 0, 
                            por favor digitar um numero valido');
    }
}

?>