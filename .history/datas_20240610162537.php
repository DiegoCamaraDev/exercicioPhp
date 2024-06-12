<?php

$data = new DateTime();

$intervalo = new DateInterval('PT');
$data->format('d-m-Y H:i:s' );
$data->sub($intervalo);

var_dump($data);
?>