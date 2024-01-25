<?php 

echo '<pre>';
$cart = ['Arroz', 'Sabao', 'Feijao', 'Balinhas'];

var_dump($cart);

echo '<br>';

array_pop($cart);
var_dump($cart);

echo '<br>';

array_shift($cart);
var_dump($cart);

echo '<br>';

unset($cart[0]);
var_dump($cart);
