<?php

$myCallback = fn($data) => strtoupper("$data");
$carros = array(
    "ford" => "ka",
    "fiat" => "palio",
    "call" => $myCallback
);

$myFunc = fn() => "$carros";

echo $carros["call"]($carros["ford"]);




