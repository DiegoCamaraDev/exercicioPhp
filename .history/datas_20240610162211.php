<?php

$data = new DateTime();


$intervalo = new DateInterval('P5DT10H50M');
$data->format('d-m-Y H:i' );
echo $data->sub($intervalo);


?>