<?php

$data = new DateTime();
//echo $data->format('d-m-Y');

$intervalo = new DateInterval('P5T10H50M');

echo $data->sub($intervalo);

?>