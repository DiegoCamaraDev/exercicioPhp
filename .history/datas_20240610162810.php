<?php

$data = new DateTime();

$intervalo = new DateInterval('P5DT10H50M');

$data->sub($intervalo);
$data->format('d-')
var_dump($data);
?>