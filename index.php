<?php

$url = "https://www.omerfarukdag.org/json";

$json = file_get_contents($url);

$data = json_decode($json);

echo $data->country;

?>
