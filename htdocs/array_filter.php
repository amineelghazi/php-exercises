<?php 

$prices = [14.50,9.95,7.00];

$expensive  = array_filter($prices, fn($price) => $price > 8);
$expensive = array_values($expensive);

// array_filter keeps the old array keys
// We use array_values to reindex the array keys just like in a normal list
// [14.50,9.95]

?>