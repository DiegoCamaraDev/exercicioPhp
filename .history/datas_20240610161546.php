<?php

$data = new DateTime();
echo $data->format('d-m-Y');

$intervalo = new DateInterval('P5DT10H50M');

$data->sub($intervalo);
?>