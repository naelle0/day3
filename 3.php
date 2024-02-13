<?php

$waktu1 = "19:00";
$waktu1_formatted = (date("H", strtotime($waktu1)) == "00:00 am") ? "12:00 pm" : date("h:i a", strtotime($waktu1));

$waktu2 = "08:55";
$waktu2_formatted = (date("H", strtotime($waktu2)) == "00:00 am") ? "12:00 am" : date("h:i a", strtotime($waktu2));


echo "Waktu 1: " . $waktu1_formatted . "<br>";
echo "Waktu 2: " . $waktu2_formatted ;

?>