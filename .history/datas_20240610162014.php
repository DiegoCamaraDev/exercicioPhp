<?php

$data = new DateTime();
 $data->format('d-m-Y');

$intervalo = new DateInterval('P5DT10H50M');

echo $data->sub($intervalo);

?>