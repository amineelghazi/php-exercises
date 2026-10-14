<?php 
$status = $age >= 18 ? "adult" : "kid";
$jour = "sunday";

echo $status;

switch ($jour){
    case "saturday":
    case "sunday":
        echo "\nWeekend";
        break;
    default:
        echo "\nday of the week";
}



?>