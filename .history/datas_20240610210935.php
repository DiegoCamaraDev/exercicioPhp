<?php

$data = new DateTime();
//$data->format('d-m-Y H:i:s');
$intervalo = new DateInterval('P5DT10H50M');

$data->sub($intervalo);
$data->format('d-m-Y H:i');
var_dump($data);
?>