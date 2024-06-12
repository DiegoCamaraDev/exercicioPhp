<?php

$data = new DateTime();


$intervalo = new DateInterval('P5DT10H50M');

echo $data->sub($intervalo);


?>