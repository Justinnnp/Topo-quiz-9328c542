<?php

$array = [
    "Japan" => "Tokyo",
    "Mexico" => "Mexico City",
    "USA" => "Washington D.C.",
    "India" => "New Delhi",
    "Zuid-Korea" => "Seoul",
    "China" => "Peking",
    "Nigeria" => "Abuja",
    "Argentina" => "Buenos Aires",
    "Egypt" => "Cairo",
    "UK" => "London",
];
$correct = 0;
foreach ($array as $arrayss => $val) {
    if ($correct === true) {
        $correct++;
    }
    
    $goed = false;
    $vraag = readLine("Welke hoofdstad heeft '$arrayss' " .PHP_EOL);
    if ($vraag == $val) {
        echo "Correct ! " .PHP_EOL;
        $goed = true;
        $correct++;
    } else {
        echo "Het correcte antwoord is: {$val}" .PHP_EOL;
        echo "Helaas, {$vraag} is niet de hoofdstad van {$arrayss}." .PHP_EOL;
    }
}
echo "Je hebt {$correct} van de " . count($array) . " goed geraden.";
?>


