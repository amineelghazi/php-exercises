<?php

$prices = [14.50, 9.95, 7.00];
$products = [
    "name" => "Coffee",
    "price" => 3.50,
    "available" => true,
];

// Using $prices list
count($prices);

in_array(9.95, $prices);     //true
in_array(9.95, $prices, true); //true, strict comparison

array_search(9.95, $prices); //1, return index of the found value
array_search(20.00, $prices); //false


// Using $product
array_key_exists("price", $product); // true
isset($product["price"]); // true
?>