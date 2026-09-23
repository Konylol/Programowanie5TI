<?php
$owoce = [
    ["owoc" => "jabłko", "cena" => 3],
    ["owoc" => "banan", "cena" => 4],
    ["owoc" => "pomarańcza", "cena" => 6],
];

array_unshift($owoce, ["owoc" => "kiwi", "cena" => 5]);
$owoce[] = ["owoc" => "liczi", "cena" => 10];

array_splice($owoce, 2, 1);

print_r($owoce);
?>