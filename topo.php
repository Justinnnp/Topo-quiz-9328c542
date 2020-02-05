<?php

$array = [
    "Japan" => "Tokyo",
    "Mexico" => "Mexico City",
    "USA" => "Wasington D.C",
    "India" => "New Delhi",
    "Zuid-Korea" => "Seoul",
    "China" => "Peking",
    "Nigeria" => "Abuja",
    "Argentina" => "Buenos Aires",
    "Egypt" => "Cairo",
    "UK" => "London",
];

foreach ($array as $arrayss => $val) {

    $vraag = readLine("Welke hoofdstad heeft '$arrayss' ");

    if ($val == $arrayss) {
        echo "Correct ! " .PHP_EOL;
    }elseif ($vraag == $val) {
        echo "Correct" .PHP_EOL;
    }else {
        echo "Helaas, " .$vraag ." is niet de hoofdstad van Mexico." .PHP_EOL;
        echo "Het correcte antwoord is: " .$val . ".";
        exit;
    }
}
