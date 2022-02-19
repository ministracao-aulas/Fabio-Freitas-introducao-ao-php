<?php

$nomes = [
    ['nome' => 'fabio'],
    ['nome' => "joao"],
    ['nome' => "maria"],
];

for (
    $i = 0;
    $i < count($nomes);
    $i++
)
{
    $nome = $nomes[$i]["nome"];
    echo "- {$nome} <br>";
}
